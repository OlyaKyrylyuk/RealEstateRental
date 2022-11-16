<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('address_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->string('type');
            $table->string('number_of_rooms');
            $table->string('ground');
            $table->boolean('pay_for_communals');
            $table->string('communals_price');
            $table->text('description')->nullable();

            $table->text('area');
            $table->boolean('is_busy');

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
        Schema::dropIfExists('estates');
    }
}
