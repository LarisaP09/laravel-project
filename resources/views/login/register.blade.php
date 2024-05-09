@include('navigation.nav-bar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <div class="contact-box">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="user_username" class="form-control @error('user_username') is-invalid @enderror" placeholder="Enter username" value="{{ old('username') }}">
                        @error('user_username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="user_lastname" class="form-control @error('user_lastname') is-invalid @enderror" placeholder="Enter last name" value="{{ old('lastname') }}">
                        @error('user_lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="user_firstname" class="form-control @error('user_firstname') is-invalid @enderror" placeholder="Enter first name" value="{{ old('firstname') }}">
                        @error('user_firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="user_email" class="form-control @error('user_email') is-invalid @enderror" placeholder="Enter email" value="{{ old('email') }}">
                        @error('user_email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="user_pwd" class="form-control @error('user_pwd') is-invalid @enderror" placeholder="Enter password">
                        @error('user_pwd')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-secondary" value="Submit">
                    </div>
                    <p>Already have an account? <a href="{{ route('login') }}">Login here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</div>

@include('navigation.footer')
