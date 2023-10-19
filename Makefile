# 初期化
init:
	docker compose up -d --build
	docker compose exec app-php composer install
	docker compose exec app-php npm install
	docker compose exec app-php php artisan migrate
	docker compose exec app-php php artisan db:seed
clear:
	docker compose exec app-php php artisan cache:clear
	docker compose exec app-php php artisan route:clear
	docker compose exec app-php php artisan config:clear
	docker compose exec app-php php artisan view:clear