## Stack
- Back-end: PHP 8, Laravel 10, SQlite
- Front-end: HTML5, Inertia + Vue3, Axios, Tailwind CSS

## System requirements:
PHP 8.0+, PHP SQLite lib, Git, NPM, Composer (PHP 8.0+)

## Install on Ubuntu VPS or WSL:

1) Clone the repository: <b>sudo git clone https://github.com/spitzer77/laravel_tests laravel_tests</b>
2) Enter the directory laravel-map-marker: <b>cd laravel_tests</b>
3) Install Composer dependencies: <b>sudo composer install</b>
4) Install npm dependencies: <b>sudo npm install</b>
5) Set appropriate permissions: <b>sudo chmod 777 -R ./storage/</b>
6) Set chmod for SQLite database file:
- <b>sudo chmod 777 -R ./database/</b>
- <b>sudo chmod 777 -R ./database/database.sqlite</b>
7) Build the project: <b>sudo npm run build</b>
8) Run virtualhost at webserver:<br>
**Apache2**: put <i>DocumentRoot /var/www/laravel_tests/public</i> to _<Virtualhost *:8814>_<br>
**nginx**: put _root /var/www/laravel_tests/public_ to _server { /settings/ }_

## Run app:

1) Run page app (http://127.0.0.1:8000/table on local machine or http://your_server:your_port on external server)
2) Build-in accounts:
- Administrator [user@i.ua/12345678] 
- Manager1 [manager1@i.ua/12345678]
- Manager2 [manager2@i.ua/12345678]   
- Manager3 [manager3@i.ua/12345678]
3) Admin route:
- Log in on the Laravel login page at '/login'
- Go to '/tests' page
4) Manager route:
- Log in on the Laravel login page at '/login'
- Go to '/test2' page
- Edit any test and try to set Score and Criterion fields
