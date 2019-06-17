<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Fullselfdisclosure;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\FullselfdisclosureRequest;
use App\Http\Resources\FullselfdisclosureResource;

class FullselfdisclosureController extends Controller
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
        return FullselfdisclosureResource::collection($user->fullselfdisclosures);
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
    public function store(FullselfdisclosureRequest $request, User $user)
    {
        $fullselfdisclosure = new Fullselfdisclosure;
        $fullselfdisclosure->user_id = $request->user_id;
        $fullselfdisclosure->description = $request->description;
        $fullselfdisclosure->your_response = $request->your_response;
        $fullselfdisclosure->additional_details = $request->additional_details;
        $fullselfdisclosure->save();
        return response([
            'data' => new FullselfdisclosureResource($fullselfdisclosure)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function show(Fullselfdisclosure $fullselfdisclosure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function edit(Fullselfdisclosure $fullselfdisclosure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user, Fullselfdisclosure $fullselfdisclosure)
    {
        $fullselfdisclosure->update($request->all());
        return response([
            'data' => new FullselfdisclosureResource($fullselfdisclosure)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Fullselfdisclosure  $fullselfdisclosure
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Fullselfdisclosure $fullselfdisclosure)
    {
        $fullselfdisclosure->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
