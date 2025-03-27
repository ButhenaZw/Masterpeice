<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->enum('payment_method', ['credit_card', 'paypal', 'cash']);
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->timestamp('transaction_date')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
