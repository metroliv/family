


<?php
session_start();
require_once('../partials/head.php');
require_once('../partials/scripts.php');
?>


<body>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    

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
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="family-list.php"><i class="fas fa-list"></i> Family List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-hand-holding-usd"></i> Financial Aid</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Bursaries.php"><i class="fas fa-graduation-cap"></i> Scholarships & Bursaries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Account Settings / </span> Connections
              </h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-account.php"
                        ><i class="bx bx-user me-1"></i> Account</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-notifications.php"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                      >
                    </li>
                  </ul>
                  <div class="row">
                    <div class="col-md-6 col-12 mb-md-0 mb-4">
                      <div class="card">
                        <h5 class="card-header">Connected Accounts</h5>
                        <div class="card-body">
                          <p>Display content from your connected accounts on your site</p>
                          <!-- Connections -->
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img src="../assets/img/icons/brands/google.png" alt="google" class="me-3" height="30" />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Google</h6>
                                <small class="text-muted">Calendar and contacts</small>
                              </div>
                              <div class="col-3 text-end">
                                <div class="form-check form-switch">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img src="../assets/img/icons/brands/slack.png" alt="slack" class="me-3" height="30" />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Slack</h6>
                                <small class="text-muted">Communication</small>
                              </div>
                              <div class="col-3 text-end">
                                <div class="form-check form-switch">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img src="../assets/img/icons/brands/github.png" alt="github" class="me-3" height="30" />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Github</h6>
                                <small class="text-muted">Manage your Git repositories</small>
                              </div>
                              <div class="col-3 text-end">
                                <div class="form-check form-switch">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img
                                src="../assets/img/icons/brands/mailchimp.png"
                                alt="mailchimp"
                                class="me-3"
                                height="30"
                              />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Mailchimp</h6>
                                <small class="text-muted">Email marketing service</small>
                              </div>
                              <div class="col-3 text-end">
                                <div class="form-check form-switch">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="flex-shrink-0">
                              <img src="../assets/img/icons/brands/asana.png" alt="asana" class="me-3" height="30" />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-9 mb-sm-0 mb-2">
                                <h6 class="mb-0">Asana</h6>
                                <small class="text-muted">Communication</small>
                              </div>
                              <div class="col-3 text-end">
                                <div class="form-check form-switch">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- /Connections -->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="card">
                        <h5 class="card-header">Social Accounts</h5>
                        <div class="card-body">
                          <p>Display content from social accounts on your site</p>
                          <!-- Social Accounts -->
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img
                                src="../assets/img/icons/brands/facebook.png"
                                alt="facebook"
                                class="me-3"
                                height="30"
                              />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Facebook</h6>
                                <small class="text-muted">Not Connected</small>
                              </div>
                              <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                  <i class="bx bx-link-alt"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img
                                src="../assets/img/icons/brands/twitter.png"
                                alt="twitter"
                                class="me-3"
                                height="30"
                              />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Twitter</h6>
                                <a href="https://twitter.com/Theme_Selection" target="_blank">@ThemeSelection</a>
                              </div>
                              <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                  <i class="bx bx-trash-alt"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img
                                src="../assets/img/icons/brands/instagram.png"
                                alt="instagram"
                                class="me-3"
                                height="30"
                              />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">instagram</h6>
                                <a href="https://www.instagram.com/themeselection/" target="_blank">@ThemeSelection</a>
                              </div>
                              <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-outline-danger">
                                  <i class="bx bx-trash-alt"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex mb-3">
                            <div class="flex-shrink-0">
                              <img
                                src="../assets/img/icons/brands/dribbble.png"
                                alt="dribbble"
                                class="me-3"
                                height="30"
                              />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Dribbble</h6>
                                <small class="text-muted">Not Connected</small>
                              </div>
                              <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                  <i class="bx bx-link-alt"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="flex-shrink-0">
                              <img
                                src="../assets/img/icons/brands/behance.png"
                                alt="behance"
                                class="me-3"
                                height="30"
                              />
                            </div>
                            <div class="flex-grow-1 row">
                              <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                <h6 class="mb-0">Behance</h6>
                                <small class="text-muted">Not Connected</small>
                              </div>
                              <div class="col-4 col-sm-5 text-end">
                                <button type="button" class="btn btn-icon btn-outline-secondary">
                                  <i class="bx bx-link-alt"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <!-- /Social Accounts -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
