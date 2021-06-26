<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Contact;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $settings = Setting::first();

        // Chia sẻ
        view()->share([
            'settings'=> $settings
        ]);
    }

    // trang chu
    public function index()
    {
        return view('shop.index');
    }

    // trang lien he
    public function contact()
    {
        return view('shop.contact');
    }

    // trang danh sach san pham
    public function listProducts()
    {
        return view('shop.list-products');
    }

    // trang chi tiet san pham
    public function detailProduct()
    {
        return view('shop.detail-product');
    }

    // trang danh sach tin tuc
    public function listArticles()
    {
        return view('shop.list-articles');
    }

    public function detailArticle()
    {
        return view('shop.detail-article');
    }

    public function postContact(Request $request)
    {
        //validate
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }
}
