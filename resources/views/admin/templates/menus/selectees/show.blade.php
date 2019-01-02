
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
                        <label for="icon" class="control-label col-lg-2">Слуг</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon">Слуг</span>
                                {!! Form::text("slug", $select->slug, ["class" => "form-control", "id" => "icon", "readonly", "placeholder" => "Select Icon"]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="slug" class="control-label col-lg-2">Выберие под раздел</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="{{ $select->menus->icon }}"></i>
                                </span>
                                {!! Form::text("slug", trans("lang." . $select->menus->slug), ["class" => "form-control", "id" => "icon", "readonly", "placeholder" => "Select Icon"]) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="slug" class="control-label col-lg-2">Выберие под раздел</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    Select
                                </span>
                                {!! Form::text("slug", trans("lang." . $select->oneSelect->slug), ["class" => "form-control", "id" => "icon", "readonly", "placeholder" => "Select Icon"]) !!}
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="active" class="control-label col-lg-2">Актиность</label>
                        <div class="col-lg-10">
                            {!! Form::text("slug", $select->active ? trans("lang.active") : trans("lang.not_active"), ["class" => "form-control", "id" => "icon", "readonly", "placeholder" => "Select Icon"]) !!}
                        </div>
                    </div>

                    <div class="form-group col-lg-12 pull-right">
                        <div class="input-group  pull-right">
                            <a href="{{ route('admin.menu_selectees.edit', ['select' => $select->slug]) }}" class="btn btn-success btn-labeled btn-lg">
                                <b><i class="icon-pen6"></i></b>
                                @lang("lang.edit")
                            </a>
                        </div>

                        <div class="col-lg-2 pull-right">
                            {!! Form::open(["url" => route("admin.menu_selectees.destroy", ["select" => $select->slug]), "method" => "DELETE"]) !!}
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
