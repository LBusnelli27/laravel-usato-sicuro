<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("numero_telaio", 20)->unique();
            $table->string("model", 20); 
            $table->tinyInteger("porte"); 
            $table->date("data_immatricolazione");
            $table->string("marca",20);
            $table->boolean("is_new")->default(true);
            $table->string("alimentazione");
            $table->float("prezzo", 8,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
