<?php

namespace App\Exports;

use App\Models\StudentDetail;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if (session()->has('filtered')){
            return session('filtered');
        }
        return StudentDetail::all(); // Fetch all student details
    }

    public function headings(): array
    {
        return [
            'id',
            'image_path',
            'batch',
            'enrolment_no',
            'date_of_admission',
            'register_no',
            'student_name',
            'dte_reg_no',
            'gender',
            'application_no',
            'date_of_birth',
            'admission_no',
            'age',
            'father_name',
            'community',
            'mother_name',
            'guardian_name',
            'religion',
            'nationality',
            'occupation',
            'mother_tongue',
            'place_of_work',
            'blood_group',
            'designation',
            'student_id',
            'parent_income',
            'aadhar_no',
            'branch_code',
            'year',
            'degree_level',
            'semester',
            'course_code',
            'year_of_admission',
            'course_name',
            'year_of_completion',
            'branch_name',
            'section',
            'department',
            'student_category',
            'branch_type',
            'seat_category',
            'regulation',
            'quota',
            'university',
            'student_status',
            'dte_register_no',
            'dte_payment_receipt_no',
            'dte_admission_no',
            'dte_receipt_date',
            'dte_general_rank',
            'dte_receipt_amount',
            'dte_community_rank',
            'dte_name_of_the_bank_dd',
            'entrance_marks_min',
            'admission_discount_name1',
            'entrance_marks_max',
            'admission_discount_amount',
            'entrance_register_no',
            'admission_discount_name2',
            'admission_discount_amount2',
            'nominee_name',
            'nominee_relationship',
            'nominee_age',
            'permanent_address',
            'present_address',
            'parent_mobile_no',
            'location_of_the_residence',
            'student_mobile_no',
            'student_email_id',
            'official_email_id',
            'parent_email_id',
            'general_notes1',
            'general_notes2',
            'general_notes3',
            'general_notes4',
            'hosteller_or_dayscholar',
            'hostel_room_capacity',
            'hostel_name',
            'hostel_floor_no',
            'hostel_room_type',
            'hostel_room_no',
            'warden_name',
            'warden_alter',
            'h_discontinued_date',
            'h_note',
            'class_advisor',
            'school_reg_no1',
            'school_certificate_no1',
            'school_total_marks1',
            'school_reg_no2',
            'school_certificate_no2',
            'school_total_marks2',
            'school_reg_no3',
            'school_certificate_no3',
            'school_total_marks3',
            'school_reg_no4',
            'school_certificate_no4',
            'school_total_marks4',
            'school_name',
            'school_tc_name',
            'school_tc_no',
            'school_tc_date',
            'cut_off',
            'school_tc_class',
            'marks_note1',
            'board_of_school',
            'marks_note2',
            'tc_last_class_date',
            'final_total_marks_min',
            'tc_promotion',
            'final_total_marks_max',
            'tc_reason_for_leaving',
            'final_total_marks',
            'tc_conduct_and_character',
            'final_classification',
            'tc_no',
            'final_year_of_pass',
            'tc_date',
            'university_rank',
            'duplicate_tc_issued',
            'university_rank1',
            'duplicate_tc_description',
            'scopus_link',
            'google_scholor_link',
            'gmail_h_index',
            'scopus_h_index_safe',
            'scopus_id',
            'scopus_hindex_from_scopus',
            'research_gate_profile_link',
            'orcid_profile_link',
            '14_point_score',
            'created_at',
            'updated_at'
        ];
    }
}