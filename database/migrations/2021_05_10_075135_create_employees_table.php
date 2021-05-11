<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onUpdate('cascade');
            $table->foreignId('unit_id')->nullable()->constrained('units')->onUpdate('cascade');
            $table->foreignId('leader_id')->nullable()->constrained('leaders')->onUpdate('cascade');
            $table->foreignId('organization_id')->nullable()->constrained('organizations')->onUpdate('cascade');
            $table->string('nip', 100)->nullable();
            $table->string('name', 150);
            $table->string('job', 200);
            $table->text('contact');
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
        Schema::dropIfExists('employees');
    }
}
