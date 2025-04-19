<?php

add_theme_support('woocommerce');


// 💡 Новый размер изображений
add_image_size('avatar-160', 160, 160, true); // true = crop (обрезать)

// 💡 Добавляем поддержку миниатюр
add_theme_support('post-thumbnails');


// 💡 Глобальные стили
function metronic_enqueue_styles() {
    // Глобальные стили — шрифт и базовые стили Metronic
    wp_enqueue_style(
        'metronic-fonts',
        'https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700',
        array(),
        null
    );

    wp_enqueue_style(
        'metronic-style-css',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'metronic-plugins',
        get_template_directory_uri() . '/metronic/assets/plugins/global/plugins.bundle.css'
    );

    wp_enqueue_style(
        'metronic-style',
        get_template_directory_uri() . '/metronic/assets/css/style.bundle.css'
    );

    // Дополнительные стили для страницы логина
    if (is_page_template('page-login.php')) {
        wp_enqueue_style(
            'metronic-auth',
            get_template_directory_uri() . '/assets/css/auth.css'
        );
    }

    // Пример: стили для личного кабинета
    if (is_page_template('page-dashboard.php')) {
        wp_enqueue_style(
            'metronic-dashboard',
            get_template_directory_uri() . '/assets/css/dashboard.css'
        );
    }

    // 🧪 Пытаемся опустить меню немного для админов
    add_action('wp_head', function () {
        if (current_user_can('administrator') && is_user_logged_in()) {
            ?>
            <style>
                body.admin-bar-visible #kt_app_header,
                body.admin-bar-visible #kt_app_sidebar {
                    margin-top: 32px !important;
                }
            </style>
            <?php
        }
    });

}
add_action('wp_enqueue_scripts', 'metronic_enqueue_styles');



// 💡 подключаем скрипт ACF
add_action('wp_enqueue_scripts', 'enqueue_acf_form_scripts', 20);
function enqueue_acf_form_scripts() {
    if (function_exists('acf_enqueue_scripts')) {
        acf_enqueue_scripts();
    }
}




