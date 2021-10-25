<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\linkerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\rentACarController;
use App\Http\Controllers\travelAnywhereController;
use App\Http\Controllers\tourismController;
use App\Http\Controllers\testController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\carOwnerController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SettingsController;
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

//Auth::routes();

// Route::get('/', function () {
//     return view('home');
// });
/*
Route::get('/phpmyadmin', function(){
    return view('tests');
})->name('phpmyadmin');
*/
//isLoggedin = AuthCheck
//AlreadyLoggedIn = AlreadyLoggedIn

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homes');

Route::get('/register', [RegisterController::class, 'index'])->middleware('AlreadyLoggedIn')->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/register_renter', [RegisterController::class, 'storeRenter'])->name('registerRenter');

Route::get('/{value}/login', [RegisterController::class, 'loadLogin'])->middleware('AlreadyLoggedIn')->name('login');
Route::post('/login', [RegisterController::class, 'login'])->middleware('AlreadyLoggedIn')->name('loginPOST');

// Route::get('/home', [RegisterController::class, 'loadUserInfo'])->middleware('isLogged')->name('home');
Route::get('/{value}/logout', [RegisterController::class, 'logout'])->name('logout');

Route::get('/rent_a_car', [linkerController::class, 'loadRentACar'])->name('rent');
Route::get('/travel_anywhere', [linkerController::class, 'loadtravelAnywhere'])->name('travel');
Route::get('/earn_with_your_car', [linkerController::class, 'loadEarn'])->name('earn');
Route::get('/tourism', [linkerController::class, 'loadTourism'])->name('tourism');
Route::get('/offers', [linkerController::class, 'loadSpecialOffer'])->name('specialOffer');




//Rent a car front page
Route::get('/rent_a_car/{value}', [rentACarController::class, 'rentACarToPageLoader'])->middleware('isLogged')->name('rent_a_car_redirector');

Route::post('/rent_a_car/hourly', [rentACarController::class, 'carChooser'])->middleware('isLogged')->name('hourlyBook');
Route::post('/rent_a_car/to_airport', [rentACarController::class, 'carChooser'])->middleware('isLogged')->name('airportBook');
Route::post('/rent_a_car/whole_Day', [rentACarController::class, 'carChooser'])->middleware('isLogged')->name('wholeDay');
Route::post('/rent_a_car/whole_Month', [rentACarController::class, 'carChooser'])->middleware('isLogged')->name('wholeMonth');
Route::post('/rent_a_car/car_for_wedding', [rentACarController::class, 'carChooser'])->middleware('isLogged')->name('wedding');
Route::post('/rent_a_car/school_office_pickup', [rentACarController::class, 'carChooser'])->middleware('isLogged')->name('schoolOffice');



//Booking Backend
Route::post('/confirm_book', [bookingController::class, 'beforeBookEnrolled'])->middleware('isLogged')->name('confirm_book');
Route::post('/confirm_backend/rent_car', [bookingController::class, 'rentCar'])->middleware('isLogged')->name('book_confirm_rent_car');




//Tourism
// Route::get('/tourism/{value}', [travelAnywhereController::class, 'travelBooker'])->name('travel_to');
Route::get('/tourism/bookTour/{value}', [tourismController::class, 'loadTourForm'])->middleware('isLogged')->name('tourTo');
Route::get('/tourism/{value}', [tourismController::class, 'loadTourInfoPage'])->name('tourTo_value');
Route::post('/tourism/choose_car', [tourismController::class, 'chooseCar'])->middleware('isLogged')->name('bookTour');
Route::post('/tourism/confirm_book', [tourismController::class, 'bookTour'])->middleware('isLogged')->name('confirmTour');
Route::post('/tourism/book', [tourismController::class, 'enrolTour'])->middleware('isLogged')->name('book_confirm_tourism');


Route::get('/tourism/sajek', [tourismController::class, 'loadTourInfoPage'])->middleware('isLogged')->name('tourTo__Sajek');
Route::get('/tourism/bisnakandi', [tourismController::class, 'loadTourInfoPage'])->middleware('isLogged')->name('tourTo__Bisnakandi');
Route::get('/tourism/boga_lake', [tourismController::class, 'loadTourInfoPage'])->middleware('isLogged')->name('tourTo__BogaLake');
Route::get('/tourism/nilgiri_mountains', [tourismController::class, 'loadTourInfoPage'])->middleware('isLogged')->name('tourTo__NilgiriMountains');
Route::get('/tourism/ratargul_swamp_forest', [tourismController::class, 'loadTourInfoPage'])->middleware('isLogged')->name('tourTo__RatargulSwampForest');



