<?php

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%gFKx=As:Ms-8$Mv[]{X P]MDH_wWUDf|k36y4zkfSB|QhNS|@>q;+zD%2j7;6@^');
define('SECURE_AUTH_KEY',  'J!=l1y YZT7ro<tq$9KR58!p^fE|1w-s~%HazPiUP$f,dg36P:O*69o(E8^b!o[=');
define('LOGGED_IN_KEY',    '~$~6+tK+Ta4`OhBiVrTDQMb|@DUYB6V==(<wsyt,+&3ye~pT>X$Q{l9aI2c}[~K7');
define('NONCE_KEY',        '>#U5|$#DSp1`ym/&{/zg!aE!C)58=|fh|[iy[Tv7A0f)(dyorQgmT8,[3$u+zd$O');
define('AUTH_SALT',        '-,Z7&8eIBelHmK=e|=s{+auQ1x)|b<95y{$-!2yq70j8g-7WCM-,KFQF^) YL$_A');
define('SECURE_AUTH_SALT', 'xaQ|I+?6&}HMntwfD |$RN(f2JL<U56u``]uJvkX-9?Y_>co4Ae+]f]O_RnS){y(');
define('LOGGED_IN_SALT',   'vMx-MM+vJ~Ha&UMrfM5jtA0VMr|xS+]k&bAcv:lg3UnL#=D6y(c%[HE?_sSP:h-e');
define('NONCE_SALT',       'uDuRHIzhD^`C4ih->eLko-;5:|}]mVSfSd4}F3?^>TWorZ+,6,b!tLJjbd&|?UU+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
