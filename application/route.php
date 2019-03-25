<?php

use think\Route;
//404页面
Route::miss('Index/notFound', 'GET');
//默认进首页
Route::rule('/', 'Index/index', 'GET');
//前台路由--GET
Route::rule('index', 'Index/index', 'GET');
Route::rule('about_us', 'Index/aboutUs', 'GET');
Route::rule('solution', 'Index/solution', 'GET');
Route::rule('solution_detail', 'Index/solutionDetail', 'GET');
Route::rule('teacher', 'Index/teacher', 'GET');
Route::rule('teacher_detail', 'Index/teacherDetail', 'GET');
Route::rule('course', 'Index/course', 'GET');
Route::rule('contact', 'Index/contact', 'GET');