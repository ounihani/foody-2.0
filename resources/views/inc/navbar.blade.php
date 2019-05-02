<div class="ui secondary  menu inverted" style=" background-color: #e8402b;">
  <div class="ui container">
    <a class="" href="/">
      <img src="{{ asset('images/logo.png') }}" />
    </a>
    
    <!-- search -->


    <div class="menu item">
      <div class="item">
        <div class="ui icon input">
          <input type="text" placeholder="Search...">
          <i class="search link icon"></i>
        </div>
      </div>
    </div>

    <!--right menu-->

    <div class="right menu">
      @if (Auth::guest())
        <a class="ui item" href="{{ route('login') }}">Login</a>
        <a class="ui item" href="{{ route('register') }}">Register</a> 
      @else
        <div class="ui right dropdown item"> Profile
          <i class="dropdown icon">
          </i>
          <div class="menu">
            <div class="item"><a href="/posts/create" style="color : black ;">Create Post</a></div>
            <div class="item"><a href="/home" style="color : black ;">Dashboard</a></div>
            <div class="item">
              <a style="color : black ;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>
      @endif
    </div>
    
  </div>
</div>