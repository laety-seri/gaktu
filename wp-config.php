<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'gaktu' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*cP]F*)?JjWlx_8r%]^P0Zmr6 =c&{+o+M,U@yv(ZkE6F 7*@b-=C;t#b?7:!vQZ' );
define( 'SECURE_AUTH_KEY',  'FNBw4zIv(r6B]2`SgN0Sv<M|rkO8MZuBPOz>>xYa!ChK90S/pbZxMJuKxM?-t!&:' );
define( 'LOGGED_IN_KEY',    'M{joQ#*L(j8K.uOt10pT] AO[.6p%Kd<`+2]`$ivV)}rCiHN?pH.3Ezb%239#2SF' );
define( 'NONCE_KEY',        'A3#9voRUxH%G^bvSNf_.<JXHfAg^Y={Q253vSxU&A?jzrgQ1uhY[.KrwKv<Vm{7d' );
define( 'AUTH_SALT',        'Hh~[zFJkfqZOD(B605mUIJ7p%PU/9D!?oa_E2z+1]eFFB8d{k9+f7Cu[t6fR]*IL' );
define( 'SECURE_AUTH_SALT', 'iyWYaw*}mC4x}h=_hzqNBOC#|rCHrvdxAd7Y7g{uv1D9zqQX.55C+7lOw|94G>3,' );
define( 'LOGGED_IN_SALT',   'R&n}SIOtbZ_%KiNA`t9q/8Jv1F7IXjUp.9;e!}nPX-L(~$%hQS!W!sz:#gHLwW^Z' );
define( 'NONCE_SALT',       '>n{,AXqL&,xQ%uBoY5I?t}1qwS&mR =TL&&r6Crnk~wT!`NC-CYk/UyiB:q6|+:w' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
