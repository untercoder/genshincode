<?php

namespace App\Http\Controllers\UserPanel;


use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\News\WorkWithImgTrait;
use App\Http\Requests\StoreAccountsRequest;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{

    use WorkWithImgTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $accounts = Account::all()->where('user_id', $user->id);
        return view('user.user_accounts',
            [
                'title' => "Actual codes",
                'user' => $user,
                'accounts' => $accounts,
                'modelName' => 'Account'
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
        return view('user.user_create_ads_acc',
            [
                'title' => "Actual codes",
                'user' => Auth::user(),
                'modelName' => 'Account'
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAccountsRequest $request)
    {
        $file = $request->file('img');
        $saveImgPath = "accounts_img/";
        $user = Auth::user();

        $contacts = [
            'telegram' => $request['telegram'],
            'email' => isset($request['useUserEmail']) ? $user->email : $request['email'],
            'phone' => $request['phone']
        ];

        Account::create([
            'user_id' => $user->id,
            'description'=> $request['description'],
            'user_email'=>$user->email,
            'server'=>$request['server'],
            'header'=>$request['header'],
            'price'=>$request['price'],
            'img_path'=>$this->resizeAndSave($file, $saveImgPath),
            'contacts'=>json_encode($contacts)
        ]);

        return redirect()->route('accounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('user.user_create_ads_acc',
            [
                'title' => "Actual codes",
                'user' => Auth::user(),
                'modelName' => 'Account',
                'account' => $account,
                'contacts' => json_decode($account->contacts, true)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAccountsRequest $request, Account $account)
    {
        dd($request, $account);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Account $account)
    {
        Storage::delete($account->img_path);
        $account->delete();
        return redirect()->route('accounts.index');
    }
}
