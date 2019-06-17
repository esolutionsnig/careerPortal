<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Guardian;
use Illuminate\Http\Request;
use App\Http\Requests\GuardianRequest;
use App\Http\Resources\GuardianResource;
use Symfony\Component\HttpFoundation\Response;

class GuardianController extends Controller
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
        return GuardianResource::collection($user->guardians);
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
    public function store(GuardianRequest $request, User $user)
    {
        $guardian = new Guardian;
        $guardian->user_id = $request->user_id;
        $guardian->guardian_name = $request->guardian_name;
        $guardian->guardian_nationality = $request->guardian_nationality;
        $guardian->guardian_address = $request->guardian_address;
        $guardian->guardian_occupation = $request->guardian_occupation;
        $guardian->guardian_phone = $request->guardian_phone;
        $guardian->save();
        return response([
            'data' => new GuardianResource($guardian)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Guardian $guardian)
    {
        $guardian->update($request->all());
        return response([
            'data' => new GuardianResource($guardian)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Guardian $guardian)
    {
        $guardian->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
