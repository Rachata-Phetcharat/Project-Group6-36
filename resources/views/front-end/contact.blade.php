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
                            <h3>ช่องทางการติดต่อ</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- End inner page banner -->

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12 black_fonts mt-5">
                <h1>ติดต่อทาง</h1>
                <iframe class="map mt-3"
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d247949.65066221976!2d100.42195819976048!3d13.82622719960288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgooglemap!5e0!3m2!1sth!2sth!4v1629112331234!5m2!1sth!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <div class="mt-4">
                    <p>
                        ที่อยู่:94/174 หมู่ที่ 11 ต.บางบัวทอง อ.บางบัวทอง จ.นนทบุรี 11110
                        <br>เบอร์ติดต่อ:0878264038<br>Email: Petcharat@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 text-center">

        <div class="row">
            <div class="col-md-12 black_fonts mt-5">
                <h1>ผู้จัดทำ</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 black_fonts mt-3">
                <div class="card img-fluid" style="width: 22rem;">
                    <img src="{{ asset('admin/img/M-1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">นายรชต เพชรรัตน์</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 black_fonts mt-3">
                <div class="card img-fluid" style="width: 22rem;">
                    <img src="{{ asset('admin/img/M-2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">นายธนัตถ์ มุลบุตร </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 black_fonts mt-3">
                <div class="card img-fluid" style="width: 22rem;">
                    <img src="{{ asset('admin/img/M-3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">นายนพรัตน์ อรัญญิก</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Footer -->

    @include ('layouts/layouts-front/footer')
</body>
