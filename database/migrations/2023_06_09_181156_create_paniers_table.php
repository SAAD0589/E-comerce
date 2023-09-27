<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Produit');

            $table->foreign("id_Produit")->
            references("id_Product")->on('produits');

            $table->unsignedBigInteger('id_user');

            $table->foreign("id_user")->
            references("id")->on('users'); 

            $table->integer("quantité");  
            $table->float("TotalPrix"); 
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paniers');
    }
};
