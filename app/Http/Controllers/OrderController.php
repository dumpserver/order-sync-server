<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class OrderController extends Controller
{


    public function index()
    {
        return Inertia::render('OrderTestPage', ['event' => 'teste']);

    }

    public function setOrder(Request $request)
    {
        /**
         * OrderId:                    int,    # id gerado automaticamente
	     * OrderCode:                  string, # código no formato YYYY-MM-OrderId
	     * OrderDate:                  string, # data do pedido no formato YYYY-MM-DD
	     * TotalAmountWihtoutDiscount: float,  # preço total sem desconto
	     * TotalAmountWithDiscount:    float   # preço total com desconto
         */
        $total_amount_without_discount = $request->unit_price * $request->quantity;

        $total_amount_with_discount = $total_amount_without_discount;

        if(($request->quantity >= 5 && $request->quantity <= 9) && $request->unit_price > 500){
            // 15% from $total_amount.
            $total_amount_with_discount -= ( 15 * $total_amount_without_discount ) / 100;
        }

        return Inertia::render('OrderTestPage', [
            'order_id' => 'mock: int',
            'order_code' => 'mock: String',
            'order_date' => Carbon::now()->format('Y-m-d'),
            'total_amount_without_discount' => $total_amount_without_discount,
            'total_amount_with_discount' => $total_amount_with_discount,
        ]);


   
    }
    
}
