<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class ProductsDemoExport implements FromArray
{
    public function array(): array
    {
        return [

            [
                'title',
                'description',
                'price',
                'category_id',
                'sku_code',
                'moq',
                'product_type',
                'brand',
                'min_stock',
                'image'
            ],

            [
                'Dell Laptop',
                'Dell Inspiron i5',
                '45000',
                '1',
                'LAP001',
                '2',
                'Electronics',
                'Dell',
                '5',
                '1abcXYZgoogleDriveFileId'
            ],

            [
                'Office Chair',
                'Ergonomic Chair',
                '5500',
                '2',
                'CHR001',
                '1',
                'Furniture',
                'Nilkamal',
                '3',
                '1xyzABCgoogleDriveFileId'
            ]
        ];
    }
}