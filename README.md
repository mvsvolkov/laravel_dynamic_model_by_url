# Принцип работы

Допустим, что нам нужно получить разный объект `User`

App\Models\*

App\Providers\AppServiceProvider::boot()

routes/web.php

## Демо

```
git clone ...
cd

composer install
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

заходим на url и в ответ получаем разные объекты.
```
http://127.0.0.1:8000/users/local/1
и
http://127.0.0.1:8000/users/remote/1
```
