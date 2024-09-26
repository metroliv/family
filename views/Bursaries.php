
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
    <!-- Header -->
    <header class="bg-primary py-2 text-white text-center">
        
        <h1>Government of Makueni - Family Management System</h1>
    </header>

    <!-- Main Section -->
    <main>
        <section class="container mt-5">
            <h3 class="mb-4 text-center text-primary">PART A: PERSONAL DETAILS, INSTITUTIONAL & OTHER DETAILS</h3>

            <form>
                <!-- Name of Student -->
                <div class="mb-3">
                    <label for="studentName" class="form-label">Name of Student</label>
                    <input type="text" class="form-control" id="studentName" placeholder="Enter student name" required>
                </div>

                <!-- Reg/Adm No and ID No -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="regAdmNo" class="form-label">Reg/Adm No</label>
                        <input type="text" class="form-control" id="regAdmNo" placeholder="Enter Reg/Adm No" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="idNo" class="form-label">ID No (Where Applicable)</label>
                        <input type="text" class="form-control" id="idNo" placeholder="Enter ID number" required>
                    </div>
                </div>

                <!-- Student NEMIS No and Tel Number -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nemisNo" class="form-label">Student NEMIS No</label>
                        <input type="text" class="form-control" id="nemisNo" placeholder="Enter NEMIS No">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telNumber" class="form-label">Tel Number</label>
                        <input type="tel" class="form-control" id="telNumber" placeholder="Enter Tel Number" required>
                    </div>
                </div>

                <!-- Gender and Date of Birth -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="dob" class="form-label">Date of Birth (DD/MM/YY)</label>
                        <input type="date" class="form-control" id="dob">
                    </div>
                </div>

                <!-- Place of Birth (or Residence) -->
                <h5 class="mt-4">Place of Birth (or Residence)</h5>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Enter location" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="constituency" class="form-label">Constituency</label>
                        <input type="text" class="form-control" id="constituency" placeholder="Enter constituency" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="ward" class="form-label">Ward</label>
                        <input type="text" class="form-control" id="ward" placeholder="Enter ward" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="subLocation" class="form-label">Sub Location</label>
                        <input type="text" class="form-control" id="subLocation" placeholder="Enter sub location" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="village" class="form-label">Village</label>
                    <input type="text" class="form-control" id="village" placeholder="Enter village">
                </div>

                <!-- School/College/University Details -->
                <h5 class="mt-4">Institutional Details</h5>
                <div class="mb-3">
                    <label for="schoolName" class="form-label">Name of School/ College / University</label>
                    <input type="text" class="form-control" id="schoolName" placeholder="Enter institution name" required>
                </div>

                <div class="mb-3">
                    <label for="institutionCode" class="form-label">Institution CODE (Secondary School)</label>
                    <input type="text" class="form-control" id="institutionCode" placeholder="Enter institution code">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="campus" class="form-label">Campus/Branch</label>
                        <input type="text" class="form-control" id="campus" placeholder="Enter campus/branch">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="levelOfStudy" class="form-label">Level of Study (Degree/Diploma/Certificate)</label>
                        <input type="text" class="form-control" id="levelOfStudy" placeholder="Enter level of study" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="courseOfStudy" class="form-label">Course of Study</label>
                    <input type="text" class="form-control" id="courseOfStudy" placeholder="Enter course of study" required>
                </div>

                <!-- Mode of Study -->
                <div class="mb-3">
                    <label for="modeOfStudy" class="form-label">Mode of Study</label>
                    <select class="form-select" id="modeOfStudy" required>
                        <option value="regular">Regular</option>
                        <option value="parallel">Parallel</option>
                        <option value="boarding">Boarding</option>
                        <option value="day">Day</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="classYear" class="form-label">Class/ Year of Study</label>
                        <input type="text" class="form-control" id="classYear" placeholder="Enter class/year of study" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="completionDate" class="form-label">Expected Year and Month of Completion</label>
                        <input type="month" class="form-control" id="completionDate">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p>© 2024 Government of Makueni. All rights reserved.</p>
    </footer>
</body>
</html>
