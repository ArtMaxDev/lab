@php
    // You can use the following array to create your main menu

    Codebase::$main_nav = array(
        array(
            'name'  => 'Пользователи',
            'icon'  => 'si si-user',
            'url'   => route('admin.users.index'),
        ),
        array(
            'name'  => 'Настройки',
            'icon'  => 'si si-settings',
            'url'   => route('admin.settings.index'),
        ),
        array(
            'name'  => 'Обратная связь',
            'icon'  => 'si si-envelope-letter',
            'url'   => route('admin.feedback.index'),
        ),
        array(
            'name'  => 'Слайдер',
            'icon'  => 'fa fa-images',
            'url'   => route('admin.sliders.index'),
        ),
        array(
            'name'  => 'Комманда',
            'icon'  => 'fa fa-users',
            'url'   => route('admin.team.index'),
        ),
        array(
            'name'  => 'Услуги',
            'icon'  => 'fa fa-list-alt',
            'sub'   => array(
                array(
                    'name'  => 'Все',
                    'url'   => route('admin.services.index'),
                ),
                array(
                    'name'  => 'Создать новую',
                    'url'   => route('admin.services.create'),
                ),
            )
        ),
        array(
            'name'  => 'Публикации',
            'icon'  => 'fa fa-list',
            'sub'   => array(
                array(
                    'name'  => 'Все',
                    'url'   => route('admin.publications.index'),
                ),
                array(
                    'name'  => 'Создать новую',
                    'url'   => route('admin.publications.create'),
                ),
            )
        ),
    );
    Codebase::build_nav(true, true);
@endphp
