<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SessionController;
use App\Models\Person;
use App\Models\Product;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/author/{author}', [AuthorController::class, 'bind']);
Route::get('/add', [AuthorController::class, 'add']);
Route::get('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::get('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::get('/delete', [AuthorController::class, 'remove']);
Route::get('/relation', [AuthorController::class, 'relate']);
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

Route::get('/softdelete', function () {
        Person::find(1)->delete();
});

Route::get('softdelete/get', function() {
        $person = Person::onlyTrashed()->get();
        dd($person);
});

Route::get('softdelete/store', function() {
        $result = Person::onlyTrashed()->restore();
        echo $result;
});

Route::get('softdelete/absolute', function () {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});

Route::get('uuid',function() {
        $products = Product::all();
        foreach($products as $product){
            echo $product . '<br>';
        }
});
