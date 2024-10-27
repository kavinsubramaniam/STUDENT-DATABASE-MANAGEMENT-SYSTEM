<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentDetails', function (Blueprint $table) {
            $table->id();
            // Personal Details
            $table->string('image_path')->nullable();
            $table->integer('batch')->nullable();
            $table->string('enrolment_no', 20)->nullable();
            $table->date('date_of_admission')->nullable();
            $table->string('register_no', 20)->nullable();
            $table->string('student_name', 20)->nullable();
            $table->string('dte_reg_no', 20)->nullable();
            $table->string('gender', 10)->nullable();
            $table->integer('application_no')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('admission_no')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('father_name', 20)->nullable();
            $table->string('community', 20)->nullable();
            $table->string('mother_name', 20)->nullable();
            $table->string('guardian_name', 20)->nullable();
            $table->string('religion', 20)->nullable();
            $table->string('nationality', 20)->nullable();
            $table->string('occupation', 20)->nullable();
            $table->string('mother_tongue', 20)->nullable();
            $table->string('place_of_work')->nullable();
            $table->string('blood_group', 10)->nullable();
            $table->string('designation', 20)->nullable();
            $table->integer('student_id')->nullable();
            $table->decimal('parent_income', 10, 2)->nullable();
            $table->string('aadhar_no', 12)->nullable();

            // Academic Details
            $table->string('branch_code', 5)->nullable();
            $table->integer('year')->nullable();
            $table->string('degree_level', 5)->nullable();
            $table->string('semester')->nullable();
            $table->string('course_code', 10)->nullable();
            $table->smallInteger('year_of_admission')->nullable();
            $table->string('course_name', 50)->nullable();
            $table->smallInteger('year_of_completion')->nullable();
            $table->string('branch_name', 50)->nullable();
            $table->string('section', 5)->nullable();
            $table->string('department', 50)->nullable();
            $table->string('student_category', 10)->nullable();
            $table->string('branch_type', 10)->nullable();
            $table->string('seat_category', 20)->nullable();
            $table->smallInteger('regulation')->nullable();
            $table->string('quota', 20)->nullable();
            $table->string('university')->nullable();
            $table->string('student_status', 20)->nullable();

            // Admission Payment Details
            $table->integer('dte_register_no')->nullable();
            $table->string('dte_payment_receipt_no')->nullable();
            $table->string('dte_admission_no')->nullable();
            $table->string('dte_receipt_date')->nullable();
            $table->integer('dte_general_rank')->nullable();
            $table->decimal('dte_receipt_amount', 10, 2)->nullable();
            $table->integer('dte_community_rank')->nullable();
            $table->string('dte_name_of_the_bank_dd')->nullable();
            $table->string('entrance_marks_min')->nullable();
            $table->string('admission_discount_name1')->nullable();
            $table->string('entrance_marks_max')->nullable();
            $table->decimal('admission_discount_amount', 10, 2)->nullable();
            $table->string('entrance_register_no')->nullable();
            $table->string('admission_discount_name2')->nullable();
            $table->decimal('admission_discount_amount2', 10, 2)->nullable();

            // Insurance Details
            $table->string('nominee_name')->nullable();
            $table->string('nominee_relationship')->nullable();
            $table->tinyInteger('nominee_age')->nullable();

            // Address for Communication
            $table->string('permanent_address')->nullable();
            $table->string('present_address')->nullable();
            $table->bigInteger('parent_mobile_no')->nullable();
            $table->string('location_of_the_residence')->nullable();
            $table->bigInteger('student_mobile_no')->nullable();
            $table->string('student_email_id')->nullable();
            $table->string('official_email_id')->nullable();
            $table->string('parent_email_id')->nullable();
            $table->text('general_notes1')->nullable();
            $table->text('general_notes2')->nullable();
            $table->text('general_notes3')->nullable();
            $table->text('general_notes4')->nullable();

            
            // Class Advisor / Hostel Details
            $table->string('hosteller_or_dayscholar')->nullable();
            $table->tinyInteger('hostel_room_capacity')->nullable();
            $table->string('hostel_name')->nullable();
            $table->tinyInteger('hostel_floor_no')->nullable();
            $table->string('hostel_room_type')->nullable();
            $table->smallInteger('hostel_room_no')->nullable();
            $table->string('warden_name')->nullable();
            $table->string('warden_alter')->nullable();
            $table->date('h_discontinued_date')->nullable();
            $table->string('h_note')->nullable();
            $table->string('class_advisor')->nullable();
            
            // School Certificate Details
            $table->string('school_reg_no1')->nullable();
            $table->string('school_certificate_no1')->nullable();
            $table->decimal('school_total_marks1', 10, 2)->nullable();
            $table->string('school_reg_no2')->nullable();
            $table->string('school_certificate_no2')->nullable();
            $table->decimal('school_total_marks2', 10, 2)->nullable();
            $table->string('school_reg_no3')->nullable();
            $table->string('school_certificate_no3')->nullable();
            $table->decimal('school_total_marks3', 10, 2)->nullable();
            $table->string('school_reg_no4')->nullable();
            $table->string('school_certificate_no4')->nullable();
            $table->decimal('school_total_marks4', 10, 2)->nullable();
            
            // School TC Details
            $table->string('school_name')->nullable();
            $table->string('school_tc_name')->nullable();
            $table->smallInteger('school_tc_no')->nullable();
            $table->date('school_tc_date')->nullable();
            $table->decimal('cut_off', 10, 2)->nullable();
            $table->string('school_tc_class')->nullable();
            $table->text('marks_note1')->nullable();
            $table->string('board_of_school')->nullable();
            $table->text('marks_note2')->nullable();
           
            // BIT Academic Details
            $table->string('tc_last_class_date')->nullable();
            $table->decimal('final_total_marks_min', 10, 2)->nullable();
            $table->string('tc_promotion')->nullable();
            $table->decimal('final_total_marks_max', 10, 2)->nullable();
            $table->string('tc_reason_for_leaving')->nullable();
            $table->decimal('final_total_marks', 10, 2)->nullable();
            $table->string('tc_conduct_and_character')->nullable();
            $table->decimal('final_classification', 10, 2)->nullable();
            $table->string('tc_no')->nullable();
            $table->decimal('final_year_of_pass', 10, 2)->nullable();
            $table->date('tc_date')->nullable();
            $table->decimal('university_rank', 10, 2)->nullable();
            $table->string('duplicate_tc_issued')->nullable();
            $table->decimal('university_rank1', 10, 2)->nullable();
            $table->string('duplicate_tc_description')->nullable();
            
            
            // Additional Information
            $table->text('scopus_link')->nullable();
            $table->text('google_scholor_link')->nullable();
            $table->text('gmail_h_index')->nullable();
            $table->text('scopus_h_index_safe')->nullable();
            $table->text('scopus_id')->nullable();
            $table->text('scopus_hindex_from_scopus')->nullable();
            $table->text('research_gate_profile_link')->nullable();
            $table->text('orcid_profile_link')->nullable();
            $table->text('14_point_score')->nullable();
           
            $table->timestamps(); // Created_at & Updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentDetails');
    }
}
