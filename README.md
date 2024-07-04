## О репозитории

Тестовое задание: сделать API на `Laravel 10+` TODO заполнить

## Системные требования

* PHP >= 8.3.8
* Node.js >= 22.3.0
* SQLite3

# Установка

Если нет своей рабочей среды с `php-8.3.8`, можно установить конфигурацию `Docker` для `WSL2` отсюда https://github.com/frizus/phpdocker/tree/for-php-test-work2
```sh
git clone -b for-php-test-work2 https://github.com/frizus/phpdocker.git php-test-work2/
```
Дальше смотреть [README.md](https://github.com/frizus/phpdocker/blob/for-php-test-work2/README.md) оттуда

ИЛИ

Если есть своя среда:
```sh
make install
make test # запускает тесты
```

# Заняло времени
1. Настройка среды (использовались заготовки) - 25 мин. 
2. Миграции, модели - 2.5 часа
3. Факторы, сидинг - 2 часа (остались пользователи)
4. Валидация, контроллеры, ресурсы - 2 час (в процессе)
TODO заполнить

# Допущения
Использован SQLite вместо MySQL/PostgreSQL
