<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarnsactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarnsactions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('type',1);
            $table->unsignedInteger('items_id');
            $table->unsignedInteger('quantity');
            $table->string('measuring_unit',15);
            $table->text('description');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('tarnsactions');
    }
}
