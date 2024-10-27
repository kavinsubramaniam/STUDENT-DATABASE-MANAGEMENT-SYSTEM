<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\StudentDetail; // Import the StudentDetail model
use Illuminate\Support\Facades\Log; // Import the Log facade
use Illuminate\Support\Facades\Schema;

class StudentsView extends Controller
{
    public function studentView()
    {   
        $totalCount = StudentDetail::count(); // Total count of all students
        $students = StudentDetail::all();
        // Check if the session contains filtered students
        if (session()->has('filtered')) {
            $students = session('filtered'); // Use filtered students from session
        }

        // Get filtered count based on session data (filtered students)
        $filteredCount = is_array($students) ? count($students) : $students->count(); // Count filtered students


        // Get all column names from the 'student_details' table
        $columns = Schema::getColumnListing('student_details');

        // Pass both students and column names to the view
        return view('pages.dash.studentsView', compact('students', 'columns', 'totalCount', 'filteredCount'));
    }

    // public function studentSearch(Request $request)
    // {   
    //     // if (session('students') !== null) {
    //     //     $students = session('students');
    //     // }
        
    //     // Fetch all student details
    //     // $students = StudentDetail::all(); // Get all records from the table
    //     $students = StudentDetail::all()->where('enrolment_no', 'BIT2021EN001');
    //     // $students = StudentDetail::all()->where('enrolment_no', 'BIT2021EN001')->first();
    //     // return view('pages.dash.studentsView', compact('students')); // Pass the data to the view
    //     return response()->json($students);
    // }

    public function studentsFullDetails()
    {
        // Fetch the student details for the selected index
        $student = StudentDetail::all(); // Get the record with the specified ID

        // // Check if the student exists
        // if (!$student) {
        //     return redirect()->back()->with('error', 'Student not found'); // Handle not found case
        // }
        // dd("Hello");
        return view('pages.dash.studentsFullView', compact('student')); // Pass the student data to the view
    }


    public function export()
    {
        return Excel::download(new StudentsExport, 'student_details.xlsx');
    }

    public function submitColumns(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'selectedColumns' => 'required|array',
            'constraints' => 'array',
        ]);

        $selectedColumns = $request->input('selectedColumns');
        $constraints = $request->input('constraints');
        // Log the incoming request for debugging
        Log::info('Received request to submit columns', [
            'selectedColumns' => $selectedColumns,
            'constraints' => $constraints,
        ]);
        // Build query based on selected columns and constraints
        $query = StudentDetail::query();

        // foreach ($selectedColumns as $column) {
        //     if (isset($constraints[$column]) && $constraints[$column] !== '') {
        //         // Check if the constraint contains an operator like '>', '<', '>=', '<='
        //         if (preg_match('/^(<=?|>=?|=)\s*(\d+)$/', $constraints[$column], $matches)) {
        //             // Extract the operator and the number
        //             $operator = $matches[1];
        //             $value = $matches[2];
        //             $query->where($column, $operator, $value);
        //         } else {
        //             // Default case, if no operator, assume strict equality
        //             $query->where($column, $constraints[$column]);
        //         }
        //     }
        // }
        foreach ($selectedColumns as $column) {
            if (isset($constraints[$column]) && $constraints[$column] !== '') {
                // Log column and constraint for debugging
                Log::info("Processing column '$column' with constraint: " . $constraints[$column]);
        
                // Check if the constraint contains an operator like '>', '<', '>=', '<=' for numeric columns
                if (preg_match('/^(<=?|>=?|=)\s*(\d+)$/', $constraints[$column], $matches)) {
                    // Extract the operator and the numeric value
                    $operator = $matches[1];
                    $value = $matches[2];
        
                    Log::info("Applying numeric constraint: $operator $value on column '$column'");
                    $query->where($column, $operator, $value);
                } else {
                    // Handle string or exact match constraints for non-numeric fields
                    Log::info("Applying exact match constraint: " . $constraints[$column] . " on column '$column'");
                    $query->where($column, '=', $constraints[$column]);
                }
            }
        }

        // Get the filtered students
        $students = $query->get(); // Fetch only necessary columns
        session(['filtered' => $students]);
        Log::info('Request Data:', $request->all());
        // Log the students data
        // Log::info('Filtered Students:', $students->toArray());
        return response()->json($students); // Return JSON response
    }
}
