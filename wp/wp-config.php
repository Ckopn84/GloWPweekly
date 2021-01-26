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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_maket' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp_maket' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'x6av1LWcsOxwQi50' );

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
define( 'AUTH_KEY',         '2T!&bKf#GsEhMb9:b HRN(H5^yP{9Qum>k8Yyd{difCYsS%,cjw)3k]$?x7%|g[>' );
define( 'SECURE_AUTH_KEY',  '.FlTkpnC1Yo($GrhSfK`iFuU9P-X7@;IY[,A/,>0nsUY:1g!4maI4=CN~GL}.Fm[' );
define( 'LOGGED_IN_KEY',    '72i1RN@BcXpuM{XO=J%?6!{FPo)-.:k|W}UHMIB<thu?C<P9{a>B;(p_v]<Nn/um' );
define( 'NONCE_KEY',        'je|#[oY` 8`{~o*pKYY8yd{~-I2khF_w7<c?@8ku&W>N)!p$9&R=ry,_D&(6$t0K' );
define( 'AUTH_SALT',        'q8_i%Hn)tq1b[K&.jyikAAbEn/_y8a]BQGX|WgA+2p=w5n^*p>aQY~#$55X1a$2E' );
define( 'SECURE_AUTH_SALT', 'L LP5ES GJe2R=Hhu~Rr#Krw:bh(G~@z3X#r_eUnGG;^qk0ZlE<T*2sw6q_}YUQ0' );
define( 'LOGGED_IN_SALT',   'qV~<{# `V<S-qG/U%z^):oo/7*GjUw?BYM:/a@4wED8cY4l4^j>+sl/S{>3!<}e&' );
define( 'NONCE_SALT',       '3TS+=%nznp /5,MV5).O^^s86cvB($$]_EhwYg#:;Ei;D!`yy*!{%69Ab>2Rr671' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
