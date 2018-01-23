<?php

namespace App\Http\Controllers;


class UserController extends Controller{


    public function getUser(){
        return view('layouts.user');
    }

    public function getProfile(){
        return view('User.profile');
    }

    public function getGiftcards(){
        return view('User.giftcards');
    }

    public function getAbout(){
        return view('help.about');
    }
}