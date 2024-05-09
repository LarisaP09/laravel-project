@include('navigation.nav-bar')

<div class="container">
    <h2>Connect With Us</h2>
    <p>We would love to respond to your queries. <br>Feel free to get in touch with us.</p>
    <div class="contact-box">
        <div class="contact-left">
            <h3>Send your request</h3>
            <form id="form" method="POST" action="{{ route('contact') }}">
                @csrf
                <div class="input-row">
                    <div class="form-floating">
                        <input type="text" class="name form-control from-text" name="lastName" id="floatingLName" placeholder="Jack" value="{{ old('lastName') }}">
                        <label for="floatingLName">Last name</label>
                    </div>
                    @error('lastName')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-row">
                    <div class="form-floating">
                        <input type="text" class="name form-control from-text" name="firstName" id="floatingFName" placeholder="Adams" value="{{ old('fisrtName') }}">
                        <label for="floatingFName">First name</label>
                    </div>
                    @error('firstName')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-row">
                    <div class="form-floating">
                        <input type="email" class="email form-control from-text" name="email" id="floatingEmail" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingEmail">Email</label>
                    </div>
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-row">
                    <div class="form-floating">
                        <input type="text" class="subject form-control from-text" name="productName" id="floatingSubject" placeholder="Crop top product" value="{{ old('productName') }}">
                        <label for="floatingSubject">Product name</label>
                    </div>
                    @error('productName')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-row">
                    <div class="form-floating">
                        <input type="text" class="color form-control from-text" name="color" id="floatingcolor" placeholder="Color" value="{{ old('color') }}">
                        <label for="floatingcolor">Color</label>
                    </div>
                    @error('color')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating">
                    <textarea class="message form-control" name="message" placeholder="Leave a message here" id="floatingTextarea2" value="{{ old('message') }}"></textarea>
                    <label for="floatingTextarea2">Message</label>
                </div>
                @error('message')
                    <span class="error">{{ $message }}</span>
                @enderror
                <br>
                <button type="submit" id="submitForm" class="btn btn-secondary">Send</button>
            </form>
        </div>

        <div class="contact-right">
            <div class="input-row">
                <h3>Reach Us</h3>
            </div>
            <div class="input-row-iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2767.2403488404684!2d23.589319977051908!3d46.08618637109101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474ea94c4efade33%3A0xd0b472030cbb3647!2sCarolina%20Mall!5e0!3m2!1sro!2sro!4v1707041635308!5m2!1sro!2sro"></iframe>
            </div>
            <div class="input-row">
                <h3>Contact Us</h3>
            </div>
            <div class="input-row">
                <table>
                    <tr>
                        <td>Email</td>
                        <td>pulse.assis@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>0254635874</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>Str. Alexandru Ioan Cuza 2</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<section class="weather">
    <h3>Get your sport set for the perfect weather</h3>
    <form id="form" method="POST" action="{{ route('weather') }}">
        @csrf
        <input type="text" id="city-input" name="city" placeholder="Enter city name">
        <button type="submit" class="btn" id="get-weather-btn" name="get_weather_btn">Get Weather</button>
        @if(session('location') && session('temperature'))
                <div id="weather-output">
                    <p>Location: {{ session('location') }}</p></span>
                    <p>Temperature: {{ session('temperature') }}°C</p>
                </div>
        @endif
        
    </form>
</section>
@include('navigation.footer')