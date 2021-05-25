## How to use

buka terminal

lakukan clone source code `https://github.com/alireza236/sso-server-testing-oauth2.git`

masuk ke direktori: cd aplikasi sso-server-testing-oauth2

install package dengan perintah  composer install

setelah itu npm install && npm run dev

setelah itu ketik perintah php artisan migrate

setelah itu ketik perintah php artisan passport:install --uuids

untuk membuat clientId dan clientSecret dari sisi server-sso ketik perintah php artisan passport:client  
