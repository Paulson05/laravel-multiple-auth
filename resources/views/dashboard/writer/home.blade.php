@extends('dashboard.admin.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Hi there, awesome writer <a class="nav-link js-scroll-trigger" href="{{ route('user.logout') }}">sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
