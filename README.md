# Test-project
Тестовое задание на laravel
Проект, реализующий импорт Excel таблиц в базу данных. Также созданы страницы для просмотра товаров.
Использовались следующие инструменты: 
  1. Laravel Framework v. 9
  2. PHP  v. 8.0
  3. Mysql v. 8.0
  4. nginx latest
Соответственно рекомендуется использовать то же окружение.
## Развертывание проекта
Для того, чтобы развернуть проект можно использовать makefile, прописав в терминале: `make run`.
Или же воспользоваться инструментом Docker и файлом `docker-composer`. Для этого в командной строке, находясь в папке с проектом ввести следующие строки:
  1. `docker-compose build`
  2. `docker-compose up -d`
