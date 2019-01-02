@extends('admin.layouts.admin_app')

@section('content')

    <div class="content">

        <!-- HTML sourced data -->
        <div class="panel panel-flat">

            <div class="panel-heading">
                <h5 class="panel-title">{{ $title }}</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-heading pull-right">
                <a href="{{ route('admin.menus.create') }}" class="btn btn-info btn-labeled">
                    <b><i class="icon-plus2 position-left"></i></b>
                    @lang("lang.create")
                </a>
            </div>

            <div class="panel-heading pull-left">
                <a href="{{ route('admin.menu_selectees.index') }}" class="btn btn-info btn-labeled">
                    <b><i class="icon-plus2 position-left"></i></b>
                    @lang("lang.create") выборку
                </a>
            </div>

            {{-- <div class="panel-body">
                Basic example of a datatable with <code>HTML (DOM)</code> sourced data. The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the <code>DOM</code>. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running DataTables with basic configuration on it.
            </div> --}}

            <table class="table datatable-html">
                <thead>
                    <tr>
                        <th class="text-center">@lang("lang.icon")</th>
                        <th class="text-center">@lang("lang.title")</th>
                        <th class="text-center">@lang("lang.slug")</th>
                        <th class="text-center">@lang("lang.group")</th>
                        <th class="text-center">@lang("lang.active")</th>
                        <th class="text-right">@lang("lang.actions")</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($admin_menus as $menu)

                        <tr class="text-center">
                            <td>
                                <i class="{{ $menu->icon ?? '*' }}"></i>
                            </td>
                            <td>@lang("lang." . $menu->slug)</td>
                            <td>{{ $menu->slug }}</td>
                            <td>{{ $menu->group }}</td>
                            <td>
                                @if ($menu->active)
                                    <span class="label label-success">@lang("lang.active")</span>
                                @else
                                    <span class="label label-danger">@lang("lang.not_active")</span>
                                @endif
                            </td>

                            <td class="text-center">
                                {{-- <center> --}}

                                    <div class="btn pull-right">
                                        <a href="#">
                                            {!! Form::open(["url" => route("admin.menus.destroy", ["slug" => $menu->slug]), "method" => "DELETE"]) !!}
                                                <button type="submit" class="btn-link text-default">
                                                    <i class="icon-trash position-left"></i>
                                                    @lang("lang.delete")
                                                </button>
                                            {!! Form::close() !!}
                                        </a>
                                    </div>

                                    <div class="btn pull-right">
                                        <a href="{{ route('admin.menus.show', ['menu' => $menu->slug]) }}" class="text-default pull-left">
                                            <i class="icon-eye"></i>
                                            @lang("lang.look")
                                        </a>
                                    </div>

                                    <div class="btn pull-right">
                                        <a href="{{ route('admin.menus.edit', ['menu' => $menu->slug]) }}" class="text-default pull-left">
                                            <i class="icon-pen6"></i>
                                            @lang("lang.edit")
                                        </a>
                                    </div>

                                {{-- </center> --}}

                                {{-- <ul class="icons-list pull-left">
                                    <li class="dropdown">

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="{{ route('admin.menus.show', ['slug' => $menu->slug]) }}">
                                                    <i class="icon-eye"></i>
                                                    Show
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.menus.edit', ['slug' => $menu->slug]) }}">
                                                    <i class="icon-pen6"></i>
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul> --}}
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /HTML sourced data -->

        <!-- Footer -->
        <div class="footer text-muted">
            &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
        </div>
        <!-- /footer -->

    </div>
@endsection
