## 🤠 Jitters - API

Getting Started:
1. `composer install`
2. `npm install`
3. Setup MySQL database in `.env`
3. Add `'CLIENT_URL'` in `.env` 
   - Client and APP domains should match
        - CLIENT_URL `http://localhost:3000/`
        - API_URL `http://localhost:8000/`
4. `php artisan migrate --seed`
5. `php artisan serve`
