<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Foundation\Auth\HandlesVisa;

class VisaController extends Controller
{

    use HandlesVisa;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
