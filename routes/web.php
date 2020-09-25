<?php

use Illuminate\Support\Facades\Route;

/**
 * Пример работы с моделью для выполнения запросов
 **/
Route::get('users/{type}/', function ($type, App\Models\AbstractUser $user) {
	return $user->find([1, 3]);
});

/**
 * Получаем готовую модель сразу
 **/
Route::get('users/{type}/{user}', function ($type, App\Models\AbstractUser $user) {
	return $user;
});