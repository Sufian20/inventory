<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            

        'product_name' => $row[0],
        'cat_id' =>$row[1],
        'sup_id' =>$row[2],
        'product_code' =>$row[3],
        'product_route' =>$row[4],
        'product_img' =>$row[5],
        'buy_date' =>$row[6],
        'expire_date' =>$row[7],
        'buying_price' =>$row[8],
        'selling_price' =>$row[9],
        'product_garage' =>$row[10],

        ]);
    }
}
