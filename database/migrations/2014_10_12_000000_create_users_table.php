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
            $table->string('profile_img');
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

            $table->string('first_gurdian_img')->default('None');
            $table->json('gurdian_name')->default('None');
            $table->string('first_gurdian_relationship')->default('None');
            $table->json('gurdian_email')->default('None');
            $table->json('gurdian_phone')->default('None');
            $table->json('_gurdian_address')->default('None');

            $table->string('second_gurdian_img')->default('None');
            $table->string('second_gurdian_relationship')->default('None');
          

            $table->string('current_medical_treatment')->default('None');
            $table->string('doctor_name')->default('None');
            $table->string('doctor_phone')->default('None');
            
            $table->string('nature_of_treatment')->default('None');
            $table->string('is_allergic')->default('None');
            $table->string('anaphylactic_reaction')->default('None');
            $table->string('epi_pens')->default('None');

            $table->string('physical_condition')->default('None');
            $table->string('specify_physical_condition')->default('None');


            $table->string('health_insurance_name')->default('None');
            $table->string('health_insurance_phone')->default('None');
            $table->string('health_insurance_address')->default('None');

            $table->string('medical_record')->default('None');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->string('profileImg');
            
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
