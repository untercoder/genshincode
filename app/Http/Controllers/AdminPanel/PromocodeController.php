<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Promocode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


class PromocodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard_table',
            [
                'title' => "Dashboard",
                'user' => Auth::user(),
                'date' => Promocode::all(),
                'modelName' => "promoCode",
                'tableTh' => [ "Сервер", "Промокод", "Нагрда", "Срок действия","Действия"]
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inputform_promotable', [
            'title' => "Create promocode",
            'user' => Auth::user(),
            'modelName' => "promoCode"

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Promocode::create($request->only(['code', 'prize', 'server', 'date']));
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promocode  $promocode
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show(Promocode $promocode)
    {
        return redirect()->route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promocode  $promocode
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Promocode $promocode)
    {
        return view('admin.inputform_promotable', [
                'title' => "Edit code",
                'user' => Auth::user(),
                'promocode' => $promocode,
                'modelName' => "promoCode"
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promocode  $promocode
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Promocode $promocode)
    {
        $promocode->update($request->only(['code', 'prize', 'server', 'date']));
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promocode  $promocode
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Promocode $promocode)
    {
        $promocode->delete();
        return redirect()->route('dashboard');
    }
}
