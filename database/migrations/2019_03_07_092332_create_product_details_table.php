<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigInteger('product_id');
            $table->text('feature');
            $table->string('screen')->nullable();
            $table->string('camera')->nullable();
            $table->string('ram')->nullable();
            $table->string('rom')->nullable();
            $table->string('weight')->nullable();
            $table->string('battery')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
