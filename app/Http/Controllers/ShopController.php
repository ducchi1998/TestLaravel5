<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
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

}
