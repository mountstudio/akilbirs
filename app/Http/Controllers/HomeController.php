<?php

namespace App\Http\Controllers;

use App\Mail\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function formRequest(Request $request)
    {
        Mail::to('info@akilbirs.kg')
            ->cc('talgat.baibek@gmail.com')
            ->cc('tilek.kubanov@gmail.com')
            ->send(new FormRequest($request->all()));

        return back();
    }
}
