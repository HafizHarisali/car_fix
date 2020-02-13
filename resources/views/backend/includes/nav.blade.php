<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="{{ asset('public/backend-asset/img/logo/logo.png') }}" alt="" /></a>
                <strong><a href="index.html"><img src="{{ asset('public/backend-asset/img/logo/logosn.png') }}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="" href="{{ route('backend_index') }}">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Dashboard</span>
								</a>
                        </li>
                        <!--Admin Menu-->
                        @if(Session::get('usertype') == 1)
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Garages</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Customers</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Services</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Jobs</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Settings</span></a>
                        </li>
                        <!--Customer Menu-->

                        @elseif(Session::get('usertype') == 2)
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Current Jobs</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Jobs Done</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Settings</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Search History</span></a>
                        </li>

                        <!--Garage Menu-->
                        @elseif(Session::get('usertype') == 3)
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Find Jobs</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Completed Jobs</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Settings</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Profile Reviews</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="#" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Settings</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="javascript:void();" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Account</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Company Details" href="{{ route('company-details') }}"><span class="mini-sub-pro">Company Details</span></a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </nav>
</div>