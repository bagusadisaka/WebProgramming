<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/main', function () {
    $osis = [
        ['name' => 'Leader', 'element' => 'Student Council of Senior High School', 'image' => 'kolase 1.png'],
        ['name' => 'Secretary', 'element' => 'Student Council of Senior High School', 'image' => 'kolase 2.png'],
        ['name' => 'Secretary', 'element' => 'Student Council of Junior High School', 'image' => 'kolase 3.png'],
    ];

    $creative = [
        ['name' => 'Leader', 'element' => 'Creative Team RTB of Undergraduated', 'image' => 'kolase 1.png'],
        ['name' => 'Head of Event Division', 'element' => 'Creative Team RTB of Undergraduated', 'image' => 'kolase 2.png'],
        ['name' => 'Art Extracurricular Coordinator', 'element' => 'Creative Team BLI of Undergraduated', 'image' => 'kolase 3.png'],
    ];

    $other = [
        ['name' => 'Vice Leader', 'element' => 'Forsima of Undergraduated', 'image' => 'kolase 1.png'],
        ['name' => 'Public Relation Division', 'element' => 'FPODS of Senior High School', 'image' => 'kolase 2.png'],
        ['name' => 'Art Extracurricular Coordinator', 'element' => 'DPA of Junior High School', 'image' => 'kolase 3.png'],
    ];
    return view('main', compact('osis', 'creative', 'other'));
});
