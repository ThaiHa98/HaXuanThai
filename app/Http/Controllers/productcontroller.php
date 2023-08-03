<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $x = 1;
        $y = 7;
        $sum = $x + $y;
        $name = 'Thai Dui';
        $game = $sum + $x + $y;
        $phone = [
            'name' => 'iPhone 12 Pro Max',
            'price' => '10000$',
            'isFavorited' => 'true',
        ];

        return view('products.index', compact( 'sum', 'game', 'phone'))->with('name', $name);
    }

    // public function detail($id,$productname)
    // {
    //     return view('products.index', [
    //         'product' => [
    //             'name' => 'iPhone 16',
    //             'price' => '1000$',
    //         ]
    //     ]);
    // }
}
