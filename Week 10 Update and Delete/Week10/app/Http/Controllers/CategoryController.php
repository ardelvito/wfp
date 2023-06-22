<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::whereNull('deleted_at')->get();
            // DB::table('categories')
            // ->get();

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
        //Menampilkan form isi data
        return view('category.formcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menyimpan ke DB
        // dd($request);
        $data = new Category();
        $data->nama_kategori = $request->get("namakategori");
        $data->description = $request->get("deskripsi");
        $data->save();

        return redirect()->route('categories.index')->with('msg', 'Kategori baru berhasil ditambahkan!');
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
        $data = Category::find($id);
        return view('category.formedit', compact('data'));
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
        $category = Category::find($id);
        $category->nama_kategori = request("namakategori");
        $category->description = request("deskripsi");
        $category->save();
        return redirect()->route('categories.index')->with('msg', 'Kategori berhasil diperbaharui!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        try {
            $category = Category::find($id);
            // Category::destroy($category->id);
            $category->delete();
            $msg = "Data berhasil dihapus";

        } catch (\Throwable $th) {
            $msg = "Data gagal dihapus";
        }

        return redirect()->route('categories.index')->with('msg', $msg);


    }
}
