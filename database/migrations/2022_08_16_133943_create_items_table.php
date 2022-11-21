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
        Schema::create('items', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('mpn', 50)->nullable();
            $table->double('price')->nullable();
            $table->double('sale_price')->nullable();
            $table->double('vip_price')->nullable();
            $table->bigInteger('stock')->nullable();
            $table->string('availability', 50);
            $table->string('taglia', 500)->nullable();
            $table->string('title', 1000);
            $table->string('slug', 1000);
            $table->text('description')->nullable();
            $table->string('link',1000);
            $table->string('image_link',1000)->nullable();
            $table->text('product_type')->nullable();
            $table->string('eta',100)->nullable();
            $table->string('marche',100)->nullable();
            $table->string('genere',100)->nullable();
            $table->string('personaggi',100)->nullable();
            $table->string('colore',100)->nullable();
            $table->boolean('hasSizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
