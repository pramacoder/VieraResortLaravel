# Viera Resort Ngurbloat

Website resmi untuk Viera Resort Ngurbloat, Kei Kecil, Maluku. Website ini dibangun menggunakan Laravel dengan Tailwind CSS untuk memberikan pengalaman yang modern dan responsif.

## Fitur

- 🏖️ Halaman utama dengan hero section dan video player
- 🏨 Halaman resort dengan informasi lengkap tentang fasilitas
- ☕ Halaman cafe & restaurant dengan menu lengkap
- 📅 Halaman booking dengan integrasi WhatsApp
- ⭐ Section rating dan review dari tamu
- 📸 Gallery dengan carousel yang dapat di-drag
- 📱 Fully responsive design
- ✨ Animasi dan interaksi yang smooth

## Teknologi

- **Framework**: Laravel 11
- **Styling**: Tailwind CSS
- **JavaScript**: Vanilla JS dengan animasi dan interaktivitas
- **Build Tool**: Vite

## Instalasi

1. Clone repository:
```bash
git clone https://github.com/pramacoder/VieraResortLaravel.git
cd VieraResortLaravel
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Copy file environment:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Build assets:
```bash
npm run build
# atau untuk development:
npm run dev
```

6. Jalankan server:
```bash
php artisan serve
```

## Struktur Project

- `resources/views/` - Blade templates
  - `home.blade.php` - Halaman utama
  - `resort.blade.php` - Halaman resort
  - `cafe.blade.php` - Halaman cafe & restaurant
  - `booking.blade.php` - Halaman booking
- `resources/css/app.css` - Tailwind CSS
- `resources/js/app.js` - JavaScript untuk interaktivitas
- `public/` - Assets statis (gambar, video)

## License

Proprietary - Viera Resort Ngurbloat
