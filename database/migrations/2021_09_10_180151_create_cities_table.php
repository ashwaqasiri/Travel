<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->uuid('blog_id')->nullable();
            // $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
            $table->string('name');
            $table->string('region')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('cities', function (Blueprint $table) {
        //     $table->dropForeign(['blog_id']);
        //     $table->dropColumn('blog_id');
        // });
        Schema::dropIfExists('cities');
    }
}
