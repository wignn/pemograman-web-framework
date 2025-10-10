<?php

namespace App\Http\Controllers;

use App\Models\Products;
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

    public function create() {
        return view('master-data.product-master.create-product');
    }

    public function store(Request $request) {
        $validasi_data = $request -> validate([
            'product_name' => 'required | string | max:256',
            'unit' => 'required | string | max:50',
            'type' => 'required | string | max:50',
            'information' => 'nullable | string',
            'qty'=> 'required | integer',
            'producer'=> 'required | string | max:255'
        ]);

        Products::create($validasi_data);
        return redirect()->back()->with('success', 'product created successfully');
    }
}
