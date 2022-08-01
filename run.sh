./composer.sh install

./artisan.sh key:generate
./artisan.sh config:clear
./artisan.sh config:cache
./artisan.sh migrate:fresh --seed
