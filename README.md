## Common setup

Clone the repo and install the dependencies.

```bash
git clone https://github.com/selimaji/e-commerce.git
```

```bash
composer install
```

## Database setup
```bash
cp .env.example .env
```
Fill .env file with your credentials than run 

```bash
php artisan migrate
php artisan db:seed
```
    
