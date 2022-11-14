<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Result;
use App\Models\Mark;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentmarks', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
             $table->foreignIdFor(Result::class);
             $table->foreignIdFor(Mark::class);
             $table->String('score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentmarks');
    }
};
