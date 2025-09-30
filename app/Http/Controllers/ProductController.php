<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('manage.user.edit-user');
    }

    public function showBarang($id){
        return view('barang',[
            'isi_data'=> $id
        ]);
    }
    
}
