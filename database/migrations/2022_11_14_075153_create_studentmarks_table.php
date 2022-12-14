<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;
use App\Models\Mark;
use App\Models\Subject;
use App\Models\session;
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
            $table->foreignIdFor(Subject::class);
             $table->foreignIdFor(Student::class);
             $table->foreignIdFor(Mark::class);
             $table->foreignIdFor(session::class);
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
