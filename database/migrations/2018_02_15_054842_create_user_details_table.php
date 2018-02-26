<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('member_type', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->integer('user_status')->default(0)->comment('0=none, 1=active, 2=draft, 3=inactive');
            $table->integer('vendor_status')->default(0)->comment('0=none, 1=active, 2=draft, 3=inactive');
            $table->integer('admin_status')->default(0)->comment('0=none, 1=active, 2=draft, 3=inactive');
            $table->integer('superadmin_status')->default(0)->comment('0=none, 1=active, 2=draft, 3=inactive');
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
        Schema::dropIfExists('user_details');
    }
}
