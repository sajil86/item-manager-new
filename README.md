![Screenshot (194)](https://github.com/user-attachments/assets/1a7208f6-c7e7-41e7-973c-bd699f062d82)
![Screenshot (195)](https://github.com/user-attachments/assets/4732903f-336b-41ae-90f3-c9ae90fe0806)
![Screenshot (196)](https://github.com/user-attachments/assets/e41adc2a-7283-453e-87c2-b3d0586ea4d7)
![Screenshot (197)](https://github.com/user-attachments/assets/352acea1-b10c-4872-bab8-e8d3c79992bc)
![Screenshot (198)](https://github.com/user-attachments/assets/69323f4a-66e4-42fe-9779-e27745f66ab4)
![Screenshot (200)](https://github.com/user-attachments/assets/7c26e13c-c8c8-4ec0-a7a8-a3e0aab03fcb)


Step 1: Create New Laravel Project <br> 
bash:<br>
   composer create-project laravel/laravel item-manager-new<br>
   cd item-manager-new<br>

Step 2: Install Jetstream Authentication <br>
bash:<br>
   composer require laravel/jetstream  <br>
   php artisan jetstream:install livewire <br>
   npm install<br>
   npm run dev<br>

Step 3: Configure Database<br>
   Create MySQL database (e.g., item_manager)  <br>
   Update .env file:<br><br>

.env<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=item_manager<br>
DB_USERNAME=root <br>
DB_PASSWORD=your_password<br>

php artisan serve<br>
Step 4: Run Migrations<br>
bash<br>
php artisan migrate<br>
Step 5: Create Item Model & Migration<br>
bash<br>
php artisan make:model Item -m<br>
