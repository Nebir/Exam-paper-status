<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Admin Options */
Route::get('dashboard',['as' => 'dashboard', 'uses' => 'AdminController@index'])->middleware('CheckAdmin:Admin');

Route::get('admin/teachers-data',['as' => 'teacher.data', 'uses' => 'AdminController@teacherData'])->middleware('CheckAdmin:Admin');
Route::get('admin/new-teacher-entry',['as' => 'teacher.create', 'uses' => 'AdminController@addNewTeacherForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/new-teacher-entry','AdminController@addNewTeacher')->middleware('CheckAdmin:Admin');

Route::get('admin/semester-data',['as' => 'semester.data', 'uses' => 'AdminController@semesterData'])->middleware('CheckAdmin:Admin');
Route::get('admin/new-semester-entry',['as' => 'semester.create', 'uses' => 'AdminController@addNewSemesterForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/new-semester-entry','AdminController@addNewSemester')->middleware('CheckAdmin:Admin');

Route::get('admin/batch-data',['as' => 'batch.data', 'uses' => 'AdminController@batchData'])->middleware('CheckAdmin:Admin');
Route::get('admin/new-batch-entry',['as' => 'batch.create', 'uses' => 'AdminController@addNewBatchForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/new-batch-entry','AdminController@addNewBatch')->middleware('CheckAdmin:Admin');

Route::get('admin/courses-data',['as' => 'course.data', 'uses' => 'AdminController@courseData'])->middleware('CheckAdmin:Admin');
Route::get('admin/new-course-entry',['as' => 'course.create', 'uses' => 'AdminController@addNewCourseForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/new-course-entry','AdminController@addNewCourse')->middleware('CheckAdmin:Admin');

Route::get('admin/new-course-type-entry',['as' => 'course-type.create', 'uses' => 'AdminController@addNewCourseTypeForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/new-course-type-entry','AdminController@addNewCourseType')->middleware('CheckAdmin:Admin');

Route::get('admin/new-department-entry',['as' => 'department.create', 'uses' => 'AdminController@addNewDepartmentForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/new-department-entry','AdminController@addNewDepartment')->middleware('CheckAdmin:Admin');

Route::get('admin/assign-course-teacher',['as' => 'assign.courseTeacher', 'uses' => 'AdminController@assignCourseTeacherForm'])->middleware('CheckAdmin:Admin');
Route::post('admin/assign-course-teacher','AdminController@assignCourseTeacher')->middleware('CheckAdmin:Admin');


// Login Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login/custom',['as'=>'login.custom','uses'=>'LoginController@login']);
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'LoginController@showRegistrationForm')->name('register')->middleware('CheckAdmin:Admin');
$this->post('register', 'LoginController@register')->middleware('CheckAdmin:Admin');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');