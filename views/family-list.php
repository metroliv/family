
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
    

<body>
    <header>
        
</header>
<div class="container mt-5">
    <h2 class="text-center">List of Registered Families</h2>
    <div class="d-flex justify-content-end mb-3">
    <button class="btn btn-primary me-2" onclick="downloadReport('pdf')">Download PDF</button>
    <button class="btn btn-secondary" onclick="downloadReport('csv')">Download CSV</button>
    <button class="btn btn-success ms-2" onclick="window.print()">Print Report</button>
</div>
    <!-- Family List Table -->
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
        <tr>
            <th>Family ID</th>
            <th>Family Name</th>
            <th>Head of Family</th>
            <th>Number of Members</th>
            <th>Gender Distribution</th>
            <th>Disability Status</th>
            <th>Financial Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <!-- Example Family Entry -->
        <tr>
            <td>F001</td>
            <td>Mutisya Family</td>
            <td>John Mutisya</td>
            <td>6</td>
            <td>Male: 3, Female: 3</td>
            <td>1 member with disability</td>
            <td>Ksh 150,000 (total aid received)</td>
            <td>
                <a href="family-details.php" class="btn btn-primary btn-sm">View Details</a>
                <a href="edit-family.php" class="btn btn-warning btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>

        <tr>
            <td>F002</td>
            <td>Ngugi Family</td>
            <td>Jane Ngugi</td>
            <td>4</td>
            <td>Male: 2, Female: 2</td>
            <td>No members with disability</td>
            <td>Ksh 200,000 (total aid received)</td>
            <td>
                <a href="family-details.php" class="btn btn-primary btn-sm">View Details</a>
                <a href="edit-family.php" class="btn btn-warning btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        
        <!-- More Family Entries -->
        </tbody>
    </table>

    <!-- Add Family Button -->
    <div class="text-right">
        <a href="add-family.php" class="btn btn-success">Register New Family</a>
    </div>
</div>

<!-- Bootstrap JS and custom JS -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>

