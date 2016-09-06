<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                <div class="thumb">
                    <img src="#" alt="" class="img-circle"/>
                </div>
                <div class="info">
                    <p>
                        John Doe
                    </p>
                    <ul class="list-inline list-unstyled">
                        <li>
                            <a href="extra-profile.html" data-hover="tooltip" title="Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="email-inbox.html" data-hover="tooltip" title="Mail">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a href="extra-signin.html" data-hover="tooltip" title="Logout">
                                <i class="fa fa-sign-out">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </li>
            <li>
                <a href="{{url('/')}}">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange">
                        </div>
                    </i>
                    <span class="menu-title">
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/amortization')}}">
                    <i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue">
                        </div>
                    </i>
                    <span class="menu-title">
                        Amortization
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/payslip')}}">
                    <i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue">
                        </div>
                    </i>
                    <span class="menu-title">
                        Payslip
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>