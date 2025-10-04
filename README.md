# Todo List Application

Aplikasi todo list sederhana dengan fungsi tambah, edit, dan hapus.

## Deskripsi

Aplikasi ini berbasis website dikembangkan dengan Framework Laravel. Fungsi dari aplikasi ini adalah :

-   Tambah task baru
-   Melihat daftar task
-   Menandai taks sudah selesai/belum selesai
-   Mengahpus task

## Cara Installasi

1. Lakukan Clone repository ini

```bash
git clone https://github.com/zidhan1/todolist-bnsp.git
```

2. Lakukan installasi composer

```bash
composer install
```

3. Lakukan copy .env.example ke .env

```bash
cp .env.example .env
```

4. Generate application key

```bash
php artisan key:generate
```

5. Jalankan migration

```bash
php artisan migrate
```

6. Jalankan serve

```bash
php artisan serve
```

7. Buka aplikasi pada `http://localhost:8000`

## Project Struktur

```
todolist/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── TodoController.php
│   ├── Models/
│   │   └── Todo.php
├── database/
│   ├── migrations/
│   │   └── create_todos_table.php
├── resources/
│   ├── views/
│   │   └── todolist.blade.php
└── routes/
    └── web.php
```
