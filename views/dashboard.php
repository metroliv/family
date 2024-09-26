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
                        <a class="navbar-brand" href="#">family</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            
                        </div>
                    </div>
                </nav>


            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5><i class="fas fa-comments"></i> Messages</h5>
                        </div>
                        <div class="card-body">
                            <p>You have <strong>3 new messages</strong>.</p>
                            <a href="messages.php" class="btn btn-primary">View Messages</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5><i class="fas fa-tasks"></i> Tasks</h5>
                        </div>
                        <div class="card-body">
                            <p>You have <strong>5 pending tasks</strong>.</p>
                            <a href="tasks.php" class="btn btn-warning">View Tasks</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5><i class="fas fa-service"></i> Performance</h5>
                        </div>
                        <div class="card-body">
                            <p>Your performance score is <strong>85%</strong>.</p>
                            <a href="performance.php" class="btn btn-info">View Performance</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5><i class="fas fa-file-alt"></i> Reports</h5>
                        </div>
                        <div class="card-body">
                            <p>You have <strong>2 new reports</strong>.</p>
                            <a href="reports.php" class="btn btn-secondary">View Reports</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5><i class="fas fa-calendar-alt"></i> Events</h5>
                        </div>
                        <div class="card-body">
                            <p>You are registered for <strong>1 upcoming event</strong>.</p>
                            <a href="events.php" class="btn btn-success">View Events</a>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
