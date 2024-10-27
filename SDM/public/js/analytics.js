// scripts.js
const ctxActivity = document.getElementById('studentActivityChart').getContext('2d');
const ctxPerformance = document.getElementById('coursePerformanceChart').getContext('2d');
const ctxAppVersion = document.getElementById('appVersionChart').getContext('2d');
const ctxDeviceUsage = document.getElementById('deviceUsageChart').getContext('2d');
const ctxProfileCompletion = document.getElementById('profileCompletionChart').getContext('2d');

const studentActivityChart = new Chart(ctxActivity, {
    type: 'line',
    data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Logins',
            data: [12, 19, 3, 5, 2, 3, 9],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            fill: true
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const coursePerformanceChart = new Chart(ctxPerformance, {
    type: 'bar',
    data: {
        labels: ['Math', 'Science', 'History', 'English', 'Art'],
        datasets: [{
            label: 'Course Performance',
            data: [65, 59, 80, 81, 56],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const appVersionChart = new Chart(ctxAppVersion, {
    type: 'bar',
    data: {
        labels: ['v1.0', 'v1.1', 'v1.2', 'v1.3', 'v1.4'],
        datasets: [{
            label: 'App Usage',
            data: [120, 90, 65, 30, 10],
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const deviceUsageChart = new Chart(ctxDeviceUsage, {
    type: 'pie',
    data: {
        labels: ['Desktop', 'Mobile', 'Tablet'],
        datasets: [{
            label: 'Device Usage',
            data: [50, 30, 20],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    }
});

const profileCompletionChart = new Chart(ctxProfileCompletion, {
    type: 'doughnut',
    data: {
        labels: ['Complete', 'Incomplete'],
        datasets: [{
            label: 'Profile Completion',
            data: [70, 30],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    }
});