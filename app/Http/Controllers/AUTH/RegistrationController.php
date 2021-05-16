<?php

    namespace App\Http\Controllers\Auth;
    use App\Models\User;
    use App\Models\Admin;
    use App\Models\Writer;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;

    class RegisterController extends Controller
    {

        public function __construct()
        {
            $this->middleware('guest');
            $this->middleware('guest:admin');
            $this->middleware('guest:writer');
        }

    }
