<?php

use App\Models\accounts;
use App\Models\statement;
use Illuminate\Http\Request;
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

Auth::routes();

// group middleware
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/calculation', [App\Http\Controllers\Calculation::class, 'index'])->name('calculation');
    Route::get('/spendimgitems', [App\Http\Controllers\Spendingitems::class, 'index'])->name('spendimgitems');

    Route::get('/admin/home', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/admin/calculation', 'Admin\HomeController@index')->name('admin.calculation');
    Route::get('/admin/spendimgitems', 'Admin\HomeController@index')->name('admin.spendimgitems');

    Route::post('/admin/calculation', function (Request $request) {

        $money1 = $request->input('money1');
        $money2 = $request->input('money2');
        if ($money1 == null && $money2 == null) {
            return redirect()->route('calculation');
        }
        accounts::updateOrCreate(
            ['id' => 1],
            ['name' => 'cash']
        );
        $acc = accounts::find(1);
        $total = ($acc->money + $money1) - $money2;
        statement::create([
            'money' => $money1,
            'money2' => $money2,
            'accountID' => 1,
            'date' => date('Y-m-d H:i:s'),
        ]);
        accounts::updateOrCreate(
            ['id' => 1],
            ['money' => $total]
        );
        return redirect()->route('calculation');
    })->name('admin.calculation.add');
});
