<?php

    // Home
    Breadcrumbs::for('Admin menu', function ($trail) {
        $trail->push(trans("lang.dashboard"), route('admin.dashboards.index'));
    });

    Breadcrumbs::for('test', function ($trail) {
        $trail->parent('Admin menu');
        $trail->push(trans("lang.menu_dashboard"), route(''));
    });

    // menu_selectees
    Breadcrumbs::for('menu_selectees', function ($trail) {
        $trail->parent('Admin menu');
        $trail->push(trans("lang.menu_selectees"), route('admin.menu_selectees.index'));
    });

?>
