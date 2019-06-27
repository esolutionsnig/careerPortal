<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\SignupActivate;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

use Avatar;
use Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserCollection::collection(User::paginate(10));
    }

    /**
     * Create user
     *
     * @param  [string] surname
     * @param  [string] firstname
     * @param  [string] othernames
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function signup(Request $request)
    {
        $request->validate([
            'surname' => ['required', 'string', 'max:100'],
            'firstname' => ['required', 'string', 'max:100'],
            'othernames' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user = new User([
            'surname' => $request->surname,
            'firstname' => $request->firstname,
            'othernames' => $request->othernames,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
            'password' => bcrypt($request->password),
            'activation_token' => str_random(60)
        ]);

        $user->save();

        $avatar = Avatar::create($user->firstname)->getImageObject()->encode('png');
        Storage::put('avatars/'.$user->id.'/avatar.png', (string) $avatar);

        $user->notify(new SignupActivate($user));

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Activate Account
     */
    public function signupActivate($token)
    {
        $user = User::where('activation_token', $token)->first();
        if (!$user) {
            return response()->json([
                'message' => 'This activation token is invalid.'
            ], 404);
        }

        $user->active = true;
        $user->activation_token = '';
        $user->save();
        return response()->json([
            'message' => 'Activation successful'
        ], 201);
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);
        $credentials['active'] = 1;
        $credentials['deleted_at'] = null;

        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);

        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'user' => $user
        ]);
    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Update User Password
     *
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function updatePassword(User $user)
    {

        $this->validate(request(), [
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $user->password = bcrypt(request('password'));

        $user->save();

        return response()->json([
            'message' => 'Successfully updated your password!'
        ], 201);
    }

    /**
     * Update User Profile
     *
     * @param  [string] surname
     * @param  [string] firstname
     * @param  [string] othernames
     * @return [string] message
     */
    public function update(User $user)
    {
        $this->validate(request(), [
            'surname' => 'required',
            'firstname' => 'required',
            'othernames' => 'required'
        ]);

        $user->surname = request('surname');
        $user->firstname = request('firstname');
        $user->othernames = request('othernames');

        $user->save();

        return response()->json([
            'user' => $user
        ], 201);
    }

    /**
     * Update User Profile Avatar
     *
     * @param  [string] avatar
     * @return [string] message
     */
    public function updateAvatar(User $user)
    {
        $this->validate(request(), [
            'avatar' => 'required'
        ]);

        $user->avatar = request('avatar');

        $user->save();

        return response()->json([
            'user' => $user
        ], 201);
    }

    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

}
