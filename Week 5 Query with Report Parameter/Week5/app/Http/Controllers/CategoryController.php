<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function show($namaKategori)
    {
        // $products = Product::find($id);

        $products = DB::table('products')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.id as product_id', 'products.nama_produk', 'products.created_at', 'products.updated_at', 'products.image', 'products.harga_jual', 'categories.nama_kategori')
        ->where('categories.nama_kategori', '=', $namaKategori)
        ->get();

        return view('dashboard.products.index', compact('products'));
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

    public function avgPrice()
    {
        $avgPrices = DB::table('products')
        ->join("categories", "products.category_id", "=", "categories.id")
        ->select(DB::raw("categories.nama_kategori, AVG(products.harga_jual) AS 'avg_jual', COUNT(products.nama_produk) AS 'total_product'"))
        ->groupBy("categories.nama_kategori")
        ->orderBy("avg_jual", "DESC")
        ->get();

        return view('dashboard.avgprice.index', compact('avgPrices'));
    }

    public function eachAvgPrice($kategori)
    {

        // $avgPrices = DB::table('products')
        // ->join("categories", "products.category_id", "=", "categories.id")
        // ->select(DB::raw("categories.nama_kategori, AVG(products.harga_jual) AS 'avg_jual', COUNT(products.nama_produk) AS 'total_product'"))
        // ->groupBy("categories.nama_kategori")
        // ->where("categories.nama_kategori", "=", $kategori)
        // ->get();

        // return view('dashboard.avgprice.index', compact('avgPrices'));

        if($kategori == "all"){
            $avgPrices = DB::table('products')
                ->join("categories", "products.category_id", "=", "categories.id")
                ->select(DB::raw("categories.nama_kategori, AVG(products.harga_jual) AS 'avg_jual', COUNT(products.nama_produk) AS 'total_product'"))
                ->groupBy("categories.nama_kategori")
                ->orderBy("avg_jual", "DESC")
                ->get();

        }
        else{
            $avgPrices = DB::table('products')
            ->join("categories", "products.category_id", "=", "categories.id")
            ->select(DB::raw("categories.nama_kategori, AVG(products.harga_jual) AS 'avg_jual', COUNT(products.nama_produk) AS 'total_product'"))
            ->groupBy("categories.nama_kategori")
            ->where("categories.nama_kategori", "=", $kategori)
            ->get();
        }

        return view('dashboard.avgprice.index', compact('avgPrices'));
    }
}
