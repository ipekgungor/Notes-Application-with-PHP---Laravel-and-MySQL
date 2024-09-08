<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void {
        Schema::create('note', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->timestaps(); // this line add created_ad and updated_at automatically.
        });
    }

    public function down():void {
        Schema::dropIfExists('note');
    }
};