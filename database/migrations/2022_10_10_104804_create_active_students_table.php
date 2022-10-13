<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Class_model;
use App\Models\Student;
use App\Models\Session;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Student::class);
             $table->foreignIdFor(Class_model::class);
              $table->foreignIdFor(Session::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_students');
    }
};
