<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Promocode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualCodesController extends Controller
{

    public function showActual(): string
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

    public function showAbout() : string {
        return view('about',
            [
                'title' => "About",
                'user' => Auth::user()
            ]
        );
    }


}
