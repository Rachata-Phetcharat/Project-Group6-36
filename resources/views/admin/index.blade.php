@include('layouts/admin/head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts/admin/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts/admin/header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <header class="panel-heading">ตารางสินค้า</header>
                            <section class="panel">
                                <div class="breadcrumb">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>ชื่อ</th>
                                                    <th>เนื้อหา</th>
                                                    <th>ประเภทสินค้า</th>
                                                    <th>รูป</th>
                                                    <th>ผู้ที่สรางบทความ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product as $Product)
                                                    <tr>
                                                        <td>{{ $Product->id_product }}</td>
                                                        <td>{{ $Product->heading }}</td>
                                                        <td>{{ $Product->text }}</td>
                                                        <td>{{ $Product->type->name }}</td>
                                                        <td><img src="{{ asset('admin/images/' . $Product->image) }}"
                                                                alt="" style="width: 150px"></td>
                                                        <td>{{ $Product->admin->firstName . ' ' . $Product->admin->lastName }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading"> ตารางประเภทสินค้า </header>
                                <div class="breadcrumb">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>ชื่อ</th>
                                                    <th>จำนวนสินค้า</th>
                                                    <th>ผู้ที่สรางบทความ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($type_product as $type)
                                                    <tr>
                                                        <td>{{ $type->id_type }}</td>
                                                        <td>{{ $type->name }}</td>
                                                        <td>{{ $type->product->count() }}</td>
                                                        <td>{{ $type->admin->firstName . ' ' . $type->admin->lastName }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    ตารางรูปภาพหัวเว็บ
                                </header>
                                <div class="breadcrumb">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>รูป</th>
                                                    <th>ผู้ที่สรางบทความ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($header as $Header)
                                                    <tr>
                                                        <td>{{ $Header->id_header }}</td>
                                                        <td><img src="{{ asset('admin/images/' . $Header->image) }}"
                                                                alt="" style="width: 150px"></td>
                                                        <td>{{ $Header->admin->firstName . ' ' . $Header->admin->lastName }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading"> ตารางตัวอย่างสินค้า </header>
                                <div class="breadcrumb">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ลำดับ</th>
                                                    <th>รูป</th>
                                                    <th>ผู้ที่สรางบทความ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($show as $show_product)
                                                    <tr>
                                                        <td>{{ $show_product->id_show }}</td>
                                                        <td> <img
                                                                src="{{ asset('admin/images/' . $show_product->image) }}"
                                                                alt="" style="width: 150px"></td>
                                                        <td>{{ $show_product->admin->firstName . ' ' . $show_product->admin->lastName }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- Content Row -->


                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('layouts/admin/footer')
</body>

</html>
