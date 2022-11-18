# prenatl-back-end

## Common setup

Clone the repo and install the dependencies.

```bash
git clone https://github.com/selimaji/prenatal_.git
cd prenatal-back-end
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
    

## Run
```bash
   php artisan serve 
```
