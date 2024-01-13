<!--Navigation Start-->
<div id="top-header-menu-area">
    <div class="menu-area menu-sticky">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3" >
            <div class="logo-area"> <a class="main--logo" href="{{ route('agent.home') }}"><img src="{{ asset('website/images/logo.png') }}" alt="logo"></a> </div>
          </div>
          <div class="col-sm-9" >
            <div id="main-nav" class="stellarnav">
              <ul>
                @if(Auth::guard('agent')->user())<li><a href="{{ route('agent.home') }}">Search</a></li>
                @else<li><a href="{{ route('employee.home') }}">Search</a></li>
                @endif
                @if(Auth::guard('agent')->user())<li><a href="{{ route('agent.booking-list') }}">Manage Orders</a></li>@endif
                <li><a href="#">Reporting</a></li>
              </ul>

              <ul class="list-right">
                  <li>
                      <a href="#"><i class="fas fa-language"></i> Eng</a>
                  </li>
                  @if(Auth::guard('agent')->user())<li>
                      <a href="#"><i class="fas fa-dollar-sign"></i> {{ Auth::guard('agent')->user() ? Auth::guard('agent')->user()->currency : '' }}</a>
                  </li>@endif
                  <li class="{{  \App\Models\Notification::where('user_type',Auth::guard('agent')->user()->company_name)->where('isRead','0')->count() > 0 ? 'notification-icon' : '' }}">
                    <a href="{{ route('agent.profile') }}"><i class="fas fa-headset"></i> Support</a>
                  </li>
                  <li class="line-en">
                        <a>Hi, {{ Auth::guard('agent')->user() ? Auth::guard('agent')->user()->person_name : Auth::guard('employee')->user()->first_name }}</a>
                  </li>
                  <li>
                    @if(Auth::guard('agent')->user())<a href="{{ route('agent.profile') }}"> Agent Profile</a>@endif
                    @if(Auth::guard('employee')->user())<a href="{{ route('employee.profile') }}"> Staff Profile</a>@endif
                      <li>
                        <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                   </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Navigation End-->
