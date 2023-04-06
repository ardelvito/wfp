<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'test index';
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

    public function lowestStock()
    {
        // $suppliers = DB::table("suppliers")
        // ->join("products", "products.supplier_id", "=", "products.id")
        // ->select("suppliers.name AS 'Nama Suppliers', SUM(products.jumlah_stok) AS 'Stok Barang'")
        // ->groupBy("suppliers.name")->orderBy('Stok Barang')->limit(3)->get();

        $suppliers = DB::table('suppliers')
        ->join('products', 'suppliers.id', '=', 'products.supplier_id')
        ->select(DB::raw("suppliers.name AS 'nama_suppliers', SUM(products.jumlah_stok) AS 'stok_barang'"))
        ->groupBy('suppliers.name')
        ->orderBy('stok_barang', 'ASC')
        ->limit(3)
        ->get();

        return view('dashboard.suppliers.index', compact('suppliers'));

        // return "lowest stock function already called";
    }
}
