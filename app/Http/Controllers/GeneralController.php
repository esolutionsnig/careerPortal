<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\General;
use Illuminate\Http\Request;
use App\Http\Requests\GeneralRequest;
use App\Http\Resources\GeneralResource;
use Symfony\Component\HttpFoundation\Response;

class GeneralController extends Controller
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
        return GeneralResource::collection($user->generals);
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
    public function store(GeneralRequest $request, User $user)
    {
        $general = new General;
        $general->user_id = $request->user_id;
        $general->computer_literacy = $request->computer_literacy;
        $general->competence_profile = $request->competence_profile;
        $general->personal_traits = $request->personal_traits;
        $general->save();
        return response([
            'data' => new GeneralResource($general)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, General $general)
    {
        $general->update($request->all());
        return response([
            'data' => new GeneralResource($general)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, General $general)
    {
        $general->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
