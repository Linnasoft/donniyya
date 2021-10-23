<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'index',
        'page_title' => __('index.page_title'),
        'navbar_target' => '1',
    ];

    return view('member.index')->with($data);
});

Route::get('/recherche/{category}/{keyword}/{location}', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'search_formation',
        'page_title' => __('formation.listing_page_title'),
        'navbar_target' => '2',
    ];

    return view('member.pages.formation.listing')->with($data);
});

Route::get('/{category}/{formation_token}', function () {

    $title = 'Créer un logiciel de gestion avec Excel';

    $data = [
        'category_name' => '',
        'page_name' => 'formation',
        'page_title' => $title,
        'navbar_target' => '2',
    ];

    return view('member.pages.formation.single')->with($data);
});

Route::get('/creer-un-compte', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'register',
        'page_title' => __('auth.register_page_title'),
        'navbar_target' => '',
    ];

    return view('auth.register')->with($data);
});

Route::get('/connexion', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'login',
        'page_title' => __('auth.login_page_title'),
        'navbar_target' => '',
    ];

    return view('auth.login')->with($data);
});

Route::get('/mot-de-passe-oublie', function () {

    $data = [
        'category_name' => '',
        'page_name' => 'password',
        'page_title' => __('auth.password_reset_page_title'),
        'navbar_target' => '',
    ];

    return view('auth.reset_password')->with($data);
});