// 💡 Глобальная переменная + глобальные скрипты
function metronic_enqueue_scripts() {

    // Глобальная переменная hostUrl (вставляется инлайном)
    wp_add_inline_script('metronic-scripts', 'var hostUrl = "' . get_template_directory_uri() . '/metronic/assets/";', 'before');

    // Глобальные скрипты (Metronic Core)
    wp_enqueue_script(
        'metronic-plugins',
        get_template_directory_uri() . '/metronic/assets/plugins/global/plugins.bundle.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'metronic-scripts',
        get_template_directory_uri() . '/metronic/assets/js/scripts.bundle.js',
        array('metronic-plugins'),
        null,
        true
    );


    // 🔄 Только на дашборде
    if (is_page_template('page-dashboard.php')) {

        // DataTables
        wp_enqueue_script(
            'metronic-datatables',
            get_template_directory_uri() . '/metronic/assets/plugins/custom/datatables/datatables.bundle.js',
            array('metronic-scripts'),
            null,
            true
        );

        // Vis Timeline
        wp_enqueue_script(
            'metronic-vis-timeline',
            get_template_directory_uri() . '/metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js',
            array('metronic-scripts'),
            null,
            true
        );

        // amCharts CDN
        wp_enqueue_script('amcharts-index', 'https://cdn.amcharts.com/lib/5/index.js', array(), null, true);
        wp_enqueue_script('amcharts-xy', 'https://cdn.amcharts.com/lib/5/xy.js', array('amcharts-index'), null, true);
        wp_enqueue_script('amcharts-percent', 'https://cdn.amcharts.com/lib/5/percent.js', array('amcharts-index'), null, true);
        wp_enqueue_script('amcharts-radar', 'https://cdn.amcharts.com/lib/5/radar.js', array('amcharts-index'), null, true);
        wp_enqueue_script('amcharts-animated', 'https://cdn.amcharts.com/lib/5/themes/Animated.js', array('amcharts-index'), null, true);
    }

    //🔄 Только на дашборде
    if (is_page_template('page-dashboard.php')) {
            // Кастомные скрипты Metronic (только для dashboard)
            
            wp_enqueue_script(
                'metronic-widgets-bundle',
                get_template_directory_uri() . '/metronic/assets/js/widgets.bundle.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-widgets',
                get_template_directory_uri() . '/metronic/assets/js/custom/widgets.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-chat',
                get_template_directory_uri() . '/metronic/assets/js/custom/apps/chat/chat.js',
                array('metronic-scripts'),
                null,
                true
            );

            // Модальные окна — создание проекта
            $modals = [
                'upgrade-plan',
                'create-project/type',
                'create-project/budget',
                'create-project/settings',
                'create-project/team',
                'create-project/targets',
                'create-project/files',
                'create-project/complete',
                'create-project/main',
                'create-app',
                'new-address',
                'users-search'
            ];

            foreach ($modals as $modal_script) {
                wp_enqueue_script(
                    'metronic-modal-' . sanitize_title($modal_script),
                    get_template_directory_uri() . '/metronic/assets/js/custom/utilities/modals/' . $modal_script . '.js',
                    array('metronic-scripts'),
                    null,
                    true
                );
            }
    }


    // 🔄 Только на странице товара
    if ( is_singular('product') ) {
        
        wp_enqueue_script(
            'metronic-fslightbox',
            get_template_directory_uri() . '/metronic//assets/plugins/custom/fslightbox/fslightbox.bundle.js',
            array('jquery'), // или 'metronic-scripts', если он уже зарегистрирован
            null,
            true
        );
        
    }

    // 🔄 Подключаем fslightbox только на нужных страницах
        if ( is_page('documents') || is_page('home-listing') ) {
            wp_enqueue_script(
                'metronic-fslightbox',
                get_template_directory_uri() . '/metronic/assets/plugins/custom/fslightbox/fslightbox.bundle.js',
                array('jquery'),
                null,
                true
            );
        }

        // 🔄 подключение библиотеки PDF
        if (is_page_template('template-acf-dynamic-form.php')) {
            wp_enqueue_script(
                'jspdf',
                'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js',
                [],
                null,
                true
            );
        }

    // 💡 вывод анимации для регистрации и атворизации, все красивости и переход по ссылке, отложил на потом
    // Только для страницы логина
    //if (
      //  is_page_template('page-login.php') ||
      //  is_page_template('page-register.php')
    //) {
      //  wp_enqueue_script(
        //    'metronic-auth-general',
        //    get_template_directory_uri() . '/metronic/assets/js/custom/authentication/sign-in/general.js',
        //    array('metronic-scripts'),
        //    null,
        //    true
        //);
    //}


    //🔄 Только на странице мои проекты
    if (is_page_template('template-app-layout.php') && is_page('my-projects')) {
            // Кастомные скрипты Metronic (только для dashboard)
            
            wp_enqueue_script(
                'metronic-widgets-bundle',
                get_template_directory_uri() . '/metronic/assets/js/widgets.bundle.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-widgets',
                get_template_directory_uri() . '/metronic/assets/js/custom/widgets.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-list',
                get_template_directory_uri() . '/metronic/assets/js/custom/apps/projects/list/list.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-chat',
                get_template_directory_uri() . '/metronic/assets/js/custom/apps/chat/chat.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-upgrade-plan',
                get_template_directory_uri() . '/metronic/assets/js/custom/utilities/modals/upgrade-plan.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_enqueue_script(
                'metronic-create-app.js',
                get_template_directory_uri() . '/metronic/assets/js/custom/utilities/modals/create-app.js',
                array('metronic-scripts'),
                null,
                true
            );
 
             wp_enqueue_script(
                'metronic-users-search.js',
                get_template_directory_uri() . '/metronic/assets/js/custom/utilities/modals/users-search.js',
                array('metronic-scripts'),
                null,
                true
            );

            wp_localize_script(
                'form-wizard', 'ajaxurl', [
                'url' => admin_url('admin-ajax.php'),
            ]);
         
    }





}
add_action('wp_enqueue_scripts', 'metronic_enqueue_scripts');






// 💡 Функция автоматического тега <title>
function metronic_theme_setup() {
    // Включаем поддержку автоматического тега <title>
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'metronic_theme_setup');



// 💡 Функция сокрытия Админ бар
add_filter('show_admin_bar', 'metronic_hide_admin_bar');

function metronic_hide_admin_bar($show) {
    // Только для админа показываем, остальным скрываем
    return current_user_can('administrator');
}

