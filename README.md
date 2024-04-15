<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## installation

Clone project:

```bash
git clone git@github.com:alibaghernia/menuma-laravel.git
```

Install dependencies:
```bash
comopser install
npm i
```

Add .env file:
```bash
cp .env.example .env
```
**Then set variable's values by open and edit the file**

Generate `APP_KEY` value:
```bash
php artisan key:gen
```

Link storage folder:
```bash
php artisan storage:link
```
Generate assets:
```bash
npm run build
```
Run migrations:
```bash
php artisan migrate --seed
```
Run the project:
```bash
php artisan serve
```
