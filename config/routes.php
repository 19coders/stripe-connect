<?php

use Illuminate\Http\Request;

Route::get('/stripe/connect/', '\CentsforChange\StripeConnect\StripeConnect@redirect');

Route::get('/stripe/connect/callback', '\CentsforChange\StripeConnect\StripeConnect@callback');
