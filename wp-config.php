<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'redhat_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'redhat_db' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'f4ZiQVy5VIevqKul' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&FlI+AoVf=)9mm>cMb+*/|[@N,L <%~mmBhL^< ]9L P}uB;g3OP5l$,&_#;!SvE' );
define( 'SECURE_AUTH_KEY',  'NWfh|-bQ`L!C[_4?5#9{z??gq$bl/,]Q*S`k_vd>+8f5+{#g8NsePmVKjy/hgaw`' );
define( 'LOGGED_IN_KEY',    'i[Mn*~&gHN(_uvi|J(kCe9{t-hz.Aj-!$YnK}k$-tcsE@(rFw-8*]x]0?+=.tew0' );
define( 'NONCE_KEY',        ']X8Ga@y6M|dF]S;=)B.zbpyYY_~xFy%}8H7~a0& %g&=_qjTmDKe@/gE}.,;zOJK' );
define( 'AUTH_SALT',        'f1jV-a5Tt?Y`&).*WO`.1&~qHoy8BrJP#SgqjAiBQXVL]E{13qCVay4o*>n%2wq}' );
define( 'SECURE_AUTH_SALT', 'nZG[!,IJ&3pKm0i@~34,M})u=;E[-;9;Ig#@#r8C2,,b;2GuwYV3@y,;^3A%s?c3' );
define( 'LOGGED_IN_SALT',   ':M?DoZkR#-=u5d tn|nDKGfv|7l77Ok=>tJ!D0z>n3l.t28()PpR0XNRjeR`x;0h' );
define( 'NONCE_SALT',       ' ?n)}zOc>~*C5c8)P2+Q[b:ekRzXJcy<-JZ%cf=m:~{<xy7gBrNd-xiT4_SFr4I[' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
