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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', '0109we@#will1910' );

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
define( 'AUTH_KEY',         './!xNW9Rp>.sxC[#Rpy~PX?.w6Pf`{G>3Yvamtqa1%C,J@}.7wIqh)ff5G5!sk+L' );
define( 'SECURE_AUTH_KEY',  'fVgI>/GAvOFIk/3DB`v=``a>+m)y2440d0cqoH~l1&~VoG`[~*`x.pl>yMe`0Y}q' );
define( 'LOGGED_IN_KEY',    's,6ic$5Ge+gl0`~UqyS,5jG{8!j[o`NWQNs7k><Z(`<!`@!|K61*`6s4q((kEUfw' );
define( 'NONCE_KEY',        '}P2=VB_OJaXthO]j&=&<O_r:JSD8r+qxB v+5t{~k5T4<PWaA&%2fyPdxNAf}rx$' );
define( 'AUTH_SALT',        '?5+= 2gdbgCu-k)O(^HcGII x3P;qrTC0Msr6l_]$[~YJ8JsRHl.crQnNX9lzn|z' );
define( 'SECURE_AUTH_SALT', 'KFcS0D2.5rTt-,YWrPuf<Py`Srpqo&-~5_itQYsh;Bo;Kko^:M+i`AWHh25Fk*![' );
define( 'LOGGED_IN_SALT',   'a0|z`vq7TT5_08RaYn`M=cCrX/ICHde#O&+AY1P*mhgsN=rm/wvS<k-V1Z1[s|Xp' );
define( 'NONCE_SALT',       'r54*f%!P+44L Ney4curO}P]Tq#u#t[P%a>r.83|IwV}{%$yjL.j$eGIz%a~d{sW' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wewill_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
