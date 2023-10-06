<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index3.html" class="brand-link">
    <span class="brand-text font-weight-light">Sistema financeiro</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">Olá {{ Auth::user()->name }}</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
      @foreach ($menus as $menu)
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              {{ $menu->pm_description }}
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          @if($menu->submenus->count() > 0)
            <ul class="nav nav-treeview">
              @foreach($menu->submenus as $submenu)
           
              <li class="nav-item">
                <a href="{{ isset($submenu->ps_link) && !empty($submenu->ps_link) ? route($submenu->ps_link) : '#' }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>{{ $submenu->ps_description}}</p>
                </a>
              </li>
              @endforeach
            </ul>
          @endif
        </li>
      @endforeach
      </ul>
    </nav>
  </div>
</aside>