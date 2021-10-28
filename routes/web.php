<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/********************************* Controllers include ********************************************/
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\PasswordResetController;

use App\Http\Controllers\base\NotificationController;
use App\Http\Controllers\member\MemberController;
/********************************* Controllers include ********************************************/

Route::group(['middleware' => 'auth'] , function(){

    Route::group(['middleware' => 'Student'] , function(){

    });

    Route::group(['middleware' => 'Teacher'] , function(){

    });

    Route::group(['middleware' => 'Admin'] , function(){

    });

    Route::get('/', function () {

        $data = [
            'category_name' => '',
            'page_name' => 'index',
            'page_title' => __('index.page_title'),
            'navbar_target' => '1',
            'footer_target' => '1'
        ];
    
        return view('site.index')->with($data);
    });

    Route::get('/recherche/{category}/{keyword}/{location}', function () {

        $data = [
            'category_name' => '',
            'page_name' => 'search_formation',
            'page_title' => __('formation.listing_page_title'),
            'navbar_target' => '2',
            'footer_target' => '1'
        ];
    
        return view('site.pages.formation.listing')->with($data);
    });
    
    Route::get('/formation/{category}/{formation_token}', function () {
    
        $title = 'Créer un logiciel de gestion avec Excel';
    
        $data = [
            'category_name' => '',
            'page_name' => 'formation',
            'page_title' => $title,
            'navbar_target' => '2',
            'footer_target' => '1'
        ];
    
        return view('site.pages.formation.single')->with($data);
    });

    Route::prefix('dashboard')->group(function (){

        Route::get('/mon-profil', [MemberController::class, 'index_logged_profile'])->name('logged_profile');

    });

    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::get('/notification/{token}/{source}', [NotificationController::class, 'single_notification']);

    Route::get('/deconnexion/{error?}', [LoginController::class, 'logout'])->name('deconnexion');

});

Auth::routes();

Route::get('/', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'index',
        'page_title' => __('index.page_title'),
        'navbar_target' => '1',
        'footer_target' => '1'
    ];

    return view('site.index')->with($data);
});

Route::get('/login', function () {
    abort(404);
});

Route::get('/register', function () {
    abort(404);
});

Route::get('/formateur/decouvrir', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'formation',
        'page_title' => __('formation.be_a_teacher_page_title'),
        'navbar_target' => '3',
        'footer_target' => '1'
    ];

    return view('site.pages.formation.be_a_teacher')->with($data);
});

Route::get('/creer-un-compte', [RegisterController::class, 'index_basic_member']);
Route::post('compte-cree', [RegisterController::class, 'register_basic_member'])->name('register_basic_member');

Route::get('/connexion', [LoginController::class, 'index'])->name('connexion');
Route::post('connexion-en-cours', [LoginController::class, 'log_user'])->name('user_login');

Route::get('/mot-de-passe-oublie', [PasswordResetController::class, 'index']);
Route::post('mot-de-passe-oublie/lien-envoye', [PasswordResetController::class, 'send_email'])->name('send_email');

Route::get('/reinitialisation-mot-de-passe/{token}/{email}', [PasswordResetController::class, 'index_new_password'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'new_password'])->name('password.update');