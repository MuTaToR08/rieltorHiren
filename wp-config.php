<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rieltor' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.mxGtrK8y;>m2}d|IO^g89]kL{_3LOa|nKM1kbD^elo?0?ZCms|o-2&9YCqqMriE' );
define( 'SECURE_AUTH_KEY',  '49{%[oM;fEJ])56%gU82f7aG,r2&9d^eH:q!C_}Ycb3cUzl $&Iy3t|U=yt*9n.?' );
define( 'LOGGED_IN_KEY',    '6>K&3&Z~8V(e6gD`B;~`KjRp^Aoap|J9E1[n$qw=D5VB8<sUM`2L?)7Zwe>qHxk8' );
define( 'NONCE_KEY',        '#0II>-?&FK@(KtNnJy[x2O.ySC8gOn62i6q(Nxl|n0C/x!6I=l05By_qRpYuw?z-' );
define( 'AUTH_SALT',        '|BeYlT~(_ZU$!;Q``<Cb5S~m$ql ;d-pO?G(Yhc?k~rpG)Of^X;VYy%[2{0r:O7|' );
define( 'SECURE_AUTH_SALT', 'l)Ui-$:BxC[J1&F:i`vw$rWydFGS&I9TZ#Ih#udChRW8XaA!;ReT;i:F+Q;KZk[U' );
define( 'LOGGED_IN_SALT',   '28v@Maf9SJs-z0,jE|5#y2@>S;cpOY_5WcM1lY<2H[O5cIE<>`*Tli75e9,$:z_b' );
define( 'NONCE_SALT',       'KoY;{{Q(?s`>(HpLXM8GNj`U<ABZF(*`M0wuTk}hH;ib1M7P{U8+0Bb<H0H)$$mQ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'rlwp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
