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
