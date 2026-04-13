<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $featuredProducts = Product::where('active', true)->take(3)->get();
        return view('home', compact('featuredProducts'));
    }

    public function products()
    {
        $products = Product::where('active', true)->get();
        return view('products', compact('products'));
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
