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
define( 'DB_NAME', 'paris_bistro' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Z~c.&{{v+NQMsFHLn2>_Ynj.~JxNRzd.6`w:}LRHTd`{0a4dH^|+TVx!iFQzWghS' );
define( 'SECURE_AUTH_KEY',  'G%sZ0VB0k[P6PE`@L6V-KAFAokR&~ :+;fn~$NTH+.:>FbPCne5rqO^8uD26l1:A' );
define( 'LOGGED_IN_KEY',    'e xA,hA[}XF:Lv(wfya3~5po%2{O;pdAQ~6/Npa]e0QFlw)%f/#j^46E67RhIO3)' );
define( 'NONCE_KEY',        'b;^S*m.zht>2&}Pw1D5?0g,h~WWQ~kT3`A/0~/3l*6JJFX%(Md>Foi ,i{up&;p)' );
define( 'AUTH_SALT',        'JbJ_|16ms,D;LvAKp}F=:Rdx$O2Z]3JV3O;d)jx;W3Y7dDq]Wn::.-0#zueWMt~b' );
define( 'SECURE_AUTH_SALT', ']&D2[L#B8 nY=]8UWE9J?gvp$C8EtESz={1C.xb<lGQJ4C-%lsiJaUa![A:7So}j' );
define( 'LOGGED_IN_SALT',   '9^W.7pY_+j4B0]6>6`_}lGQ?;J3_6+B$j%k<Uh#lCWWzveQ}nOj)d#Z%iZ2&cAH3' );
define( 'NONCE_SALT',       'q;/OR$wJ:kWgE=ut](!W5^Fly<hLSTlh|Zz_e2Sc.tV{Cih6>0%%ruh?R<0NTf88' );

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
