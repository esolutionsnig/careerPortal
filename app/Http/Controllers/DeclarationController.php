<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Declaration;
use Illuminate\Http\Request;
use App\Http\Requests\DeclarationRequest;
use App\Http\Resources\DeclarationResource;
use Symfony\Component\HttpFoundation\Response;

class DeclarationController extends Controller
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
        return DeclarationResource::collection($user->declarations);
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
    public function store(DeclarationRequest $request, User $user)
    {
        $declaration = new Declaration;
        $declaration->user_id = $request->user_id;
        $declaration->date = $request->date;
        $declaration->witness_name = $request->witness_name;
        $declaration->witness_phone_number = $request->witness_phone_number;
        $declaration->witness_date = $request->witness_date;
        $declaration->save();
        return response([
            'data' => new DeclarationResource($declaration)
        ], Response::HTTP_CREATED);
    }	 	 

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function show(Declaration $declaration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function edit(Declaration $declaration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Declaration $declaration)
    {
        $declaration->update($request->all());
        return response([
            'data' => new DeclarationResource($declaration)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Declaration $declaration)
    {
        $declaration->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
