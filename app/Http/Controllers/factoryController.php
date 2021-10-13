<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class factoryController extends Controller
{
    public function addUser(){
        $newCustomer = new customer();
        $newCustomer->id = 3;
        $newCustomer->name = 'Nguyen Van Quy';
        $newCustomer->address = '136 ho tung mau';
        $newCustomer->save();
        echo 'add complete';
    }
    public function addProduct(){

        echo 'add complete';
    }
    public function addOrder(){

        echo 'add complete';
    }
}
