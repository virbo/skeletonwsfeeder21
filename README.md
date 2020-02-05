# Skeleton WS Feeder 2.1

Cara Install
----------------
1. Rename file `lib/WS.php.template` menjadi `WS.php`

2. Konfigurasi file tersebut menjadi seperti berikut
```php
...
	public $mode = 'live2';
	//const MODE = 'sandbox';

	/**
	 * @var url string. Url web service feeder
	 */
	public $url = 'http://<alamat_server_feeder>:8082/ws/';

	/**
	 * @var username. Username login Admin PT PDDIKTI Feeder/ Forlap
	 */
	public $username = 'username_feeder';

	/**
	 * @var password. Password login Admin PT PDDIKTI Feeder/ Forlap
	 */
	public $password = 'password_feeder';
...
```

Menjalankan program
--------------------
Untuk menjalankan program ini, kita cukup memanggil file `index.php` yang ada di folder `public_html`. Jika menggunakan domain/subdomain, maka arahkan/pointing domain/subdomain tersebut ke folder `public_html`.
