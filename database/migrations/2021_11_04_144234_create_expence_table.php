<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expence', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->tinyInteger('category');
            $table->decimal('quantity', 3, 2);
            $table->decimal('sum', 7, 2);
            $table->dateTime('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expence');
    }
}