// 💡 Убираем отсуп для админов
add_action('get_header', function() {
    if (!current_user_can('administrator')) {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
});


// 💡 Функция обработки формы регистрации
function metronic_process_registration() {
    if (isset($_POST['metronic_register_user']) && $_POST['metronic_register_user'] == '1') {

        $errors = [];

        // 🔐 Проверка nonce (анти-CSRF защита)
        if (
            !isset($_POST['metronic_register_nonce']) ||
            !wp_verify_nonce($_POST['metronic_register_nonce'], 'metronic_user_registration')
        ) {
            $errors[] = 'Ошибка безопасности. Повторите попытку.';
        }

        // ⛔ Остановиться, если уже есть ошибка безопасности
        if (!empty($errors)) {
            global $registration_errors;
            $registration_errors = $errors;
            return;
        }

        // ✅ Получаем данные из формы
        $username = sanitize_user($_POST['email']); // используем email как username
        $email    = sanitize_email($_POST['email']);
        $password = $_POST['password'];
        $confirm  = $_POST['confirm-password'];
        $first_name = sanitize_text_field($_POST['first_name'] ?? '');
        $last_name  = sanitize_text_field($_POST['last_name'] ?? '');

        // 🧪 Валидация
        if (empty($email) || empty($password) || empty($confirm) || empty($first_name) || empty($last_name)) {
            $errors[] = 'Пожалуйста, заполните все поля.';
        }

        if (!is_email($email)) {
            $errors[] = 'Неверный формат email.';
        }

        if ($password !== $confirm) {
            $errors[] = 'Пароли не совпадают.';
        }

        if (email_exists($email)) {
            $errors[] = 'Этот email уже зарегистрирован.';
        }

        // ✅ Если нет ошибок — регистрируем пользователя
        if (empty($errors)) {
            $user_id = wp_create_user($username, $password, $email);

            if (!is_wp_error($user_id)) {
                wp_update_user([
                    'ID'         => $user_id,
                    'first_name' => $first_name,
                    'last_name'  => $last_name,
                ]);
                // Авторизуем пользователя и перенаправим
                wp_set_current_user($user_id);
                wp_set_auth_cookie($user_id);
                wp_redirect(site_url('/dashboard')); // редирект после регистрации
                exit;
            } else {
                $errors[] = 'Не удалось создать пользователя.';
            }
        }

        // Отправляем ошибки обратно в шаблон
        global $registration_errors;
        $registration_errors = $errors;
    }
}
add_action('template_redirect', 'metronic_process_registration');

// 💡 Функция обработки авторизации
function metronic_process_login() {
    if (isset($_POST['metronic_login_user']) && $_POST['metronic_login_user'] == '1') {

        $errors = [];

        // Проверка nonce
        if (!isset($_POST['metronic_login_nonce']) || !wp_verify_nonce($_POST['metronic_login_nonce'], 'metronic_user_login')) {
            $errors[] = 'Ошибка безопасности.';
        }

        $email    = sanitize_email($_POST['email']);
        $password = $_POST['password'];

        // Валидация
        if (empty($email) || empty($password)) {
            $errors[] = 'Пожалуйста, заполните все поля.';
        }

        $user = get_user_by('email', $email);

        if ($user && wp_check_password($password, $user->user_pass, $user->ID)) {
            wp_set_current_user($user->ID);
            wp_set_auth_cookie($user->ID);
            wp_redirect(site_url('/dashboard'));
            exit;
        } else {
            $errors[] = 'Неверный email или пароль.';
        }

        global $login_errors;
        $login_errors = $errors;
    }
}
add_action('template_redirect', 'metronic_process_login');


// 💡Запрет доступ к страницам без регистрации
function protect_dashboard_pages() {
    if (!is_user_logged_in()) {
        $uri = get_page_uri(); // напр. 'account/account-settings', 'projects/my-projects'

        $protected_prefixes = [
            'dashboard',
            'profile',
            'account',
            'projects',
        ];

        foreach ($protected_prefixes as $prefix) {
            if (str_starts_with($uri, $prefix)) {
                wp_redirect(site_url('/login'));
                exit;
            }
        }
    }
}
add_action('template_redirect', 'protect_dashboard_pages');





// 💡 Манипуляции по новому меню
// 💡 регистрируем sidebar menu 
function metronic_register_menus() {
    register_nav_menus(array(
        'metronic_sidebar_menu' => 'Metronic Sidebar Menu'
    ));
}
add_action('after_setup_theme', 'metronic_register_menus');


// 💡 Кастомный Walker для меню в стиле Metronic
class Metronic_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '<div class="menu-sub menu-sub-accordion">';
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= '</div>';
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $has_children = in_array('menu-item-has-children', $item->classes);

        // 🔥 Активные пункты
        $is_current = in_array('current-menu-item', $item->classes) || in_array('current-menu-ancestor', $item->classes);
        $menu_trigger_attr = $has_children && $depth === 0 ? ' data-kt-menu-trigger="click"' : '';

        // 🔥 Класс для .menu-item
        $menu_item_class = 'menu-item';
        if ($has_children) $menu_item_class .= ' menu-accordion';
        if ($is_current) $menu_item_class .= ' show';

        // 🔧 Иконка (ищем класс с ki-)
        $icon_class = 'ki-duotone ki-element-11 fs-2'; // по умолчанию
        foreach ($item->classes as $class) {
            if (strpos($class, 'ki-') === 0) {
                $icon_class = esc_attr(implode(' ', $item->classes));
                break;
            }
        }

        // 🧩 Открытие блока menu-item
        $output .= '<div class="' . esc_attr($menu_item_class) . '"' . $menu_trigger_attr . '>';

        if ($depth > 0) {
            // 🔸 Подменю
            $link_class = 'menu-link' . ($is_current ? ' active' : '');
            $output .= '<a class="' . esc_attr($link_class) . '" href="' . esc_url($item->url) . '">';
            $output .= '<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>';
            $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
            $output .= '</a>';
        } else {
            // 🔹 Верхний уровень
            $link_class = 'menu-link' . ($is_current ? ' active' : '');

            if ($has_children) {
                $output .= '<span class="' . esc_attr($link_class) . '">';
                $output .= '<span class="menu-icon"><i class="' . esc_attr($icon_class) . '"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span>';
                $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
                $output .= '<span class="menu-arrow"></span>';
                $output .= '</span>';
            } else {
                $output .= '<a class="' . esc_attr($link_class) . '" href="' . esc_url($item->url) . '">';
                $output .= '<span class="menu-icon"><i class="' . esc_attr($icon_class) . '"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span>';
                $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
                $output .= '</a>';
            }
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= '</div>';
    }
}





