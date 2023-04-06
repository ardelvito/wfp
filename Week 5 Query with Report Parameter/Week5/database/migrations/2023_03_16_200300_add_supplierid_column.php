<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSupplieridColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //Buat kolom yang akan menjadi foreign key
            $table->unsignedBigInteger('supplier_id');

            //Set kolom tersebut menjadi foreign key
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //Hilangkan dulu foreign keynya
            $table->dropForeign(['supplier_id']);

            //Hapus kolom
            $table->dropColumn('supplier_id');
        });
    }
}
