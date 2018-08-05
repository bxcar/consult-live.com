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
define( 'WP_HOME', 'http://www.consult-live.com/');
define( 'WP_SITEURL', 'http://www.consult-live.com/');
define('DB_NAME', 'u0543587_default');

/** Имя пользователя MySQL */
define('DB_USER', 'u0543587_default');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1E4TP_Br');

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
define('AUTH_KEY',         'Qn;]kIe+TMR_SUrz=z_Cq7|w=0m14^io@H/dF|b{,I`Wi Xu}G+&Yl[-~1D$Txi@');
define('SECURE_AUTH_KEY',  'S*n7Ngw5Cq>4EPA9c4. AJPd,JOlo!L9Gk[]Y($D8.AM|,R!jKt$?_}A#}s6N4]c');
define('LOGGED_IN_KEY',    ' P;[uXz-DPw!C9$6WTl@y(9rS>q<DB]Y)P[(kkhM;h?rCwp56KFiyoPhJca/O[7E');
define('NONCE_KEY',        'dA(>j NF^M|o,_J)UXK$q`s8[ZZ97caT(WShnhEV]aOLB6uf MbJlH)?-evzHARW');
define('AUTH_SALT',        'XL34N+R).Yl[;iLr~;#y3RH>@R-gl^e_8n^FPpK#+Z(Yq(] 525/](Mk&({E;FE4');
define('SECURE_AUTH_SALT', '&kGZtEti&w8v]=(|A)M_-TC6QdI80lKP^~@B?/)^7XfD1nQH%@en,nK<-%-34@f7');
define('LOGGED_IN_SALT',   'A:m50O;UEJh,xmS+});x!M^9b,2,cC0-QGiEM,w||NAS2$joEAw_>foF[_`nP#yg');
define('NONCE_SALT',       '?w$1IvLNz@#!N-~ {K/tgiQ/:)E1xI#7>NYHD-xC`!>7]T#7Ga-`,3;qA%QRMe$/');

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
