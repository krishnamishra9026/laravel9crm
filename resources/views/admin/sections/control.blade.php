<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3 control-sidebar-content" style="">
        <h5>Profile Options</h5>
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            <div class="d-flex">
                <li>
                    <a href="javascript:void(0)">
                        My Account
                    </a>
                </li>
            </div>
            <div class="d-flex">
                <li>
                    <a href="javascript:void(0)">
                        Change Password
                    </a>
                </li>
            </div>
            <div class="d-flex">
                <li>
                    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                </li>
            </div>
        </ul>
    </div>
</aside>
<!-- /.control-sidebar -->
