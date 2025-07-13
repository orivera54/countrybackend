<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function (Request $request) {
    return response()->json(['status' => 'ok']);
});
