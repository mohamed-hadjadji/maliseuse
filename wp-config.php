<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'maliseuse' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?FN=KS5vi~{)<pBGD(3(9lL?vh)EZuQ>114nY]hzu0]*sm>$6r!qu50LuF0sBmC)' );
define( 'SECURE_AUTH_KEY',  '_ZLU@16m(1?Eb9vnN{3N9W5$u5,Yo`>&$?J>VL_v0T 4u#Z#_dmACGgXu<8[vfm;' );
define( 'LOGGED_IN_KEY',    '[K`h.lEv$MWbq@b@W4#m$dNe?)a#98->BRnUQm)H{8z%H:dv75(G2q@x@d0O5|,t' );
define( 'NONCE_KEY',        '@lmPl{8{x&`/2/r_H66oRtdl!0P q([`_e&hT,58OHwMum Fy3tafuj!Jqo(?k/T' );
define( 'AUTH_SALT',        '%Vu!q>gXHjof~q;HfIQFG%(1cluj<2t@i %-6Z+KBxpAu/)~/%!qjzg^&kI$heYv' );
define( 'SECURE_AUTH_SALT', '/t[Y8)dem=yCpj73SGF.[bLI8(;y?Su){!`O-ychlK-(ov&Ak;s[NazxN$CQWKGD' );
define( 'LOGGED_IN_SALT',   '@vQBpH-?c-761i*V6TPgeh,ek%a{*x^bQPWjvs2Ge8Bl)s16_<9cpJ]-KS;o|$9r' );
define( 'NONCE_SALT',       '<Fb]f[4~1bT@JWlh%<pOaLS8%T~fV;lbj=C9EZc1?K+([<_XXSVDZ1:e.p7-yW;a' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