//Earn with your car
// Route::get('/register_as_a_renter', [linkerController::class, 'loadRenterRegistration'])->name('loadRenterRegistration');
Route::get('/earn_with_your_car/register_as_a_renter', [linkerController::class, 'loadRenterRegistration'])->name('renterRegistration');
Route::post('/earn_with_your_car/register_as_a_renter', [RegisterController::class, 'storeRenter']);



//Customer
Route::get('/customer/dashboard', [customerController::class, 'index'])->middleware('isLogged')->name('customerDashboard');
Route::get('/customer/cancel/{value}', [customerController::class, 'cancelReq'])->middleware('isLogged')->name('cancelReq');
Route::get('/customer/account_info', [SettingsController::class, 'loadCustomerSettings'])->middleware('isLogged')->name('cus_settings');
Route::get('/customer/account_info/edit', [SettingsController::class, 'editCustomerSettings'])->middleware('isLogged')->name('cus_editSettings');
Route::post('/customer/account_info/edit', [SettingsController::class, 'editCustomerConfirm'])->middleware('isLogged');
Route::post('/customer/account_info/password/edit', [SettingsController::class, 'passwordCustomerConfirm'])->middleware('isLogged')->name('passCus');




//Change Password
Route::get('/account_info/change_password', [SettingsController::class, 'loadPassChange'])->middleware('settings')->name('passChange');
Route::post('/account_info/change_password', [SettingsController::class, 'passwordCustomerConfirm'])->middleware('settings');




//Renter
Route::get('/renter/dashboard', [carOwnerController::class, 'index'])->middleware('preventAuth')->name('renterDashboard');
Route::post('/renter/dashboard/insert_car', [carOwnerController::class, 'insertCar'])->middleware('preventAuth')->name('insertCar');
Route::get('/renter_account_info', [SettingsController::class, 'loadRenterSettings'])->middleware('preventAuth')->name('renterSettings');
// Route::get('/renter_account_info/edit', [SettingsController::class, 'editRenterSettings'])->middleware('preventAuth')->name('renterEditSettings');
Route::get('/renter_account_info/edit', [SettingsController::class, 'editRenterSettings'])->middleware('preventAuth')->name('renter_editSettings');
Route::get('/renter/active/{value}', [carOwnerController::class, 'activeCar'])->middleware('preventAuth')->name('activeCar');
Route::get('/renter/inactive/{value}', [carOwnerController::class, 'inactiveCar'])->middleware('preventAuth')->name('inactiveActive');
Route::get('/renter/accept/{value}', [carOwnerController::class, 'acceptRequest'])->middleware('preventAuth')->name('acceptReq');
Route::get('/renter/complete/{value}', [carOwnerController::class, 'completeRequest'])->middleware('preventAuth')->name('completeReq');




//Travel Anywhere
Route::get('/travel_anywhere/{value}', [travelAnywhereController::class, 'travelBooker'])->name('travel_to');
Route::post('/travel_anywhere/choose_car', [travelAnywhereController::class, 'chooseCar'])->name('travel_to_choose_car');
Route::post('/travel_anywhere/confirm_book', [travelAnywhereController::class, 'confirmForm'])->name('travel_to_confirm');
Route::post('/travel_anywhere/book', [travelAnywhereController::class, 'bookTravel'])->name('travel_to_book');
// Route::get('/{value}', [travelAnywhereController::class, 'travelBooker'])->name('upDownTravel');



//Special Offer
Route::get('/special_offer/puja_offer', [OfferController::class, 'loadOffer_puja'])->name('pujaOffer');
Route::get('/special_offer/puja_offer/enrol', [OfferController::class, 'loadOffer_puja_book'])->name('pujaOfferEnrol');



//Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('adminAuth')->name('admin');
Route::get('/admin/verifyRenter/{value}', [AdminController::class, 'verifyRenter'])->middleware('adminAuth')->name('verifyRenter');
// Route::get('/admin/rejectRenter', [AdminController::class, 'rejectRenter'])->middleware('adminAuth')->name('rejectRenter');
Route::get('/admin/verifyCar/{value}', [AdminController::class, 'verifyCar'])->middleware('adminAuth')->name('verifyCar');
// Route::get('/admin/rejectCar', [AdminController::class, 'rejectCar'])->middleware('adminAuth')->name('rejectCar');




Route::post('/test2', [testController::class, 'test2'])->name('test2');
Route::get('/test', [testController::class, 'test'])->name('test');
Route::post('/test/die_dump', [testController::class, 'dieDump'])->name('tested');