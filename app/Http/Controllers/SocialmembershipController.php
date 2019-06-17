<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Socialmembership;
use App\Http\Requests\SocialmembershipRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\SocialmembershipResource;

class SocialmembershipController extends Controller
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
        return SocialmembershipResource::collection($user->socialmemberships);
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
    public function store(SocialmembershipRequest $request, User $user)
    {
        $socialmembership = new Socialmembership;
        $socialmembership->user_id = $request->user_id;
        $socialmembership->name = $request->name;
        $socialmembership->date = $request->date;
        $socialmembership->position = $request->position;
        $socialmembership->status = $request->status;
        $socialmembership->save();
        return response([
            'data' => new SocialmembershipResource($socialmembership)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function show(Socialmembership $socialmembership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function edit(Socialmembership $socialmembership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user,  Socialmembership $socialmembership)
    {
        $socialmembership->update($request->all());
        return response([
            'data' => new SocialmembershipResource($socialmembership)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Socialmembership  $socialmembership
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Socialmembership $socialmembership)
    {
        $socialmembership->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
