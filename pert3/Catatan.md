Pertemuan 3 (12.00-18.00)

Pada pert 3 ambilah isi Github Pak Jefri di Pert 3, lalu pada terminal pert 3 ketik docker compose up -d --build, untuk mendownload/building isi dari pert 3, dan memasukkan kedalam container docker, jangan lupa pada docker compose yml, di bagian paling akhir 'default' nya diubah 'nginx'.

Setelah semua terdownload/build buka navicat, lalu pada connection piih mariadb masukkan nama koneksinya wsl-localhost, dan passwordnya p455word, serta portnya 13306, kalau sudah test koneksi dan berhasil tekan oke

Kembali ke Terminal, ketik exec -it pemweb bash, jika berhasil, maka akan berubah menjadi root@pemweb:/var/www/html#, lalu ketik lagi  composer create-project --prefer-dist raugadh/fila-starter .
Kalau ada error atau masalah hapus dengan perintah -rf *, lalu create lagi, setelah itu ketik exec -it pemweb bash lagi

pada .env di src  ubah 
APP_NAME ="Pemweb" Sesuai keinginan nama kita
APP_TIMEZONE="Asia/Jakarta" Sesuai lokasi kita
APP_URL =http"//localhost
ASSET_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWOR=p455w0rd

kalau upgrade sudah complete, lanjut ketik di Terminal, 
php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force 
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 bootstrap/*

Lanjut pada build tambahkan folder Front, lalu pindahkan css, images, js, dan plugins kedalam folder fornt tadi. Lalu pada resources, masuk ke views, buat folder components, dan buat file app.blade.php, isi dari index.html, pindahkan kedalam app.blade.php

lalu buka localhost, maka akan berada di tampilan Laravel

