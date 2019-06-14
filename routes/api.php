<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'UserController@login');
    Route::post('signup', 'UserController@signup');
    Route::get('signup/activate/{token}','UserController@signupActivate');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'UserController@logout');
        Route::get('user', 'UserController@user');
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/users','UserController');
Route::group(['prefix' => 'users'], function () {
    Route::apiResource('/{user}/applicantdatamanagers','ApplicantdatamanagerController');

    Route::apiResource('/{user}/academiceducations','AcademiceducationController');

    Route::apiResource('/{user}/bankingdetails','BankingdetailController');

    Route::apiResource('/{user}/declarations','DeclarationController');

    Route::apiResource('/{user}/dependants','DependantController');

    Route::apiResource('/{user}/employmentselfassessments','EmploymentselfassessmentController');

    Route::apiResource('/{user}/employmenthistories','EmploymenthistoryController');

    Route::apiResource('/{user}/fullselfdisclosures','FullselfdisclosureController');

    Route::apiResource('/{user}/generals','GeneralController');

    Route::apiResource('/{user}/guardians','GuardianController');

    Route::apiResource('/{user}/hobbies','HobbyController');

    Route::apiResource('/{user}/hometownaddresses','HometownaddressController');

    Route::apiResource('/{user}/nationalservices','NationalserviceController');

    Route::apiResource('/{user}/nextofkins','NextofkinController');

    Route::apiResource('/{user}/parents','ParentsController');

    Route::apiResource('/{user}/professionalmemberships','ProfessionalmembershipController');

    Route::apiResource('/{user}/professionalqualifications','ProfessionalqualificationController');

    Route::apiResource('/{user}/referees','RefereeController');

    Route::apiResource('/{user}/residentialaddresses','ResidentialaddressController');

    Route::apiResource('/{user}/schoolleavingcertificates','SchoolleavingcertificateController');

    Route::apiResource('/{user}/socialmemberships','SocialmembershipController');

    Route::apiResource('/{user}/sports','SportController');

});