<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSend(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        return redirect()->route('contact')->with('success', 'Mesajınız alındı! En kısa sürede size geri döneceğiz.');
    }
}
