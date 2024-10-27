<?php

namespace App\Imports;

use App\Models\StudentDetail;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new StudentDetail([
            'image_path' => $row['image_path'],  // Column 2
            'batch' => $row['batch'],  // Column 3
            'enrolment_no' => $row['enrolment_no'],  // Column 4
            'date_of_admission' => $this->parseDate($row['date_of_admission']),  // Column 5
            'register_no' => $row['register_no'],  // Column 6
            'student_name' => $row['student_name'],  // Column 7
            'dte_reg_no' => $row['dte_reg_no'],  // Column 8
            'gender' => $row['gender'],  // Column 9
            'application_no' => $row['application_no'],  // Column 10
            'date_of_birth' => $this->parseDate($row['date_of_birth']),  // Column 11
            'admission_no' => $row['admission_no'],  // Column 12
            'age' => $row['age'],  // Column 13
            'father_name' => $row['father_name'],  // Column 14
            'community' => $row['community'],  // Column 15
            'mother_name' => $row['mother_name'],  // Column 16
            'guardian_name' => $row['guardian_name'],  // Column 17
            'religion' => $row['religion'],  // Column 18
            'nationality' => $row['nationality'],  // Column 19
            'occupation' => $row['occupation'],  // Column 20
            'mother_tongue' => $row['mother_tongue'],  // Column 21
            'place_of_work' => $row['place_of_work'],  // Column 22
            'blood_group' => $row['blood_group'],  // Column 23
            'designation' => $row['designation'],  // Column 24
            'student_id' => $row['student_id'],  // Column 25
            'parent_income' => $row['parent_income'],  // Column 26
            'aadhar_no' => $row['aadhar_no'],  // Column 27
            'branch_code' => $row['branch_code'],  // Column 28
            'year' => $row['year'],  // Column 29
            'degree_level' => $row['degree_level'],  // Column 30
            'semester' => $row['semester'],  // Column 31
            'course_code' => $row['course_code'],  // Column 32
            'year_of_admission' => $row['year_of_admission'],  // Column 33
            'course_name' => $row['course_name'],  // Column 34
            'year_of_completion' => $row['year_of_completion'],  // Column 35
            'branch_name' => $row['branch_name'],  // Column 36
            'section' => $row['section'],  // Column 37
            'department' => $row['department'],  // Column 38
            'student_category' => $row['student_category'],  // Column 39
            'branch_type' => $row['branch_type'],  // Column 40
            'seat_category' => $row['seat_category'],  // Column 41
            'regulation' => $row['regulation'],  // Column 42
            'quota' => $row['quota' ],  // Column 43
            'university' => $row['university'],  // Column 44
            'student_status' => $row['student_status'],  // Column 45
            'dte_register_no' => $row['dte_register_no'],  // Column 46
            'dte_payment_receipt_no' => $row['dte_payment_receipt_no'],  // Column 47
            'dte_admission_no' => $row['dte_admission_no'],  // Column 48
            'dte_receipt_date' => $row['dte_receipt_date'],  // Column 49
            'dte_general_rank' => $row['dte_general_rank'],  // Column 50
            'dte_receipt_amount' => $row['dte_receipt_amount'],  // Column 51
            'dte_community_rank' => $row['dte_community_rank'],  // Column 52
            'dte_name_of_the_bank_dd' => $row['dte_name_of_the_bank_dd'],  // Column 53
            'entrance_marks_min' => $row['entrance_marks_min'],  // Column 54
            'admission_discount_name1' => $row['admission_discount_name1'],  // Column 55
            'entrance_marks_max' => $row['entrance_marks_max'],  // Column 56
            'admission_discount_amount' => $row['admission_discount_amount'], // Column 57
            'entrance_register_no' => $row['entrance_register_no'],
            'admission_discount_name2' => $row['admission_discount_name2'],
            'admission_discount_amount2' => $row['admission_discount_amount2'],
            'nominee_name' => $row['nominee_name'],
            'nominee_relationship' => $row['nominee_relationship'],
            'nominee_age' => $row['nominee_age'],
            'permanent_address' => $row['permanent_address'],
            'present_address' => $row['present_address'],
            'parent_mobile_no' => $row['parent_mobile_no'],
            'location_of_the_residence' => $row['location_of_the_residence'],
            'student_mobile_no' => $row['student_mobile_no'],
            'student_email_id' => $row['student_email_id'],
            'official_email_id' => $row['official_email_id'],
            'parent_email_id' => $row['parent_email_id'],
            'general_notes1' => $row['general_notes1'],
            'general_notes2' => $row['general_notes2'],
            'general_notes3' => $row['general_notes3'],
            'general_notes4' => $row['general_notes4'],
            'hosteller_or_dayscholar' => $row['hosteller_or_dayscholar'],
            'hostel_room_capacity' => $row['hostel_room_capacity'],
            'hostel_name' => $row['hostel_name'],
            'hostel_floor_no' => $row['hostel_floor_no'],
            'hostel_room_type' => $row['hostel_room_type'],
            'hostel_room_no' => $row['hostel_room_no'],
            'warden_name' => $row['warden_name'],
            'warden_alter' => $row['warden_alter'],
            'h_discontinued_date' => $this->parseDate($row['h_discontinued_date']),
            'h_note' => $row['h_note'],
            'class_advisor' => $row['class_advisor'],
            'school_reg_no1' => $row['school_reg_no1'],
            'school_certificate_no1' => $row['school_certificate_no1'],
            'school_total_marks1' => $row['school_total_marks1'],
            'school_reg_no2' => $row['school_reg_no2'],
            'school_certificate_no2' => $row['school_certificate_no2'],
            'school_total_marks2' => $row['school_total_marks2'],
            'school_reg_no3' => $row['school_reg_no3'],
            'school_certificate_no3' => $row['school_certificate_no3'],
            'school_total_marks3' => $row['school_total_marks3'],
            'school_reg_no4' => $row['school_reg_no4'],
            'school_certificate_no4' => $row['school_certificate_no4'],
            'school_total_marks4' => $row['school_total_marks4'],
            'school_name' => $row['school_name'],
            'school_tc_name' => $row['school_tc_name'],
            'school_tc_no' => $row['school_tc_no'],
            'school_tc_date' => $this->parseDate($row['school_tc_date']),
            'cut_off' => $row['cut_off'],
            'school_tc_class' => $row['school_tc_class'],
            'marks_note1' => $row['marks_note1'],
            'board_of_school' => $row['board_of_school'],
            'marks_note2' => $row['marks_note2'],
            'tc_last_class_date' => $row['tc_last_class_date'],
            'final_total_marks_min' => $row['final_total_marks_min'],
            'tc_promotion' => $row['tc_promotion'],
            'final_total_marks_max' => $row['final_total_marks_max'],
            'tc_reason_for_leaving' => $row['tc_reason_for_leaving'],
            'final_total_marks' => $row['final_total_marks'],
            'tc_conduct_and_character' => $row['tc_conduct_and_character'],
            'final_classification' => $row['final_classification'],
            'tc_no' => $row['tc_no'],
            'final_year_of_pass' => $row['final_year_of_pass'],
            'tc_date' => $this->parseDate($row['tc_date']),
            'university_rank' => $row['university_rank'],
            'duplicate_tc_issued' => $row['duplicate_tc_issued'],
            'university_rank1' => $row['university_rank1'],
            'duplicate_tc_description' => $row['duplicate_tc_description'],
            'scopus_link' => $row['scopus_link'],
            'google_scholor_link' => $row['google_scholor_link'],
            'gmail_h_index' => $row['gmail_h_index'],
            'scopus_h_index_safe' => $row['scopus_h_index_safe'],
            'scopus_id' => $row['scopus_id'],
            'scopus_hindex_from_scopus' => $row['scopus_hindex_from_scopus'],
            'research_gate_profile_link' => $row['research_gate_profile_link'],
            'orcid_profile_link' => $row['orcid_profile_link'],
            '14_point_score' => $row['14_point_score'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    // A helper method to safely parse dates
    private function parseDate($date)
    {
        try {
            return Carbon::parse($date);  // Attempt to parse the date
        } catch (\Exception $e) {
            return null;  // Return null if parsing fails
        }
    }
}