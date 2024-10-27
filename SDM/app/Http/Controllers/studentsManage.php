<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;  // Add this line
use App\Imports\StudentsImport;   

class studentsManage extends Controller
{
    public function studentsManageView(){
        return view('pages.dash.studentsManage.add');
    }

    public function uploadStudents(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new StudentsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Students data has been uploaded successfully.');
    }
}
