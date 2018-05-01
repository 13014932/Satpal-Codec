<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_name');
            $table->string('permanent_token');
            $table->string('database_name');
            $table->boolean('is_active')->default(1);
            $table->boolean('payment_status');
            $table->string('new_hooks')->default(null);
            $table->string('version')->default(0.2);
            $table->string('cancel_rac')->default(0);
            $table->string('queue_command')->default('none');
            $table->boolean('is_transfer')->default(0);

            $table->dateTime('db_deleted_at')->nullable();
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
        Schema::dropIfExists('shop_users');
    }
}
