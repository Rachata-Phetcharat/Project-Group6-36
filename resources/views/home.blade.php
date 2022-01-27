@include('layouts/admin/head')

@include('layouts/admin/header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>FirsName : </strong>{{ Auth::user()->firstName }} <strong>LastName :
                        </strong>{{ Auth::user()->lastName }}</p>
                    <p><strong>Userame : </strong>{{ Auth::user()->username }}</p>
                    <p><strong>Email : </strong>{{ Auth::user()->email }}</p>

                    <p>
                        @if (Auth::user()->checkIsAdmin())
                            <a href="{{ route('admin') }}" class="btn btn-primary">product management</a>
                        @endif
                        <a href="{{ route('welcome') }}" class="btn btn-success">home</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts/admin/footer')
