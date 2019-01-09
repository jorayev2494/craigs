<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">{{ $title }}</h6>
        <div class="heading-elements">
            <ul class="icons-list">

                <li>
                    <a data-action="collapse"></a>
                </li>

                <li>
                    <a data-action="reload"></a>
                </li>

                <li>
                    <a data-action="close"></a>
                </li>

            </ul>
        </div>
    </div>

    <div class="panel-body">

        <form class="form-horizontal form-validate-jquery" action="#">
            @csrf

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">@lang("lang.user_name") <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" value="" required="required" placeholder="@lang('lang.user_name')" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="col-md-6">
                        <label for="lastname">@lang("lang.user_lastname") <span class="text-danger">*</span></label>
                        <input type="text" name="lastname" id="lastname" required="required" placeholder="@lang('lang.user_lastname')" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">@lang("lang.email") <span class="text-danger">*</span></label>
                        <input type="email" id="email" value="" required="required" placeholder="@lang('lang.email')" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="col-md-6">
                        <label for="numbers">@lang("lang.phone") <span class="text-danger">*</span></label>
                        <input type="text" name="numbers" id="numbers" required="required" placeholder="@lang('lang.phone')" class="form-control" aria-required="true" aria-invalid="true">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="password">@lang("lang.password") <span class="text-danger">*</span></label>
                        <input type="password" id="password" value="" required="required" placeholder="@lang('lang.password')" class="form-control" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="col-md-6">
                        <label for="confirmed_password">@lang("lang.confirmed_password") <span class="text-danger">*</span></label>
                        <input type="password" name="password_confirmation" id="confirmed_password" required="required" placeholder="@lang('lang.confirmed_password')" class="form-control" aria-required="true" aria-invalid="true">
                    </div>
                </div>
            </div>

            {{-- <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label>City</label>
                        <input type="text" value="Munich" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>State/Province</label>
                        <input type="text" value="Bayern" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label>ZIP code</label>
                        <input type="text" value="1031" class="form-control">
                    </div>
                </div>
            </div> --}}

            <div class="form-group">
                <div class="row">
                    {{-- <div class="col-md-6">
                        <label>Email</label>
                        <input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
                    </div> --}}

                    <div class="col-md-3">
                        <label>@lang("lang.sex")</label>
                        <select name="sex" data-placeholder="@lang('lang.select_a_sex')" required="required" class="select" tabindex="-1" aria-hidden="true" aria-required="true">
                            <option selected="selected"></option>
                            <option value="male">@lang("lang.male")</option>
                            <option value="female">@lang("lang.female")</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="role">@lang("lang.role")</label>
                        <select name="role" id="role" class="select" data-placeholder="@lang('role.select_a')" required="required" tabindex="-1" aria-hidden="true" aria-required="true">
                            <option selected="selected"></option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->slug }}">@lang("role." . $role->slug)</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="select">@lang("country.country")</label>
                        <select name="country" id="country" class="select" data-placeholder="@lang('country.select_a')" required="required" tabindex="-1" aria-hidden="true" aria-required="true">
                            <option selected="selected"></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->slug }}">@lang("country." . $country->slug)</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Phone #</label>
                        <input type="text" value="+99-99-9999-9999" class="form-control">
                        <span class="help-block">+99-99-9999-9999</span>
                    </div>

                    <div class="col-md-6">
                        <label class="display-block">Upload profile image</label>
                        <input type="file" class="file-styled">
                        <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
    </div>
</div>
