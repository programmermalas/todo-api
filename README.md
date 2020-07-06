# Todo API

Contoh Laravel RestFul API untuk ReactJS

## Mulai

### Langkah 1:

Clone project terlebih dahulu. setelah itu lakukan perintah di termisal seperti di bawah ini:
```
composer install
```

### Langkah 2:

Buatlah *connection* ke database, dengan cara mengedit *.env*, seperti di bawah ini:
```
DB_CONNECTION=mysql // nama koneksi
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_api // nama database
DB_USERNAME=root // nama user database
DB_PASSWORD=password // password user database
```

### Langkah 3:

Jalankan perintah *migrate* seperti di bawah ini:
```
php artisan migrate
```

## Menjalankan

Untuk menjalankannya cukup melakukan perintah *php artisan serve* pada terminal, lalu untuk daftar *API* di bawah ini:
| Method 	| URI             	| Aksi             	|
|--------	|-----------------	|------------------	|
| GET    	| api/todos       	| Daftar todo      	|
| GET    	| api/todo/{todo} 	| Menampilkan todo 	|
| POST   	| api/todo/{todo} 	| Membuat todo     	|
| PUT    	| api/todo/{todo} 	| Merubah todo     	|
| DELETE 	| api/todo/{todo} 	| Menghapus todo   	|

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
