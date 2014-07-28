<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'richesmonts');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']u7ZB:He|Nq-:j;ZenT6R~`F9]&Hi.N,3;h9E3 E^pG-o6hv>ki<G_ihX,%s*Fa/');
define('SECURE_AUTH_KEY',  '.~k7|Hh!QM6V_a74x4ReDS%vV=ol-yOl71<OK~amWDn)qP;/:-g<ZHMW`<D2=yr3');
define('LOGGED_IN_KEY',    '#w`u4<;UhEzM[ 4VNu%Q:rZ=77Om:$D_Z_|Ng|h&Cp-#V?!jYm|jQd}Pj|Kz^sO/');
define('NONCE_KEY',        '1|-g6/jn3QN&{uE;F*^uCwyTXWPKWo}+~O@2~?[]2t(:P~<(t><<qGrZW#)bn@A^');
define('AUTH_SALT',        'R9+-IPV^Ey&s]6Bk/=hY!ck!OOw1HmRhQ]+|,+AV3Iei2z|e=0V)u@yu,| a#E 3');
define('SECURE_AUTH_SALT', '[ee@]MIjIwvp77zbjUC xN9/5C`g{:df[Jlmpd_|j>B(6w`|Xx>P+1js7`>|&p}U');
define('LOGGED_IN_SALT',   '*dy@> ];n+nq]2lEE%j4Z(rr4`6c92%Sgvvknj{[)M,>,kx1C)]2gE-*b9AKgl> ');
define('NONCE_SALT',       'bETHVwx`= 4-{C]WT|)[jP9[Hi{]$lz.^;JG.yM=P99nwZFb@7sfZ-z!F7ED(zfv');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'richesmonts_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');