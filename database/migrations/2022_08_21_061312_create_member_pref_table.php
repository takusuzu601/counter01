<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberPrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_pref', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('pref_id');
            //$table->primary(['member_id', 'pref_id']);
            $table->integer('count')->default(0);

            //外部キー制約
            // $table->foreign('member_id')
            //     ->references('id')
            //     ->on('members')
            //     ->onDelete('cascade');
            // $table->foreign('pref_id')
            //     ->references('id')
            //     ->on('prefs')
            //     ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_pref');
    }
}
