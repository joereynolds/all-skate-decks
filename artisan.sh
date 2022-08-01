if [[ -z "${UID_GID}" ]]; then
  export UID_GID="$(id -u):$(id -g)"
fi

docker-compose run --rm --workdir="/var/www/html" php php artisan $@
