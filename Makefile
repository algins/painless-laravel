start:
	php artisan serve --host 0.0.0.0

setup:
	composer install
	cp -n .env.example .env || true
	php artisan key:gen --ansi
	touch database/database.sqlite
	php artisan migrate
	php artisan db:seed
	npm install

watch:
	npm run watch

prod:
	npm run prod

migrate:
	php artisan migrate

fresh:
	php artisan migrate:fresh
	php artisan db:seed

clear:
	php artisan cache:clear
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear

test:
	php artisan test

lint:
	composer exec phpcs
	composer exec phpstan analyse -- --memory-limit=-1
