Pour lancer le projet : 
```sh
cp .env.example .env && \
composer install && \
sail up -d && \
sail artisan key:generate && \
sail artisan migrate && \
sail artisan db:seed && \
sail artisan passport:install
```
