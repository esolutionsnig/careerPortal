<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Parents;
use Illuminate\Http\Request;
use App\Http\Requests\ParentsRequest;
use App\Http\Resources\ParentsResource;
use Symfony\Component\HttpFoundation\Response;

class ParentsController extends Controller
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
        return ParentsResource::collection($user->parents);
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
    public function store(ParentsRequest $request, User $user)
    {
        $parents = new Parents;
        $parents->user_id = $request->user_id;
        $parents->father_name = $request->father_name;
        $parents->father_nationality = $request->father_nationality;
        $parents->father_occupation = $request->father_occupation;
        $parents->father_address = $request->father_address;
        $parents->father_phone = $request->father_phone;
        $parents->mother_name = $request->mother_name;
        $parents->mother_maiden_name = $request->mother_maiden_name;
        $parents->mother_nationality = $request->mother_nationality;
        $parents->mother_occupation = $request->mother_occupation;
        $parents->mother_address = $request->mother_address;
        $parents->mother_phone = $request->mother_phone;
        $parents->save();
        return response([
            'data' => new ParentsResource($parents)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function show(Parents $parents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Parents $parents)
    {
        $parents->update($request->all());
        return response([
            'data' => new ParentsResource($parents)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Parents  $parents
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Parents $parents)
    {
        $parents->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
