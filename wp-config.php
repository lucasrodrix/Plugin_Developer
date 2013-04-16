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
define('DB_NAME', 'plugin_developer_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'rodrix');

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
define('AUTH_KEY',         '?W>a-B-f~2>4e 2:99PRc@XF}QJz:<|6bFkgU3vhs12*m)(+;(geN{nw{`.|f~xj');
define('SECURE_AUTH_KEY',  'rs!wd.^TB}Oiev)oYcm[R9:4|<FxpF?+MZY2E6sASot~|=GD@#.!WQrgQ@=w[]Oq');
define('LOGGED_IN_KEY',    ':0;k8M4w*-#/Oq$eS1Wd+`>ww?+nD]*b`KcW1vXtr-VM/Dm]iH;p2DAT.cja+zO6');
define('NONCE_KEY',        'M .`.srHZN3[sY]W8PQ/hM,.5<Qz:IumRX~-h1=ainLGyIMELDsjt|raN#|5c_xZ');
define('AUTH_SALT',        '&&VI|178|[A#U=VD>+_lj=dmAO:ygm}3y9f_diC-VoI%YoWnHT6bIkJ`~eed7U|*');
define('SECURE_AUTH_SALT', ',Smg4>D:OAt|@+!q!RMWgfI*Y-8p2E nh9#c=Co-^PPO}cU)!Y%[ je]u-@j~zMW');
define('LOGGED_IN_SALT',   '@mtTm^*>k|z2Vw4C|}=Ffe!a--66+hOP+o$O{}Z>dYLvVU$!KYl`:- v50AfNqh&');
define('NONCE_SALT',       'it1MJ`Tz0T/g+$zuB+3I|E|T]4g~Me7MM`L2?uiXGq[ASk](=qg=u:G+u5c4d0:+');

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
