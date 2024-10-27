@extends('layouts.dash')

@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/dash/studentsView.css')}}">
<link rel="stylesheet" href="{{ asset('css/dash/add.css')}}">
@endsection


@section('btnDb')
background-color: white;
@endsection


@section('main')
<div class="upload-container">
    <div class="upload-box">
        <form action="{{ route('students.upload') }}" method="POST" enctype="multipart/form-data" class="container-fluid">
            @csrf
            <div class="row drag-drop-area container-fluid">
                <input class="row" type="file" id="fileInput" name="file" accept=".xlsx, .xls, .csv" style="display: none;" onchange="handleFiles(this.files)">
                <div class="row drag-drop-text mb-2" id="dragDropText">
                    Drag and drop to upload,
                </div>
                <p class="or">or</p>
                <button type="button" class="row select-file-btn" onclick="document.getElementById('fileInput').click()">Select Files</button>
                <p class="supported-formats row">Supported formats: .xlsx, .xls, .csv</p>
            </div>
            <button type="submit" class="row upload-btn">Upload</button>
        </form>
    </div>
</div>
@endsection

@section('jsFile')
<script>
    const dragDropText = document.getElementById('dragDropText');

    function handleFiles(files) {
        if (files.length > 0) {
            dragDropText.textContent = `Selected file: ${files[0].name}`;
        }
    }

    // Drag and Drop functionality
    const dropArea = document.querySelector('.drag-drop-area');

    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('dragging');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('dragging');
    });

    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('dragging');
        const files = e.dataTransfer.files;
        document.getElementById('fileInput').files = files;
        handleFiles(files);
    });
</script>
@endsection

