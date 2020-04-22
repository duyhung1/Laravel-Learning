<nav class="navbar navbar-expand-sm bg-dark navbar-dark shadow-sm">
  <div class="container">
      <!-- <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a> -->
      <a class="navbar-brand" href="{{ route('index') }}">Trang chủ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
              <!-- <div class="navbar-item has-dropdown is-hoverable is-mega">
                <div class="navbar-link">Thể loại</div>
                <div class="navbar-dropdown">
                  <div class="container">
                    <div class="level">
                      <div class="level-left mega-list-wrapper">
                        <div class="columns">
                          <div class="column column-menu">
                            <ul class="mega-list">
                              <li>
                                <a href=" ">Ngôn tình</a>
                              </li>
                              <li>
                                <a href=" ">Trinh thám</a>
                              </li>
                            </ul>
                          </div>
                          <div class="column column-menu">
                            <ul class="mega-list">
                              <li>
                                <a href=" ">Cổ đại</a>
                              </li>
                              <li>
                                <a href=" ">Xuyên không</a>
                              </li>
                            </ul>
                          </div>
                          <div class="column column-menu">
                            <ul class="mega-list">
                              <li>
                                <a href=" ">Thiếu nhi</a>
                              </li>
                              <li>
                                <a href=" ">Trinh thám</a>
                              </li>
                            </ul>
                          </div>
                          <div class="column column-menu">
                            <ul class="mega-list">
                              <li>
                                <a href=" ">Ngôn tình</a>
                              </li>
                              <li>
                                <a href=" ">Trinh thám</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">Thể loại</a>
              </li> -->
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Thể loại
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('other.about') }}">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>

              <li class="nav-item">
                  <a class="nav-link" href="{{ route('other.about') }}">Sắp xếp</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('other.about') }}">Theo Dõi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('other.about') }}">Thảo luận</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('other.about') }}">Fanpage</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('other.about') }}">Linh tinh</a>
              </li>    
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
                <!-- <form class="form-inline" action="/action_page.php">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-success" type="submit">Search</button>
                </form> -->

                  <form class="form-inline" action="/action_page.php">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Tìm kiếm">
                      <button type="submit" class="fa fa-search"></button>
                    </div>
                  </form>

              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>