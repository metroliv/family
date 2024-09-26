
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
    
    <style>
        body {
            background-color: #f4f7fa;
            font-family: Arial, sans-serif;
        }
        
        
        .form-container {
            margin-top: 30px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2, h4 {
            color: #004a99;
            font-weight: bold;
        }
        footer {
            background-color: #004a99;
            color: white;
            padding: 15px 0;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        .form-step {
            display: none;
        }
        .form-step.active {
            display: block;
        }
        .btn-block {
            width: 100%;
        }
    </style>
</head>
<body>



<!-- Form Container -->
<div class="container">
    <div class="form-container">
        <h2 class="text-center">Family Registration Form</h2>
        <form id="familyForm">

            <!-- Step 1: General Information -->
            <div class="form-step active" id="step1">
                <h4>Step 1: General Family Information</h4>
                <div class="form-group">
                    <label for="familyName">Family Name</label>
                    <input type="text" class="form-control" id="familyName" placeholder="Enter Family Name" required>
                </div>
                <div class="form-group">
                    <label for="numMembers">Number of Family Members</label>
                    <input type="number" class="form-control" id="numMembers" placeholder="e.g. 5" required>
                </div>
                <div class="form-group">
                    <label for="financialStatus">Financial Status</label>
                    <select id="financialStatus" class="form-control" required>
                        <option selected>Choose...</option>
                        <option>Low Income</option>
                        <option>Middle Income</option>
                        <option>High Income</option>
                    </select>
                </div>
                <!-- Location fields -->
                <h5>Location Information</h5>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="village">Village</label>
                        <input type="text" class="form-control" id="village" placeholder="Enter Village" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="subLocation">Sub-location</label>
                        <input type="text" class="form-control" id="subLocation" placeholder="Enter Sub-location" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" placeholder="Enter Location" required>
                    </div>
                    <div class="form-group">
                        <label for="financialStatus">SUB COUNTIES</label>
                        <select id="financialStatus" class="form-control" required>
                            <option selected>Choose...</option>
                            <option>Makueni</option>
                            <option>Mbooni</option>
                            <option>Kaiti</option>
                            <option>Kibwezi East</option>
                            <option>Kibwezi West</option>
                            <option>Kilome</option>
                            <option>Kathonzweni</option>
                            <option>Mukaa</option>
                            <option>Nzaui</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="WARDS">WARDS</label>
                        
                          <select name="subregion" id="subregion">
                            <optgroup label="Mbooni">
                              <option value="Tulimani">Tulimani</option>
                              <option value="Mbooni">Mbooni</option>
                              <option value="Kithungo">Kithungo</option>
                              <option value="Kisau/Kiteta">Kisau/Kiteta</option>
                              <option value="Kako/Waia">Kako/Waia</option>
                              <option value="Kalawa">Kalawa</option>
                            </optgroup>
                            <optgroup label="Kilome">
                              <option value="Kiima Kiu/Kalanzoni">Kiima Kiu/Kalanzoni</option>
                              <option value="Mukaa">Mukaa</option>
                              <option value="Kasikeu">Kasikeu</option>
                            </optgroup>
                            <optgroup label="Kaiti">
                              <option value="Kee">Kee</option>
                              <option value="Kilungu">Kilungu</option>
                              <option value="Ilima">Ilima</option>
                              <option value="Ukia">Ukia</option>
                            </optgroup>
                            <optgroup label="Makueni">
                              <option value="Nzaui/Kalamba">Nzaui/Kalamba</option>
                              <option value="Muvau">Muvau</option>
                              <option value="Kathonzweni">Kathonzweni</option>
                              <option value="Mavindini">Mavindini</option>
                              <option value="Kitise/Kithuki">Kitise/Kithuki</option>
                              <option value="Wote">Wote</option>
                              <option value="Mbitini">Mbitini</option>
                            </optgroup>
                            <optgroup label="Kibwezi West">
                              <option value="Makindu">Makindu</option>
                              <option value="Kikumbulyu North">Kikumbulyu North</option>
                              <option value="Kikumbulyu South">Kikumbulyu South</option>
                              <option value="Nguumo">Nguumo</option>
                              <option value="Nguu/Masumba">Nguu/Masumba</option>
                              <option value="Emali/Mulala">Emali/Mulala</option>
                            </optgroup>
                            <optgroup label="Kibwezi East">
                              <option value="Masongaleni">Masongaleni</option>
                              <option value="Mtito Andei">Mtito Andei</option>
                              <option value="Thange">Thange</option>
                              <option value="Ivingoni">Ivingoni</option>
                            </optgroup>
                          </select>
                          
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-block" onclick="nextStep(2)">Next: Add Family Members</button>
            </div>

            <!-- Step 2: Add Family Members -->
            <div class="form-step" id="step2">
                <h4>Step 2: Add Family Members</h4>
                <div id="membersContainer">
                    <!-- Member fields will be added here dynamically -->
                </div>
                <button type="button" class="btn btn-secondary mb-3" onclick="addMember()">Add Family Member</button>
                <button type="button" class="btn btn-primary btn-block" onclick="submitForm()">Submit Registration</button>
            </div>

        </form>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p>&copy; 2024 Makueni County Government</p>
        <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
    </div>
</footer>

<!-- JS -->
<script>
    let currentStep = 1;
    let memberIndex = 0;

    function nextStep(step) {
        document.getElementById('step' + currentStep).classList.remove('active');
        document.getElementById('step' + step).classList.add('active');
        currentStep = step;
    }

    function addMember() {
        memberIndex++;
        const memberForm = `
            <div class="member-form mb-4" id="member-${memberIndex}">
                <h5>Family Member ${memberIndex}</h5>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="memberName-${memberIndex}">Name</label>
                        <input type="text" class="form-control" id="memberName-${memberIndex}" placeholder="Enter Member's Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="memberAge-${memberIndex}">Age</label>
                        <input type="number" class="form-control" id="memberAge-${memberIndex}" placeholder="Enter Age" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="memberGender-${memberIndex}">Gender</label>
                        <select id="memberGender-${memberIndex}" class="form-control" required>
                            <option selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="memberPosition-${memberIndex}">Position in Family</label>
                        <select id="memberPosition-${memberIndex}" class="form-control" required>
                            <option selected>Choose...</option>
                            <option>Husband</option>
                            <option>Wife</option>
                            <option>Child</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
            </div>
        `;
        document.getElementById('membersContainer').insertAdjacentHTML('beforeend', memberForm);
    }

    function submitForm() {
        alert('Form submitted successfully!');
        // In a real application, you would send form data to the server here.
    }
</script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>

