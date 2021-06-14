@extends('dashboard.admin.default')
@section('content')
    <div class="card ">

        <div class="card-header ">
            <h4 class="card-title">Register Form</h4>
        </div>

        <div class="card-body ">


            <form action="{{route('user.create')}}" method="post" >
                @csrf
            <div class="form-group has-label">
                <label>
                    User Name
                    *
                </label>
                <input class="form-control"
                       name="username"
                       type="text"
                       required="true"
                />
            </div>


            <div class="form-group has-label">
                <label>
                    Email Address
                    *
                </label>
                <input class="form-control"
                       name="email"
                       type="email"
                       required="true"
                />
            </div>

            <div class="form-group has-label">
                <label>
                    Password
                    *
                </label>
                <input class="form-control"
                       name="password"
                       id="registerPassword"
                       type="password"
                       required="true"
                />
            </div>










            <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

    </div>
@endsection
