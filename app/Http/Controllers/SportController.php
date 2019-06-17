<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Sport;
use Illuminate\Http\Request;
use App\Http\Requests\SportRequest;
use App\Http\Resources\SportResource;
use Symfony\Component\HttpFoundation\Response;

class SportController extends Controller
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
        return SportResource::collection($user->sports);
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
    public function store(SportRequest $request, User $user)
    {
        $sport = new Sport;
        $sport->user_id = $request->user_id;
        $sport->type_of_game = $request->type_of_game;
        $sport->club = $request->club;
        $sport->date = $request->date;
        $sport->status = $request->status;
        $sport->save();
        return response([
            'data' => new SportResource($sport)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Sport $sport)
    {
        $sport->update($request->all());
        return response([
            'data' => new SportResource($sport)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Sport $sport)
    {
        $sport->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
