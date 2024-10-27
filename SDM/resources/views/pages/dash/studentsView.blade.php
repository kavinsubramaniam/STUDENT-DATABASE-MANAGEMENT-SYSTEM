@extends('layouts.dash')

@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/dash/studentsView.css')}}">
@endsection


@section('btnStu')
background-color: white;
@endsection

@section('popup')
    @foreach ($columns as $column)
        <div>
            <label><input id="{{$column}}" type="checkbox" name="columns[]" value="{{$column}}" onchange="selectColumn(this)"> {{$column}}</label>
        </div>
    @endforeach
@endsection

@section('main')
<div class="row">
                    <div class="col-8">
                        <div class="row d-flex mt-1" style="font-size: 15px; font-weight: 700;">
                            <div class="col-12 d-flex justify-content-end gap-3" style="height: 65px;">
                                <p class="mt-4 pt-2" style="display: inline;margin-right: 430px">All students</p>
                                <div class="" style="margin-top: 20px; padding-top: 6px; border: 1px solid black; height: 35px; border-radius: 12px;">
                                    <a class="p-2" href="javascript:void(0)" onclick="sendMailToAllStudents()" style="text-decoration: none; color: black;">SEND MAIL</a>
                                </div>
                                {{-- <div class="" style="margin-top: 20px; padding-top: 6px; border: 1px solid black;height: 35px; border-radius: 12px;"><a class="p-2" href="#" style="text-decoration: None;color: black;">ANALYTICS</a></div> --}}
                                <div class="" style="margin-top: 20px; padding-top: 6px; border: 1px solid black;height: 35px; border-radius: 12px;"><a class="p-2" href="{{ route('students.export') }}" style="text-decoration: None;color: black">EXPORT</a></div>
                            </div>
                        </div>
                        {{-- @dd($students)  --}}
                        <div class="row ms-4">
                            <div class="p-0 table_wrap" style="border: 2px solid rgb(0, 0, 0);border-radius: 12px;">
                                <table class="table" id="studentsTable">
                                    <thead class="table_head">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Student Name</th>
                                            <th>Roll number</th>
                                            <th>Departement</th>
                                            <th><a href="#" id="copyEmails" style="cursor: pointer;text-decoration:none;color:black;">Email&#128279;</a></th>
                                            <th>Year</th>
                                            <th>Ph Number</th>
                                            <th>Date Of Birth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr id="row{{ $student->id }}"> <!-- Assuming 'id' is the primary key -->
                                            <td>{{ $loop->iteration }}</td> <!-- This will give you the current index -->
                                            <td>{{ $student->student_name }}</td>
                                            <td>{{ $student->enrolment_no }}</td>
                                            <td>{{ $student->branch_name }}</td> <!-- Updated from 'CSBS' to dynamic branch name -->
                                            <td>{{ $student->student_email_id }}</td> <!-- Updated from hardcoded email -->
                                            <td>{{ $student->year }}</td> <!-- Assuming 'year' refers to the academic year -->
                                            <td>{{ $student->student_mobile_no }}</td> <!-- Updated from hardcoded mobile number -->
                                            <td>{{ \Carbon\Carbon::parse($student->date_of_birth)->format('d/m/Y') }}</td> <!-- Formatting date -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 px-5 mt-4">
                        <div class="row" style="border: 1px solid black; border-radius: 12px;">
                            <div class="col pt-3 pb-2">
                                <h5 class="m-0" id="totalCount">{{ $totalCount }}</h5>
                                <span style="display: inline-block; width: 10px; height: 10px; background-color: #75c1ff; border-radius: 50%; margin-right: 5px;"></span>
                                <p style="font-size: 14px; font-weight: 700; display: inline;">TOTAL COUNT</p>
                                
                                <h5 class="m-0 mt-4" id="filteredCount">{{ $filteredCount }}</h5>
                                <span style="display: inline-block; width: 10px; height: 10px; background-color: #d9d9d9; border-radius: 50%; margin-right: 5px;"></span>
                                <p style="font-size: 14px; font-weight: 700; display: inline;">FILTERED COUNT</p>
                            </div>
                            <div class="col d-flex pb-2">
                                <canvas id="studentChart" width="100" height="110"></canvas>
                            </div>
                            
                        </div>
                        <div class="row mt-3 p-2 pt-3" style="border: 1px solid black;border-radius: 12px;">
                            <div class="row">
                                <div class="col"><img style="border: 1px solid black;border-radius: 12px;" src="{{ asset('img/kavin.png') }}" alt=""></div>
                                <div class="col pt-3">
                                    <h6>KAVIN S</h6>
                                    <h6>7376222CB124</h6>
                                    <h6>SEMESTER IV</h6>
                                    <h6 style="color: rgb(69, 174, 255);">CONTINUING</h6>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px; font-weight: 700;">DEPARTEMENT:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">B-TECT CSBS</h6></div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">MENTOR:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">VAANATHI S</h6></div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">MENTOR ID:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">AD11023</h6></div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">SPECIAL LAB:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">DATA-SCIENCE</h6></div>
                            </div>
                            <div class="row mt-2">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 15px;font-weight: 700;">PERSONAL DETAILS:</h6></div>
                            </div>
                            {{-- <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">DATE OF BIRTH:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">90/03/2005</h6></div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">AGE:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">19</h6></div>
                            </div> --}}
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">EMAIL ID:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">kavin.cb22@bitsathy.ac.in</h6></div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">PHONE NUMBER:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">7418522544</h6></div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-start"><h5 class="justify-content-start" style="font-size: 13px;font-weight: 700;">BLOOD GROUP:</h5></div>
                                <div class="col d-flex justify-content-end"><h6 class="justify-content-end" style="font-size: 13px;">B+ve</h6></div>
                            </div>
                            <div class="row mt-1">
                                <div class="col d-flex justify-content-center"><a href="{{ url('/dashboard/students_full_details') }}" class="justify-content-end" style="font-size: 14px;color: black;text-decoration: none;font-weight: 700;">View More >></a></div>
                            </div>
                
                        </div>
                    </div>
                </div>
@endsection

@section('jsFile')
<script>
function sendMailToAllStudents() {
    // Collect all student emails into an array (adjust based on your actual variable)
    var studentEmails = [
        @foreach($students as $student)
            "{{ $student->student_email_id }}",
        @endforeach
    ];
    var emailList = studentEmails.join(',');
    window.location.href = "https://mail.google.com/mail/?view=cm&fs=1&to=" + encodeURIComponent(emailList);
}
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var totalCount = {{ $totalCount }};
    var filteredCount = {{ $filteredCount }};

    var ctx = document.getElementById('studentChart').getContext('2d');
    var studentChart = new Chart(ctx, {
        type: 'pie',
        data: {
            datasets: [{
                data: [filteredCount, totalCount - filteredCount],
                backgroundColor: ['#75c1ff', '#d9d9d9'],
                hoverBackgroundColor: ['#75c1ff', '#d9d9d9']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
});
</script>
@endsection
