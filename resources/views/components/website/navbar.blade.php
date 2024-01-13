<div class="navbar-container">
    <div class="container-lg">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="{{ route('website.home') }}">
                <img src="{{ asset('website/images/logo.png') }}" alt="" width="200px">
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item {{ Route::current()->getName()== 'website.home' ? 'nav-item active' : ''  }}">
                        <a class="nav-link" href="{{ route('website.home') }}"><i class="fas fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName()== 'website.about' ? 'nav-item active' : ''  }}">
                        <a class="nav-link" href="{{ route('website.about') }}"><i class="fas fa-info-circle"></i> About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('website.home') }}#services"><i class="fas fa-cogs"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('website.home') }}#technology"><i class="fas fa-laptop"></i> Technology</a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName()== 'website.contact-us' ? 'nav-item active' : ''  }}">
                        <a class="nav-link" href="{{ route('website.contact-us') }}"><i class="fas fa-envelope"></i> Contact Us</a>
                    </li>
                    @if (Auth::guard('agent')->user() || Auth::guard('employee')->user())
                    <li class="nav-item">
                        <a class="nav-link"> Hello : @if (Auth::guard('agent')->user()) {{ Auth::guard('agent')->user()->person_name }} @else {{ Auth::guard('employee')->user()->first_name }} @endif</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i>
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" id="login-button"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item {{ Route::current()->getName()== 'agent.getRegister' ? 'nav-item active' : ''  }} ">
                        <a class="nav-link" href="{{ route('agent.getRegister') }}"><i class="fas fa-user-plus"></i> Register</a>
                    </li>
                    @endif
                </ul>

            </div>
        </nav>
    </div>
</div>

<!-- Modal Sginup -->

<div id="login-tab" class="hidden">
        <div class="login-body">
            <div class="row align-items-center justify-content-center">

            <div class="col-md-12">
                <div class="login-form">
                <h3>SIGN IN</h3>
                <form method="POST" action="{{ route('agent.login') }}">
                    @csrf
                    <div class="mail-input">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"
                        ><i class="fa-solid fa-envelope"></i
                        ></span>
                        <input
                        name="person_email"
                        id="signInEmail"
                        type="email"
                        class="form-control"
                        placeholder="Email"
                        aria-label="Username"
                        aria-describedby="addon-wrapping"
                        />
                    </div>
                    </div>
                    <div class="password-input">
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping"
                        ><i class="fa-solid fa-lock"></i
                        ></span>
                        <input name="password"
                        id="signInPassword"
                        type="password"
                        class="form-control"
                        placeholder="Password"
                        aria-label="Username"
                        aria-describedby="addon-wrapping"
                        />
                    </div>
                    </div>
                    <p id="loginError" class="alert text-danger d-none">
                    Your email or password is wrong or cant be empty
                    </p>
                    <button type="submit" id="signInBtn" class="submit d-block m-auto mb-3" style="width: max-content;">
                    Login</button>
                </form>
                <a href="#">To work with us ? Register here </a>
                <!-- Add Forgot Password link below the login form -->
                    <div class="forgot-password-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
</div>
