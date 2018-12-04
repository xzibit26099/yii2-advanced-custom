Кастомный Yii2 advanced.
Преимущества:
- Настройки приложения вынесены в файл settings.json
- Готовая конфигурация nginx для поддержки 2-х приложений на одном домене 
- В composer'e уже установлены часто используемые библиотеки
- Админка с красивым дизайном
- Ну и другое по мелочи

при разворачивании:
- подтянуть, выполнить init, composer install
- Создайте корневую папку upload и в ней папку file с правами 777
- Создать БД
- Настроить nginx по примеру /vagrabt/nginx/app.conf
- Создайте файл в корне settings.json с таким содержимым
    {
      "db": {
        "class": "yii\\db\\Connection",
        "schemaCache": "cache",
        "charset": "utf8",
        "host": "localhost",
        "port": 5432,
        "db": "pgsql",
        "login": "postgres",
        "password": "postgres",
        "dbname": "test"
      },
      "frontend": {
        "domain": "http://testtask.local"
      },
      "backend": {
        "domain": "http://testtask.local/admin"
      }
    }
- Меняйте конфигурацию в файле settings.json по своему усмотрению
- Далее остаётся только шаманство