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
define('DB_NAME', 'wp_dev');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/7l^FE5qC.&F6!F(?SO. JM|&>S>m+Z[N4oMlobYHwqs]#IuNy-}3UNwSg0~{{>T');
define('SECURE_AUTH_KEY',  'ZlHcGv.x*:FmOMM+S@wK`9Ux`;H#C>_L;-` k/U]WT.& C}M]!8zZ(4&V[|.,y:A');
define('LOGGED_IN_KEY',    'v<q?v;[nY7+$%zRNfDB>f1@v]Ys3kIC/&%_q>f0UYxqI]=,)FMv8Kj:y6A)-Fb12');
define('NONCE_KEY',        'j =6U+HPea{8oVfj-y!Ar2,JB)vKk4F*dE/+9Y7SCB6#Ud6$0ND>3y|o%mQPT0?(');
define('AUTH_SALT',        'w^H0yLV7~I_pbOBP#B.8}#BLQYIFa;T;-[E3p>sdt{v,cXsNN<ZG=suMP=my]9^F');
define('SECURE_AUTH_SALT', 'H]p6f`8}LF2>fj:a<ictCB$OmZ1~%wT7^kqL3i)]QY!?:_6T(,.sLPffErl :gL=');
define('LOGGED_IN_SALT',   'kHEp2~u=i7Qj8Lz|dmTwGB76dNzZE)kg<PSEU:W/t2:<dR,@R&:sF56<Pk]XQ0v2');
define('NONCE_SALT',       '9xEZ&yXVH3nFmW@I(IS>DvC-M,00_n:vDqQV|^d0%#@#we0cD!?v7 aEax-hhiru');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
