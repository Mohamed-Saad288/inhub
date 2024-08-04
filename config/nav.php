<?php

return [


    [
        'icon' => 'nav-icon fas fa-tachometer-alt',
        'route' => 'dashboard.dashboard',
        'title' => 'الرئيسية',
        'active' => 'dashboard.dashboard',
        'ability' => 'home.view'

    ],
    [
        'icon' => 'fas fa-list',
        'route' => 'dashboard.categories.index',
        'title' => 'الفئات',
        'active' => 'dashboard.categories.*',
        'ability' => 'categories.view'

    ],
    [
        'icon' => 'fas fa-pen',
        'route' => 'dashboard.blogs.index',
        'title' => 'المدونات',
        'active' => 'dashboard.blogs.*',
        'ability' => 'blogs.view'

    ],
    [
        'icon' => 'fas fa-address-book',
        'route' => 'dashboard.contacts',
        'title' => 'رسائل المستخدمين',
        'active' => 'dashboard.contacts',
        'ability' => 'contact.view'

    ],
    [
        'icon' => 'fas fa-users',
        'route' => 'dashboard.employees.index',
        'title' => 'الموظفين',
        'active' => 'dashboard.employees.*',
        'ability' => 'employee.view'
    ],

    [
        'icon' => 'fas fa-lock',
        'route' => 'dashboard.roles.index',
        'title' => 'صلاحيات الموظف',
        'active' => 'dashboard.roles.*',
        'ability' => 'roles.view'
    ],
    [
        'icon' => 'fas fa-flag',
        'route' => 'dashboard.banners.index',
        'title' => 'البنارات',
        'active' => 'dashboard.banners.*',
        'ability' => 'banners.view'
    ],
    [
        'icon' => 'fas fa-bullhorn',
        'route' => 'dashboard.advertisements.index',
        'title' => 'الاعلانات',
        'active' => 'dashboard.advertisements.*',
        'ability' => 'advertisements.view'
    ],

    [
        'icon' => 'fas fa-file-alt',
        'route' => 'dashboard.pages.index',
        'title' => 'الصفحات',
        'active' => 'dashboard.pages.*',
        'ability' => 'pages.view'

    ],

    [
        'icon' => 'fas fa-cog',
        'route' => 'dashboard.settings.edit',
        'title' => 'الإعدادات',
        'active' => 'dashboard.settings.*',
        'ability' => 'settings.view'
    ],

];
