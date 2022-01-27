@include('layouts/admin/head')

<body id="page-top">
    <!-- container section start -->
    <div id="wrapper">
        <!--sidebar start-->
        @include('layouts/admin/sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <!--header start-->
            @include('layouts/admin/header')

            <!--main content start-->
            <div class="container-fluid">
                <section id="main-content">
                    <section class="wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="page-header"><i class="fa fa-table"></i> หน้าสินค้า</h3>
                                <!-- <ol class="breadcrumb">
                                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                                    <li><i class="fa fa-table"></i>Table</li>
                                    <li><i class="fa fa-th-list"></i>Basic Table</li>
                                </ol> -->
                                <hr>
                            </div>
                        </div>

                        @if (session('success'))
                            <script>
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'บันทึกข้อมูลเรียบร้อย',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            </script>
                        @endif

                        @if (session('delete'))
                            <script>
                                Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'ลบข้อมูลเรียบร้อย',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                            </script>
                        @endif


                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <div class="breadcrumb">
                                        <a href="{{ route('add_product') }}"
                                            class="btn btn-primary mb-3">เพิ่มข้อมูล</a>
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
                                                        <th>แก้ไขข้อมูล</th>
                                                        <th>ลบข้อมูล</th>
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
                                                            <td><a href="{{ url('/Admin/product/edit_products/' . $Product->id_product) }}"
                                                                    class="btn btn-warning btn-circle"><i
                                                                        class="fas fa-edit"></i></a></td>
                                                            <td><a
                                                                    href="{{ url('/Admin/product/delete/' . $Product->id_product) }}"><button
                                                                        type="submit"
                                                                        class="btn btn-danger btn-circle"><i
                                                                            class="fas fa-trash"></i></button></a>
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
                        <!-- page end-->
                    </section>
                </section>
            </div>
            <!--main content end-->
        </div>
    </div>

    @include('layouts/admin/footer')
</body>

</html>
