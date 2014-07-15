<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'canil');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hPuJ.Iv0]<m/2/>E+rdxL4~{`X@;tbk}}.+V8lu[5k7<W!qLYP`:+]*8>h++J~@P');
define('SECURE_AUTH_KEY',  '750}7M8HVsu#1w-mOmo$Mtmq.SG ajC?nS^[QrP_|-,7PGs@u>>p$Tu=$z=MZj|>');
define('LOGGED_IN_KEY',    'c^#+.c{5kN=cO4.jX|5Av=RG.hB-dp3Sj=8V@|e-!fUa_&a-q}9STh+v)01W2h8Z');
define('NONCE_KEY',        '*<OCaCJv~`SM965hkGc6$GyEEAS50Kt~e$C%ocdg%cc@&8sa(5`3>VwZ:2LQ0?a?');
define('AUTH_SALT',        '1 {AYpnuM>@Grr=5*wOco!~,P~Y3t3>oa?uK83,F3So93uDI;bu)o_iwea0kaL#[');
define('SECURE_AUTH_SALT', 'kO9.?pO}8X^+CvzgI$G&MqM]a0R 5s m+ZuruoKnJ;lbrN}yWh*&ge&s7A LnNVF');
define('LOGGED_IN_SALT',   'O+J6N(:k<@$_rimM{cr<RxOpre?]}U`1e9]dA+%bb0h1&I[aWyze%msrL5?[4by>');
define('NONCE_SALT',       ':[H&aj&IHI|Iap#K=V`#EA:Q;S<?.^0Cs.>q^B;`w+]67>Aq;OE3WljA9QGT8:jJ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
