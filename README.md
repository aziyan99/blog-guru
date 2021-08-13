## Teacher Blog's
Teacher blog is an app made with laravel for teacher to share their knowledge base on category

## Previews
![Homepage](https://i.ibb.co/MVKF938/Screen-Shot-2021-08-13-at-11-13-57.png "Homepage")
![Dashboard](https://i.ibb.co/r6wBzRv/Screen-Shot-2021-08-13-at-11-13-32.png "Dashboard")
![Article](https://i.ibb.co/ZMjsPp4/Screen-Shot-2021-08-13-at-11-13-52.png "Article")
![User Management](https://i.ibb.co/4snjNzq/Screen-Shot-2021-08-13-at-11-13-38.png "User Management")
![Role and permission management](https://i.ibb.co/gd6kNdX/Screen-Shot-2021-08-13-at-11-13-45.png "Role and permission management")


### Available feature
1.  Article management
2. Article category
3. Announcement management
4. Announcement category
5. Gallery
6. User management
7. Role and permission management

## Installation
1. `composer install`
2. `npm install`
3. `npm run dev`
4. `php artisan key:generate`
5. `php artisan storage:link`
6. Sesuaikan konfigurasi koneksi database di file `.env`
7. `php artisan migrate:fresh`
8. `php artisan db:seed`
9. `php artisan serve`

### Default login
- URL `http://localhost:8000/login`
- Admin:
    - Email: `superadmin@example.com` 
    - Password: `password`


## Producion
For production configuraion please referer to [https://laravel.com/docs/8.x/configuration](https://laravel.com/docs/8.x/configuration)