// 💡 Кастомная функция вывода хлебных крошек в стиле Metronic
function metronic_breadcrumbs() {
    // Начало верстки
    echo '<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">';

    // Главная страница
    echo '<li class="breadcrumb-item text-muted">';
    echo '<a href="' . home_url() . '" class="text-muted text-hover-primary">Home</a>';
    echo '</li>';

    // Разделитель
    echo '<li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>';

    // Страницы / Посты
    if (is_page()) {
        // Родительская страница (если есть)
        global $post;
        $parents = get_post_ancestors($post);

        if ($parents) {
            $parents = array_reverse($parents);
            foreach ($parents as $parent_id) {
                echo '<li class="breadcrumb-item text-muted">';
                echo '<a href="' . get_permalink($parent_id) . '" class="text-muted text-hover-primary">';
                echo get_the_title($parent_id);
                echo '</a></li>';
                echo '<li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>';
            }
        }

        // Текущая страница
        echo '<li class="breadcrumb-item text-muted">' . get_the_title() . '</li>';

    } elseif (is_single()) {
        // Запись
        echo '<li class="breadcrumb-item text-muted">' . get_the_title() . '</li>';

    } elseif (is_category()) {
        // Категория
        echo '<li class="breadcrumb-item text-muted">' . single_cat_title('', false) . '</li>';

    } elseif (is_search()) {
        echo '<li class="breadcrumb-item text-muted">Результаты поиска</li>';

    } elseif (is_404()) {
        echo '<li class="breadcrumb-item text-muted">Ошибка 404</li>';
    }

    echo '</ul>';
}


// 💡 Функция обработки формы данных в личном кабинете.
add_action('template_redirect', 'metronic_update_profile_details');

function metronic_update_profile_details() {
    if (
        isset($_POST['metronic_profile_update']) &&
        wp_verify_nonce($_POST['metronic_profile_nonce'], 'metronic_profile_update_action') &&
        is_user_logged_in()
    ) {
        $user_id = get_current_user_id();

        // Имя и фамилия
        if (isset($_POST['fname'])) {
            wp_update_user(['ID' => $user_id, 'first_name' => sanitize_text_field($_POST['fname'])]);
        }

        if (isset($_POST['lname'])) {
            wp_update_user(['ID' => $user_id, 'last_name' => sanitize_text_field($_POST['lname'])]);
        }

        // Телефон
        if (isset($_POST['phone'])) {
            update_user_meta($user_id, 'phone', sanitize_text_field($_POST['phone']));
        }


        // Язык
        if (isset($_POST['language'])) {
            update_user_meta($user_id, 'language', sanitize_text_field($_POST['language']));
        }

        // Обработка аватара
        if (!empty($_FILES['avatar']['name'])) {
            // Подключаем нужные файлы WordPress для загрузки
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/image.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            // Удаляем старый аватар, если он есть
            $old_avatar_id = get_user_meta($user_id, 'custom_avatar', true);
            if ($old_avatar_id) {
                wp_delete_attachment($old_avatar_id, true);
            }

            // Загружаем новый
            $uploaded = media_handle_upload('avatar', 0);
            if (!is_wp_error($uploaded)) {
                update_user_meta($user_id, 'custom_avatar', $uploaded);
            }
        }



        // Удаление аватара
        if (isset($_POST['avatar_remove']) && $_POST['avatar_remove'] === '1') {
            delete_user_meta($user_id, 'custom_avatar');
        }      

        wp_redirect( esc_url($_SERVER['REQUEST_URI']) );
        exit;
    }
}


// 💡💡💡 Все касательно работы и вывода аватара
// 💡 Переопределение и перехват стандартного граватар на кастомный

add_filter('get_avatar_url', 'metronic_custom_avatar_url', 10, 3);

function metronic_custom_avatar_url($url, $id_or_email, $args) {
    $user = false;

    if (is_numeric($id_or_email)) {
        $user = get_user_by('id', $id_or_email);
    } elseif (is_object($id_or_email) && isset($id_or_email->user_id)) {
        $user = get_user_by('id', $id_or_email->user_id);
    } elseif (is_string($id_or_email)) {
        $user = get_user_by('email', $id_or_email);
    }

    if ($user) {
        $custom_avatar_id = get_user_meta($user->ID, 'custom_avatar', true);
        if ($custom_avatar_id) {
            $custom_url = wp_get_attachment_image_url($custom_avatar_id, $args['size']);
            if ($custom_url) {
                return $custom_url;
            }
        }
    }

    return $url;
}


