<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Professionalmembership;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProfessionalmembershipRequest;
use App\Http\Resources\ProfessionalmembershipResource;

class ProfessionalmembershipController extends Controller
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
        return ProfessionalmembershipResource::collection($user->professionalmemberships);
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
    public function store(ProfessionalmembershipRequest $request, User $user)
    {
        $professionalmembership = new Professionalmembership;
        $professionalmembership->user_id = $request->user_id;
        $professionalmembership->association = $request->association;
        $professionalmembership->status = $request->status;
        $professionalmembership->year_of_conferment = $request->year_of_conferment;
        $professionalmembership->save();
        return response([
            'data' => new ProfessionalmembershipResource($professionalmembership)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function show(Professionalmembership $professionalmembership)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function edit(Professionalmembership $professionalmembership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user,  Professionalmembership $professionalmembership)
    {
        $professionalmembership->update($request->all());
        return response([
            'data' => new ProfessionalmembershipResource($professionalmembership)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Professionalmembership  $professionalmembership
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Professionalmembership $professionalmembership)
    {
        $professionalmembership->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
