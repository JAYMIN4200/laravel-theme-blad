<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home2');
});

Route::get('/home1', function () {
    return view('frontend.home1');
})->name('home1');

Route::get('/home2', function () {
    return view('frontend.home2');
})->name('home2');

Route::get('/home3', function () {
    return view('frontend.home3');
})->name('home3');

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
})->name('aboutus');

Route::get('/campaign', function () {
    return view('frontend.campaign');
})->name('campaign');

Route::get('/campaigndetails', function () {
    return view('frontend.campaigndetails');
})->name('campaigndetails');

Route::get('/service', function () {
    return view('frontend.service');
})->name('service');

Route::get('/servicedetails', function () {
    return view('frontend.servicedetails');
})->name('servicedetails');

Route::get('/teammember', function () {
    return view('frontend.teammember');
})->name('teammember');

Route::get('/terms', function () {
    return view('frontend.terms');
})->name('terms');

Route::get('/privacypolicy', function () {
    return view('frontend.privacypolicy');
})->name('privacypolicy');

Route::get('/photogallery', function () {
    return view('frontend.photogallery');
})->name('photogallery');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/donate', function () {
    return view('frontend.donate');
})->name('donate');

Route::get('/register', function () {
    return view('frontend.register');
})->name('register');

Route::get('/404', function () {
    return view('frontend.404');
})->name('404');

Route::get('/blogdefault', function () {
    return view('frontend.blogdefault');
})->name('blogdefault');

Route::get('/blogdetails', function () {
    return view('frontend.blogdetails');
})->name('blogdetails');


Route::get('/blogstyle1', function () {
    return view('frontend.blogstyle1');
})->name('blogstyle1');

Route::get('/blogstyle2', function () {
    return view('frontend.blogstyle2');
})->name('blogstyle2');

Route::get('/blogleft', function () {
    return view('frontend.blogleft');
})->name('blogleft');

Route::get('/blogright', function () {
    return view('frontend.blogright');
})->name('blogright');

Route::get('/contacts', function () {
    return view('frontend.contacts');
})->name('contacts');





