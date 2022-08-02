./composer.sh install

./artisan.sh key:generate
./artisan.sh config:clear
./artisan.sh config:cache
./artisan.sh migrate:fresh --seed

sudo chmod -R 777 ./storage
sudo chmod -R 777 ./bootstrap/cache

docker-compose up
