Pour lancer le projet : 
```sh
cp .env.example .env && \
docker run --rm -v $PWD:/app composer:2 composer --ignore-platform-reqs install && \
[ -f sail ] && bash sail || bash vendor/bin/sail up -d && \
docker-compose exec php php artisan migrate && \
docker-compose exec php php artisan artisan db:seed && \
```
