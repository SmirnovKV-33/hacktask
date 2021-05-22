<?php

use Illuminate\Support\Facades\Route;

Route::get('/trafficlights',      function () { return view('trafficlights'); });
Route::get('/recomendations',     function () { return view('recomendations'); });
Route::get('/export',             function () { return view('export'); });
Route::get('/fix',             	  function () { return view('fix'); });
Route::get('/map',             	  function () { return view('map'); });
Route::get('/trafficregulations', function () { return view('trafficregulations'); });