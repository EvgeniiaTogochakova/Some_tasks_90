<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->first_name = 'Евгения';
    $employee->last_name = "Тогочакова";
    $employee->age = 38;
    $employee->save();
});
