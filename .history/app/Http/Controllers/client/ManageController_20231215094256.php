<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\ManagePlans;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function plan_deposit_eurusd()
    {
        $id = 1;
        $plan_eurusd = ManagePlans::where('id', $id)->fisrt
    }
}
