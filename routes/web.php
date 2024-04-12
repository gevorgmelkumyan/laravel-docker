<?php

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Route::any('send-test-email', function (Request $request) {
    Mail::to($request->email)->queue(new TestEmail);

    return response()->json();
});

Route::any('list-s3-bucket', function () {
   $files = Storage::allFiles();

   return response()->json(compact('files'));
});

Route::any('store-in-s3', function (Request $request) {
    $file = file_get_contents(public_path('test.pdf'));
    $name = ($request->name ?? 'test') . '.pdf';

    $success = Storage::put($name, $file);

    if ($success) {
        return response()->json([
            'url' => Storage::url($name),
            'temporaryUrl' => Storage::temporaryUrl($name, now()->addMinute()),
        ]);
    }

    return response()->json([
        'error' => 'Failed to store test file',
    ], 500);
});
