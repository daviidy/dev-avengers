<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->nullable();
            $table->string('traditional_first_name')->nullable();
            $table->string('other_name')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('birth_state')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('town')->nullable();
            $table->string('living_country')->nullable();
            $table->string('living_city')->nullable();
            $table->string('living_state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('children_number')->nullable();
            $table->string('mobile_tel')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_traditional_first_name')->nullable();
            $table->string('father_other_name')->nullable();
            $table->string('father_birth_country')->nullable();
            $table->string('father_birth_state')->nullable();
            $table->string('father_birth_city')->nullable();
            $table->string('father_town')->nullable();
            $table->string('father_children_number')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_traditional_first_name')->nullable();
            $table->string('mother_other_name')->nullable();
            $table->string('mother_birth_country')->nullable();
            $table->string('mother_birth_state')->nullable();
            $table->string('mother_birth_city')->nullable();
            $table->string('mother_town')->nullable();
            $table->string('mother_children_number')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name')->;
            $table->dropColumn('traditional_first_name');
            $table->dropColumn('other_name');
            $table->dropColumn('birth_country');
            $table->dropColumn('birth_state');
            $table->dropColumn('birth_city');
            $table->dropColumn('town');
            $table->dropColumn('living_country');
            $table->dropColumn('living_city');
            $table->dropColumn('living_state');
            $table->dropColumn('zip_code');
            $table->dropColumn('marital_status');
            $table->dropColumn('children_number');
            $table->dropColumn('mobile_tel');
            $table->dropColumn('father_last_name');
            $table->dropColumn('father_traditional_first_name');
            $table->dropColumn('father_other_name');
            $table->dropColumn('father_birth_country');
            $table->dropColumn('father_birth_state');
            $table->dropColumn('father_birth_city');
            $table->dropColumn('father_town');
            $table->dropColumn('father_children_number');
            $table->dropColumn('mother_last_name');
            $table->dropColumn('mother_traditional_first_name');
            $table->dropColumn('mother_other_name');
            $table->dropColumn('mother_birth_country');
            $table->dropColumn('mother_birth_state');
            $table->dropColumn('mother_birth_city');
            $table->dropColumn('mother_town');
            $table->dropColumn('mother_children_number');
        });
    }
}
