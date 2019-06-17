<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Prent;
use Illuminate\Http\Request;
use App\Http\Requests\PrentRequest;
use App\Http\Resources\PrentResource;
use Symfony\Component\HttpFoundation\Response;

class PrentController extends Controller
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
        return PrentResource::collection($user->prents);
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
    public function store(PrentRequest $request, User $user)
    {
        $prent = new Prent;
        $prent->user_id = $request->user_id;
        $prent->father_name = $request->father_name;
        $prent->father_nationality = $request->father_nationality;
        $prent->father_occupation = $request->father_occupation;
        $prent->father_address = $request->father_address;
        $prent->father_phone = $request->father_phone;
        $prent->mother_name = $request->mother_name;
        $prent->mother_maiden_name = $request->mother_maiden_name;
        $prent->mother_nationality = $request->mother_nationality;
        $prent->mother_occupation = $request->mother_occupation;
        $prent->mother_address = $request->mother_address;
        $prent->mother_phone = $request->mother_phone;
        $prent->save();
        return response([
            'data' => new PrentResource($prent)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Prent  $prent
     * @return \Illuminate\Http\Response
     */
    public function show(Prent $prent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Prent  $prent
     * @return \Illuminate\Http\Response
     */
    public function edit(Prent $prent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Prent  $prent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Prent $prent)
    {
        $prent->update($request->all());
        return response([
            'data' => new PrentResource($prent)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Prent  $prent
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Prent $prent)
    {
        $prent->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
