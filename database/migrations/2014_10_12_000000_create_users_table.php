<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('date_of_birth');

            $table->string('courses');

            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('region');
            $table->string('postal_code');
            $table->string('address_detail');

        

            $table->string('facebook')->default('None');
            $table->string('linkedin')->default('None');;
            $table->string('viber')->default('None');;
            $table->string('skype')->default('None');;
            $table->string('personal_website')->default('None');

            $table->string('gurdian_img');
            $table->string('gurdian_name');
            $table->string('relationship');
            $table->string('gurdian_email');
            $table->string('gurdian_phone');
            $table->string('gurdian_address');

            $table->string('current_medical_treatment');
            $table->string('doctor_name');
            
            $table->string('nature_of_treatment');
            $table->string('is_allergic');
            $table->string('anaphylactic_reaction');
            $table->string('epi_pens');

            $table->string('physical_condition');
            $table->string('specify_physical_condition');


            $table->string('health_insurance_name');
            $table->string('health_insurance_phone');
            $table->string('health_insurance_address');

            $table->string('medical_record');
            




            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profileImg');
            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
