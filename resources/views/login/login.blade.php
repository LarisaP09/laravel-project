@include('navigation.nav-bar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input_row">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="contact-box">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control @error('user_username') is-invalid @enderror" name="user_username" value="{{ old('user_username') }}" required autocomplete="user_username" autofocus>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('user_pwd') is-invalid @enderror" name="user_pwd" required autocomplete="current-password">
                            @error('user_pwd')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-secondary" value="Login"></button>
                        </div>
                        <p>Don't have an account? <a href="{{ route('register') }}">Sign up now</a>.</p>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@include('navigation.footer')
