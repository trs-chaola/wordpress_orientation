<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress-orientation');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'trscebu123');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+F8+;|*`]<*QjM !sJBg7)G-*MW<^HHd$wc;<_+4rBnKN-@*]W }Wh>W@L.M3.%0');
define('SECURE_AUTH_KEY',  'Ea:5*&2yimbK818%31Xp6HYun!aA(gDZPiNm]-yr8uX@RU7RjU/$Ub]w0;zvQ~/~');
define('LOGGED_IN_KEY',    '92ki5j;58^sn:5O+=jXU;o8r(=1^7YiUn!s#=4CLL=+xTDYE4_;Q>,-e?go|F%e3');
define('NONCE_KEY',        'tU<}%V]V=&1lL/(|}Z;{AOz+ZKA0:j]f-h_TvD$PO:R~z@o;yx|btrmGg=HN5`%x');
define('AUTH_SALT',        'Xpeadn4ALSP=D2bRsIGY%03%>:9gFd?`OvswG!$a+p0B;X/YWKlcgz;Vd_||hJ_u');
define('SECURE_AUTH_SALT', 'aVq:O4(OM/mOt`Nq>QA&+^C_03@aRGY;c j|t-x#%VIGh~+uh~I[Wyv|U/K)TX{w');
define('LOGGED_IN_SALT',   '2Q/0knF]$%-iwR~4(n7 F19Gm/P2+ili+nf=+y7[f<b4I<>#RnOywmJBI+/<-<K>');
define('NONCE_SALT',       'mc^tWYsU.A`*n?DNxZZNy7<$>ehe~TXL9%7K-%Q-m]|f*ju9,79B?4o?NNFbp]++');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
