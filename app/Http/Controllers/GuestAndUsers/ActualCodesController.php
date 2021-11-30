<?php

namespace App\Http\Controllers\GuestAndUsers;

use App\Http\Controllers\Controller;
use App\Models\Promocode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualCodesController extends Controller
{

    public function show(): string
    {
        return view('actualcode',
                [
                    'title' => "Actual codes",
                    'user' => Auth::user(),
                    'promocodes' => Promocode::all(),
                    'actual_date' => date("d.m.y")
                ]
        );
    }
}
