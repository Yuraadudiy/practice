# Документація

## Залежності

- PHP 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension``
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
  
## Запуск (Команди прописувати в корні проекта)
#### Створити новий файл `.env` (Скопіювати все з файлу `.env.example`)
#### Команда для генерації ключа `php artisan generate:key`
#### Команда для запуску `php artisan serve`

##Структура проекта
- Проект оснований на паттерні MVC (Model View Controller)
- Вся логіка проекта знаходиться по шляху **app/Http/Controllers** `MainController.php` і `TasksController.php`
- Маршрути знаходяться по шляху **app/routes** в файлі `web.php`
- Зовнішній вигляд знаходиться по шляху **resources/views** в папках `layouts` і `tasks`
