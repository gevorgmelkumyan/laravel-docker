<?php

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::any('send-test-email', function (Request $request) {
    Mail::to($request->email)->queue(new TestEmail);

    return response()->json();
});
