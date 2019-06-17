<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Hobby;
use Illuminate\Http\Request;
use App\Http\Requests\HobbyRequest;
use App\Http\Resources\HobbyResource;
use Symfony\Component\HttpFoundation\Response;

class HobbyController extends Controller
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
        return HobbyResource::collection($user->hobbies);
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
    public function store(HobbyRequest $request, User $user)
    {
        $hobby = new Hobby;
        $hobby->user_id = $request->user_id;
        $hobby->title = $request->title;
        $hobby->save();
        return response([
            'data' => new HobbyResource($hobby)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(Hobby $hobby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobby $hobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Hobby $hobby)
    {
        $hobby->update($request->all());
        return response([
            'data' => new HobbyResource($hobby)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Hobby $hobby)
    {
        $hobby->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
