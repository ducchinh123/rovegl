<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\StatController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/', AdminController::class);

    //Page 
    Route::resource('pages', PageController::class);
    //Viddeo 
    Route::resource('videos', VideoController::class);
    //Stats 
    Route::resource('stats', StatController::class);
    Route::get('stats/chart', [StatController::class, 'showChart'])->name('admin.dashboard.chart');

    // Import

    Route::get('import-media-data', [AdminController::class, 'import'])->name('admin.media.import');
    Route::post('import-media-data', [AdminController::class, 'importSave']);

    Route::get('import-data/{table}', [AdminController::class, 'importTable'])->name('admin.table.import');
    Route::post('import-data/{table}', [AdminController::class, 'importSaveTable']);


    // Prodfile
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('profile-edit', [AdminController::class, 'edit'])->name('admin.profile.edit');

    // Route cho việc cập nhật thông tin cơ bản
    Route::put('profile/update-basic/{id}', [AdminController::class, 'updateProfileBasic'])->name('admin.profile.updateBasic');

    // Route cho việc cập nhật mật khẩu
    Route::put('profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('admin.profile.updatePassword');

    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
});



Route::get('/', [ClientController::class, 'index'])
    ->name('client.home');

Route::get('about-us', [ClientController::class, 'aboutUs'])
    ->name('client.about-us');

Route::get('for-client', [ClientController::class, 'forClient'])
    ->name('client.for-client');

Route::get('for-creator', [ClientController::class, 'forCreator'])
    ->name('client.for-creator');

Route::get('contact-us', [ClientController::class, 'contactUs'])
    ->name('client.contact-us');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