// 💡 Переопределение URL аватара, если пользователь загрузил свой
add_filter('get_avatar_url', function ($url, $id_or_email) {
    $user = false;

    if (is_numeric($id_or_email)) {
        $user = get_user_by('id', $id_or_email);
    } elseif (is_object($id_or_email) && isset($id_or_email->user_id)) {
        $user = get_user_by('id', $id_or_email->user_id);
    } elseif (is_string($id_or_email)) {
        $user = get_user_by('email', $id_or_email);
    }

    if ($user) {
        $custom_avatar_id = get_user_meta($user->ID, 'custom_avatar', true);
        if ($custom_avatar_id) {
            $custom_url = wp_get_attachment_image_url($custom_avatar_id, 'thumbnail');
            if ($custom_url) {
                return $custom_url;
            }
        }
    }

    return $url;
}, 10, 2);


// 💡 Бонус функция для простого вывода аватара
function metronic_get_user_avatar_url($user_id, $size = 'full') {
    $custom_avatar_id = get_user_meta($user_id, 'custom_avatar', true);

    if ($custom_avatar_id) {
        $url = wp_get_attachment_image_url($custom_avatar_id, $size);
        if ($url) {
            // Принудительно HTTPS
            return str_replace('http://', 'https://', $url);
        }
    }

    return get_avatar_url($user_id, ['size' => $size]);
}

// 💡💡💡
// 💡 Регистрация нового меню
register_nav_menus([
    'account_tabs_menu' => 'Account Tabs Menu'
]);

// 💡 Вывод нового меню
class Metronic_Account_Tabs_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $active_class = in_array('current-menu-item', $item->classes) ? 'active' : '';
        $output .= '<li class="nav-item mt-2">';
        $output .= '<a class="nav-link text-active-primary ms-0 me-10 py-5 ' . $active_class . '" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        $output .= '</li>';
    }
}



// 💡💡💡
// 💡  Этапы создания системы проектов:
// 1. Регистрация нового типа записи project
function metronic_register_project_post_type() {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No Projects found',
            'not_found_in_trash' => 'No Projects found in Trash',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'project'),
        'show_in_rest' => true, // 👈 обязательно для Gutenberg
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'show_in_menu' => true,
    ));
}
add_action('init', 'metronic_register_project_post_type');






// 💡 2. Привязка проекта к пользователю
// Автоматически сохраняем ID автора при создании:
add_action('save_post_project', function($post_id, $post, $update) {
    if (!$update) {
        wp_update_post([
            'ID' => $post_id,
            'post_author' => get_current_user_id()
        ]);
    }
}, 10, 3);


// 💡 3. Ограничение доступа к проектам
// Чтобы обычный пользователь видел только свои проекты в админке:
function metronic_restrict_project_list($query) {
    if (
        is_admin() &&
        $query->is_main_query() &&
        $query->get('post_type') === 'project' &&
        !current_user_can('administrator')
    ) {
        $query->set('author', get_current_user_id());
    }
}
add_action('pre_get_posts', 'metronic_restrict_project_list');




//💡 Пользовательский крипт для пошаговой формы сделал GPT
function metronic_enqueue_custom_scripts() {
    wp_enqueue_script(
        'form-wizard',
        get_template_directory_uri() . '/assets/js/form-wizard.js',
        array(),
        null,
        true
    );

    // Прокидываем переменную ajaxurl
    wp_localize_script('form-wizard', 'ajaxurl', array(
    'url' => admin_url('admin-ajax.php'),
));
}
add_action('wp_enqueue_scripts', 'metronic_enqueue_custom_scripts');





// 💡 Обработчик для формы




// Регистрируем AJAX-хендлер для авторизованных и гостей
add_action('wp_ajax_save_project_step', 'save_project_step_callback');
add_action('wp_ajax_nopriv_save_project_step', 'save_project_step_callback');

function save_project_step_callback() {
    // Защита: project_id должен быть целым
    $project_id = isset($_POST['project_id']) ? intval($_POST['project_id']) : 0;
        $are_you = sanitize_text_field($_POST['are_you'] ?? '');
        $legal_residence = sanitize_text_field($_POST['legal_residence'] ?? '');
        $squatters_duration = sanitize_text_field($_POST['squatters_duration'] ?? '');
        $police_contacted = sanitize_text_field($_POST['police_contacted'] ?? '');
        $utility_services = sanitize_text_field($_POST['utility_services'] ?? '');
        $receive_mail = sanitize_text_field($_POST['receive_mail'] ?? '');
    $content = wp_kses_post($_POST['post_content'] ?? '');
        $state = sanitize_text_field($_POST['state'] ?? '');
        $county = sanitize_text_field($_POST['county'] ?? '');
        $city = sanitize_text_field($_POST['city'] ?? '');
        $zip = sanitize_text_field($_POST['zip'] ?? '');

    // Получаем город
    $city = sanitize_text_field($_POST['city'] ?? 'Unknown City');

    // Генерируем дату
    $date = date('M d, Y');

    // Собираем автоназвание
    $title = 'Case - ' . $city . ' - ' . $date;





    // Если проект не существует или не является 'project', создаём новый
    if (!$project_id || get_post_type($project_id) !== 'project') {
        $project_id = wp_insert_post([
            'post_type'    => 'project',
            'post_status'  => 'draft',
            'post_title'   => $title,
            'post_content' => $content,
        ]);
    } else {
        // Обновление существующего проекта
        wp_update_post([
            'ID'           => $project_id,
            'post_title'   => $title,
            'post_content' => $content,
        ]);
    }

    // Устанавливаем статус проекта по умолчанию
    if (!is_wp_error($project_id)) {
        update_post_meta($project_id, 'project_status', 'Pending');
    }

    // Проверка на ошибки
    if (is_wp_error($project_id)) {
        wp_send_json_error('Не удалось сохранить проект');
    }

    // Сохраняем кастомные поля
        update_post_meta($project_id, 'are_you', $are_you);
        update_post_meta($project_id, 'legal_residence', $legal_residence);
        update_post_meta($project_id, 'squatters_duration', $squatters_duration);
        update_post_meta($project_id, 'police_contacted', $police_contacted);
        update_post_meta($project_id, 'utility_services', $utility_services);
        update_post_meta($project_id, 'receive_mail', $receive_mail);

        update_post_meta($project_id, 'state', $state);
        update_post_meta($project_id, 'county', $county);
        update_post_meta($project_id, 'city', $city);
        update_post_meta($project_id, 'zip', $zip);


    wp_send_json_success(['project_id' => $project_id]);
}



