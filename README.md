# Запуск проекта на Laravel после клонирования

После клонирования репозитория выполните следующие шаги для запуска проекта. База данных: `ecommercedb`.

## Общие шаги
1. **Клонирование репозитория**:
   ```bash
   git clone <URL_репозитория>
   cd <название_папки>
   ```
2. **Настройка .env**:
   Скопируйте `.env.example` в `.env`:
   ```bash
   cp .env.example .env
   ```
   Отредактируйте `.env`, указав настройки базы данных:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ecommercedb
   DB_USERNAME=root
   DB_PASSWORD=admin
   ```
3. **Установка зависимостей**:
    - Composer:
      ```bash
      composer install
      ```
    - NPM (для сборки фронтенда):
      ```bash
      npm install && npm run build
      ```
4. **Генерация ключа и миграции**:
   ```bash
   php artisan key:generate
   php artisan migrate
   ```

## Вариант 1: Linux, MacOS
1. Убедитесь, что установлены Apache, MySQL, PHP, Composer и Node.js.
2. Запустите MySQL и создайте базу данных:
   ```bash
   sudo systemctl start mysql
   mysql -u root -padmin -e "CREATE DATABASE ecommercedb;"
   ```
3. Запустите Apache:
   ```bash
   sudo systemctl start apache2
   ```
4. Запустите проект:
   ```bash
   composer run dev
   ```
   Откройте `http://localhost:8000` в браузере.

## Вариант 2: Windows
1. Убедитесь, что установлены XAMPP (Apache, MySQL, PHPMyAdmin), Composer и Node.js.
2. Запустите XAMPP, включите Apache и MySQL.
3. Создайте базу данных через PHPMyAdmin:
    - Откройте `http://localhost/phpmyadmin`, создайте базу `ecommercedb`.
4. Запустите проект:
   ```cmd
   php artisan serve
   ```
   Откройте `http://localhost:8000` в браузере.
