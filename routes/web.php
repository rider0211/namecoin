<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;

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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, "index"])->name("home");
Route::post('/order', [HomeController::class, "order"])->name("order");
Route::get('/main', [HomeController::class, "main"])->name("main");
Route::post('/register_wallet_Address', [HomeController::class, "regist_wallet"])->name("regist_wallet");
Route::post('/findDomainName', [HomeController::class, "findDomainName"])->name("findDomainName");
Route::post('/validate_twitter_displayName', [HomeController::class, "validateTwitterName"])->name("validateTwitterName");
Route::post('/confirm_email', [HomeController::class, "confirmEmail"])->name("confirmEmail");


// Route::get('/home', [HomeController::class, "index"]);

// Route::get('buying', [BuyController::class, "index"])->name("buying");
// Route::get('property-detail/{property_id}', [BuyController::class, "property_detail"]);
// Route::get('selling', [SellController::class, "index"])->name("selling");

// Route::get('agents', [AgentController::class, "index"])->name("agents");
// Route::get('get_cities', [AgentController::class, "get_cities"]);

// Route::get('agent-detail/{id}', [AgentController::class, "agentDetail"]);
// Route::get('agent-site/{id}', [AgentController::class, "agentSite"]);

// Route::get('about', [CompanyController::class, "index"])->name("about");
// Route::get('blog', [CompanyController::class, "blog"])->name("blog");
// Route::get('blog-detail', [CompanyController::class, "blogDetail"])->name("blog");


// Route::get('become-realtor', [CompanyController::class, "become"])->name("become");
// Route::get('contact', [ContactController::class, "index"])->name("contact");
// Route::post('contact', [ContactController::class, "save_contact"]);
// Route::get('logout', [LoginController::class, "logout"]);

// Auth::routes();

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('join-us', [CompanyController::class, "join"])->name("join");
//     Route::post('join_agent', [CompanyController::class, "join_agent"]);
//     Route::post('get_cities', [CompanyController::class, "get_cities"]);

// });

