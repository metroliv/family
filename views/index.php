
<?php
session_start();
require_once('../partials/head.php');
require_once('../partials/scripts.php');

?>
<head>
<link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>
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
                        <a class="navbar-brand" href="#">Family Management System</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            
                        </div>
                    </div>
                </nav>

                <!-- Main Content -->
                 
                <div class="container mt-3">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="p-3 border bg-light">
                                <a href="family-list.php" class="text-decoration-none"><i class="fas fa-list"></i> Family List</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 border bg-light">
                                <a href="add-family.php" class="text-decoration-none"><i class="fas fa-plus-circle"></i> Register Family</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 border bg-light">
                                <a href="reports.php" class="text-decoration-none"><i class="fas fa-chart-line"></i> Reports and Analytics</a>
                            </div>
                        </div>
                    </div>
                </div>
                   <style>
                    body {
                        font-family: Arial, sans-serif;
                        background:radial-gradient(rgb(36, 10, 168),white);
                        
                    }
                    .mt-8{
                        background:radial-gradient(green,cyan);
                        height: 830px;
                        border-style: solid;
                        border-color: green;
                        border-radius: 10px;
                    }
                    .col-md-4{
                        background-color: green;
                    }
                    .container1{
                        background-color: white;

                    }
                   </style>
                <!-- Family Stats Section -->
                <section class="py-5 bg-light">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="imgs/image.png" class="img-fluid rounded shadow-lg" alt="Family Management Overview">
            </div>

            <!-- Overview Section -->
            <div class="col-lg-7" data-aos="fade-left">
                <h3 class="text-center mb-3 text-primary"><i class="fas fa-users-cog"></i> Family Management Overview</h3>
                <p class="text-center mb-4 text-muted">Efficient management of family details and financial allocations for sustainable growth.</p>

                <!-- Stats Cards -->
                <div class="row g-3">
                    <!-- Total Families -->
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-start border-success border-4">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-users text-success"></i> Total Families</h6>
                                <p class="h5 text-success">1,252</p>
                                <small class="text-muted">Registered Families</small>
                            </div>
                        </div>
                    </div>

                    <!-- Total Funds Allocated -->
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-start border-primary border-4">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-money-bill-wave text-primary"></i> Total Funds Allocated</h6>
                                <p class="h5 text-primary">Ksh 6.14B</p>
                                <small class="text-muted">Allocated for Families</small>
                            </div>
                        </div>
                    </div>

                    <!-- Gender Distribution with Graph -->
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-start border-info border-4">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-venus-mars text-info"></i> Gender Distribution</h6>
                                <canvas id="genderChart" class="w-100"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Disability Status -->
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-start border-warning border-4">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-wheelchair text-warning"></i> Disability Status</h6>
                                <p class="h5 text-warning">120</p>
                                <small class="text-muted">Members with Disabilities</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Financial and Review Info -->
                <div class="row g-3 mt-3">
                    <!-- Families Under Review -->
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-start border-secondary border-4">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-search-dollar text-secondary"></i> Families Under Review</h6>
                                <p class="h5 text-secondary">236</p>
                                <small class="text-muted">Families Being Assessed</small>
                            </div>
                        </div>
                    </div>

                    <!-- Financial Aid Distributed -->
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-start border-danger border-4">
                            <div class="card-body">
                                <h6 class="card-title mb-2"><i class="fas fa-coins text-danger"></i> Financial Aid Distributed</h6>
                                <p class="h5 text-danger">Ksh 1.31B</p>
                                <small class="text-muted">Distributed so far</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Button -->
                <div class="text-center mt-4">
                    <a href ="reports.php">
                        <i class="fas fa-chart-line">
                    <button class="btn btn-primary btn-sm">View Full Report</button>
                </i>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Chart.js for the Gender Distribution Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ensure that the DOM is fully loaded before creating the chart
    document.addEventListener('DOMContentLoaded', function () {
        var genderChartCanvas = document.getElementById('genderChart');
        
        if (genderChartCanvas) {
            var ctx = genderChartCanvas.getContext('2d');
            var genderChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Male', 'Female'],
                    datasets: [{
                        data: [630, 622],
                        backgroundColor: ['#4e73df', '#f6c23e'],
                        hoverBackgroundColor: ['#2e59d9', '#f4b619'],
                        hoverBorderColor: 'rgba(234, 236, 244, 1)',
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: false,
                    animation: false, 
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ": " + tooltipItem.raw + " people";
                                }
                            }
                        }
                    }
                }
            });
        }
    });
