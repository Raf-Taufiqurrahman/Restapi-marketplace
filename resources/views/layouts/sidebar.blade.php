<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ Auth::user()->avatar }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted">
                    {{ Auth::user()->email }}
                </span>
            </div>
        </div>
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-function-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}" class=" waves-effect">
                        <i class="ri-price-tag-3-line"></i>
                        <span>Category</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
