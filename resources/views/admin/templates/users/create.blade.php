@extends('admin.layouts.admin_app')


@section('content')

<div class="content">

    <!-- User profile -->
    <div class="row">

        <div class="col-lg-9">
            <div class="tabbable">
                <div class="tab-content">

                    <div class="tab-pane fade active in" id="settings">

                        <!-- Profile info -->
                        @include("admin.includes.users.profile.info")
                        {{-- @include("admin.includes.users.profile.validation") --}}
                        <!-- /profile info -->


                        <!-- Account settings -->
                        @include("admin.includes.users.profile.account_settings")
                        <!-- /account settings -->

                    </div>

                </div>
            </div>
        </div>

        <!-- User thumbnail -->
        @include('admin.includes.users.right_sidebar')
        <!-- /User thumbnail -->

    </div>
    <!-- /user profile -->

</div>

@endsection
