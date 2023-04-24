<?php
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Admin\Homecontroller;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('khoahoc', function() {
    echo 'hello world';
}); 

Route::get('demo', function() {
    echo 'demo';
});

Route::get('/name/{name}/{age}', function($name , $age) {
    echo 'Hello World ' .$name;
    echo '<br/> Age: ' .$age;
})-> where(['age' => '[0-9]+' ]);

Route::get('route/name', function() {
    echo 'hello world Name';
})-> name('route-name' );

Route::get('get/route/name', function () {
    echo '<a href="'.route('route-name').'">router name</a>';
});


/* Route Group */

Route::prefix('admin') -> group(function () {
    Route::get('post', function () {
        echo 'get post';
    });

    Route::get('post/edit', function () {
        echo 'edit post';
    });

    Route::get('post/delete', function () {
        echo 'delete post';
    });
}); 


Route::get('goi-controller/{name}', [PageController::class, 'getData']);

Route::get('get-form', [PageController::class, 'getform']);

Route::post('take-form', [PageController::class, 'takeform'])->name('take-form');

Route::get('up-load', [PageController::class, 'upload'])->name('up-load');

Route::post('handle-upload', [PageController::class, 'handleUpload'])->name('handle-upload');

Route::prefix('admin')->group(function() {
    Route::get('home', [HomeController::class, 'home'])->name('admin.home.home');

    Route::get('dashboard', [HomeController::class, 'dashboard']);
    
});

Route::get('home', [WebController::class,'home'])->name('web.home.home');

Route::get('get-messages', [WebController::class, 'getMessages'])->name('web.home.get-messages');
Route::get('create-messages', [WebController::class, 'createMessages'])->name('web.home.create-messages');

Route::post('store-messages', [WebController::class, 'storeMessages'])->name('web.home.store-messages');
Route::get('edit-messages/{id}', [WebController::class, 'editMessages'])->name('web.home.edit-messages');
Route::put('update-messages/{id}', [WebController::class, 'updateMessages'])->name('web.home.update-messages');
Route::get('delete-messages/{id}', [WebController::class, 'deleteMessages'])->name('web.home.delete-messages');