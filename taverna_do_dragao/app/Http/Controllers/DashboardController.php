<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function createDashboard()
    {
        return view('taverna.dashboard.dashboard');
    }
}
