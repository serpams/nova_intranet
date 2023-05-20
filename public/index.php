<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once '../src/initialinclues.php';
    ?>
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="main-loader">
        <div class="bar-0"></div>
        <div class="bar-1"></div>
        <div class="bar-2"></div>
        <div class="bar-3"></div>
        <div class="bar-4"></div>
      </div>
      <div class="loading">Loading...    </div>
    </div>
    <!-- Loader ends -->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php
        include_once '../src/header.php';
        ?>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <?php
            include_once '../src/leftmenu.php';
            ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Sample Page</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Pages</li>
                                    <li class="breadcrumb-item active">Tabela</li>
                                </ol>
                            </div>
                            <div class="col-sm-6">
                                <!-- Bookmark Start-->
                                <div class="bookmark">
                                    <ul>

                                    </ul>
                                </div>
                                <!-- Bookmark Ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-products">
                    <div class="row m-b-10">
                        <div class="col-md-3 col-sm-2 products-total">

                            <div class="square-product-setting d-inline-block ms-2"> </div><span class="d-none-productlist filter-toggle">
                                Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
                            <div class="grid-options d-inline-block">

                            </div>
                        </div>
                        <div class="col-md-9 col-sm-10 featured-sec"><span class="f-w-600"> </span>
                            <div class="btn-group float-end">
                                <button class="btn btn-primary btn-sm" type="button">  Incluir</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pro-filter-sec">
                                <div class="product-sidebar">
                                    <div class="filter-section">
                                        <div class="card">
                                            <div class="card-header">
                                                <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                                            </div>
                                            <div class="left-filter">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-search">
                                    <form>
                                        <div class="form-group m-0">
                                            <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Multi-Column Starts-->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header pb-0">
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="basic-4">
                                                <thead>
                                                    <tr>
                                                        <th>First name</th>
                                                        <th>Last name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett</td>
                                                        <td>Winters</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>$170,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashton</td>
                                                        <td>Cox</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>San Francisco</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric</td>
                                                        <td>Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Airi</td>
                                                        <td>Satou</td>
                                                        <td>Accountant</td>
                                                        <td>Tokyo</td>
                                                        <td>$162,700</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brielle</td>
                                                        <td>Williamson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>New York</td>
                                                        <td>$372,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod</td>
                                                        <td>Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona</td>
                                                        <td>Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen</td>
                                                        <td>Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya</td>
                                                        <td>Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jena</td>
                                                        <td>Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn</td>
                                                        <td>Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Charde</td>
                                                        <td>Marshall</td>
                                                        <td>Regional Director</td>
                                                        <td>San Francisco</td>
                                                        <td>$470,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Haley</td>
                                                        <td>Kennedy</td>
                                                        <td>Senior Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>$313,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tatyana</td>
                                                        <td>Fitzpatrick</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>$385,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michael</td>
                                                        <td>Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>$198,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paul</td>
                                                        <td>Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria</td>
                                                        <td>Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bradley</td>
                                                        <td>Greer</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>$132,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dai</td>
                                                        <td>Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette</td>
                                                        <td>Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri</td>
                                                        <td>Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Caesar</td>
                                                        <td>Vance</td>
                                                        <td>Pre-Sales Support</td>
                                                        <td>New York</td>
                                                        <td>$106,450</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Doris</td>
                                                        <td>Wilder</td>
                                                        <td>Sales Assistant</td>
                                                        <td>Sidney</td>
                                                        <td>$85,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Angelica</td>
                                                        <td>Ramos</td>
                                                        <td>Chief Executive Officer (CEO)</td>
                                                        <td>London</td>
                                                        <td>$1,200,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gavin</td>
                                                        <td>Joyce</td>
                                                        <td>Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>$92,575</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jennifer</td>
                                                        <td>Chang</td>
                                                        <td>Regional Director</td>
                                                        <td>Singapore</td>
                                                        <td>$357,650</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Brenden</td>
                                                        <td>Wagner</td>
                                                        <td>Software Engineer</td>
                                                        <td>San Francisco</td>
                                                        <td>$206,850</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fiona</td>
                                                        <td>Green</td>
                                                        <td>Chief Operating Officer (COO)</td>
                                                        <td>San Francisco</td>
                                                        <td>$850,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shou</td>
                                                        <td>Itou</td>
                                                        <td>Regional Marketing</td>
                                                        <td>Tokyo</td>
                                                        <td>$163,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Michelle</td>
                                                        <td>House</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Sidney</td>
                                                        <td>$95,400</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suki</td>
                                                        <td>Burks</td>
                                                        <td>Developer</td>
                                                        <td>London</td>
                                                        <td>$114,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prescott</td>
                                                        <td>Bartlett</td>
                                                        <td>Technical Author</td>
                                                        <td>London</td>
                                                        <td>$145,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gavin</td>
                                                        <td>Cortez</td>
                                                        <td>Team Leader</td>
                                                        <td>San Francisco</td>
                                                        <td>$235,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Martena</td>
                                                        <td>Mccray</td>
                                                        <td>Post-Sales support</td>
                                                        <td>Edinburgh</td>
                                                        <td>$324,050</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Unity</td>
                                                        <td>Butler</td>
                                                        <td>Marketing Designer</td>
                                                        <td>San Francisco</td>
                                                        <td>$85,675</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Howard</td>
                                                        <td>Hatfield</td>
                                                        <td>Office Manager</td>
                                                        <td>San Francisco</td>
                                                        <td>$164,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hope</td>
                                                        <td>Fuentes</td>
                                                        <td>Secretary</td>
                                                        <td>San Francisco</td>
                                                        <td>$109,850</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vivian</td>
                                                        <td>Harrell</td>
                                                        <td>Financial Controller</td>
                                                        <td>San Francisco</td>
                                                        <td>$452,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Timothy</td>
                                                        <td>Mooney</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>$136,200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jackson</td>
                                                        <td>Bradshaw</td>
                                                        <td>Director</td>
                                                        <td>New York</td>
                                                        <td>$645,750</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Olivia</td>
                                                        <td>Liang</td>
                                                        <td>Support Engineer</td>
                                                        <td>Singapore</td>
                                                        <td>$234,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bruno</td>
                                                        <td>Nash</td>
                                                        <td>Software Engineer</td>
                                                        <td>London</td>
                                                        <td>$163,500</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Multi-Column Ends-->
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php
            include_once '../src/footer.php';
            ?>
            <!-- tap on top starts-->
            <div class="tap-top"><i class="icon-control-eject"></i></div>
            <!-- tap on tap ends-->
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"> </script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/range-slider/ion.rangeSlider.min.js"></script>
    <script src="../assets/js/range-slider/rangeslider-script.js"></script>
    <script src="../assets/js/touchspin/vendors.min.js"></script>
    <script src="../assets/js/touchspin/touchspin.js"></script>
    <script src="../assets/js/touchspin/input-groups.min.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/product-tab.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <!-- <script src="../assets/js/datatable/datatables/datatable.custom.js"></script> -->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

    </script>

    <script>
        $('#basic-4').DataTable({
            searching: false,
            limit: false,
            info: false,
            lengthChange: false,
            columnDefs: [{
                targets: [0],
                orderData: [0, 1]
            }, {
                targets: [1],
                orderData: [1, 0]
            }, {
                targets: [4],
                orderData: [4, 0]
            }]
        });
    </script>
</body>

</html>