<nav id="sidebar">
    <div class="menu_section">
        <ul>
            <li><a href="{{ route('welcome') }}">หน้าหลัก</a></li>
            <li><a href="{{ route('product.f') }}">สินค้าเเละบริการ</a></li>
            <li><a href="{{ route('work') }}">ผลงานของเรา</a></li>
            <li><a href="{{ route('contact') }}">ติดต่อ</a></li>
            <li class="nav-item">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </li>
        </ul>
    </div>
</nav>
