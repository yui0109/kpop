<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('posts', function (Blueprint $table){ 
                $table->bigIncrements('id'); 
                $table->string('title', 50); 
                $table->string('body', 200); 
                $table->unsignedBigInteger('idol_id'); 
                $table->foreign('idol_id') 
                      ->references('id')
                      ->on('idols') 
                      ->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
