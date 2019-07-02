<?php

namespace App\Http\Controllers;

use App\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index(){
        $wallet=Wallet::firstOrFail();
        $response=$wallet->load('transfers');
        return response()->json($response,200);
    }
}
