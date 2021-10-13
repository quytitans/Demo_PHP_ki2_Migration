<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\product;
use Illuminate\Http\Request;

class factoryController extends Controller
{
    public function addUser(){
        $newCustomer = new customer();
        $newCustomer->name = 'Nguyen Van Quy2';
        $newCustomer->address = '136 ho tung mau';
        $newCustomer->save();
        echo 'add complete';
    }
    public function addProduct(){

        $newProduct = new product();
    }
    public function addOrder(){

        echo 'add complete';
    }
}
