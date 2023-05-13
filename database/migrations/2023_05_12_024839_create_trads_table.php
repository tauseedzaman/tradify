<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trads', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->string("trade_type");
            $table->string("open_price");
            $table->string("tp");
            $table->string("sl");
            $table->string("position_amount");
            $table->enum("status",["open","closed","tp_hit","sl_hit","liquidated",'pending']);
            $table->string("market"); //or currency
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trads');
    }
};