// 💡 Функция создания нового преокта
add_action('wp_ajax_create_new_project', 'handle_create_new_project');

function handle_create_new_project() {
    if (!is_user_logged_in()) {
        wp_send_json_error('User not logged in');
    }

    $user_id = get_current_user_id();

    $project_id = wp_insert_post([
        'post_type'   => 'project',
        'post_status' => 'draft',
        'post_title'  => 'Untitled Project',
        'post_author' => $user_id,
    ]);

    if (is_wp_error($project_id)) {
        wp_send_json_error('Error creating project');
    }

    update_post_meta($project_id, 'project_status', 'Pending');

    // Сохраняем ID в куку (если нужно) — или просто работаем через $_GET
    setcookie('draft_project_id', $project_id, time() + 3600, "/");

    $form_url = get_permalink(148); // ← ID страницы формы
    $form_url = add_query_arg('project_id', $project_id, $form_url);

    wp_send_json_success([
        'project_id'  => $project_id,
        'project_url' => $form_url
    ]);
}



// 💡 Функция диаграмы в разделе пои проекты
add_action('wp_enqueue_scripts', function () {
    if (is_page('my-projects')) {
        wp_enqueue_script(
            'dashboard-js',
            get_template_directory_uri() . '/assets/js/dashboard.js',
            ['chart-js'],
            null,
            true
        );

        // Предположим, что ты где-то до этого сформировал $status_counts
        global $status_counts;

        // Защита от ошибки
        $status_counts = is_array($status_counts) ? $status_counts : [];

        // Передача в JS
        wp_localize_script('dashboard-js', 'dashboardChartData', [
            'data' => array_values($status_counts),
        ]);
    }
});



// Подключаем JS и передаём ajaxurl
add_action('wp_enqueue_scripts', 'enqueue_form_wizard_script');
function enqueue_form_wizard_script() {
    wp_enqueue_script(
        'form-wizard',
        get_template_directory_uri() . '/assets/js/form-wizard.js',
        ['jquery'],
        null,
        true
    );

    wp_localize_script('form-wizard', 'ajaxurl', [
        'url' => admin_url('admin-ajax.php'),
    ]);
}



// 💡 Фильтрация пунктов меню по ролям и статусу авторизации
function filter_menu_for_user($items) {
    $is_logged_in = is_user_logged_in();
    $is_admin     = current_user_can('administrator');

    foreach ($items as $key => $item) {
        $classes = $item->classes;

        // Только для авторизованных
        if (in_array('logged-in-only', $classes) && !$is_logged_in) {
            unset($items[$key]);
            continue;
        }

        // Только для гостей
        if (in_array('guest-only', $classes) && $is_logged_in) {
            unset($items[$key]);
            continue;
        }

        // Только для админов
        if (in_array('admin-only', $classes) && !$is_admin) {
            unset($items[$key]);
            continue;
        }

        // always-visible можно оставить как есть — не фильтруется
    }

    return $items;
}
add_filter('wp_nav_menu_objects', 'filter_menu_for_user', 10, 1);

// 💡 Это подменяет шаблон single-project.php на твой Metronic layout.
add_filter('template_include', function ($template) {
    if (is_singular('project')) {
        return get_template_directory() . '/template-app-layout.php';
    }
    return $template;
});


// 💡💡💡 отключаем стандартный вывод товара woocomerce
add_action('wp', 'disable_default_wc_product_hooks');
function disable_default_wc_product_hooks() {
    if ( is_product() ) {
        remove_all_actions('woocommerce_single_product_summary');
        remove_all_actions('woocommerce_after_single_product_summary');
        remove_all_actions('woocommerce_after_single_product');
    }
}



