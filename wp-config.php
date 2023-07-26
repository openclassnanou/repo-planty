<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty_basedonne' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M^Vxli[5QGwtQEMG7R]C{P:xrYKU|cM@3L _jeRQn-pr>=wXDzzL:P*nq !!GtBK' );
define( 'SECURE_AUTH_KEY',  '-s`w4Xo3m=]Sjrd[IZWO%tD%64!$KDex|x*n46>U#<RI45KdT+$!TOB<0*;o@,j$' );
define( 'LOGGED_IN_KEY',    'U]/#sukPY)I/V._I]}H.S:?7-d&EX0y?(Ga{ WU;~5/Ff/#0F7qWt^haAU?X5PQP' );
define( 'NONCE_KEY',        'Z!DTZ=f}c*hUtO(@+Pr%^e+r4xl^RbSR3[CGEG(}rSqNek1/,/=tqe8m2r>Pr==r' );
define( 'AUTH_SALT',        '//m!?JV2vz<JBKqm%}~&S]G9XT)#ED.kSf,Z+lPf:B]NW[#UX$h336;5:M#_k69,' );
define( 'SECURE_AUTH_SALT', 'cTwN,Gr1__:/Nt3}z@rW}-.zbhrYW6@P:nm$m$u&=9?w`FI?b2W]4Oq]!x U*5@H' );
define( 'LOGGED_IN_SALT',   'E`ALT<2OmQvySGIOG.`ps)zoKRv ~vGoFnrAVS-fP+H*S0T;hjM0@NK6zn?+=R`F' );
define( 'NONCE_SALT',       'LsY1`n5G!2h%_::?_2>8Zu--CxF1eIObe}]WF1[)EXPhU{JGzF4[o!X-FMSYvhPr' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