</script>


                <!-- Family List by Location -->
                <section class="mt-4">
                    <div class="container">
                        <h3 class="text-center">Family List by Location</h3>
                        <div class="accordion" id="familyLocations">
                            <?php 
                            $locations = [
                                "Mbooni" => ["Family 1 - 4 Members", "Family 2 - 3 Members", "Family 3 - 5 Members"],
                                "Kaiti" => ["Family 4 - 6 Members", "Family 5 - 3 Members", "Family 6 - 4 Members"],
                                "Makueni" => ["Family 7 - 4 Members", "Family 8 - 3 Members", "Family 9 - 5 Members"],
                                "Kibwezi East" => ["Family 10 - 6 Members", "Family 11 - 3 Members", "Family 12 - 4 Members"],
                                "Kibwezi West" => ["Family 13 - 6 Members", "Family 14 - 3 Members", "Family 15 - 4 Members"],
                                "Kilome" => ["Family 16 - 6 Members", "Family 17 - 3 Members", "Family 18 - 4 Members"],
                                "Kathonzweni" => ["Family 19 - 6 Members", "Family 20 - 3 Members", "Family 21 - 4 Members"],
                                "Mukaa" => ["Family 22 - 6 Members", "Family 23 - 3 Members", "Family 24 - 4 Members"],
                                "Nzaui" => ["Family 25 - 6 Members", "Family 26 - 3 Members", "Family 27 - 4 Members"]
                            ];

                            foreach ($locations as $village => $families) {
                                echo '<div class="accordion-item">
                                        <h2 class="accordion-header" id="' . strtolower($village) . '">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . strtolower($village) . '" aria-expanded="false" aria-controls="collapse' . strtolower($village) . '">
                                                ' . $village . ' - Registered Families
                                            </button>
                                        </h2>
                                        <div id="collapse' . strtolower($village) . '" class="accordion-collapse collapse" aria-labelledby="' . strtolower($village) . '" data-bs-parent="#familyLocations">
                                            <div class="accordion-body">
                                                <ul>';
                                foreach ($families as $family) {
                                    echo '<li>' . $family . '</li>';
                                }
                                echo '                  </ul>
                                            </div>
                                        </div>
                                    </div>';
                            }
                            ?>
                        </div>
                    </div>
                </section>
            
    <!-- Upcoming Events Section -->
    <section class="events bg-light py-5">
        <div class="container">
            <h2 class="text-center">Upcoming Events</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="event p-4 border rounded">
                        <h4>Family Outreach Program</h4>
                        <p>Date: October 10, 2024</p>
                        <p>Location: Makueni Community Hall</p>
                        <p>Description: An outreach program to provide support and resources to local families.</p>
                        </div>

                        <div class="col-mp-10">
                    <a href="event_form.php" class="btn btn-success btn-lg">
                        <i class="fas fa-calendar-plus"></i> Create Event
                    </a>
                    <a href="event_list.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-calendar-day"></i> View Events
                    </a>
                </div>
                    

                </div>
                <div class="col-md-6">
                    <div class="event p-4 border rounded">
                        <h4>Financial Aid Workshop</h4>
                        <p>Date: November 5, 2024</p>
                        <p>Location: Makueni County Office</p>
                        <p>Description: A workshop to educate families on the process and benefits of financial aid.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    

    <!-- Newsletter Subscription Section -->
    <section class="newsletter bg-light py-5">
        <div class="container text-center">
        
            <h2>Subscribe to Our Newsletter</h2>
            <p>Get the latest updates and news delivered to your inbox.</p>
            <form class="d-flex justify-content-center mt-3">
                <input type="email" class="form-control me-2" placeholder="Your email address" required>
                <button class="btn btn-primary" type="submit">Subscribe</button>
            </form>
        </div>
    </section><section class="data-visualization py-5">
    <div class="container1">
        <h2 class="text-center">Data Visualization</h2>
        <div class="row mt-4">
            <div class="col-md-6">
                <h4 class="text-center">Family Status Distribution</h4>
                <canvas id="statusChart" style="height: 300px;"></canvas>
            </div>
            <div class="col-md-6">
                <h4 class="text-center">Total Families Over Time</h4>
                <canvas id="familyGrowthChart" style="height: 300px;"></canvas>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Family Status Distribution Pie Chart
    const ctxStatus = document.getElementById('statusChart').getContext('2d');
    const statusChart = new Chart(ctxStatus, {
        type: 'pie',
        data: {
            labels: ['Active', 'Inactive', 'Pending'],
            datasets: [{
                label: 'Family Status',
                data: [10, 5, 3], // Replace with your actual data
                backgroundColor: [
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Distribution of Family Statuses'
                }
            }
        }
    });

    // Total Families Over Time Line Chart
    const ctxGrowth = document.getElementById('familyGrowthChart').getContext('2d');
    const familyGrowthChart = new Chart(ctxGrowth, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Replace with actual time periods
            datasets: [{
                label: 'Total Families',
                data: [50, 100, 150, 200, 250, 300], // Replace with actual family counts
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Growth of Total Families Over Time'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


    
</div>

<footer>
<?php
require_once('../partials/footer.php');
?>
</footer>

</body>
</html>

