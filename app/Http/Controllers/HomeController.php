<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendReceipt;
use App\Jobs\SendReceipt as SendReceiptJob;
use Mail;
use Log;

class HomeController extends Controller
{
    public function processOrder(Request $request)
    {
	//processing order details comes here
	//saving order details, products, payment and user information
	dump('Processing order ....');
	$this->dispatch(new SendReceiptJob(['firstName' => $request->name]));
	dump('Dispatched job to do other activities');
    }

    public function sendReceipt($data)	
    {
	//other processing tasks
	Mail::to('user@gmail.com')->send(new SendReceipt($data));
        Log::info(json_encode($data));
    }
}
