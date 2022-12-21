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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('prefix_name', 20)->comment('คำนำหน้าชื่อ');
            $table->string('first_name',50)->comment('ชื่อ');
            $table->string('last_name',50)->comment('นามสกุล');
            $table->string('birthdays')->comment('วันเกิด')->nullable();
            $table->string('symbol',20)->comment('สัญลักษณ์');
            $table->text('id_tags',5)->comment('รหัสประจำตัว');
            $table->string('parents1',50)->comment('บิดา')->nullable();
            $table->string('parents2',50)->comment('มารดา')->nullable();
            $table->text('telephone_number_parents1',10)->comment('เบอร์โทรมารดา')->nullable();
            $table->text('telephone_number_parents2',10)->comment('เบอร์โทรบิดา')->nullable();
            $table->text('telephone_number_bus',10)->comment('เบอร์โทรถรับส่ง')->nullable();
            $table->string('habitations')->comment('ที่อยู่')->nullable();
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
        Schema::dropIfExists('students');
    }
};
