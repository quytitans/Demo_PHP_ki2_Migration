<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\order;
use App\Models\orderDetail;
use App\Models\product;
use Carbon\Carbon;
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
        $newProduct->name = 'xe cut kit';
        $newProduct->price = 2000;
        $rerult = $newProduct->save();
        if ($rerult==true){
            echo "complete";
        }else{
            echo "false";
        }

    }
    public function addOrder(){

        $newOrder = new order();
        $newOrder->customerID = 1;
        $newOrder->createdAt = Carbon::now();
        $rerult = $newOrder->save();
        if ($rerult==true){
            echo "complete";
        }else{
            echo "false";
        }
    }

    public function addOrderDetail(){

        $newOrderDetail = new orderDetail();
        $newOrderDetail->orderID = 1;
        $newOrderDetail->productID = 2;
        $newOrderDetail->quantity = 12;
        $newOrderDetail->amount = 200;
        $rerult = $newOrderDetail->save();
        if ($rerult==true){
            echo "complete";
        }else{
            echo "false";
        }
    }
}
