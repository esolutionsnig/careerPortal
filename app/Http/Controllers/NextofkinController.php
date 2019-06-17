<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Nextofkin;
use Illuminate\Http\Request;
use App\Http\Requests\NextofkinRequest;
use App\Http\Resources\NextofkinResource;
use Symfony\Component\HttpFoundation\Response;

class NextofkinController extends Controller
{
    /**
     * Add Middleware to prevent unauthenticated users 
     * from Storing, Updateing of Deleting a record
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return NextofkinResource::collection($user->nextofkins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NextofkinRequest $request, User $user)
    {
        $nextofkin = new Nextofkin;
        $nextofkin->user_id = $request->user_id;
        $nextofkin->name = $request->name;
        $nextofkin->relationship = $request->relationship;
        $nextofkin->office_address = $request->office_address;
        $nextofkin->office_phone = $request->office_phone;
        $nextofkin->home_address = $request->home_address;
        $nextofkin->home_phone = $request->home_phone;
        $nextofkin->save();
        return response([
            'data' => new NextofkinResource($nextofkin)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function show(Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function edit(Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Nextofkin $nextofkin)
    {
        $nextofkin->update($request->all());
        return response([
            'data' => new NextofkinResource($nextofkin)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Nextofkin $nextofkin)
    {
        $nextofkin->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
