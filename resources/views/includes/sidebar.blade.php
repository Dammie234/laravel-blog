<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu</li>
                <li  class="mm-active"      >
                    <a href="{{ route('home') }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>Dashboards
                    </a>
                </li>
                
                <li class="app-sidebar__heading">Category</li>
                <li>
                    <a href="{{ route('category.create') }}" >
                        <i class="metismenu-icon pe-7s-graph"></i>Add New
                    </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}" >
                        <i class="metismenu-icon pe-7s-way"></i>All Categories
                    </a>
                </li>
               
                <li class="app-sidebar__heading">Post</li>
                <li>
                    <a href="{{ route('post.create') }}" >
                        <i class="metismenu-icon pe-7s-graph2"></i>Add New
                    </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}" >
                        <i class="metismenu-icon pe-7s-graph"></i>All Posts
                    </a>
                </li>
               <li>
                   @if(Auth::user()->role == 1)
                    <li class="app-sidebar__heading">Users</li>
                    <li>
                        <a href="{{ route('users') }}" >
                            <i class="metismenu-icon pe-7s-way"></i>All Users
                        </a>
                    </li>
                   
                   @endif
               </li>
            </ul>
        </div>
    </div>
</div>