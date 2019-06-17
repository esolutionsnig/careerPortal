<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Bankingdetail;
use Illuminate\Http\Request;
use App\Http\Requests\BankingdetailRequest;
use App\Http\Resources\BankingdetailResource;
use Symfony\Component\HttpFoundation\Response;

class BankingdetailController extends Controller
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
        return BankingdetailResource::collection($user->bankingdetails);
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
    public function store(BankingdetailRequest $request, User $user)
    {
        $bankingdetail = new Bankingdetail;
        $bankingdetail->user_id = $request->user_id;
        $bankingdetail->bank_name = $request->bank_name;
        $bankingdetail->account_number = $request->account_number;
        $bankingdetail->account_status = $request->account_status;
        $bankingdetail->bvn_number = $request->bvn_number;
        $bankingdetail->save();
        return response([
            'data' => new BankingdetailResource($bankingdetail)
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Bankingdetail  $bankingdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Bankingdetail $bankingdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Bankingdetail  $bankingdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Bankingdetail $bankingdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Bankingdetail  $bankingdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Bankingdetail $bankingdetail)
    {
        $bankingdetail->update($request->all());
        return response([
            'data' => new BankingdetailResource($bankingdetail)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Bankingdetail  $bankingdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Bankingdetail $bankingdetail)
    {
        $bankingdetail->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
