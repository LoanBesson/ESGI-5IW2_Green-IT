Pour lancer le projet : 
```sh
cp .env.example .env && \
docker run --rm -v $PWD:/app composer:2 composer --ignore-platform-reqs install && \
[ -f sail ] && bash sail || bash vendor/bin/sail up -d && \
docker-compose exec php php artisan migrate && \
docker-compose exec php php artisan artisan db:seed && \
```



Nous avons choisi la technologie Laravel, pour sa facilité de prise en main, compréhension et diversité.
Nous avons optimisé nos requêtes en ne sélectionnant que les données nécessaires à l’affichage dont l’utilisateur a besoin sur l’écran.
Nous n’avons pas choisi d’utiliser un outil de représentation graphique, ce n’était pas pertinent de notre point de vue.
Nous avons opté pour un design épuré pour que l’utilisateur est accès à l’information qu’il souhaite très facilement au premier coup d’œil.
Notre site est éco conçue car il ne fait pas de requête inutile, c’est à dire que ne sont pas utile à l’accès de l’information par l’utilisateur. Les images sont optimisées. Nous n’utilisons pas de package inutiles.

Screen du score Lighthouse :

<img width="464" alt="Capture d’écran 2022-03-20 à 22 32 38" src="https://user-images.githubusercontent.com/56297236/159186847-2f7bfb85-bcfa-43cf-8ce4-adb73f36bcd5.png">




Screen du site :

<img width="345" alt="Capture d’écran 2022-03-20 à 22 24 52" src="https://user-images.githubusercontent.com/56297236/159186713-c439795a-2f58-4fd0-b7c3-96e160d1ad9a.png">
