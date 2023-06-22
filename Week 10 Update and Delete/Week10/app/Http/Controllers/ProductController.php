<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan product serta kategori
        $products =
        DB::table('products as p')
        ->join('categories as c', 'p.category_id', '=', 'c.id')
        ->get();

        //eloquent all product
        $products_test = Product::all();

        //coba di kelas
        //product dengan harga < 20000
        $productss = Product::where('harga_jual', '<', 20000)
                    ->limit(5)
                    ->get();

        return view('dashboard.products.index',[
            'products' => $productss,
            'products_test' => $products_test
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = DB::table('Suppliers')->get();
        return view('products.formcreate', [
            'categories' => $categories,
            'suppliers' => $suppliers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->nama_produk = $request->get("namaproduk");
        $data->jumlah_stok = $request->get("jumlahstok");
        $data->harga_jual = $request->get("hargajual");
        $data->produk_ditambahkan = now();
        $data->produk_diubah = now();
        $data->category_id = $request->get("category_id");
        $data->harga_produksi = $request->get("hargaproduksi");
        $data->image = $request->get("image_id");
        $data->supplier_id = $request->get("supplier_id");
        $data->save();

        return redirect()->route('products.create')->with('msg', 'Produk baru berhasil ditambahkan!');
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
    public function showInfo()
    {
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
                Did you know? <br>This message is sent by a Controller.'</div>"
        ), 200);
    }

}
