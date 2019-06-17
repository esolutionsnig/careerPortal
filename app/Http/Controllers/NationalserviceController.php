<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Nationalservice;
use App\Http\Requests\NationalserviceRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\NationalserviceResource;

class NationalserviceController extends Controller
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
        return NationalserviceResource::collection($user->nationalservices);
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
    public function store(NationalserviceRequest $request, User $user)
    {
        $nationalservice = new Nationalservice;
        $nationalservice->user_id = $request->user_id;
        $nationalservice->place_of_assignment = $request->place_of_assignment;
        $nationalservice->year = $request->year;
        $nationalservice->job_function = $request->job_function;
        $nationalservice->save();
        return response([
            'data' => new NationalserviceResource($nationalservice)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function show(Nationalservice $nationalservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Nationalservice $nationalservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user,  Nationalservice $nationalservice)
    {
        $nationalservice->update($request->all());
        return response([
            'data' => new NationalserviceResource($nationalservice)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Nationalservice  $nationalservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Nationalservice $nationalservice)
    {
        $nationalservice->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
