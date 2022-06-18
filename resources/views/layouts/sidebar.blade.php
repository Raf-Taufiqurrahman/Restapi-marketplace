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
                <li class="menu-title">Master Data</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-function-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}" class="waves-effect">
                        <i class="ri-price-tag-3-fill"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.index') }}" class="waves-effect">
                        <i class="ri-shopping-bag-3-fill"></i>
                        <span>Product</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-slideshow-fill"></i>
                        <span>Slider</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.coupon.index') }}" class="waves-effect">
                        <i class="ri-coupon-fill"></i>
                        <span>Coupon</span>
                    </a>
                </li>
                <li class="menu-title">Manage Stock</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-add-circle-fill"></i>
                        <span>Stock Product</span>
                    </a>
                </li>
                <li class="menu-title">Report</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class=" ri-currency-fill"></i>
                        <span>Transaction</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.customer') }}" class="waves-effect">
                        <i class=" ri-team-fill"></i>
                        <span>Customer</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ri-user-star-fill"></i>
                        <span>Product Review</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
