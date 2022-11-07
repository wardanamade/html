<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('code')->unique();
            $table->string('title');
            $table->text('description');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('subcategory_id')->constrained();
            $table->foreignId('classification_id')->constrained();
            $table->foreignId('status_id')->constrained();
            $table->foreignId('priority_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('deleted_by')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
