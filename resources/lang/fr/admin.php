<?php

return [
    'nav' => [
        'title' => 'AdvancedBan',

        'settings' => 'Paramètres',
    ],

    'permissions' => [
        'admin' => 'Gérer le plugin AdvancedBan',
        'view' => 'Voir la page AdvancedBan',
    ],

    'settings' => [
        'title' => 'Paramètres de la page AdvancedBan',

        'database_information_invalid' => 'Les informations de base de données entrées sont invalides. Les paramètres n\'ont pas été sauvegardés.',

        'host' => 'Hôte',
        'port' => 'Port',
        'database' => 'Base de données',
        'username' => 'Nom d\'utilisateur',
        'password' => 'Mot de passe',
        'perPage' => 'Enregistrements par page',
        'historyTable' => 'Table de l\'historique',
        'punishmentTable' => 'Table des sanctions',
        'route' => 'Chemin',
        'usePermission' => 'Utiliser la permission',
        'usePermission_description' => 'Si ceci est coché, les invités (utilisateurs non authentifiés) ne pourront pas accéder à l\'historique des punitions.',
    ],
];
