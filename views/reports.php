<!doctype html>
<?php
session_start();
require_once('../partials/head.php');
require_once('../partials/scripts.php');
?>

<body>
    <main class="main" id="top">
        <div class="container-fluid">
            <!-- Sidebar -->
            <?php include('../partials/youth_sidenav.php'); ?>
        
            <!-- Main Content Area -->
            <div class="content">
                <!-- Header Section -->
                <?php include('../partials/header.php'); ?>

                <!-- Navigation Bar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Government of Makueni - Family Management System</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            
                           
                        </div>
                    </div>
                </nav>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <link rel="stylesheet" href="css/style.css">
                
                <!-- Chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

               
<link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  
                

                <!-- Main Content -->
                <div id="app" class="container mt-2">
                    <h1 class="mb-4">Reports and Analytics</h1>
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-primary me-2" onclick="downloadReport('pdf')">Download PDF</button>
                        <button class="btn btn-secondary" onclick="downloadReport('csv')">Download CSV</button>
                        <button class="btn btn-success ms-2" onclick="window.print()">Print Report</button>
                    </div>    
                    <!-- Overview Section -->
                    <section id="overview" class="mb-5">
                        <h2 class="mb-3">Overview</h2>
                        <p class="lead">
                            This section provides insights into family demographics, gender distribution, disability status, and more. Explore the visualizations and detailed reports below.
                        </p>
                    </section>

                    <!-- Family Demographics Section -->
                    <section id="family-demographics" class="mb-5">
                        <h2 class="mb-3">Family Demographics</h2>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Total Families Registered</h5>
                                        <p class="card-text">1,252 Families</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Families Under Review</h5>
                                        <p class="card-text">236 Families</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Income Distribution Section -->
                    <section id="income-distribution" class="mb-5">
                        <h2 class="mb-3">Income Distribution</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Income Brackets</h5>
                                <div class="chart-container">
                                    <canvas id="incomeChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Education Level Analysis Section -->
                    <section id="education-level" class="mb-5">
                        <h2 class="mb-3">Education Level Analysis</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Education Levels</h5>
                                <div class="chart-container">
                                    <canvas id="educationChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Employment Status Section -->
                    <section id="employment-status" class="mb-5">
                        <h2 class="mb-3">Employment Status</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Employment Distribution</h5>
                                <div class="chart-container">
                                    <canvas id="employmentChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Gender Distribution Section -->
                    <section id="gender-distribution" class="mb-5">
                        <h2 class="mb-3">Gender Distribution</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gender Distribution in Families</h5>
                                <div class="chart-container">
                                    <canvas id="genderChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Disability Status Section -->
                    <section id="disability-status" class="mb-5">
                        <h2 class="mb-3">Disability Status</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Disabled Members</h5>
                                <div class="chart-container">
                                    <canvas id="disabilityChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Age Distribution Section -->
                    <section id="age-distribution" class="mb-5">
                        <h2 class="mb-3">Age Distribution</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Family Members by Age Group</h5>
                                <div class="chart-container">
                                    <canvas id="ageChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Location Distribution Section -->
                    <section id="location-distribution" class="mb-5">
                        <h2 class="mb-3">Location Distribution</h2>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Families by Location</h5>
                                <div class="chart-container">
                                    <canvas id="locationChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const ctxIncome = document.getElementById('incomeChart').getContext('2d');
                        const incomeChart = new Chart(ctxIncome, {
                            type: 'bar',
                            data: {
                                labels: ['Low Income', 'Middle Income', 'High Income'],
                                datasets: [{
                                    label: 'Number of Families',
                                    data: [400, 600, 252],
                                    backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
                                    borderColor: '#fff',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: { beginAtZero: true }
                                },
                                plugins: {
                                    legend: { position: 'top' },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        const ctxEducation = document.getElementById('educationChart').getContext('2d');
                        const educationChart = new Chart(ctxEducation, {
                            type: 'pie',
                            data: {
                                labels: ['Primary', 'Secondary', 'Tertiary', 'Illiterate'],
                                datasets: [{
                                    data: [400, 500, 300, 52],
                                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
                                    borderColor: '#fff',
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: { position: 'top' },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        const ctxEmployment = document.getElementById('employmentChart').getContext('2d');
                        const employmentChart = new Chart(ctxEmployment, {
                            type: 'doughnut',
                            data: {
                                labels: ['Employed', 'Unemployed', 'Self-Employed'],
                                datasets: [{
                                    data: [700, 300, 252],
                                    backgroundColor: ['#007bff', '#dc3545', '#28a745'],
                                    borderColor: '#fff',
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: { position: 'top' },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw;
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        const ctxGender = document.getElementById('genderChart').getContext('2d');
                        const genderChart = new Chart(ctxGender, {
                            type: 'pie',
                            data: {
                                labels: ['Male', 'Female'],
                                datasets: [{
                                    data: [630, 622],
                                    backgroundColor: ['#007bff', '#e83e8c'],
                                    borderColor: '#fff',
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: { position: 'top' },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw + ' (' + Math.round(tooltipItem.raw / 1252 * 100) + '%)';
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        const ctxDisability = document.getElementById('disabilityChart').getContext('2d');
                        const disabilityChart = new Chart(ctxDisability, {
                            type: 'doughnut',
                            data: {
                                labels: ['Disabled', 'Non-Disabled'],
                                datasets: [{
                                    data: [120, 1132],
                                    backgroundColor: ['#28a745', '#dc3545'],
                                    borderColor: '#fff',
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: { position: 'top' },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw + ' (' + Math.round(tooltipItem.raw / 1252 * 100) + '%)';
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        const ctxAge = document.getElementById('ageChart').getContext('2d');
                        const ageChart = new Chart(ctxAge, {
                            type: 'bar',
                            data: {
                                labels: ['0-14 years', '15-34 years', '35-54 years', '55+ years'],
                                datasets: [{
                                    label: 'Number of Family Members',
                                    data: [350, 500, 300, 102],
                                    backgroundColor: '#007bff',
                                    borderColor: '#0056b3',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: { beginAtZero: true }
                                },
                                plugins: {
                                    legend: { display: false },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw + ' (' + Math.round(tooltipItem.raw / 1252 * 100) + '%)';
                                            }
                                        }
                                    }
                                }
                            }
                        });

                        const ctxLocation = document.getElementById('locationChart').getContext('2d');
                        const locationChart = new Chart(ctxLocation, {
                            type: 'bar',
                            data: {
                                labels: ['Kilome', 'Nzaui', 'Mukaa', 'Kibwezi West', 'Kathonzweni', 'Kaiti', 'Kibwezi East', 'Mbooni'],
                                datasets: [{
                                    label: 'Number of Families',
                                    data: [200, 300, 175, 200, 300, 327, 377, 387],
                                    backgroundColor: '#17a2b8',
                                    borderColor: '#117a8b',
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: { beginAtZero: true }
                                },
                                plugins: {
                                    legend: { display: false },
                                    tooltip: {
                                        callbacks: {
                                            label: function(tooltipItem) {
                                                return tooltipItem.label + ': ' + tooltipItem.raw + ' families';
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    });

                    // Function to download the chart as PDF
                    function downloadPDF() {
                        // Logic to download the page as a PDF
                        alert('Download PDF functionality goes here!');
                    }

                    // Function to download CSV data
                    function downloadCSV() {
                        // Logic to export the data to CSV
                        alert('Download CSV functionality goes here!');
                    }
                </script>
            </div>
        </div>
    </main>
</body>
</html>
