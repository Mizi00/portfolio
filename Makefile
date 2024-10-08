install:
	composer install
	npm i
	copy .env.example .env
	php artisan key:generate
	mkdir storage\app\public\uploads
	php artisan storage:link

update:
	git pull origin main
	npm run build
