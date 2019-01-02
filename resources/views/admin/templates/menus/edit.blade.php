
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

                {!! Form::open(["url" => route("admin.menus.update", ["slug" => $menu->slug]), "method" => "PUT", "class" => "form-horizontal"]) !!}

                    <fieldset class="content-group">

                        <legend class="text-bold">Text addon</legend>

                        <div class="form-group">
                            <label for="slug" class="control-label col-lg-2">Перевод раздела</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    {!! Form::text("slug", trans("lang." . $menu->slug), ["class" => "form-control", "id" => "slug", "readonly" => "readonly"]) !!}
                                    <span class="input-group-addon">@lang("lang." . $menu->slug)</span>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="slug" class="control-label col-lg-2">Слаг раздела</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    {!! Form::text("slug", $menu->slug, ["class" => "form-control", "id" => "slug", "placeholder" => "Slug"]) !!}
                                    <span class="input-group-addon">@lang("lang.slug")</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="slug" class="control-label col-lg-2">Группа</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon">Гркппированть по</span>
                                    {!! Form::text("group", $menu->group, ["class" => "form-control", "id" => "slug", "placeholder" => "Name group"]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="icon" class="control-label col-lg-2">Значек раздела</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="{{ $menu->icon ?? '*' }}"></i>
                                    </span>
                                    {!! Form::text("icon", $menu->icon, ["class" => "form-control", "id" => "icon", "placeholder" => "Select Icon"]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="active" class="control-label col-lg-2">Актиность</label>
                            <div class="col-lg-10">
                                {{-- <div class="input-group"> --}}
                                    <select name="active" id="active" class="form-control">
                                        <option selected value="{{ $menu->active ? 1 : 0 }}">{{ $menu->active ? trans("lang.not_active") : trans("lang.not_active") }}</option>
                                        <option value="1">@lang("lang.active")</option>
                                        <option value="0">@lang("lang.not_active")</option>
                                    </select>
                                    {{-- <span class="input-group-addon">Active</span> --}}
                                {{-- </div> --}}
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-labeled btn-lg pull-right">
                            <b><i class="icon-loop3"></i></b>
                            @lang("lang.update")
                        </button>

                    </fieldset>

                {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection
