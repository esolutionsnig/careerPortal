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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/applicantdatamanagers','ApplicantdatamanagerController');

Route::apiResource('/academiceducations','AcademiceducationController');

Route::apiResource('/bankingdetails','BankingdetailController');

Route::apiResource('/declarations','DeclarationController');

Route::apiResource('/dependants','DependantController');

Route::apiResource('/employmentselfassessments','EmploymentselfassessmentController');

Route::apiResource('/employmenthistories','EmploymenthistoryController');

Route::apiResource('/fullselfdisclosures','FullselfdisclosureController');

Route::apiResource('/generals','GeneralController');

Route::apiResource('/guardians','GuardianController');

Route::apiResource('/hobbies','HobbyController');

Route::apiResource('/hometownaddresses','HometownaddressController');

Route::apiResource('/nationalservices','NationalserviceController');

Route::apiResource('/nextofkins','NextofkinController');

Route::apiResource('/parents','ParentsController');

Route::apiResource('/professionalmemberships','ProfessionalmembershipController');

Route::apiResource('/professionalqualifications','ProfessionalqualificationController');

Route::apiResource('/referees','RefereeController');

Route::apiResource('/residentialaddresses','ResidentialaddressController');

Route::apiResource('/schoolleavingcertificates','SchoolleavingcertificateController');

Route::apiResource('/socialmemberships','SocialmembershipController');

Route::apiResource('/sports','SportController');