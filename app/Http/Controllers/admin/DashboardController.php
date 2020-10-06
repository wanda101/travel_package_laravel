<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\TravelPackage;
use App\Transaction;
use App\Transactions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pendding' => Transaction::where('transaction_status', 'PENDDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count()
        ]);
    }
}
