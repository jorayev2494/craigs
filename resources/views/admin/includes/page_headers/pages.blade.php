<div class="page-header">

    <div class="page-header-content">
        <div class="page-title">
            <h4>
                <i class="icon-arrow-left52 position-left"></i>
                <span class="text-semibold">Datatables</span>
                - Data Sources
            </h4>
            @if (str_contains(Route::currentRouteName(), "user"))
                {!! $breadcrumbs !!}
            @endif
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">

                <a href="#" class="btn btn-link btn-float has-text">
                    <i class="icon-bars-alt text-primary"></i>
                    <span>Statistics</span>
                </a>

                <a href="#" class="btn btn-link btn-float has-text">
                    <i class="icon-calculator text-primary"></i>
                    <span>Invoices</span>
                </a>

                <a href="#" class="btn btn-link btn-float has-text">
                    <i class="icon-calendar5 text-primary"></i>
                    <span>Schedule</span>
                </a>

            </div>
        </div>
    </div>

    @if (!str_contains(Route::currentRouteName(), "user"))
        <div class="breadcrumb-line breadcrumb-line-component">
            {!! $breadcrumbs !!}

            <ul class="breadcrumb-elements">
                <li>
                    <a href="#">
                        <i class="icon-comment-discussion position-left"></i>
                        Support
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                        <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                        <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    @endif

    @if (str_contains(Route::currentRouteName(), "user"))
        <div class="navbar navbar-default navbar-component navbar-xs">
            <ul class="nav navbar-nav visible-xs-block">
                <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
            </ul>

            <div class="navbar-collapse collapse" id="navbar-filter">
                <ul class="nav navbar-nav">

                    @if (!str_contains(Route::currentRouteName(), "users.create"))
                        <li class="active">
                            <a href="#activity" data-toggle="tab">
                                <i class="icon-menu7 position-left"></i>
                                Activity
                            </a>
                        </li>
                    @endif

                    {{-- <li>
                        <a href="#schedule" data-toggle="tab">
                            <i class="icon-calendar3 position-left"></i>
                            Schedule
                            <span class="badge badge-success badge-inline position-right">32</span>
                        </a>
                    </li> --}}

                    <li>
                        <a href="#settings" data-toggle="tab">
                            <i class="icon-cog3 position-left"></i>
                            Settings
                        </a>
                    </li>
                </ul>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">
                                <i class="icon-stack-text position-left"></i>
                                Notes
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-collaboration position-left"></i>
                                Friends
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-images3 position-left"></i>
                                Photos
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i> <span class="visible-xs-inline-block position-right"> Options</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">

                                <li>
                                    <a href="#">
                                        <i class="icon-image2"></i>
                                        Update cover
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-clippy"></i>
                                        Update info
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-make-group"></i>
                                        Manage sections
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="icon-three-bars"></i>
                                        Activity log
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-cog5"></i>
                                        Profile settings
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endif



</div>
