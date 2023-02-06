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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('gender');
            $table->string('country');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('postal');
            $table->string('languages')->nullable();
            $table->string('law_firm_name');
            $table->string('law_firm_reg_no');
            $table->text('story');
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
        Schema::dropIfExists('lawyers');
    }
};
