<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDawatiClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dawati_claims', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('address');
                $table->string('cp')->comment('contact person');
                $table->string('dclaim');
                $table->integer('active')->comment('0=inactive, 1=active, 2=deleted');
                $table->integer('user_modified');
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
        Schema::dropIfExists('dawati_claims');
    }
}
