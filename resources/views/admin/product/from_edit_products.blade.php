@include('layouts/admin/head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                                            <form role="form"  action="{{url('/Admin/product/update/'.$edit_product->id_product)}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">เนื้อหา</label>
                                                    <input class="form-control" name="heading" id="heading" value="{{$edit_product->heading}}">

                                                    @error('heading')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" name="desctiption" id="desctiption" value="{{$edit_product->text}}">

                                                    @error('desctiption')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="form-group">
                                                    <input class="form-control" name="type_product" id="type_product" value="{{$edit_product->id_type}}">

                                                    @error('type_product')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div> --}}

                                                <div class="form-group">

                                                    <select class="form-control" name="type_product" id="type_product">
                                                        <option selected="selected" value="{{$edit_product->id_type}}">{{$edit_product->type->name}}</option>
                                                        @foreach ($Type_product as $rows)
                                                            <option value="{{$rows->id_type}}">{{$rows->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('type_product')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" name="image" id="image">
                                                    <p class="help-block">Example block-level help text here.</p>

                                                    @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                    
                                                    <img id="showImage" src="{{asset('admin/images/'.$edit_product->image)}}" alt="" style="width: 150px;">
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
        </div>
    </div>
    <!-- End of Content Wrapper -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    @include('layouts/admin/footer')
</body>