// 💡💡💡 💡💡 Регистрируем новый тип записи для документов
function register_document_post_type() {
    $labels = array(
        'name'               => 'Documents',
        'singular_name'      => 'Document',
        'add_new'            => 'Add New',
        'add_new_item'       => 'New Document',
        'edit_item'          => 'Edit Document',
        'new_item'           => 'New Document',
        'view_item'          => 'View Document',
        'search_items'       => 'Search Documents',
        'not_found'          => 'No documents found',
        'not_found_in_trash' => 'No documents found in Trash',
        'menu_name'          => 'My Documents',
    );

    $args = array(
        'label'               => 'Documents',
        'labels'              => $labels,
        'public'              => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-media-document',
        'supports'            => array('title', 'editor', 'author', 'custom-fields'),
        'has_archive'         => false,
        'rewrite'             => array('slug' => 'documents-list'),
        'show_in_rest'        => true, // enables Gutenberg + REST API
    );

    register_post_type('document', $args);
}
add_action('init', 'register_document_post_type');








// 💡💡💡 Регистрируем кастомную таксономию для кастомного типа записи документ
function register_document_type_taxonomy() {
    $labels = array(
        'name'              => 'Document Types',
        'singular_name'     => 'Document Type',
        'search_items'      => 'Search Types',
        'all_items'         => 'All Types',
        'edit_item'         => 'Edit Type',
        'update_item'       => 'Update Type',
        'add_new_item'      => 'Add New Type',
        'new_item_name'     => 'New Type Name',
        'menu_name'         => 'Document Types',
    );

    $args = array(
        'hierarchical'      => true, // как категории
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'document-type'),
    );

    register_taxonomy('document_type', array('document'), $args);
}
add_action('init', 'register_document_type_taxonomy');

// 💡💡💡 подключаем скрипт для работы только на страницах документов
function enqueue_document_form_script() {
    if (
        is_page('documents') &&
        isset($_GET['type']) &&
        in_array($_GET['type'], [
            'notice_to_vacate',
            'cease_and_desist',
            'affidavit_ownership',
            // добавь сюда остальные типы по мере добавления
        ])
    ) {
        wp_enqueue_script(
            'document-wizard',
            get_template_directory_uri() . '/assets/js/forms/document-wizard.js',
            array('jquery'),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_document_form_script');


// 💡💡💡 регистрируем новый пункт меню для менюлендинга
function register_theme_menus() {
    register_nav_menu('landing-menu', __('Landing Page Menu'));
}
add_action('after_setup_theme', 'register_theme_menus');


// 💡💡💡 редирект с главной на листинг ВРЕМЕННЫЙ
add_action('template_redirect', function () {
    if (is_front_page() && !is_admin()) {
        wp_redirect(site_url('/home-listing/'), 301); // 301 — постоянный редирект
        exit;
    }
});


// 💡💡💡 регистрируем новый горизонтальный пункт меню который будет удлировать боковой 
function register_custom_menus() {
    register_nav_menu('main-horizontal-menu', 'Main Horizontal Menu');
}
add_action('after_setup_theme', 'register_custom_menus');

// 💡💡💡 подключаем кастомный класс
class Metronic_Menu_Walker extends Walker_Nav_Menu {
    // Элемент
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);
        $is_active = in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes) || in_array('current-menu-ancestor', $classes);
        $active_class = $is_active ? ' active' : '';
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));





        if ($depth === 0) {
            $output .= '<div class="menu-item menu-lg-down-accordion' . ($has_children ? ' menu-sub-lg-down-indention' : '') . ' me-0 me-lg-2"';
            if ($has_children) {
                $output .= ' data-kt-menu-trigger="{default: \'click\', lg: \'hover\'}" data-kt-menu-placement="bottom-start"';
            }
            $output .= '>';


            if ($has_children) {
                $output .= '<span class="menu-link' . $active_class . '">';
                $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
                $output .= '<span class="menu-arrow"></span>'; // ✅ стрелка видна всегда
                $output .= '</span>';
            } else {
                $output .= '<a class="menu-link' . $active_class . '" href="' . esc_url($item->url) . '">';
                $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
                $output .= '</a>';
            }
        } else {
            $output .= '<div class="menu-item' . ($has_children ? ' menu-accordion' : '') . '"';
            if ($has_children) {
                $output .= ' data-kt-menu-trigger="hover" data-kt-menu-placement="right-start"';
            }
            $output .= '>';

            if ($has_children) {
                $output .= '<span class="menu-link' . $active_class . '">';
                $output .= '<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>';
                $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
                $output .= '<span class="menu-arrow"></span>';
                $output .= '</span>';
            } else {
                $output .= '<a class="menu-link' . $active_class . '" href="' . esc_url($item->url) . '">';
                $output .= '<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>';
                $output .= '<span class="menu-title">' . esc_html($item->title) . '</span>';
                $output .= '</a>';
            }
        }
    }

    // Закрытие элемента
    public function end_el(&$output, $item, $depth = 0, $args = []) {
        $output .= '</div>';
    }

    // Открытие подменю
    public function start_lvl(&$output, $depth = 0, $args = []) {
        $class = $depth === 0
            ? 'menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px'
            : 'menu-sub menu-sub-dropdown menu-sub-indention px-4 py-3 w-225px';

        $output .= '<div class="' . $class . '">';
    }

    // Закрытие подменю
    public function end_lvl(&$output, $depth = 0, $args = []) {
        $output .= '</div>';
    }
}




