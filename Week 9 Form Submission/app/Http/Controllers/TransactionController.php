<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Exception;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Transaction::all();
        return view('transaction.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $buyers = Buyer::all();
        $cashiers = User::all();
        return view('transaction.formcreate', 
            [
                'buyers' => $buyers,
                'cashiers' => $cashiers
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Transaction();
        $data->buyer_id = $request->get("buyers_id");
        $data->user_id = $request->get("cashiers_id");
        $data->transaction_date = now();
        $data->save();
        
        $transactionId = $data->id;
        
        return redirect()->route('transactions.productform')
        ->with('msg', 'Transaksi baru berhasil ditambahkan!')
        ->with('transaction_id', $transactionId);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function showAjax(Request $request)
    {
        $id = $request->get('id');
        $data = Transaction::find($id);
        $products = DB::table('transactions')->join('product_transaction', 'product_transaction.transaction_id', '=', 'transactions.id')
        ->join('products', 'product_transaction.product_id', '=', 'products.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->where('transactions.id', '=', $id)
        ->get();
        // $products = $data->products();
        $msg = '';
        try{
            return response()->json(array(
                'msg' => view('transaction.showmodal', compact('data', 'products'))->render()
            ), 200);

            // return response()->json($products);

        }
        catch (Exception $e){
            // Log the exception
            Log::error('Exception occurred: ' . $e->getMessage());

            // Return a response with the error message
            return response()->json([
                'error' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }

    public function showProductForm()
    {
        $products = Product::all();
        return view('transaction.productform',
                [
                    'products'=>$products
                ]
            );
    }

    public function insertProductTransaction(Request $request)
    {
        $productId = $request->get('transaction_id');
        $transactionId = $request->get('transaction_id');
        $quantity = $request->get('quantity');
        $price = $request->get('price');

        DB::table('product_transaction')->insert([
            'product_id' => $productId,
            'transaction_id' => $transactionId,
            'quantity' => $quantity,
            'price' => $price
        ]);

        $buyers = Buyer::all();
        $cashiers = User::all();

        // session(['msg' => 'Produk Berhasil Ditambahkan Ke Transaksi id ' . $productId]);
        // dd(session('msg')); // Check the session value
        session()->flash('message', 'Produk Berhasil Ditambahkan Ke Transaksi id ' . $productId);

        return view('transaction.formcreate',
            [
                'buyers' => $buyers,
                'cashiers' => $cashiers
            ]
            );
    }
}
