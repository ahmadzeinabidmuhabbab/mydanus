<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function checkLogin(){
        if(session()->has("login")) return redirect()->to(base_url('/'));
    }

    
    public function login()
    {
        $data = [
            'title' => "Login | MyDanus"
        ];
        return view('mydanus/seller/login', $data);
    }

    public function registration()
    {
        $data = [
            'title' => " Registration | MyDanus",
            'validation' => \Config\Services::validation()
        ];
        return view('mydanus/seller/registration', $data);
    }

    public function home()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "MyDanus",
            'beranda' => "active"
        ];
        echo view('mydanus/seller/home', $data);
    }

    public function profile()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/seller/profilpembeli', $data);
    }

    public function editprofile()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Edit Profil | MyDanus",
            'profile' => "active"
        ];
        echo view('mydanus/seller/editprofilpembeli', $data);
    }

    public function myorder()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Daftar Pesanan | MyDanus",
            'myorder' => "active"
        ];
        echo view('mydanus/seller/pesanansaya', $data);
    }
    
    public function showorder()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Detail Pesanan | MyDanus",
            'myorder' => "active"
        ];
        echo view('mydanus/seller/tampilpesanan', $data);
    }
    
    public function complaint()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Ajukan Keluhan | MyDanus",
            'complaint' => "active"
        ];
        echo view('mydanus/seller/keluhan', $data);
    }

    public function search()
    {
       if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Search result | MyDanus", //bisa diganti cari (keyword) | MyDanus (??)
        ];
        echo view('mydanus/seller/search', $data);
    }

    public function categories()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "(Categories)  | MyDanus", //menyesuaikan kategori apa (??)
        ];
        echo view('mydanus/seller/categories', $data);
    }

    public function product()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "(produk)  | MyDanus", //menyesuaikan produk apa (??)
        ];
        echo view('mydanus/seller/productdetail', $data);
    }

    public function checkout()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Checkout | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/seller/checkout', $data);
    }

    public function paymentMethod()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Payment Method | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/seller/paymentMethod', $data);
    }
    
    public function confirmation()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "Konfirmasi pembayaran | MyDanus", //menyesuaikan produk
        ];
        echo view('mydanus/seller/confirmation', $data);
    }


    public function profileMerchant()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => "(toko)  | MyDanus", //menyesuaikan nama ukm/himada
        ];
        echo view('mydanus/seller/profileMerchant', $data);
    }

    // Seller section 
    public function dashboardSeller()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Dashboard (penjual)  | MyDanus", //menyesuaikan nama ukm/himada
            'dashboard' => "active"
        ];
        echo view('mydanus/seller/dashboardSeller', $data);
    }
    
    public function editSeller()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Edit Profile  | MyDanus",
        ];
        echo view('mydanus/seller/editSeller', $data);
    }
    
    public function profileSeller()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Profile (penjual)  | MyDanus", //menyesuaikan nama ukm/himada
            'profile' => "active",
            'profileSeller' => "activeside"
        ];
        echo view('mydanus/seller/profileSeller', $data);
    }

    public function addProduct()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Tambah Produk  | MyDanus",
            'addProduct' => "activeside"
        ];
        echo view('mydanus/seller/addProduct', $data);
    }
    
    public function manageProduct()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Kelola Produk  | MyDanus",
            'manageProduct' => "activeside"
        ];
        echo view('mydanus/seller/manageProduct', $data);
    }
    
    public function editProduct()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Edit Produk  | MyDanus",
            'manageProduct' => "activeside"
        ];
        echo view('mydanus/seller/editProduct', $data);
    }
    
    public function orderSeller()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Daftar Pesanan  | MyDanus",
            'orderSeller' => "activeside"
        ];
        echo view('mydanus/seller/orderSeller', $data);
    }

    public function complaintSeller()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Ajukan Keluhan  | MyDanus",
            'complaintSeller' => "activeside"
        ];
        echo view('mydanus/seller/complaintSeller', $data);
    }

    //  Admin section 
    public function dashboardAdmin()
    {
        if(!session()->has("login")) return redirect()->to(base_url('/'));
        $data = [
            'title' => " Dashboard Admin  | MyDanus",

        ];
        echo view('mydanus/admin/dashboardAdmin', $data);
    }
}