ADDITIONAL_SOFTWARES="vim htop"

PHP_VERSION="7.0"

# Vagrant constants
MACHINE_NAME="plugacuca"
PRIVATE_IP="10.10.10.40"
VAGRANT_TARGET="/var/www/plugacuca"
LOCAL_PATH="/var/www/plugacuca"
DOCUMENT_ROOT="/var/www/plugacuca"

SERVER_NAME="dev.plugacuca.com.br"

SYNCFOLDER_PATH="/var/www/plugacuca/vagrant_files/sync"
SYNCFOLDER_TARGET="/tmp/sync"

MYSQL_DUMP_NAME="plugacuca.sql"
MYSQL_PASSWORD="password"
MYSQL_HOST="localhost"
MYSQL_DATABASE_NAME="plugacuca"

VIRTUAL_HOST="<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and port t
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        ServerName $SERVER_NAME
        DocumentRoot $DOCUMENT_ROOT
        <Directory $DOCUMENT_ROOT>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Require all granted
        </Directory>

        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog \${APACHE_LOG_DIR}/error.log
        CustomLog \${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with \"a2disconf\".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>"




WPCONFIG="<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to \"wp-config.php\" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME','http://$SERVER_NAME');
define('WP_SITEURL','http://$SERVER_NAME');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '$MYSQL_DATABASE_NAME');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '$MYSQL_PASSWORD');

/** MySQL hostname */
define('DB_HOST', '$MYSQL_HOST');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'teste');
define('SECURE_AUTH_KEY',  'teste');
define('LOGGED_IN_KEY',    'teste');
define('NONCE_KEY',        'teste');
define('AUTH_SALT',        'teste');
define('SECURE_AUTH_SALT', 'teste');
define('LOGGED_IN_SALT',   'teste');
define('NONCE_SALT',       'teste');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
\$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
"