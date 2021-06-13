@extends('dashboard.admin.default')
@section('content')
    <div class="card ">

        <div class="card-header ">
            <h4 class="card-title">Register Form</h4>
        </div>

        <div class="card-body ">







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

            <div class="form-group has-label">
                <label>
                    Confirm Password
                    *
                </label>
                <input class="form-control"
                       name="password_confirmation"
                       id="registerPasswordConfirmation"
                       type="password"
                       required="true"
                       equalTo="#registerPassword"
                />
            </div>

            <div class="category form-category">* Required fields</div>



        </div>



        <div class="card-footer text-right">
            <div class="form-check pull-left">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="optionCheckboxes" required>
                    <span class="form-check-sign"></span>
                    Subscribe to newsletter
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </div>

    </div>
@endsection
