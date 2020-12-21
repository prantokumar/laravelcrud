<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                {{-- Dashboard --}}

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                    <i data-feather="home" class="feather-icon"></i>
                    <span class="hide-menu">Dashboard</span></a>
                </li>

                {{-- Dashboard --}}

                <li class="list-divider"></li>

                {{-- BASIC CRUD START--}}
                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow" aria-expanded="false">
                        <i class="fa fa-sliders" aria-hidden="true"></i>
                        <span class="hide-menu">CRUD</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('crud.view') }}" class="sidebar-link">
                                <span class="hide-menu">CRUD Operation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- BASIC CRUD END--}}

                <li class="list-divider"></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>