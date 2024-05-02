<?php

return [
    'nav' => [
        'title' => 'AdvancedBan',

        'settings' => 'Settings',
    ],

    'permissions' => [
        'admin' => 'Manage AdvancedBan plugin',
        'view' => 'View AdvancedBan page',
    ],

    'settings' => [
        'title' => 'AdvancedBan page settings',

        'host' => 'Host',
        'port' => 'Port',
        'database' => 'Database',
        'username' => 'Username',
        'password' => 'Password',
        'perPage' => 'Records per page',
        'historyTable' => 'History table',
        'punishmentTable' => 'Punishment table',
        'route' => 'Route',
        'usePermission' => 'Use permission',
        'usePermission_description' => 'If this is checked, guests (unauthenticated users) will not be able to access the punishments page.',
    ],
];
