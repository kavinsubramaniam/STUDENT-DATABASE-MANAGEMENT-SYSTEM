@extends('layouts.dash')

@section('cssLink')
<link rel="stylesheet" href="{{ asset('css/dash/studentsView.css')}}">
@endsection


@section('btnAna')
background-color: white;
@endsection


@section('main')
<h3 style="font-color: drakgray; text-decoration:underline" class="m-3">Analytics:</h3>
<div class="container mb-4" style="max-height:555px;overflow-y: scroll;">
    <div class="row mx-4 mt-2">
        <div class="col">
            <div class="card p-3">
                <h3>Total Students</h3>
                <p>2,500 <span>+4% from last week</span></p>
            </div>
        </div>
        <div class="col">
            <div class="card p-3">
                <h3>Average GPA</h3>
                <p>3.2 <span>-1% from last week</span></p>
            </div>
        </div>
        <div class="col">
            <div class="card p-3">
                <h3>Active Courses</h3>
                <p>250 <span>+5% from last week</span></p>
            </div>
        </div>
        <div class="col">
            <div class="card p-1">
                <h3>Graduation Rate</h3>
                <p>85% <span>+2% from last week</span></p>
            </div>
        </div>
    </div>
    
    <div class="row mx-4 mt-4">
        <div class="col-6">
            <div class="chart-card">
                <canvas id="studentActivityChart"></canvas>
            </div>
        </div>
        <div class="col-6">
            <div class="chart-card">
                <canvas id="coursePerformanceChart"></canvas>
            </div>
        </div>
    </div>
    
    <div class="row mx-4 mt-4">
        <div class="col">
            <div class="chart-card">
                <canvas id="appVersionChart"></canvas>
            </div>
        </div>
        <div class="col">
            <div class="chart-card">
                <canvas id="deviceUsageChart"></canvas>
            </div>
        </div>
        <div class="col">
            <div class="chart-card">
                <canvas id="profileCompletionChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection


@section('jsFile')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/analytics.js') }}"></script>

@endsection
