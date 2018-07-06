<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Excel;
use App\Product;
use App\Exports\DataExport;

use Maatwebsite\Excel\Concerns\FromCollection;

class ProductController extends Controller

{

	public function create()
    {
        return view('product');
    }

     public function exportFile()
        {
         return Excel::download(new DataExport, 'data.xlsx');
        }
}




