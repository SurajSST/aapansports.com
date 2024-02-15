<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Route::currentRouteName() == 'admin' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Banner
    </div>

    <!-- Nav Item - Media Manager -->
    <li class="nav-item {{ Route::currentRouteName() == 'file-manager' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('file-manager') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Media Manager</span>
        </a>
    </li>

    <!-- Banners Collapse Menu -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['banner.index', 'banner.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBanner" aria-expanded="true" aria-controls="collapseBanner">
            <i class="fas fa-image"></i>
            <span>Banners</span>
        </a>
        <div id="collapseBanner" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Banner Options:</h6>
                <a class="collapse-item" href="{{ route('banner.index') }}">Banners</a>
                <a class="collapse-item" href="{{ route('banner.create') }}">Add Banner</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Shop
    </div>

    <!-- Category -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['category.index', 'category.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-sitemap"></i>
            <span>Category</span>
        </a>
        <div id="collapseCategory" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category Options:</h6>
                <a class="collapse-item" href="{{ route('category.index') }}">Category</a>
                <a class="collapse-item" href="{{ route('category.create') }}">Add Category</a>
            </div>
        </div>
    </li>

    <!-- Products -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['product.index', 'product.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-cubes"></i>
            <span>Products</span>
        </a>
        <div id="collapseProduct" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Product Options:</h6>
                <a class="collapse-item" href="{{ route('product.index') }}">Products</a>
                <a class="collapse-item" href="{{ route('product.create') }}">Add Product</a>
            </div>
        </div>
    </li>

    <!-- Brands -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['brand.index', 'brand.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true" aria-controls="collapseBrand">
            <i class="fas fa-table"></i>
            <span>Brands</span>
        </a>
        <div id="collapseBrand" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Brand Options:</h6>
                <a class="collapse-item" href="{{ route('brand.index') }}">Brands</a>
                <a class="collapse-item" href="{{ route('brand.create') }}">Add Brand</a>
            </div>
        </div>
    </li>

    <!-- Shipping -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['shipping.index', 'shipping.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShipping" aria-expanded="true" aria-controls="collapseShipping">
            <i class="fas fa-truck"></i>
            <span>Shipping</span>
        </a>
        <div id="collapseShipping" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Shipping Options:</h6>
                <a class="collapse-item" href="{{ route('shipping.index') }}">Shipping</a>
                <a class="collapse-item" href="{{ route('shipping.create') }}">Add Shipping</a>
            </div>
        </div>
    </li>

    <!-- Orders -->
    <li class="nav-item {{ Route::currentRouteName() == 'order.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-hammer fa-chart-area"></i>
            <span>Orders</span>
        </a>
    </li>

    <!-- Reviews -->
    <li class="nav-item {{ Route::currentRouteName() == 'review.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('review.index') }}">
            <i class="fas fa-comments"></i>
            <span>Reviews</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Posts
    </div>

    <!-- Posts -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['post.index', 'post.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost">
            <i class="fas fa-fw fa-folder"></i>
            <span>Posts</span>
        </a>
        <div id="collapsePost" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Post Options:</h6>
                <a class="collapse-item" href="{{ route('post.index') }}">Posts</a>
                <a class="collapse-item" href="{{ route('post.create') }}">Add Post</a>
            </div>
        </div>
    </li>

    <!-- Post Category -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['post-category.index', 'post-category.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePostCategory" aria-expanded="true" aria-controls="collapsePostCategory">
            <i class="fas fa-sitemap fa-folder"></i>
            <span>Category</span>
        </a>
        <div id="collapsePostCategory" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category Options:</h6>
                <a class="collapse-item" href="{{ route('post-category.index') }}">Category</a>
                <a class="collapse-item" href="{{ route('post-category.create') }}">Add Category</a>
            </div>
        </div>
    </li>

    <!-- Tags -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['post-tag.index', 'post-tag.create']) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTag" aria-expanded="true" aria-controls="collapseTag">
            <i class="fas fa-tags fa-folder"></i>
            <span>Tags</span>
        </a>
        <div id="collapseTag" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tag Options:</h6>
                <a class="collapse-item" href="{{ route('post-tag.index') }}">Tag</a>
                <a class="collapse-item" href="{{ route('post-tag.create') }}">Add Tag</a>
            </div>
        </div>
    </li>

    <!-- Comments -->
    <li class="nav-item {{ Route::currentRouteName() == 'comment.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('comment.index') }}">
            <i class="fas fa-comments fa-chart-area"></i>
            <span>Comments</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        General Settings
    </div>

    <!-- Coupon -->
    <li class="nav-item {{ in_array(Route::currentRouteName(), ['coupon.index', 'coupon.create']) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('coupon.index') }}">
            <i class="fas fa-table"></i>
            <span>Coupon</span>
        </a>
    </li>

    <!-- Users -->
    <li class="nav-item {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-users"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="nav-item {{ Route::currentRouteName() == 'settings' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('settings') }}">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
