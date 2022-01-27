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
                            <h3>ผลงานของเรา</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End inner page banner -->

    <!-- section -->
    <div class="section about_section layout_padding">
        <div class="container">
            <div class="full paddding_left_15">
                <div class="heading_main text_align_left">
                    <h2><span class="theme_color">ผลงาน</span>การติดตั้งผ้าม่าน</h2>
                </div>
            </div>

            <div class="row">
                @foreach ($shows as $show)
                    <div class="col-sm-3">
                        <div class="img-thumbnail mb-3" style="width: 18rem;">
                            <img src="{{ asset('admin/images/' . $show->image) }}" class="card-img-top img-fluid"
                                style="width: 280px;" alt="">
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{-- <div class="tm-body">
            <div class="tm-gallery-container">
                <div class="grid">
                    <div class="grid-item">
                        @foreach ($shows as $show)
                            <img src="{{ asset('admin/images/' . $show->image) }}" style="width: 280px;" alt="Image">
                        @endforeach
                    </div>
                    <div class="col-sm-3">
                            <div class="img-thumbnail mb-3" style="width: 18rem;">
                                <img src="{{ asset('admin/images/' . $show->image) }}" class="card-img-top img-fluid"
                                style="width: 280px;" alt="">
                            </div>
                        </div>
                </div>
            </div>
        </div> --}}

    </div>

    @include ('layouts/layouts-front/footer')
</body>
