<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Referee;
use Illuminate\Http\Request;
use App\Http\Requests\RefereeRequest;
use App\Http\Resources\RefereeResource;
use Symfony\Component\HttpFoundation\Response;

class RefereeController extends Controller
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
        return RefereeResource::collection($user->referees);
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
    public function store(RefereeRequest $request, User $user)
    {
        $referee = new Referee;
        $referee->user_id = $request->user_id;
        $referee->name = $request->name;
        $referee->address = $request->address;
        $referee->phone_number = $request->phone_number;
        $referee->email_address = $request->email_address;
        $referee->save();
        return response([
            'data' => new RefereeResource($referee)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function show(Referee $referee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function edit(Referee $referee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Referee $referee)
    {
        $referee->update($request->all());
        return response([
            'data' => new RefereeResource($referee)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Referee  $referee
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Referee $referee)
    {
        $referee->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
