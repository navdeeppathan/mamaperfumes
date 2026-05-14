<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            $image = null;

            if (!empty($row['image'])) {

                $image = trim($row['image']);

                /*
                If full Google Drive URL pasted
                */
                if (str_contains($image, 'drive.google.com')) {

                    preg_match('/\/d\/(.*?)\//', $image, $matches);

                    $fileId = $matches[1] ?? null;

                    if ($fileId) {

                        $image = "https://drive.google.com/uc?id=".$fileId;
                    }
                }

                /*
                If only Google Drive file ID pasted
                */
                else {

                    $image = "https://drive.google.com/uc?id=".$image;
                }
            }

            Product::create([

                'title' => $row['title'],

                'description' => $row['description'],

                'price' => $row['price'],

                'category_id' => $row['category_id'],

                'sku_code' => $row['sku_code'],

                'moq' => $row['moq'],

                'product_type' => $row['product_type'],

                'brand' => $row['brand'],

                'min_stock' => $row['min_stock'],

                'image' => $image,
            ]);
        }
    }
}