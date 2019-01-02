
@extends('admin.layouts.admin_app')


@section('content')
    <div class="content">

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

            <div class="panel-body">
                <p class="content-group-lg">Extend form controls by adding text or buttons before, after, th sides of any text-based <code>&lt;input></code>. s <code>.input-group</code> with an <code>.input-group-addon</code> to prepend or append elements to a single <code>.form-control</code>. Place one add-on or button on either side of an input. You may also place one on both sides of an input. Multiple add-ons on a single side and multiple form-controls in a single input group arent supported.</p>

                <fieldset class="content-group form-horizontal">

                    <legend class="text-bold">Text addon</legend>

                    <div class="form-group">
                        <label for="icon" class="control-label col-lg-2">Default text input</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon">Icon</span>
                                {!! Form::text("slug", trans("lang." . $menu->slug), ["class" => "form-control", "id" => "icon", "readonly" => "readonly"]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="icon" class="control-label col-lg-2">Default text input</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon">Icon</span>
                                {!! Form::text("icon", $menu->icon, ["class" => "form-control", "id" => "icon", "readonly" => "readonly"]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="slug" class="control-label col-lg-2">Default text input</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                {!! Form::text("slug", $menu->slug, ["class" => "form-control", "id" => "slug", "readonly" => "readonly"]) !!}
                                <span class="input-group-addon">Slug</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="slug" class="control-label col-lg-2">Default text input</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                {!! Form::text("slug", $menu->group, ["class" => "form-control", "id" => "slug", "readonly" => "readonly"]) !!}
                                <span class="input-group-addon">Slug</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="active" class="control-label col-lg-2">Default select</label>
                        <div class="col-lg-10">
                            {{-- <div class="input-group"> --}}
                                <div class="input-group">
                                    {!! Form::text("active", $menu->active ? "Active" : "De Active", ["class" => "form-control", "id" => "slug", "readonly" => "readonly"]) !!}
                                    <span class="input-group-addon">Slug</span>
                                </div>
                                {{-- <span class="input-group-addon">Active</span> --}}
                            {{-- </div> --}}
                        </div>
                    </div>

                    <div class="form-group col-lg-12 pull-right">
                        <div class="input-group  pull-right">
                            <a href="{{ route('admin.menus.edit', ['slug' => $menu->slug]) }}" class="btn btn-success btn-labeled btn-lg">
                                <b><i class="icon-pen6"></i></b>
                                @lang("lang.edit")
                            </a>
                        </div>

                        <div class="col-lg-2 pull-right">
                            {!! Form::open(["url" => route("admin.menus.destroy", ["slug" => $menu->slug]), "method" => "DELETE"]) !!}
                                <button type="submit" class="btn btn-danger btn-labeled btn-lg">
                                    <b><i class="icon-trash"></i></b>
                                    @lang("lang.delete")
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </fieldset>

            </div>
        </div>

    </div>

@endsection
