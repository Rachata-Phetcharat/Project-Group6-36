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
                                <h3 class="page-header"><i class="fa fa-table"></i> หน้าหัวเว็บ</h3>
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
                                        <a href="{{ route('add_header') }}" class="btn btn-primary mb-3">เพิ่มข้อมูล</a>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>
                                                        <th>รูป</th>
                                                        <th>สถานะ</th>
                                                        <th>ผู้ที่สรางบทความ</th>
                                                        <th>ลบข้อมูล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($header as $Header)
                                                        <tr>
                                                            <td>{{ $Header->id_header }}</td>
                                                            <td><img src="{{ asset('admin/images/' . $Header->image) }}"
                                                                    alt="" style="width: 150px"></td>
                                                            <td>
                                                                <input type="checkbox"
                                                                    data-id="{{ $Header->id_header }}" name="status"
                                                                    class="js-switch"
                                                                    {{ $Header->status == 'open' ? 'checked' : '' }}>
                                                                {{-- <label class="switch">
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round">{{$Header->status}}</span>
                                                                </label> --}}
                                                            </td>
                                                            <td>{{ $Header->admin->firstName . ' ' . $Header->admin->lastName }}
                                                            </td>
                                                            <td><a
                                                                    href="{{ url('/Admin/header/delete/' . $Header->id_header) }}"><button
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

<script>
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        let switchery = new Switchery(html, {
            size: 'small'
        });
    });


    $(document).ready(function() {
        $('.js-switch').change(function() {
            let status = $(this).prop('checked') === true ? 'open' : 'close';
            let Idheader = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('header.update.status') }}',
                data: {
                    'status': status,
                    'id_header': Idheader
                },
                success: function(data) {
                    console.log(data.message);
                }
            });
        });
    });
</script>



</html>
