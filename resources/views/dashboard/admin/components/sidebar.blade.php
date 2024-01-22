<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.home') }}" class="sidebar-brand">
            Zaman<span>IT</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Pages</li>

            <li class="nav-item">
                <a href="{{ route('admin.logo') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Logo</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.services') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.project') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Projects</span>
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.team') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Our Teams</span>
                </a>
            </li>
            </li>
            <li class="nav-item nav-category">Others Pages</li <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="false"
                    aria-controls="blogs">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Blogs</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="blogs">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.add.blog') }}" class="nav-link">Add Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blog') }}" class="nav-link">All Blogs</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#categorys" role="button" aria-expanded="false"
                    aria-controls="categorys">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Categorys</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="categorys">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link">Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Sub Category</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Messages</li>
            <li class="nav-item">
                <a href="{{ route('admin.admin.all.message') }}" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Comments</span>
                </a>
            </li>

            <li class="nav-item nav-category">Settings</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#settings" role="button" aria-expanded="false"
                    aria-controls="settings">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Profile</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link">Update Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Update Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Forget Password</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Logout</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="link-icon" data-feather="log-out"></i>
                    <span class="link-title">Log Out</span>
                </a>
                <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>

            </li>
        </ul>
    </div>
</nav>

<!-- partial -->
