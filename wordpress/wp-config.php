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
define('DB_NAME', 'wordpress_orientation');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'van_orientation');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c!|hi_[![:5EOizX*vYY tm>hy(8XRuYldaoLsd0R$yL1)k9rc%3|VTl^-gl7T8s');
define('SECURE_AUTH_KEY',  'Q4;+npcJ+}gYG+Q#+qJ9O.*(lP]mexVZyLPd+kQ@W,|azCceS+3T*_kH)w9Y:-4_');
define('LOGGED_IN_KEY',    '#ras(=drAm0Zl-gN-5zhHJIn1-E_Q?<+XU{R@|bFYpq%xCcKwS/s=]GpPeDmmw^?');
define('NONCE_KEY',        'gc7R<=nhl$owffN_s(+AZx(^O+BzuWl&[m4Zy+l~lFyZLL#kpG%;z LWy/0:]giE');
define('AUTH_SALT',        'k}A?wx74WRWheep(NV]g^EWb$h! !v-em_+%VIL 80,U#TwM4&O)(]c+MaI!Oc71');
define('SECURE_AUTH_SALT', 'Jq;Ff-CB3B+J<iUEA3YZBK.6|Pa.R3nBZI%GaT6xLh<p_gi!/yKo*)kM @<r4$s3');
define('LOGGED_IN_SALT',   'D@MF3II&a9@o<I.SFC3zhI}&Z:*z?h+-{Jk#KNBO)dBt1yD<A_4izY8H}C.;1Hl.');
define('NONCE_SALT',       'E_1gxtilkF/=%r7EKV;| -3iI%Z5]7(E&B#A6h2yMd+k34{s%wIYF|~@q-Wv!W+l');

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
