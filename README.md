<p align="center">
    <img src="https://github.com/filamentphp/filament/assets/41773797/8d5a0b12-4643-4b5c-964a-56f0db91b90a" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

<p align="center">
    <a href="https://laravel.com"><img alt="Laravel v10.x" src="https://img.shields.io/badge/Laravel-v10.x-FF2D20?style=for-the-badge&logo=laravel"></a>
    <a href="https://livewire.laravel.com"><img alt="Livewire v3.x" src="https://img.shields.io/badge/Livewire-v3.x-FB70A9?style=for-the-badge"></a>
    <a href="https://php.net"><img alt="PHP 83" src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php"></a>
    <a href="https://filamentadmin.com/docs/2.x/admin/installation">
    <img alt="FILAMENT 8.x" src="https://img.shields.io/badge/FILAMENT-3.x-EBB304?style=for-the-badge">
</a>
</p>

## セットアップ

### 初回実行

```bash
sudo chmod 777 -R ./
# Windowsの場合、cnfファイルの権限が「777」だと読み込みされずに無視されてしまう
sudo chmod 644 ./docker/mysql/my.cnf
```

```bash
# ホスト側で実行
docker compose up -d --build
docker compose exec app bash

# コンテナ内で実行
npm install
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate:fresh --seed
```

### 2回目以降

```bash
# コンテナの起動
docker compose start

# コンテナの停止
docker compose stop
```

### 環境が壊れたら

```bash
# 消滅の呪文
docker compose down --rmi all --volumes --remove-orphans

# 復活の呪文
docker compose up -d --build
```