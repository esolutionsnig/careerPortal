<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use App\Model\Schoolleavingcertificate;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\SchoolleavingcertificateRequest;
use App\Http\Resources\SchoolleavingcertificateResource;

class SchoolleavingcertificateController extends Controller
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
        return SchoolleavingcertificateResource::collection($user->schoolleavingcertificates);
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
    public function store(SchoolleavingcertificateRequest $request, User $user)
    {
        $schoolleavingcertificate = new Schoolleavingcertificate;
        $schoolleavingcertificate->user_id = $request->user_id;
        $schoolleavingcertificate->school = $request->school;
        $schoolleavingcertificate->year = $request->year;
        $schoolleavingcertificate->result_1 = $request->result_1;
        $schoolleavingcertificate->result_2 = $request->result_2;
        $schoolleavingcertificate->result_3 = $request->result_3;
        $schoolleavingcertificate->result_4 = $request->result_4;
        $schoolleavingcertificate->result_5 = $request->result_5;
        $schoolleavingcertificate->save();
        return response([
            'data' => new SchoolleavingcertificateResource($schoolleavingcertificate)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function show(Schoolleavingcertificate $schoolleavingcertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Schoolleavingcertificate $schoolleavingcertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Schoolleavingcertificate $schoolleavingcertificate)
    {
        $schoolleavingcertificate->update($request->all());
        return response([
            'data' => new SchoolleavingcertificateResource($schoolleavingcertificate)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Schoolleavingcertificate  $schoolleavingcertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Schoolleavingcertificate $schoolleavingcertificate)
    {
        $schoolleavingcertificate->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
