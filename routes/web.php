<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WebServiceController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');
Route::get('/bize-ulasin', [PageController::class, 'bizeulasin'])->name('bizeulasin');
Route::get('/dropshipping', [PageController::class, 'dropshipping'])->name('dropshipping');
Route::get('/webservice/home/main-slider', [WebServiceController::class, 'home_main_slider'])->name('main_slider');
Route::get('/webservice/home/section-category1', [WebServiceController::class, 'section_category1'])->name('section_category1');
Route::get('/webservice/home/section-grid1', [WebServiceController::class, 'section_grid1'])->name('section_grid1');
Route::get('/webservice/home/section-grid2', [WebServiceController::class, 'section_grid2'])->name('section_grid2');
Route::get('/webservice/home/section-grid3', [WebServiceController::class, 'section_grid3'])->name('section_grid3');
Route::get('/webservice/home/section-carousel1', [WebServiceController::class, 'section_carousel1'])->name('section_carousel1');
Route::get('/webservice/home/section-carousel2', [WebServiceController::class, 'section_carousel2'])->name('section_carousel2');
Route::get('/webservice/home/section-carousel3', [WebServiceController::class, 'section_carousel3'])->name('section_carousel3');
Route::get('/webservice/home/favorite-brands', [WebServiceController::class, 'favorite_brands'])->name('favorite_brands');
Route::get('/urunler', [ListingController::class, 'index'])->name('listing.index');
Route::get('/urunler/sonbahar-firsati', [ListingController::class, 'firsatlar_1'])->name('listing.firsatlar_1');
Route::get('/urunler/yilbasi-firsati', [ListingController::class, 'firsatlar_2'])->name('listing.firsatlar_2');
Route::get('/urunler/super-firsat', [ListingController::class, 'firsatlar_3'])->name('listing.firsatlar_3');
Route::get('/urunler/indirime-girenler', [ListingController::class, 'discounted'])->name('listing.discounted');
Route::get('/urunler/yeniden-stokta', [ListingController::class, 're_stock'])->name('listing.re_stock');
Route::get('/urunler/sezon-sonu', [ListingController::class, 'outlet'])->name('listing.outlet');
Route::get('/urunler/bitmek-uzere', [ListingController::class, 'out_stock'])->name('listing.out_stock');
