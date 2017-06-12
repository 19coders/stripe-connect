<?php
/*
 * This file is part of the stripe-connect package.
 *
 * (c) Cents for Change, L.L.C. <talk@centsforchange.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace CentsforChange\StripeConnect;
use Illuminate\Http\Request;

class StripeConnect{

    public function redirect(){
        redirect('https://connect.stripe.com/oauth/authorize?response_type=code&client_id=' . config('stripe_connect.client_id') . '&scope=read_write');
    }

    public function callback(Request $request){
        
    }
}