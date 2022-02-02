@include ('layouts/layouts-front/head')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img class="img-responsive" src="{{ asset('admin/img/loader.gif') }}" alt="#" />
        </div>
    </div>
    <!-- END LOADER -->

    <div class="wrapper">
        @include ('layouts/layouts-front/navbar')
        <div id="content">

            <!-- Start header -->
            <header class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo_main">
                                <a href="{{ route('welcome') }}"><img
                                        src="{{ asset('admin/img/main-logo.png') }}" /></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img
                                    src="{{ asset('admin/img/menu_icon.png') }}"></button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End header -->

            <!-- Start Banner -->
            <div class="ulockd-home-slider">
                <div class="container-fluid">
                    <div class="row">
                        <div class="pogoSlider" id="js-main-slider">

                            @foreach ($headers as $header)
                                <div class="pogoSlider-slide"
                                    style="background-image:url({{ asset('admin/images/' . $header->image) }});"
                                    width-"100%">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="slide_text white_fonts">
                                                    <h3>ร้านจำหน่ายผ้าม่าน<br>ร้านผ้าม่าน<strong
                                                            class="theme_color">เพชรรัตน์</strong></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pogoSlider-slide"
                                    style="background-image:url({{ asset('admin/images/' . $header->image) }});">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="slide_text white_fonts">
                                                    <h3>Phetcharat<br>Curtain<strong
                                                            class="theme_color">Shop</strong>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                        <!-- .pogoSlider -->
                    </div>
                </div>
            </div>
            <!-- End Banner -->

            <!-- section -->
            <div class="section about_section layout_padding half_bg_theme padding_bottom_0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full text_align_right_img">
                                <img src="{{ asset('admin/img/C-6.jpg') }}" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="full paddding_left_15">
                                <div class="heading_main text_align_left">
                                    <h2><span class="theme_color">เรื่องน่ารู้</span><br>เกี่ยวผ้าม่าน</h2>
                                </div>
                            </div>
                            <div class="full paddding_left_15">
                                <p> ม่าน
                                    คือวัสดุที่ใช้สำหรับสำหรับป้องกันหรือบดบังแสงหรือลมโดยมากมักหมายถึงวัสดุที่ทำจากผ้า
                                    ผ้าม่านจะแขวนเหนือประตู หรือเรียกว่าม่านประตู
                                    ม่านมักแขวนภายในอาคารเหนือหน้าต่างเพื่อกันแสง
                                    หรือในตอนกลางคืนเพื่อความเป็นส่วนตัวในการนอนหลับ
                                    หรือป้องกันแสงออกนอกอาคาร ผ้าม่านมีความหลากหลายทั้งรูปร่าง วัสดุ ขนาด สีสันและลวดลาย
                                    โดยส่วนมากจะมีแผนกที่จำหน่ายผ้าม่านโดยเฉพาะในห้างสรรพสินค้า
                                    ขณะที่ในบางร้านก็ขายผ้าม่านโดยเฉพาะ
                                </p>
                                <p>
                                    ผ้าม่านมีหลายรูปแบบ ผ้าม่านจีบ
                                    ผ้าม่านตาไก่ ผ้าม่านคอกระเช้า
                                    ผ้าม่านพับ ผ้าม่านหลุยส์ ผ้าม่านลอน เป็นต้น.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section -->
            <!-- section -->
            <div class="section team_section layout_padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="full">
                            <div class="heading_main text_align_center">
                                <h2><span class="theme_color">รูปตัวอย่าง</span><br>สินค้า</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="full">
                                <div class="row">
                                    <div class="col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <div id="demo" class="popolar_fitness carousel slide" data-ride="carousel">
                                            <!-- The slideshow -->
                                            <div class="carousel-inner">

                                                @for ($i = 0; $i < $count; $i++)
                                                    <div class="carousel-item @if ($i === 0) active @endif">
                                                        <div class="row">
                                                            @foreach ($products->skip($i * 3)->take(3) as $product)
                                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                                    <div class="full blog_img_popular">
                                                                        <img src="{{ asset('admin/images/' . $product->image) }}"
                                                                            class="img-responsive img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="carousel-control-prev" href="#demo" data-slide="prev"><i
                                                    class="fa fa-long-arrow-left"></i></a>
                                            <a class="carousel-control-next" href="#demo" data-slide="next"><i
                                                    class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="full paddding_left_15 margin-top_30">
                                <div class="center">
                                    <a class="main_bt" href="{{ route('product.f') }}">ดูรายละเอียดสินค้า</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section -->
            <!-- section -->
            <div class="section about_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="full paddding_left_15">
                                <div class="heading_main text_align_left">
                                    <h2>คำเเนะนำในการ<span class="theme_color">เลือกผ้าม่านให้เหมาะกับบ้าน</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="full service_pro_section">
                                <div class="row">
                                    <h5 class="advice-left mt-auto">
                                        <p>
                                            1.ถ้าต้องการให้ห้องดูโล่งกว้างสบายตา ควรเลือกใช้ม่านสีโทนอ่อน
                                        </p>
                                        <p>
                                            2.ถ้าต้องการให้ห้องมีพื้นที่กระชับหรือดูเข้มขรึม สงบนิ่ง
                                            ควรเลือกใช้ม่านสีโทนเข้ม
                                        </p>
                                        <p>
                                            3.ผ้าม่านที่มีลวดลายหรือเส้นสายใหญ่ๆ จะช่วยให้ห้องดูเล็กลง
                                            จึงเหมาะกับการใช้ในห้องโถงหรือห้องรับแขกขนาดใหญ่
                                        </p>
                                        <p>
                                            4.ผ้าม่านที่มีลวดลายเล็กๆ ให้ผลตรงข้ามกัน เพราะจะช่วยให้ห้องดูกว้างขึ้น
                                            จึงมักใช้ในห้องขนาดเล็กหรือห้องชุดคอนโดมิเนียมเป็นส่วนใหญ่
                                        </p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text_align_right">
                            <div class="full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end section -->

            <!-- section -->
            <div class="section story_section layout_padding">
                <div class="container-fluid">
                    <div class="row white_bg">
                        <div class="col-md-6">
                            <div class="full story_blog paddding_left_15">
                                <div class="heading_main text_align_left">
                                    <h2><span class="theme_color">ผ้าม่าน</span>ในเเต่ละห้อง<br></h2>
                                </div>
                            </div>
                            <div class="full paddding_left_15">
                                <h4>ห้องนั่งเล่น</h4>
                                <p>ม่านในห้องนี้ใช้เพื่อความสวยงาม ช่วยกันแสงและกรองเสียง
                                    ทั้งยังเพิ่มความเป็นส่วนตัวให้แขกและเจ้าของบ้าน
                                    ควรเลือกโทนสีผ้าม่านที่ไปด้วยกันกับโทนสีของห้องและเฟอร์นิเจอร์ แนะนำให้ใช้ม่านแบบ 2
                                    ชั้นที่มีทั้งผ้าม่านทึบและผ้าม่านโปร่งไม่ควรเลือกสีจัดจนเกินไป
                                    เพราะจะทำให้ห้องนั่งเล่นดูอึดอัด
                                </p>
                                <h4>ห้องนอน</h4>
                                <p>ม่านในห้องนอนต้องสามารถบังแดดและป้องกันเสียงได้ดี
                                    ควรใช้ม่านที่ช่วยบังแสงแดดที่จะส่องเข้าห้องในตอนเช้าและบดบังสายตาจากภายนอกได้ดี
                                    ทั้งนี้ควรเลือกโทนสีม่านให้กลมกลืนกับสีห้องและเฟอร์นิเจอร์ นอกจาก ประเภทของผ้าม่าน
                                    ที่ต้องคำนึงถึงแล้ว
                                    สีของผ้าม่าน ก็เป็นปัจจัยอันดับต้น ๆ ของการพักผ่อนที่จะช่วยให้ห้องนอนรู้สึกผ่อนคลาย
                                    เน้นโทนสีเย็นตาดีกว่าสีโทนร้อน
                                </p>
                                <h4>ห้องรับประทานอาหาร</h4>
                                <p>นอกจากใช้กันแดดแล้ว
                                    ม่านยังช่วยแบ่งสัดส่วนภายในห้องช่วยกันฝุ่นและไอระเหยจากน้ำมันของอาหารได้ด้วยควรเน้นม่านสีสดๆ
                                    เช่น สีเขียว สีแดง สีเหลือง สีส้ม เพื่อกระตุ้นความอยากอาหาร
                                    แต่ต้องดูให้เข้ากับโทนสีของห้องด้วยหรือจะใช้มู่ลี่แทนก็ได้
                                    เพราะสามารถปรับแสงและบังสายตาได้ดีแถมทำความสะอาดง่าย
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="full text_align_right_img">
                                <img class="img-responsive" src="{{ asset('admin/img/C-6.jpg') }}" alt="#" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include ('layouts/layouts-front/footer')
</body>

</html>
