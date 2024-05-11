<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link href="../css/styles-admin.css" rel="stylesheet" />
    <link href="../css/style-admin.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Zero team</a><button class="btn btn-link btn-sm order-1 order-lg-0"
            id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../user/signup.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="trangchu.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Quản lí sản phẩm
                        </a>
                        <a class="nav-link" href="index-user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Quản lí người dùng
                        </a>
                        <a class="nav-link" href="donhang.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Quản lí đơn hàng
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.php">Static
                                    Navigation</a><a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                                            href="login.php">Login</a><a class="nav-link"
                                            href="register.php">Register</a><a class="nav-link"
                                            href="password.php">Forgot Password</a></nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                                    data-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401
                                            Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link"
                                            href="500.html">500 Page</a></nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a><a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <div class="product">
                <div class="title">Quản lý Đơn hàng</div>

               
                <table class="table ">
                    <thead class="thead-light text-center">
                        <tr>
                            <th>ID đơn</th>
                            <th>Tổng</th>
                            <th>Khách hàng</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Trạng thái</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="donhang">
                     
                    </tbody>

                </table>

            </div>
        </div>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-row">
                            <div class="col-12 mt-3">
                                <label for="">Name</label>
                                <input class="form-control" type="text" id="name" placeholder="name">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Username</label>
                                <input class="form-control" type="text" id="username" placeholder="username">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">password</label>
                                <input class="form-control" type="password" id="password">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Số điện thoại</label>
                                <input class="form-control" type="text" id="sdt">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Email</label>
                                <input class="form-control" type="text" id="email">
                            </div>
                            <div class="col-8 mt-3">
                                <label for="">Địa chỉ</label>
                                <input class="form-control" type="text" id="address">
                            </div>
                            <div class="col-4 mt-3">
                                <label for="">Role</label>
                                <input class="form-control" type="text" id="role">
                            </div>
                        </form>
                        <a class="btn btn-outline-danger mt-3" href="" onclick="addUser()">Thêm</a>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập nhật</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-6 mt-3">
                                <label for="">ID</label>
                                <input class="form-control" type="text" id="don-id">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Tên khách hàng</label>
                                <input class="form-control" type="text" id="don-user">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Tổng đơn</label>
                                <input class="form-control" type="text" id="don-total">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Điện thoại</label>
                                <input class="form-control" type="text" id="don-phone">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Email</label>
                                <input class="form-control" type="text" id="don-email">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Địa chỉ</label>
                                <input class="form-control" type="text" id="don-address">
                            </div>
                            <div class="col-6 mt-3">
                                <label for="">Trạng thái</label>
                                <!-- <input class="form-control" type="text" id="trangthai"> -->
                                <select class="form-control" id="trangthai">
                                    <option value="Đang xử lí">Đang xử lí</option>
                                    <option value="Xong">Xong</option>
                                    <option value="Đã hủy">Đã hủy</option>
                                </select>
                            </div>
                            <div class="col-12"  id="Update"></div>
                            

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="../js/product.js"></script>
<script src="../js/user.js"></script>
<script src="../js/admin.js"></script>
<script src="../js/admin-user.js"></script>
<script src="../js/donhang.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<!-- <script src="assets/demo/datatables-demo.js"></script> -->

</html>