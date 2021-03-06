<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SocialCreateUserProvidersTable extends Migration
{
    public function __construct()
    {
        // Get the prefix
        $this->prefix = config('cms.auth.config.table-prefix', 'auth_');
    }

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create($this->prefix.'user_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('username')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('provider');
            $table->string('provider_id');
            $table->string('avatar')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on($this->prefix.'users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table($this->prefix.'user_providers', function (Blueprint $table) {
            $table->dropForeign('user_providers_user_id_foreign');
        });
        Schema::drop($this->prefix.'user_providers');
    }
}
