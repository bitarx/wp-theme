<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'hotel');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'arX11$92b');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'X+cY~8&r LdLh?i*p+BfZ*ZHAM#?i3p^&re?!F/o8t$K],y9pWM}EgMJ*8S7v$d0');
define('SECURE_AUTH_KEY',  'q./gfZLh2-74vG#<y!afR$-9KgCUUxdHZ,e h?0tp=M2s2K?Jje*X-0#Yi1g[[o!');
define('LOGGED_IN_KEY',    'uNgAkegR;s6)vysn;@z~!/q_UPldXIx,mdE~^+]Z-Vr=uuLZHt^z=`&u<-W@8oM1');
define('NONCE_KEY',        '9MGSw[uXwkpZ|Iwi+H$M1Krm1i4CzN$Iqym#t^_pmyI(E(h[9D?[ZZuITDKr}C l');
define('AUTH_SALT',        'w>I_]-IZYqXp6TdH)g=|-xgjs{N!XDWWy)]m(8V+I39!p6L8Q~g{I P!f~cOT$}%');
define('SECURE_AUTH_SALT', '<~KJ~^R!*rG@7MS@-TvJNi-:@x=b}Yc&<d!^;[>pUCilXmH%$M4zn22mjPwqVo,3');
define('LOGGED_IN_SALT',   'Z1 dDW@=F p9ALSRQ0|z*V^ZYg*m|2hpgJmF$t]NtGNuow-!>=}5p::91x>E~xu4');
define('NONCE_SALT',       'b5+yLmXJ#xyqdd{~Og?AOK$*kX=H>W9$jTS8JjGpW4Y{V_;hDy(enSN<qG8z,F[|');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
