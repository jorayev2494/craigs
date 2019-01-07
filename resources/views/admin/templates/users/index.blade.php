@extends('admin.layouts.admin_app')


@section('content')
    <div class="content">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Basic initialization</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                The HTML5 export buttons plug-in for Buttons provides four export buttons: <code>copyHtml5</code> - copy to clipboard; <code>csvHtml5</code> - save to CSV file; <code>excelHtml5</code> - save to XLSX file (requires JSZip); <code>pdfHtml5</code> - save to PDF file (requires PDFMake). This example demonstrates these four button types with their default options. Please note that these button types may also a Flash fallback for older browsers (IE9-).
            </div>

            <table class="table datatable-button-html5-basic">
                <thead>
                    <tr>
                        <th>Avatar</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>DOB</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        {{-- @dump($user) --}}
                        <tr>
                            <td>{{ $user->avatar }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>
                                <a href="mail:{{ $user->email }}">{{ $user->email }}</a>
                            </td>
                            <td>
                                <span class="label label-success">
                                    {{ $user->role->slug }}</td>
                                </span>
                            <td>22 Jun 1972</td>
                            <td>
                                <span class="label label-success">Active</span>
                            </td>
                            <td class="text-center">

                                <ul class="icons-list">
                                    <li class="pull-right">
                                        {!! Form::open(["url" => route("admin.users.destroy", ["uuid" => $user->uuid]), "method" => "DELETE"]) !!}
                                            <button type="submit" class="btn-link text-danger-600">
                                            {{-- <button type="submit" class="btn-link text-default"> --}}
                                                <i class="icon-trash position-left"></i>
                                                {{-- @lang("lang.delete") --}}
                                            </button>
                                        {!! Form::close() !!}
                                    </li>

                                    <li class="pull-right">
                                        <a href="{{ route('admin.users.show', ['uuid' => $user->uuid]) }}">
                                            <i class="icon-eye"></i>
                                            {{-- @lang("lang.look") --}}
                                        </a>
                                    </li>

                                    <li class="pull-right">
                                        <a href="{{ route('admin.users.edit', ['uuid' => $user->uuid]) }}">
                                            <i class="icon-pencil7"></i>
                                            {{-- @lang("lang.edit") --}}
                                        </a>
                                    </li>
                                </ul>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
