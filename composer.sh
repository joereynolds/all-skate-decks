if [[ -z "${UID_GID}" ]]; then
  export UID_GID="$(id -u):$(id -g)"
fi

docker run --rm --interactive --tty --volume $PWD:/app composer "$@"

