<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [studentController::class, 'showStudent']);

Route::get('/Student_information',[studentController::class, 'showStudent'])->name('s_info');

Route::get('/Single_user_Information/{id}', [studentController::class, 'singleStudent'])->name('single_student');

Route::get('/student_delete_information/{id}',[studentController::class, 'deleteStudent'])->name('delete_record');

Route::post('/addNewStudent', [studentController::class, 'addStudent'])->name('addStudent');

Route::get('/add_NewStudent', function(){
    return view('addstudent');
})->name('openAddForm');


Route::get('/update_Page/{id}', [studentController::class, 'updatePage'])->name('updatepage');
Route::put('/update_Student/{id}', [studentController::class, 'updateStudent'])->name('updatestudent');
