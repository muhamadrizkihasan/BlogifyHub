<h2>Website Blog</h2>

Website blog ini adalah project laravel pertama saya.

<!-- <h2>🧐 Fitur apa saja yang ada di website blog ini</h2>
-   [Dashboard Bootstrap Template](https://getbootstrap.com/docs/5.0/examples/dashboard/)
    -   Dashboard UI
    -   Dark and light mode
-   Landing Page
    -   Homepage
    -   About
    -   Confession
    -   Comment
    -   Confession's category
-   Authentication
    -   Registration
    -   Login
-   Authorization
    -   Admin
        -   Mengelola user
        -   Mengelola kategori
        -   Mengelola informasi website 
    -   Guest
        -   Membuat blog
-   Cari data user
    -   Judul blog
    -   Blog berdasarkan kategori
 -->
<h2 id="installation">💻 Installation</h2>

1. Clone repository

```bash
git clone https://github.com/muhamadrizkihasan/BlogifyHub
cd BlogifyHub
composer install
cp .env.example .env
```

2. Database configuration through the `.env` file

```conf
APP_DEBUG=true
DB_DATABASE=db_blog
```

3. Migration and symlink

```bash
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

4. Launch the website

```bash
php artisan serve
```