<div class="panel panel-flat">
    <div class="panel-heading">
        <h6 class="panel-title">Account settings</h6>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="reload"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <form action="#">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Username</label>
                        <input type="text" value="Kopyov" readonly="readonly" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Current password</label>
                        <input type="password" value="password" readonly="readonly" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>New password</label>
                        <input type="password" placeholder="Enter new password" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Repeat password</label>
                        <input type="password" placeholder="Repeat new password" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label>Profile visibility</label>

                        <div class="radio">
                            <label>
                                <input type="radio" name="visibility" class="styled" checked="checked">
                                Visible to everyone
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="visibility" class="styled">
                                Visible to friends only
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="visibility" class="styled">
                                Visible to my connections only
                            </label>
                        </div>

                        <div class="radio">
                            <label>
                                <input type="radio" name="visibility" class="styled">
                                Visible to my colleagues only
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label>Notifications</label>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="styled" checked="checked">
                                Password expiration notification
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="styled" checked="checked">
                                New message notification
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="styled" checked="checked">
                                New task notification
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="styled">
                                New contact request notification
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Save <i class="icon-arrow-right14 position-right"></i></button>
            </div>
        </form>
    </div>
</div>
