<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('logo');
            $table->string('job_type');
            $table->string('title');
            $table->string('name');
            $table->string('registration_time');
            $table->string('loc');
            $table->string('method');
            $table->string('company_type')->nullable();
            $table->string('education')->nullable();
            $table->string('major')->nullable();
            $table->text('criteria')->nullable();
            $table->text('description')->nullable();
            $table->text('apply');
            $table->text('cp')->nullable();
            $table->string('legal_name');
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('employees')->nullable();
            $table->text('profile')->nullable();
            $table->text('source');
            $table->string('flyer')->nullable();
            $table->foreignId('user_id');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
