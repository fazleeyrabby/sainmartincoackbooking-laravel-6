 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar" style="background-color: {{ $generalsetting->dashboardSidebarColor  }}">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar img-responsive" src="{{ asset('public/assets/admin/logo') }}/{!! Auth::user()->photo !!}" alt="User Image" height="50">
        <div>
          <p class="app-sidebar__user-name">{!! Auth::user()->name !!}</p>
          <p class="app-sidebar__user-designation">{!! Auth::user()->email !!}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{ session('menu') == 'dashboard' ? 'active' : '' }}" href="{{ url('/admin') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Slider</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ session('menu') == 'sliderManage' ? 'active' : '' }}" href="{{ route('slider.index') }}"><i class="icon fa fa-circle-o"></i> Manage Slider</a></li>
            <li class=""><a class="treeview-item {{ session('menu') == 'sliderCreate' ? 'active' : '' }}" href="{{ route('slider.create') }}"><i class="icon fa fa-circle-o"></i> Create Slider</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-automobile"></i><span class="app-menu__label">Rent For Our Coach</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item {{ session('menu') == 'rentCoachManage' ? 'active' : '' }}" href="{{ route('rent.index') }}"><i class="icon fa fa-circle-o"></i> Manage </a></li>
            <li><a class="treeview-item {{ session('menu') == 'rentCoachCreate' ? 'active' : '' }}" href="{{ route('rent.create') }}"><i class="icon fa fa-circle-o"></i> Create </a></li>
          </ul>
        </li>
        <li class=""><a class="app-menu__item {{ session('menu') == 'welcomeMessage' ? 'active' : '' }}" href="{{ route('welcomemessage.create') }}"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Welcome-Message </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'about' ? 'active' : '' }}" href="{{ route('about.create') }}"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">About Us </span></a>
        </li> 
        <li><a class="app-menu__item {{ session('menu') == 'profile' ? 'active' : '' }}" href="{{ route('ourProfile.create') }}"><i class="app-menu__icon fa fa-file-pdf-o"></i><span class="app-menu__label">Our Profile </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'serviceCategory' ? 'active' : '' }}" href="{{ route('serviceCategory.create') }}"><i class="app-menu__icon fa fa-magic"></i><span class="app-menu__label">Service</span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'booking' ? 'active' : '' }}" href="{{ route('booking.create') }}"><i class="app-menu__icon fa fa-magic"></i><span class="app-menu__label">Booking</span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'destination' ? 'active' : '' }}" href="{{ route('destination.create') }}">
          <i class="app-menu__icon fa fa-map-marker"></i>
          <span class="app-menu__label">Destination </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'coach' ? 'active' : '' }}" href="{{ route('coach.create') }}"><i class="app-menu__icon fa fa-bus"></i><span class="app-menu__label">Coach </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'award' ? 'active' : '' }}" href="{{ route('award.create') }}"><i class="app-menu__icon fa fa-trophy"></i><span class="app-menu__label">Award </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'gallery' ? 'active' : '' }}" href="{{ route('gallery.create') }}"><i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label">Gallery </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'clientCategory' ? 'active' : '' }}" href="{{ route('clientCategory.create') }}"><i class="app-menu__icon fa fa-list-alt"></i><span class="app-menu__label">Client Category </span></a>
        </li>
        <li><a class="app-menu__item {{ session('menu') == 'client' ? 'active' : '' }}" href="{{ route('client.create') }}"><i class="app-menu__icon fa fa fa-user"></i><span class="app-menu__label">Client </span></a>
        </li> 
        <li><a class="app-menu__item {{ session('menu') == 'clientSlider' ? 'active' : '' }}" href="{{ route('clientSlider.create') }}"><i class="app-menu__icon fa fa-sliders"></i><span class="app-menu__label">Clients Slider</span></a>
        </li>
        </li>
      </ul>
    </aside>
