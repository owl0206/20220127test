<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id()->unsignedBigInteger();
            $table->string('fullname', 255)->nullable(false);
            $table->tinyInteger('gender')->comment('男性:1 女性:2')->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->char('postcode', 8)->nullable(false);
            $table->string('address', 255)->nullable(false);
            $table->string('building_name', 255)->nullable();
            $table->text('opinion')->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
