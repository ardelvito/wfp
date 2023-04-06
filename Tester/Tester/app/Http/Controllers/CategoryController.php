<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan product serta kategori
        $categories =
            DB::table('categories')
            ->get();

        //eloquent all product
        $categories_test = Category::all();

        return view('dashboard.categories.index', [
            'categories' => $categories,
            'categories_test' => $categories_test
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showProducts($namaKategori){

        $totalProducts = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('categories.id', 'categories.nama_kategori', DB::raw('COUNT(products.id) as total_products'))
        ->groupBy('categories.id', 'categories.nama_kategori')
        ->having('categories.nama_kategori', '=', $namaKategori)->get();

        //conflict id in products and categories
        // $products = DB::table('products')
        // ->join('categories', 'products.category_id', '=', 'categories.id')
        // ->where('categories.nama_kategori', '=', $namaKategori)->get();

        $products = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.id as product_id','products.nama_produk', 'products.created_at', 'products.updated_at', 'products.image', 'products.harga_jual' , 'categories.nama_kategori')
        ->where('categories.nama_kategori', '=', $namaKategori)
        ->get();

        return view('dashboard.categories.productsbycategory', [
            'totals' => $totalProducts,
            'products' => $products
        ]);
    }
}
