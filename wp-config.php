<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fluency' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'julio' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o-r[bO_+GJt8S&ak/Ul|/8 OAbnji`,`%_&Fp(x-?N)P(!zb|pTV((0%-#m8A&LX' );
define( 'SECURE_AUTH_KEY',  'a]h0o1?5YTx9%ZS!UBN8@%B_wF?Q(-S5ycL^S?BnYq>yqXdnRc&s^);$!py>xE_-' );
define( 'LOGGED_IN_KEY',    'b8|^4b],<g9p) Vlc?9qf* @UWZsDUt)j240L[C#j&gRMHKgv;XVTl]&~H<?WCgB' );
define( 'NONCE_KEY',        'qlD&N+,}|gH/R^[QUIo-Z$](42zbca0|nym8d=0!e+7L(Uy-s7WUy!z`^A]OW)bl' );
define( 'AUTH_SALT',        'W9[|.(U:i]OPa)nb|dt]{I[gDS:2(v_`HDnwBXUi<o%</m/$J,;1#eU}^U8`Y_>o' );
define( 'SECURE_AUTH_SALT', '[Q2{SWJ)r_jj|!UJm,k5wdBRt*1uOo]ChH*b#(,:D`G.;MDxSfr$ud6Rz;R6:>fS' );
define( 'LOGGED_IN_SALT',   'EJ7jD?^OOc4)^EJ(z2<|^|3 ?8i{Pz9>AO_StW]ucL`/4~hvM}K !MftWi+{^XIS' );
define( 'NONCE_SALT',       'R$%,1lcChrfo=xB+2ye+4;|y9RNI8{L-L>H{{XYt^J>UjjU+fd%+nT~n.N7A~<CQ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
