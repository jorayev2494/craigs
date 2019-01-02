<?php

    // Home
    Breadcrumbs::for('Admin Dashboard', function ($trail) {
        $trail->push('Dashboard', route('dashboard.index'));
    });

    Breadcrumbs::for('test', function ($trail) {
        $trail->parent('dashboard.index');
        $trail->push('TEST', route('home'));
    });


?>
