<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('dist/img/logo1.png') }}" alt="CRM" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('categories.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Category
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('products.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Product
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('reviews.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Reviews
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('reviews.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Review
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('previous-versions.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Previous Versions
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('previous-versions.create') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Add Previous Versions
                        </p>
                    </a>
                </li>

                
                </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
