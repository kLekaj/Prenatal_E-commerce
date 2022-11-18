<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sizes', function (Blueprint $table) {
            $table->bigInteger  ('id',true);
            $table->bigInteger  ('stock')->nullable();
            $table->string      ('availability', 50);
            $table->string      ('taglia', 500)->nullable();
            $table->bigInteger  ('parent_id');
        });


        Schema::table('item_sizes', function (Blueprint $table)
        {
            $table->foreign('parent_id')->references('id')->on('items')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_sizes');
    }
};
