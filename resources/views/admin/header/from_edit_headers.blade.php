@include('layouts/admin/head')

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!--sidebar start-->
        @include('layouts/admin/sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <!--header start-->
            @include('layouts/admin/header')
            <!--header end-->

            <!--main content start-->
            <div class="container-fluid">
                <section id="main-content">
                    <section class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="page-header"><i class="fa fa-table"></i> หน้าแก้ไข</h3>
                                <!-- <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-table"></i>Table</li>
                                    <li><i class="fa fa-th-list"></i>แก้ไขข้อมูลหน้าคอนเท้น</li>
                                </ol> -->
                                <hr>
                            </div>
                        </div>

                        <header class="panel-heading">แก้ไขข้อมูลหน้าคอนเท้น</header>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumb">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">เนื้อหา</label>
                                                    <input class="form-control" id="exampleInputEmail1" placeholder="เนื้อหา">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" id="exampleInputFile">
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>

                                                <!-- <button type="submit" class="btn btn-primary">เพิ่มข้อมูลคอนเท้น</button> -->
                                                <button type="submit" class="btn btn-success btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <span class="text">แก้ไขข้อมูลคอนเท้น</span>
                                                </button>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <!--main content end-->
        </div>
    </div>
    <!-- End of Content Wrapper -->

    @include('layouts/admin/footer')

</body>