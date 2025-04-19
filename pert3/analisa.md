Pertemuan 3 

Kenapa melakukan praktikum ini?
Untuk mengetahui mengenai membuat halaman depan dengan livewire, serta belajar mengenai liveiwre

Apa itu livewire?
Livewire adalah framework full-stack untuk Laravel (framework PHP) yang memungkinkan kamu membangun antarmuka dinamis (seperti yang biasa dibuat dengan JavaScript) tanpa harus menulis banyak kode JavaScript.

Apa fungsi {{ $slot }}?
{{ $slot }} Dipakai biar nggak perlu ngulang struktur HTML dasar di setiap halaman.

Mengapa memakai gitignore?
Karena .gitignore berfungsi untuk memberitahu Git agar mengabaikan file atau folder tertentu, supaya tidak ikut di-track, tidak di-commit, dan tidak masuk ke repository.

Misal ingin menambahkan About dan Profile, apa yang harus diketik pada terminal agar bisa memakai framework livewire tanpa menulis sendiri?
Bisa mengetik :
php artisan make:livewire show-about untuk about
php artisan make:livewire show-profile untuk profile
