@include ('layouts/layouts-front/head')

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    @include ('layouts/layouts-front/navbar')
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('admin/img/loader.gif') }}" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->
    <!-- Inner page banner -->
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo_main">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('admin/img/main-logo.png') }}" /></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img
                            src="{{ asset('admin/img/menu_icon.png') }}"></button>
                </div>
            </div>
        </div>
    </header>

    @foreach ($headers as $header)
        <div id="inner_page_banner" class="section"
            style="background-image:url({{ asset('admin/images/' . $header->image) }});background-size: cover;background-position: center center;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="full">
                            <h3>สินค้าเเละบริการ</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- End inner page banner -->

    <!-- section -->
    <div class="section team_section layout_padding">
        <div class="container-fluid">
            <div class="full">
                <div class="heading_main text_align_center">
                    <h2><span class="theme_color">สินค้า</span></h2>
                </div>
            </div>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4">
                        <div class="card-deck">
                            <div class="card mb-3">
                                <img src="{{ asset('admin/images/' . $product->image) }}"
                                    class="card-img-top img-fluid" style="width: 280px; margin: auto auto;" alt="">
                                <div class="card-body">
                                    <h2 class="card-title">ชื่อ : {{ $product->heading }}.</h2>
                                    <h2 class="card-title">ประเภท : {{ $product->type->name }}</h2>
                                    <p class="card-text">{{ $product->text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- end section -->

            <!-- section -->
            <div class="section story_section layout_padding">
                <div class="container-fluid">
                    <div class="row white_bg">
                        <div class="col-md-6">
                            <div class="full story_blog paddding_left_15">
                                <div class="heading_main text_align_left">
                                    <h2><span class="theme_color">การบริการ</span>เพิ่มเติม</h2>
                                </div>
                            </div>
                            <h4>
                                เราบริการติดตั้งถึงบ้าน รับบริการ <br> การซักผ้าม่าน ซ่อมแซม ในราคาที่เป็นกันเอง
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include ('layouts/layouts-front/footer')

</body>
