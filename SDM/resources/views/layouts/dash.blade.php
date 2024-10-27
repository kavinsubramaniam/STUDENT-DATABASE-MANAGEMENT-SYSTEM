<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/layouts/dashboard.css') }}">
    @yield('cssLink')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
</head> 
<body class="w-100 h-100" style="background-image: url({{ asset('img/bg.png') }}); background-size: cover;">
    <div class="container-fluid main_box" style="margin-top: 40px;">
        <div class="row m-4">
            <div class="col me-4">
                <div class="row mt-3">

                    <div class="row d-flex justify-content-center">
                        <a href="{{ url('/dashboard/students_view') }}" class="col d-flex justify-content-center">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </div>
                    
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col d-flex">
                            <a href="{{ url('/dashboard/students_view') }}" class="anime container-fluid py-2 d-flex justify-content-start align-items-center p-0 pe-3" style="@yield('btnStu') border-radius: 12px;color:black;text-decoration:none;">
                                <img src="{{ asset('img/Students.png') }}" alt="">
                                <p class="h6 pt-2">Students</p>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="row d-flex justify-content-center mt-3">
                        <div class="col d-flex">
                            <a href="{{ url('/dashboard/analytics') }}" class="anime container-fluid ps-3 d-flex justify-content-start align-items-center" style="@yield('btnAna') border-radius: 12px;color:black;text-decoration:none;">
                                <img class="img-fluid" src="{{ asset('img/Analytics.png') }}" alt="">
                                <p class="h6 pt-2 ps-2">Analytics</p>
                            </a>
                        </div>
                    </div> --}}

                    {{-- <div class="row d-flex justify-content-center mt-3">
                        <div class="col d-flex">
                            <a href="{{ url('/dashboard/email') }}" class="anime container-fluid py-2 ps-3 d-flex justify-content-start align-items-center" style="@yield('btnEmail') border-radius: 12px;color:black;text-decoration:none;">
                                <img src="{{ asset('img/Email.png') }}" alt="">
                                <p class="h6 pt-2 ms-3">Email</p>
                            </a>
                        </div>
                    </div> --}}

                    <div class="row d-flex justify-content-center mt-3">
                        <div class="col d-flex">
                            <a href="{{ url('/dashboard/students_manage') }}" class="anime container-fluid py-1 ps-3 d-flex justify-content-start align-items-center" style="@yield('btnDb') border-radius: 12px;color:black;text-decoration:none;">
                                <img src="{{ asset('img/Data backup.png') }}" alt="">
                                <p class="h6 pt-2 ms-1 ps-2">DataBase</p>
                            </a>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center" style="margin-top: 50vh;">
                        <div class="col">
                            <a href="{{ url('/login') }}" class="anime container-fluid py-1 d-flex justify-content-center align-items-center" style=" border-radius: 12px;color:black;text-decoration:none;">                                
                                <img src="{{ asset('img/Logout.png') }}" alt="">
                                <p class="h6 pt-2 ms-2">Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_box col-10" style="background-color: white; border-radius: 12px;">
                
                <header class="row d-flex align-items-center m-1" style="height: 45px;">
                    <div class="col d-flex justify-content-start align-items-center gap-3" style="height: 40px;">
                        <img src="{{ asset('img/search.png') }}" style="width: 33px; height: 30px;" alt=""> 
                        <form method="get" action="#" target="_blank" style="border: 1.5px solid gray; height: 35px; width: 500px; border-radius: 12px;">
                            <input class="ms-3  col-item" id="search" name="sraech" type="text" placeholder="Search" style="margin-top: 6px; border: none; width: 400px;"></input>
                        </form>
                        <div class="d-flex justify-content-center align-items-center" style="border-radius: 10px; border: 1px solid gray;width: 35px; height: 35px;">
                            <button id="openFilterBtn">
                                <img src="{{ asset('img/Filter.png') }}" alt="">
                            </button>

                        </div>
                    </div>

<!-- ######################################################################-->
                    <!-- Filter Pop-up Modal -->
                    <div id="filterModal" class="modal">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h3>FILTER</h3>
                                <span class="close-btn" id="closeFilterBtn">&times;</span>
                            </div>

                            <div class="modal-body container-fluid">
                                <div class="row">
                                    <div  class="col">
                                        <!-- Search and Selected Columns -->
                                        <div>
                                            <label for="search" style="font-size: 19px">Select the required fields</label>
                                            <div style="border: 1.5px solid gray; height: 35px; width: 400px; border-radius: 5px;">
                                                <input class="ms-3 col-item" id="search" name="sraech" type="text" placeholder="Search" style="margin-top: 6px; border: none; width: 380px;" oninput="filterColumns()">
                                            </div>
                                            <div id="selected-columns" class="selected-columns mt-2 mb-2" style="border: 1.5px solid gray; height: 150px; width: 400px; border-radius: 5px;">
                                                <!-- Dynamically added columns will appear here -->
                                            </div>
                                        </div>

                                        <!-- Exclude Checkbox -->
                                        <div class="mb-2">
                                            <label for="exclude">
                                                <input type="checkbox" id="exclude" style="font-size: 10px" onchange="toggleExclude()"> Exclude
                                            </label>   
                                        </div>

                                        <!-- Constraints Section -->
                                        <div>
                                            <h5 style="margin:0px;">Enter Your Constraints</h5>
                                            <p style="font-size: 10px">*Select any column to access constrains</p>
                                            <div id="constraints-area" class="m-0">
                                                <!-- Constraints will be dynamically added here -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Available Fields -->
                                    <div  class="col">
                                        <p class="m-0" style="font-size: 19px">Total Available Fields</p>
                                        <div id="available-fields" class="available-fields p-2" style="border: 1px solid gray; border-radius:5px;">
                                            <div>
                                                <label><input id="department" type="checkbox" name="columns[]" value="department" onchange="selectColumn(this)"> Department</label>
                                            </div>

                                            <div>
                                                <label><input id="gender" type="checkbox" name="columns[]" value="gender" onchange="selectColumn(this)"> Gender</label>
                                            </div>
                                            <div>
                                                <label><input id="age" type="checkbox" name="columns[]" value="age" onchange="selectColumn(this)"> Age</label>
                                            </div>
                                            <!-- Add more fields as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button onclick="submitSelectedColumns()">Apply Filter</button>
                            </div>
                        </div>
                    </div>
<!-- ########################################################################-->
                    <div class="col d-flex justify-content-end gap-3">
                        <a href="{{ url('/dashboard/students_manage') }}">
                            <div class="d-flex mt-1 justify-content-center align-items-center" style="border-radius: 10px; border: 1px solid gray;width: 35px; height: 35px;">
                                <img src="{{ asset('img/add.png') }}" alt="">
                            </div>
                        </a>
                        <div class="vl mt-1"></div>
                        <a href="{{ url('/dashboard/profile') }}" class="row d-flex align-items-center justify-content-end" style="text-decoration:none;">
                            <div class="col pb-1">
                                <img src="{{ asset('img/Ellipse 8.png') }}" alt="">
                            </div>
                            <div class="col-6" style="width: 100px;color:black;">
                                <div class="row">Jhon</div>
                                <div class="row">Professer</div>
                            </div>
                        </a>
                    </div>
                </header>

                <hr class="m-0">

                @yield('main')
            
            </div>
        </div>
    </div>
</body>
<!-- script section -->
@yield("jsFile")

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('js/filter.js')}}"></script>
</html>




