   <!-- end section -->
   <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">ร้านจำหน่ายผ้าม่านร้านผ้าม่านเพชรรัตน์</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('admin/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.pogo-slider.min.js')}}"></script>
    <script src="{{asset('admin/js/slider-index.js')}}"></script>
    <script src="{{asset('admin/js/smoothscroll.js')}}"></script>
    <script src="{{asset('admin/js/form-validator.min.js')}}"></script>
    <script src="{{asset('admin/js/contact-form-script.js')}}"></script>
    <script src="{{asset('admin/js/isotope.min.js')}}"></script>
    <script src="{{asset('admin/js/images-loded.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.js')}}"></script>
    <!-- End Google Map -->
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
