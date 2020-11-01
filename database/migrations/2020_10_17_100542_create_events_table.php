<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("college");
            $table->string("studentYear");
            $table->string("committee_A");
            $table->string("dateCommittee_A");
            $table->string("timeCommittee_A");
            // $table->string("committee_B");
            // $table->string("dateCommittee_B");
            // $table->string("timeCommittee_B");
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
        Schema::dropIfExists('events');
    }
}
