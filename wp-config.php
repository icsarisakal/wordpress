<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'deneme' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V%DkuO }Rf|/?nFe{uISzq/Qi#>)ApdS)-@g4QSZJR%SIk-xFgLKU6; pU}QY!vx' );
define( 'SECURE_AUTH_KEY',  'Iztxkk2)7)Z++=WlzKXX=I)[#_9]v2}B3MfGu:Cu=u6LkU&:bo1)n:R213dAuT@.' );
define( 'LOGGED_IN_KEY',    'lf5`DVW*6AypNYN!s/ADF<-C5TWmsU $TYBqZou_jC8GPX#gk8{$>5e_qn8z}eA(' );
define( 'NONCE_KEY',        '9?`A9T*K~XzNH_ESVvCGD}OauvQ!ZlrE u==--&p8$2:0& $,wY0oZ7RP>*-W1?)' );
define( 'AUTH_SALT',        '`.VAO5B^w#aKv4^NluD_` ^c@fVb_9zla]R41YzaNQO:3 3e;([V6z 1tWS<owh[' );
define( 'SECURE_AUTH_SALT', 'TqNk-gdQ;[Y5^~#H_$dKIy%.%@S_)ykxt&]}8xO?tm+FNq5E`Zb(aT-z>#U,Ai[k' );
define( 'LOGGED_IN_SALT',   'R!S[f9(PZ2{0e;Pe<t^g/Lo2W1j<]Ryexxb@}:9nkTKv9hXFs;,$&1Fh?M<L3o4,' );
define( 'NONCE_SALT',       'h7LKU!d~,9LBalyP)q5T0FabQGdlZ<E&n1H&g;|TUZ9-wr=QY8V:uhst6j/CYQOA' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
