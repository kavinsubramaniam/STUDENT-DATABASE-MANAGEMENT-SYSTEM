@extends('layouts.dash')

@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/dash/studentsFullView.css')}}">
@endsection

@section('main')
<div class="container">
    <div id="Top" class="row">
        <div class="col-6 d-flex justify-content-start gap-3 mt-4">
            <a href="{{ url('/dashboard/students_view') }}" class="justify-content-start" style="font-size: 14px;color: black;text-decoration: none;font-weight: 700;">back</a>
        </div>
        <div class="col-6 d-flex justify-content-end gap-3">
            <div class="" style="margin-top: 20px; padding-top: 6px; border: 1px solid black;height: 35px; border-radius: 12px;"><a class="p-2" href="#" style="text-decoration: None;color: black;">SEND MAIL</a></div>
            <div class="" style="margin-top: 20px; padding-top: 6px; border: 1px solid black;height: 35px; border-radius: 12px;"><a class="p-2" href="#" style="text-decoration: None;color: black">EXPORT</a></div>
        </div>
    </div>
    <div id="Bottom" class="row mt-3" style="border: 1px solid black;border-radius: 12px;height:550px;">
        <div id="photo_part" class="col-3 mt-3 ms-1">
            <div class="row gap-3">
                <div class="col-5"><img style="border: 1px solid black;border-radius: 12px;" src="{{ asset('img/kavin.png') }}" alt=""></div>
                <div class="col-6 pt-3">
                    <h6>KAVIN S</h6>
                    <h6>7376222CB124</h6>
                    <h6>SEMESTER IV</h6>
                    <h6 style="color: rgb(69, 174, 255);">CONTINUING</h6>
                </div>
            </div>
        </div>
        <div id="details_1" class="col-4 mt-4" style="width: 750px;max-height:500px; overflow-y: scroll;overflow-x: hidden;margin-left:100px">
            <div class="Personal_details row" style="width: 750px">
                <h5 class="p-0 m-0 mb-2" >Personal Details</h5>
                <div class="row mb-1" style="font-size:12px;">
                    <col>
                    <div class="col-2 p-0"><div class="dataLabelBatch">Batch</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel20222022">2022</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelEnrollmentNo">Enrollment No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel2022UCB1009">2022UCB1009</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataLabelDateOfAdmission">Date of Admission</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel2792022">27/09/2022</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelRegisterNo">Register No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel7376222CB124">7376222CB124</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataLabelStudentName">Student Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelMrKAVINS">Mr. KAVIN S</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelDTERegNo">DTE Reg. No.</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataGender">Gender</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelMALE">MALE</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelApplicationNo">Application No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel1586">1586</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataDateOfBirth">Date of Birth</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="label9">09/03/2005</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelAdmissionNo">Admission No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel33669">33669</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataAge">Age</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel18">18</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataFatherName">Father Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelSUBRAMANIAMSP">SUBRAMANIAM S P</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataCommunity">Community</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelBC">BC</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelMotherName">Mother Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelVIJAYALAKSHMIS">VIJAYALAKSHMI S</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataLabelGuardianName">Guardian Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataReligion">Religion</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelHINDU">HINDU</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelParentOccupation" style="font-size: 15px;font-weight: 700;">Parent Occupation</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataNationality">Nationality</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelINDIAN">INDIAN</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelOccupation">Occupation</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelBUSINESS">BUSINESS</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataMotherTongue">Mother Tongue</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelTAMIL">TAMIL</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelPlaceOfWork">Place of Work</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataBloodGroup">Blood Group</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelBVE">B+VE</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelDesignation">Designation</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataLabelStudentID">Student ID</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel33542">33542</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="parentIncome">Parent Income</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel1200000">120000.00</div></div>
                </div>
                <div class="row mb-1" style="font-size:12px;">
                    <div class="col-2 p-0"><div class="dataLabelAadharNo">Aadhar No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel301569034690">301569034690</div></div>
                </div>
            </div>

