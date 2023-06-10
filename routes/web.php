<?php

use PhpParser\Node\Name;
use function Pest\Laravel\get;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
    Route::get('/admin/dashboard',[DashboardController::class, 'Index'])->name('admindashboard');

    Route::get('/admin/all-category',[CategoryController::class, 'Index'])->name('allcategory');
    Route::get('/admin/add-category',[CategoryController::class, 'AddCategory'])->name('addcategory');
    Route::post('admin/store-category',[CategoryController::class, 'StoreCategory'])->name('storecategory');

    Route::get('/admin/all-subcategory',[SubCategoryController::class, 'Index'])->name('allsubcategory');
    Route::get('/admin/add-subcategory',[SubCategoryController::class, 'AddSubCategory'])->name('addsubcategory');
  
   
    Route::get('/admin/all-product',[ProductController::class, 'Index'])->name('allproduct');
    Route::get('/admin/add-product',[ProductController::class, 'AddProduct'])->name('addproduct');
   
    Route::get('/admin/panding-order',[OrderController::class, 'Index'])->name('pandingorder');
 

});


require __DIR__.'/auth.php';
