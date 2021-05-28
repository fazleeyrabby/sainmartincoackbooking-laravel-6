 <header class="app-header" style="background-color:{{ $generalsetting->dashboardHeaderColor  }}">
  <a class="app-header__logo" style="background-color:{{ $generalsetting->dashboardHeaderLogoColor  }} " href="{{ url('/admin') }}">
    <img src="{{ asset('/public/assets/admin/logo/') }}/{{ $generalsetting->logo  }}" alt="Logo" class="img-responsive"/ height="48" width="205">
  </a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
         <!--Notification Menu-->
          <?php
            $pending = App\Booking::where('status',1)->count();
          ?>
       <li class="dropdown"><a class="app-nav__item" title="Order notification" href="#" data-toggle="dropdown" aria-label="Show notifications"><span class="badge badge-danger">{{ $pending }}</span><i class="fa fa-bell-o fa-lg"></i></a> 
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have {{ $pending }} new order notifications.</li>
            <?php
             $pending_orders = App\Booking::where('status',1)
                                ->orderBy('booking_id','desc')
                                ->take(5) 
                                ->get();
            ?>
            @foreach($pending_orders as $pending_order)
            <div class="app-notification__content">
              <li>
                <a class="app-notification__item" href="{{ route('booking.show',$pending_order->booking_id) }}">
                  <span class="app-notification__icon">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                  </span>
                  <div>
                    <p class="app-notification__message">
                      
                        <strong>{{$pending_order->ran_order_id}}</strong>  You have new order
                    </p>
                    <p class="app-notification__meta">
                        <?php
                          $mytime = Carbon\Carbon::parse($pending_order->created_at);
                        ?>
                      {{ $mytime }}</p>
                  </div>
                </a>
              </li>
            </div>
            @endforeach
            <li class="app-notification__footer"><a href="">See all notifications.</a></li>
          </ul>
        </li> 
        <!-- User Menu-->
        <li class="dropdown">
          <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
            <!-- <i class="fa fa-user fa-lg"></i> -->
            <img src="{{ asset('public/assets/admin/logo') }}/{{ Auth()->user()->photo  }}" height="30" width="30" class="img-responsive rounded">
          </a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="{{ route('generalSetting.create') }}"><i class="fa fa-cog fa-lg"></i> General Settings</a>
            </li>
            <li><a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="fa fa-user fa-lg"></i> Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
           </form>
          </li>
          </ul>
        </li>
      </ul>
    </header>