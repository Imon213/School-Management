<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Auth\Registration;
use App\Models\Session;
use App\Models\Class_model;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('dob');
             $table->string('gender');
              $table->string('fname');
               $table->string('mname');
                $table->string('roll');
                 $table->string('phone');
                  $table->foreignIdFor(Registration::class);
                  $table->foreignIdFor(Session::class);
                  $table->foreignIdFor(Class_model::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
