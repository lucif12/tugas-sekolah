<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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

Route::get('/biodata', function () {
    $data1=[
        'nama'=>'Iman Januar',
        'lahir'=>' bandung 18 01 03',
        'hobi'=>' tidur',
        'jk'=>' laki-laki',
        'agama'=>' islam & atheis',
        'alamat'=>' abdinegara blok f',
        'telp'=>' 082121260400',
        'email'=>' imanjanuar44@gmail.com'
    ];
return view('biodata',$data1);



});


Route::get('/list_siswa', [BiodataController::class, 'index']);
Route::get('/list', [BiodataController::class, 'index'])->name('list');
Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add-siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit-siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa'); \
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');

