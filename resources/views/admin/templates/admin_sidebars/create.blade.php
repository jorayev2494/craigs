
@extends('admin.layouts.admin_app')


@section('content')

    <div class="content">

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Input group addons</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <p class="content-group-lg">Extend form controls by adding text or buttons before, after, th sides of any text-based <code>&lt;input></code>. s <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a single <code>.form-control</code>. Place one add-on or button on either side of an input. You may also place one on both sides of an input. Multiple add-ons on a single side and multiple form-controls in a single input group arent supported.</p>

                {!! Form::open(["url" => route("dashboard.store"), "method" => "POST", "class" => "form-horizontal"]) !!}

                    <fieldset class="content-group">

                        <legend class="text-bold">Text addon</legend>

                        <div class="form-group">
                            <label for="icon" class="control-label col-lg-2">Default text input</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon">Icon</span>
                                    {!! Form::text("icon", null, ["class" => "form-control", "id" => "icon", "placeholder" => "Select Icon"]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="slug" class="control-label col-lg-2">Default text input</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    {!! Form::text("slug", null, ["class" => "form-control", "id" => "slug", "placeholder" => "Slug"]) !!}
                                    <span class="input-group-addon">Slug</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="active" class="control-label col-lg-2">Default select</label>
                            <div class="col-lg-10">
                                {{-- <div class="input-group"> --}}
                                    <select name="active" id="active" class="form-control">
                                        <option selected disabled value="opt1">Select Active</option>
                                        <option value="1">Active</option>
                                        <option value="0">Dis Active</option>
                                    </select>
                                    {{-- <span class="input-group-addon">Active</span> --}}
                                {{-- </div> --}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <div class="input-group pull-right">
                                    {!! Form::submit("Create", ["class" => "btn btn-primary"]) !!}
                                </div>
                            </div>
                        </div>

                    </fieldset>

                {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection
