# Дипломный проект по профессии «Веб-разработчик»

BackEnd часть проекта, которая использует в качестве основы фреймворк [Laravel]. Ниже представлены минимальные требования для запуска Backend части проекта.

- PHP 8.1
- Laravel 9.*
- Composer
- Node Package Manager (NPM)

## FrontEnd

Необходимая часть проекта при развертывании Backend. По ссылке вы можете пройти во  [FrontEnd] данного проекта.

## Зависимости

В проекте для backend были использованы следующие зависимости:

- [SimpleQRcode] - Простая библиотека для генерации QR-кода

## Установка

Перед выполнением установки проекта вам потребуется скачать и установить [Composer](https://getcomposer.org/download/).

1. Выполним установку Laravel на наш сервер с помощью команды:

```sh
composer global require laravel/installer
```
2. Перйдите в папку, в которой вы развернете Backend-часть
3. Выполняем следующую команду для скачивания и установки Laravel в эту папку (Вместо *<backend_folder_name>* укажите имя папки):

```sh
laravel new <backend_folder_name>
```
4. Перейдите в созданную папку
5. Установим Breeze и настроим для работы с Frontend API:

```sh
composer require laravel/breeze --dev
php artisan breeze:install api
```

6. Установка всех зависимостей для Laravel:

```sh
npm install
```

7. Установка SimpleQRCode:

```sh
composer require simplesoftwareio/simple-qrcode
```
8. Готово! Для запуска сервера вводим команду:

```sh
php artisan serve
```

## Важно!
- Данный проект был создан в учебных целях. 
- Для полноценной работы проекта необходимо установить [FrontEnd].

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [Laravel]: <https://github.com/laravel/laravel/blob/9.x/README.md>
   [FrontEnd]: <https://github.com/DjReactive/FS_DIPLOM>
   [SimbleQRcode]: <https://github.com/DjReactive/FS_DIPLOM>
