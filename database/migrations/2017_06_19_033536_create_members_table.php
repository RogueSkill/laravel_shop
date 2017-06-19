<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->comment('用户名');
            $table->string('pass')->comment('密码');
            $table->string('pname')->comment('昵称');
            $table->string('name')->comment('真实姓名');
            $table->tinyInteger('sex')->comment('性别:男1女0');
            $table->string('address')->comment('地址');
            $table->string('code')->comment('邮编');
            $table->string('phone')->comment('手机');
            $table->string('pic')->comment('头像');
            $table->string('email')->comment('邮箱');
            $table->tinyInteger('state')->comment('状态');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