// подключение ппошаговой формы для Jason 
function enqueue_progress_tracker_script() {
    wp_enqueue_script(
        'progress-tracker',
        get_template_directory_uri() . '/assets/js/progress-tracker.js',
        ['jquery'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_progress_tracker_script');


// 💡💡💡 Делаем поля ACF похожими на метроник
add_filter('acf/prepare_field', function ($field) {
    // Только для фронтенда
    if (is_admin()) return $field;

    // Добавим классы по типу поля
    switch ($field['type']) {
        case 'text':
        case 'email':
        case 'number':
        case 'url':
        case 'password':
        case 'date_picker':
        case 'time_picker':
        case 'date_time_picker':
        case 'textarea':
            $field['wrapper']['class'] .= ' mb-4';
            $field['class'] .= ' form-control';
            break;

        case 'select':
        case 'checkbox':
        case 'radio':
            $field['wrapper']['class'] .= ' mb-4';
            $field['class'] .= ' form-select'; // или 'form-check' если checkbox
            break;
    }

    return $field;
});

// 💡💡💡 Формирование названия для нового документа
add_action('acf/save_post', 'set_document_title_and_type', 20);
function set_document_title_and_type($post_id) {
    if (get_post_type($post_id) !== 'document') return;

    // Получаем slug страницы
    if (!isset($_SERVER['HTTP_REFERER'])) return;
    $referer = esc_url_raw($_SERVER['HTTP_REFERER']);
    $page_slug = basename(parse_url($referer, PHP_URL_PATH));

    // Преобразуем slug в название типа (можешь сделать словарь)
    $slug_map = [
        'business-plan-form' => 'Business Plan',
        'nda-agreement-form' => 'Non-Disclosure Agreement',
        'contract-template-form' => 'Contract Template',
        'advance-directive-form' => 'Advance Directive',
        // ➕ Добавляй по мере надобности
    ];

    $doc_type_name = $slug_map[$page_slug] ?? 'Без категории';

    // Ищем или создаём термин в таксономии
    $term = get_term_by('name', $doc_type_name, 'document_type');
    if (!$term) {
        $term = wp_insert_term($doc_type_name, 'document_type');
        if (is_wp_error($term)) return;
        $term_id = $term['term_id'];
    } else {
        $term_id = $term->term_id;
    }

    // Назначаем документу тип
    wp_set_post_terms($post_id, [$term_id], 'document_type', false);

    // Формируем заголовок
    $company = get_field('company_name', $post_id);
    $type = get_field('legal_form', $post_id);
    $date = get_field('effective_from', $post_id);

    $title_parts = [];
    if ($doc_type_name) $title_parts[] = $doc_type_name;
    if ($company) $title_parts[] = $company;
    if ($type) $title_parts[] = $type;
    if ($date) $title_parts[] = 'от ' . $date;

    $title = implode(' ', $title_parts);

    wp_update_post([
        'ID' => $post_id,
        'post_title' => $title
    ]);
}

// подключаем скрипты ACF
add_action('wp_enqueue_scripts', function() {
    if (is_page_template('template-acf-dynamic-form.php')) {
        // Подключаем скрипты и стили ACF, включая datepicker
        acf_enqueue_scripts();
    }
});



// что серверный обработчик  Функция сохранения документа и генерации PDF
add_action('wp_ajax_generate_pdf', 'generate_pdf_callback');
add_action('wp_ajax_nopriv_generate_pdf', 'generate_pdf_callback');

function generate_pdf_callback() {
    $doc_id = isset($_GET['doc_id']) ? intval($_GET['doc_id']) : 0;
    if (!$doc_id || get_post_type($doc_id) !== 'document') {
        wp_die('Неверный ID документа');
    }

    // Подключение mPDF
    if (!class_exists('\Mpdf\Mpdf')) {
        require_once get_template_directory() . '/vendor/autoload.php'; // путь к mPDF
    }

    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4',
        'default_font' => 'dejavusans',
    ]);

    // Получаем поля ACF
    $fields = [
        'Название компании' => get_field('company_name', $doc_id),
        'Описание продукта' => get_field('product_description', $doc_id),
        'Дата начала' => get_field('effective_from', $doc_id),
        'Целевая аудитория' => get_field('target_market', $doc_id),
    ];

    $html = '<h1 style="text-align:center;">Бизнес-план</h1>';
    foreach ($fields as $label => $value) {
        $html .= "<p><strong>{$label}:</strong> " . nl2br($value ?: '—') . "</p>";
    }

    $mpdf->WriteHTML($html);
    $mpdf->Output("document-{$doc_id}.pdf", 'D'); // D — сразу скачать
    exit;
}








