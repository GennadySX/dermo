@section('login')

    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf

        <span class="login100-form-title">
						Member Login
					</span>

    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="{{ __('E-Mail Address') }}" value="{ old('email') }}">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="pass" placeholder="{{ __('Password') }}">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="container-login100-form-btn">
        <button class="login100-form-btn">
            {{ __('Login') }}
        </button>
    </div>

    <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
        @if (Route::has('password.request'))


        <a class="txt2" href="{{ route('password.request') }}">
            Username / Password
        </a>
           @endif
    </div>

    <div class="text-center p-t-136">
        <a class="txt2" href="#">
            Create your Account
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
        </a>
    </div>
</form>
@endsection

@section('signup')
    <form class="login100-form validate-form">
					<span class="login100-form-title">
						Become our user
					</span>
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass" placeholder="Repeat password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
							<i class="fa fa-repeat" aria-hidden="true"></i>
						</span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Sign Up
            </button>
        </div>



        <div class="text-center p-t-136">
            <a class="txt2" href="/login">
                Login
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>
@endsection