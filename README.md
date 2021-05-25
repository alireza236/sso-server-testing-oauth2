## How to use

buka terminal

1. lakukan clone source code `https://github.com/alireza236/sso-server-testing-oauth2.git`

2. masuk ke direktori: cd aplikasi sso-server-testing-oauth2

3. install package dengan perintah  composer install

4. setelah itu npm install && npm run dev

5. buat file .env lalu copy isi dari file yang ada di .env.example lalu sesuaikan configurasi database sesuai dgn environment anda.

6. setelah itu ketik perintah php artisan migrate

7. setelah itu ketik perintah php artisan passport:install --uuids

8. untuk membuat clientId dan clientSecret dari sisi server-sso ketik perintah php artisan passport:client lalu isi perintahnya  

9. daftarkan 1 user untuk testing.
