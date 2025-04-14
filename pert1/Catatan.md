web = address(domain)
contoh facebook.com

html (hypertext markup language)
bahasa general dalam website

Untuk membuka VsCode dari Ubuntu yang pertama masuk ke cd pemweb, lalu ketik code .

Untuk menjalankan file coding di Docker dari Ubuntu dari pemweb, ketik cd pert1, lalu cd coding lalu docker compose up -d --build

Pertemuan 1, membuat folder coding yang berisi nginx, .env, dan docker_compose_yml
lalu membuat folder analisa dan catatan

Didalam .env terdapat
COMPOSE_PROJECT_NAME=joy : nama project
REPOSITORY_NAME=pemweb : nama repo
IMAGE_TAG=latest : menggunakan gambar terbaru

Pada Docker compose yml isi dengan :
version 3 : versi modern
services : dari bawaan
web : didalam web ada image yang berasal dari nginx
image untuk menentukan image yang digunakan untuk container, nginx latest, berarti nginx terbaru
Pada port bisa diganti, misal di listen pada nginx.conf 80 didepan harus 80
volume 

buat file baru lagi nginx.conf yaitu web server yang berisi server permintaan dari localhost, dan lokasi misal memakai index.html, pada lokasi terdapat root /usr/share/nginx/html; untuk direktori tempat HTML, ini juga digunakan pada compose.yml

Buat folder baru lagi pada pert 1 yaitu src (source) berisi file index.html
pada index.html kita akan 

Tambahkan try_files $uri $uri/ =404; pada nginx.conf fungsinya untuk memeriksa apakah file atau direktori yang diminta oleh pengguna ada di server, jika tidak dia akan mencari dengan menambahkan /sebagai direktori, jika keduanya tidak dapat maka server akan error 404 (not found) 

Pada index.html dan div.html !DOCTYPE html definisi bahwa dokumen ini html, html lang="en" bahasa utamanya adalah bahasa Inggris. Didalamnya terdapat 
head, bodi, html. Pada index.html memakai <h> untuk konten utama dalam halaman web, sedangkan div.html memakai <div> untuk mengelompokkan konten, yang berisi <p> paragraf. Untuk membuka !DOCTYPE html shortcutnya 'Shift+!+Enter'

Untuk menjalankan pastikan docker (coding) running, lalu buka browser ketik localhost untuk melihat isi index.html jika berhasil maka akan keluar 'Sample", jika gagal akan keluar 404 forbidden. Sama halnya dengan div.html kita tambahkan /div.htmlpada search browser setelah localhost, jadinya localhost/div.html

Mengapa bisa gagal, bisa jadi ada kesalahan kodingan di nginx.conf, atau dockernya belum berjalan

Tag a : ag <a> dalam HTML digunakan untuk membuat hyperlink, yang memungkinkan pengguna berpindah dari satu halaman ke halaman lain atau membuka sumber eksternal. Misal dari page Home pindah ke Page About
Tag p : Menampilkan teks dalam bentuk paragraf
Tag h1-h6 : Membuat judul dari ukuran terbesar ke terkecil
Tag div : Untuk mengelompokkan elemen HTML
Tag img: Untuk menampilkan gambar
Tag form, Untuk input, contohnya Login Page
Tag ul : Membuat daftar tanpa titik
Tag li : Adalah item dalam daftar

Folder assets digunakan untuk menyimpan beberapa berbagai file didukung yang terhubung dengan file html, 

Mengerjakan Latihan dengan mengisi Halaman HOME dan PROFILE, lalu menggunakan Tag-Tag untuk mengisinya.
Lalu pada nginx.conf tambahkan location /latihan {
        root /usr/share/nginx/html;
        index index.html index.htm home.html;
        try_files $uri $uri.html $uri/ =404;
    }  
    dan pada docker.compose.yml tambahkan - ./latihan:/usr/share/nginx/html/latihan
    Keduanya berfungsi agar folder latihan yang berisi home.html dan profile.html bisa berjalan di Browser