{{-- ##########################################################Admission_details############################################################ --}}
            <div class="Admission_details row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >Admission Details</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelBranchCode">Branch Code</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel2CB">2CB</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelYear">Year</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelII">II</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelDegreeLevel">Degree Level</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelUG">UG</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelSemester">Semester</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelIV">IV</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelCourseCode">Course Code</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelBTECH">B.TECH.</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelYearOfAdmission">Year of Admission</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel2022">2022</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelCourseName">Course Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelBACHELOROFTECHNOLOGY">BACHELOR OF TECHNOLOGY</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelYearOfCompletion">Year of Completion</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabel2026">2026</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelBranchName">Branch Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0">
                        <div class="cOMPUTERSCIENCEANDBUSINESSSYST">
                            <div class="textBlock">COMPUTER SCIENCE AND</div>
                            <div class="textBlock2">BUSINESS SYSTEMS</div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelSection">Section</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelA">A</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelDepartment">Department</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0">
                        <div class="cOMPUTERSCIENCEANDBUSINESSSYST2">
                            <div class="textBlock3">COMPUTER SCIENCE AND</div>
                            <div class="textBlock4">BUSINESS SYSTEMS</div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelStudentCategory">Student Category</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelREGULAR">REGULAR</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelBranchType">Branch Type</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelREGULAR2">REGULAR</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelSeatCategory">Seat Category</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelGOVERNMENT">GOVERNMENT</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelRegulation">Regulation</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabel2021">2021</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelQuota">Quota</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelOCACADEMIC">OC ACADEMIC</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataLabelUniversity">University</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div class="dataLabelANNAUNIVERSITYCHENNAI">ANNA UNIVERSITY, CHENNAI</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLabelStudentStatus">Student Status</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div class="dataLabelCONTINUING">CONTINUING</div></div>
                </div>
            </div>


{{-- ##########################################################Admission Payment Details############################################################ --}}

            <div class="Admission_Payment_Details row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >Admission Payment Details</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataRegisterNo">DTE Register No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>207521</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataPaymentReceiptNo">DTE Payment Receipt No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataDTEAdmissionNo">DTE Admission No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>2022/2702/CB/10009</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataDTEReceiptDate">DTE Receipt Date</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataDTEGeneralRank">DTE General Rank</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>12728</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataDTE Receipt Amount">DTE Receipt Amount</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataDTECommunityRank">DTE Community Rank</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>7888</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataDTENameoftheBankDD">DTE Name of the Bank DD</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataEntranceMarksMin">Entrance Marks Min</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataAdmissionDiscountName1">Admission Discount Name1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataEntranceMarksMax">Entrance Marks Max</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataAdmissionDiscountAmount">Admission Discount Amount(Rs)</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataEntranceRegisterNo">Entrance Register No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>NULL</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataAdmissionDiscountName2">Admission Discount Name2</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataAdmissionDiscountAmount">Admission Discount Amount</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1 p-0"><div class="data"></div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
            </div>



{{-- ##########################################################Admission Payment Details############################################################ --}}

            <div class="INSURANCE_DETAILS row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >INSURANCE DETAILS</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataNomineeName">Nominee Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>VIJAYALAKSHMI S</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataNomineeRelationship">Nominee Relationship</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>MOTHER</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataNomineeAge">Nominee Age</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>42</div></div>

                </div>
            </div>

{{-- ##########################################################Admission Payment Details############################################################ --}}

            <div class="ADDRESS_FOR_COMMUNICATION row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >ADDRESS FOR COMMUNICATION</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataPERMANENT_ADDRESS">PERMANENT ADDRESS</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>7/151-1, NEAR VIP GARDEN
                        ANDAKKAPALAYAM,
                        VELLANAIPATTI,
                        ANNUR
                        COIMBATORE-641048
                        TAMIL NADU
                        INDIA</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataPRESENT_ADDRESS">PRESENT ADDRESS</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>7/151-1, NEAR VIP GARDEN
                        ANDAKKAPALAYAM,
                        VELLANAIPATTI,
                        ANNUR
                        COIMBATORE-641048
                        TAMIL NADU
                        INDIA</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div class="dataParentMobileNo">Parent Mobile No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>9842732690</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div class="dataLocationoftheResidence">Location of the Residence</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>RURAL</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Student Mobile No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>7418522544</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Student Email ID</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>kavin090305@gmail.com</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Official Email ID</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>KAVIN.CB22@BITSATHY.AC.IN</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Parent Email ID</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>subramaniam10166@gmail.com</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>General Note1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>General Note2</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>General Note3</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>General Note4</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
            </div>


{{-- ##########################################################Admission Payment Details############################################################ --}}

            <div class="CLASS_ADVISOR/HOSTEL_DETAILS row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >CLASS ADVISOR/HOSTEL DETAILS</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Hosteller /Dayscholar</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>HOSTELLER</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Hostel Room Capacity</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>4</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Hostel Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>RUBY</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Hostel Floor No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>1</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Hostel Room Type</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>ORDINARY</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Hostel Room No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>173</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Warden Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>Dr.VISHNU SAJAN-SMS</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Warden Alter (if Any)</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>H-Discontinued Date</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>H-Note</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Class Advisor</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>Dr.PRABHAVATHI K-MA1334</div></div>
                </div>
            </div>


{{-- ##########################################################Admission Payment Details############################################################ --}}

            <div class="School_Certificate_Details row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >School Certificate Details</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Reg No1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>5272898</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>School Certificate No1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>2111272688</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Total Marks1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>554.00</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Reg No2</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>3312050120801662</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>School Certificate No2</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Total Marks2</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>0.00</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Reg No3</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>School Certificate No3</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Total Marks3</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Reg No4</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>School Certificate No4</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Total Marks4</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                </div>
            </div>



{{-- ##########################################################Admission Payment Details############################################################ --}}

            <div class="School_TC_Details row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >School TC Details</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-5 p-0"><div>G RAMASWAMY NAIDU MAT HSS,COIMBATORE</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School TC Name</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-5 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School TC No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-5 p-0"><div>1386</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School TC Date</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>23/06/2022</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Cut off Marks in 300(Cut off Marks in
                        200+Entrance Marks)</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div>186.00</div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>School TC Class</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>HSC-ACADEMIC</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Marks Note1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Board of School</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>SBSE-TN</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Marks Note2</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
            </div>



{{-- ##########################################################BIT Academic Details############################################################ --}}

            <div class="BIT_Academic_Details row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >BIT Academic Details</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>TC Last Class Date</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Final Total Marks Min</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>TC Promotion To Next
                        Higher Class</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Final Total Marks Max</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>TC Reason For Leaving</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Final Total Marks %</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>TC Conduct And Character</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Final Classification</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>TC No</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Final Year of Pass</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>TC Date</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>University Rank</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Duplicate TC Issued</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div>0No(s)</div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>University Rank1</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Duplicate TC Description</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-5 p-0"><div></div></div>
                </div>
            </div>


{{-- ##########################################################BIT Academic Details############################################################ --}}

            <div class="ADDITIONAL_INFORMATION row mt-3" style="font-size:12px;width: 750px">
                <h5 class="p-0 m-0 mb-2" >ADDITIONAL INFORMATION</h5>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Scopus Link</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Google Scholor Link</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Google H Index</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Scopus H Index (Self)</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>Scopus ID</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>Scopus H Index (From
                        Scopus)</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>ResearchGate Profile Link</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-2 p-0"><div></div></div>
                    <div class="col-1"></div>
                    <div class="col-2 p-0"><div>ORCID Profile Link</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-3 p-0"><div></div></div>
                </div>
                <div class="row mb-1">
                    <div class="col-2 p-0"><div>14 Point Score</div></div>
                    <div class="col-1 p-0"><div class="data">:</div></div>
                    <div class="col-5 p-0"><div></div></div>
                </div>
            </div>



        </div>
        <div id="details_2" class="col-5"></div>
    </div>
</div>
@endsection