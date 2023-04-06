<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home', [
        'title' => 'VSTORE',
        'description' => 'VSTORE is Asias fastest growing marketplace for limited edition outfit and apparel from the worlds most exclusive brands including ...'
    ]);
});

Route::get('/kategori', function () {
    $categories =
    [
        [
            "title" => "Bayi",
            "description" => "Pakaian Bayi"
        ],
        [
            "title" => "Anak",
            "description" => "Pakaian Anak"
        ],
        [
            "title" => "Remaja",
            "description" => "Pakaian Remaja"
        ],
        
    ];

    return view('kategori', [
        'categories' => $categories
    ]);
});

Route::get('/kategori/{jenis}', function ($jenis) {
    $categoryProduct =
        [
            [
                "name" => "Tshirt",
                "description" => "Tshirt untuk "
            ],
            [
                "name" => "Shirt",
                "description" => "Shirt untuk "
            ],
            [
                "name" => "Jaket",
                "description" => "Jaket untuk "
            ],
            [
                "name" => "Flannel",
                "description" => "Flannel"
            ],

        ];

    return view('produk', [
        'jenis' => $jenis,
        'products' => $categoryProduct
    ]);
});


