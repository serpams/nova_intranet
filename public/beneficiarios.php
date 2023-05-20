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
        <div class="loading">Loading... </div>
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
                                <h3>Cadastro de beneficiarios</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">beneficiarios</li>
                                    <li class="breadcrumb-item active">Cadastro</li>
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



                        </div>
                        <div class="col-md-9 col-sm-10 featured-sec"><span class="f-w-600"> </span>
                            <div class="btn-group float-end">
                                <button class="btn btn-primary btn-sm" type="button"> Salvar</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Grupo </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" value="Selecione o grupo" disabled></input>
                                                </div>
                                                <div class="col-sm-1 mt-2">
                                                    <i class="fa fa-search" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Empresa </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" type="text" value="Selecione a empresa" disabled></input>
                                                </div>
                                                <div class="col-sm-1 mt-2">
                                                    <i class="fa fa-search" style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label"> Nome do beneficiario </label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container-fluid starts-->
                        <div class="container-fluid">
                            <div class="edit-profile">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card">
                                            <div class="card-header pb-0">
                                                <h4 class="card-title mb-0">My Profile</h4>
                                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row mb-2">
                                                        <div class="profile-title">
                                                            <div class="media"> <img class="img-70 rounded-circle" alt="" src="../assets/images/user/7.jpg">
                                                                <div class="media-body">
                                                                    <h3 class="mb-1 f-20 txt-primary">MARK JECNO</h3>
                                                                    <p>DESIGNER</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <h6 class="form-label">Bio</h6>
                                                        <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email-Address</label>
                                                        <input class="form-control" placeholder="your-email@domain.com">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input class="form-control" type="password" value="password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Website</label>
                                                        <input class="form-control" placeholder="http://Uplor .com">
                                                    </div>
                                                    <div class="form-footer">
                                                        <button class="btn btn-primary btn-block">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <form class="card">
                                            <div class="card-header pb-0">
                                                <h4 class="card-title mb-0">Edit Profile</h4>
                                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Company</label>
                                                            <input class="form-control" type="text" placeholder="Company">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Username</label>
                                                            <input class="form-control" type="text" placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email address</label>
                                                            <input class="form-control" type="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">First Name</label>
                                                            <input class="form-control" type="text" placeholder="Company">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Last Name</label>
                                                            <input class="form-control" type="text" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Address</label>
                                                            <input class="form-control" type="text" placeholder="Home Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">City</label>
                                                            <input class="form-control" type="text" placeholder="City">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="mb-3">
                                                            <label class="form-label">Postal Code</label>
                                                            <input class="form-control" type="number" placeholder="ZIP Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="mb-3">
                                                            <label class="form-label">Country</label>
                                                            <select class="form-control btn-square">
                                                                <option value="0">--Select--</option>
                                                                <option value="1">Germany</option>
                                                                <option value="2">Canada</option>
                                                                <option value="3">Usa</option>
                                                                <option value="4">Aus</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div>
                                                            <label class="form-label">About Me</label>
                                                            <textarea class="form-control" rows="5" placeholder="Enter About your description"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-end pt-0">
                                                <button class="btn btn-primary" type="submit">Update Profile</button>
                                            </div>
                                        </form>
                                    </div>
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
                    
                    <!-- tap on tap ends-->
                </div>

                <!-- Vertically centered modal-->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered bd-example-modal-lg modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-3 col-form-label">Grupo </label>
                                                            <div class="col-sm-8">
                                                                <input class="form-control" type="text" value="nome do grupo"></input>
                                                            </div>
                                                            <div class="col-sm-1 mt-2">
                                                                <i class="fa fa-search" style="cursor:pointer"></i>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3 row">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead class="bg-primary">
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">First Name</th>
                                                                            <th scope="col">Last Name</th>
                                                                            <th scope="col">Username</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>
                                                                            <td>@mdo</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            <td>@fat</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td>Larry</td>
                                                                            <td>the Bird</td>
                                                                            <td>@twitter</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Fechar</button>
                                <!-- <button class="btn btn-primary" type="button">Selecionar</button> -->
                            </div>
                        </div>
                    </div>
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