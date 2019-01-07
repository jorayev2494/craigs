<?php

    #region Admin Breadcrumbs
        // Test
        Breadcrumbs::for('test', function ($trail) {
            $trail->push(trans("lang.test"), route('admin.dashboards.index'));
        });

        // Admin Home
        Breadcrumbs::for('Admin Dashboard', function ($trail) {
            $trail->push(trans("lang.dashboards"), route('admin.dashboards.index'));
        });

        // Admin Sidebar
        Breadcrumbs::for('Admin Sidebar', function ($trail) {
            $trail->parent('Admin Dashboard');
            $trail->push(trans("lang.sidebar"), route('admin.menus.index'));
        });

        // Admin Sidebar Select
        Breadcrumbs::for('Admin Sidebar Select', function ($trail) {
            $trail->parent('Admin Sidebar');
            $trail->push(trans("lang.selectees_sidebar"), route('admin.menu_selectees.index'));
        });

        // Admin Sidebar Select
        Breadcrumbs::for('Admin Users', function ($trail) {
            $trail->parent('Admin Dashboard');
            $trail->push(trans("lang.users"), route('admin.users.index'));
        });
    #endregion

?>
