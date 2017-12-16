<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCashierInfoToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string('stripe_id');
            $table->string('card_brand')->nullabe();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table)
        {
            Schema::dropIfExists('users');
        });
    }
}
