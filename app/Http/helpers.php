<?php

use Illuminate\Support\Facades\Auth;

function isLoggedIn() {

    return Auth::check();
}



