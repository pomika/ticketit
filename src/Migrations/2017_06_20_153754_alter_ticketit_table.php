<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTicketitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Modifying ticketit table, adding new boolean field 'unread_user' default false
        Schema::table('ticketit', function(Blueprint $table){
            $table->boolean('unread_user')->default(0);
        });
        //Modifying ticketit table, adding new boolean field 'unread_agent' default false
        Schema::table('ticketit', function(Blueprint $table){
            $table->boolean('unread_agent')->default(1);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticketit', function (Blueprint $table) {
            $table->dropColumn(['unread_agent', 'unread_user']);
        });
    }
}
