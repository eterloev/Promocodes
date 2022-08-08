<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promocode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $promocodes = DB::table('promocodes')
            ->join('products', 'products.id', '=', 'promocodes.product_id')
        -> select('promocodes.*', 'products.name as product')->get();
        return view('welcome', [
            "promocodes" => $promocodes
        ]);
    }
}
