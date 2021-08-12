<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dangky;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dangkyhocphan(Request $request)
    {
        error_log($request);
        $request->validate([
            'user_id' => 'required',
            'monhoc_id' => 'required'
        ]);

        error_log($request);

        Dangky::create($request->all());

        return redirect('/home')->with('success', 'Đăng ký thành công!');
    }
}
