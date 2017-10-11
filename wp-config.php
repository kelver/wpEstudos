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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpcurso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'magento123');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '&`MZo,,5p-{<r^68~5U 1(~w<#]}U3 iY*iLB}mTm;?BgFZ:bgPuw?n.b,~vGuAw');
define('SECURE_AUTH_KEY',  'zuR<TP)%3t1j|G7dL1{EA$tr MDp]YwfSz;kBO(+Mhk,5ug+V%2j,y|2jyI;`-$^');
define('LOGGED_IN_KEY',    '$P5(Vw,oq;AS2DRgjqN?9F_y&LYu]KB6KO(HEq.BSk$/uC3U,QCu,2-s!V8FvQ-_');
define('NONCE_KEY',        'jd93g[-jG+glTNc]BGw3O|r<.->`l_wx@V6=m/;r+sIpJVjn(j `)dztd>a(C9?F');
define('AUTH_SALT',        '[?eRL9+|qO2RpQ5Cs =$`bL;Grqllbpayn_r8R#@SZXfHW[W@A5M#-Ybg8C}fXno');
define('SECURE_AUTH_SALT', '#E);?h/<&OYCN,,#fXA~M-X*$PL#z5g.x}-E1G(.sX9wa[Q}#Qh[-].G.B~p,$1?');
define('LOGGED_IN_SALT',   'Z/D&-Fi_,):6*I tTt58Ibu,7fECj-kV %xqy4S~&Sp!47%;]YsD15Eg(2jintz.');
define('NONCE_SALT',       'w28tMzhe:Y/2oxQ2L(A)./P(W$I*IIiMrzzt&ZZG=CS}mTft(_C>w)iSl6uWOF/$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
