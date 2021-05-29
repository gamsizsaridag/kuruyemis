<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    function catalog()
    {

//        $ldate = date('Y-m-d-H-i-s');
        $pdf = App::make('dompdf.wrapper');
        $product_data = $this->get_product_data();
        $pdf->setPaper('a4');
        $pdf->loadview('pdf.catalog', compact('product_data'));
        return $pdf->stream();
    }

    function get_product_data()
    {
        $product_data = Product::where('status', '1')->orderBy('categoryId')->with('category')->get();
        return $product_data;
    }
}


