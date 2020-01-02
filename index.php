<?php

define('ROOT_DIR', __DIR__); // Kök dizin
define('APP_DIR', ROOT_DIR.'/app'); // Uygulama dizini
define('CORE_DIR', APP_DIR.'/core'); // Çekirdek dizini
define('MDIR', APP_DIR.'/models'); // Model dizini
define('VDIR', APP_DIR.'/views'); // View dizini

define('CDIR', APP_DIR.'/controllers'); // Controller dizini
define('URL', 'http://192.168.1.53/fhotspot'); // Sistemin çalışacağı URL
define('ACSSDIR','app/assets'); // View dizini

// Veritabanı ayarlamalarını yapıyoruz
// Eğer ki veritabanı işlemi yapmayacaksak ayarlamak şart değil
define('DB_DSN', 'mysql:host=185.15.198.6;dbname=unicrise_radius;charset=utf8');
define('DB_USR', 'unicrise_radius');
define('DB_PWD', '15322137xx.');

//FreeRADIUS Default Parametreler
define('FreeRADIUSAttribute', "Cleartext-Password");
define('FreeRADIUSOperator', ":=");


// Çekirdek sınıflarımızı dahil ediyoruz
// Bu uygulamanın çalışması için mecburi
require CORE_DIR.'/app.php';
require CORE_DIR.'/model.php';
require CORE_DIR.'/view.php';
require CORE_DIR.'/controller.php';

// Uygulamamızı oluşturuyoruz
$app = new app;

// ve oluşturduğumuz uygulamayı çalıştırıyoruz
$app->run();
