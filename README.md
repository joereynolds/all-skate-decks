# all-skate-decks.com

A website for all skate graphics.

Here's a screenshot of terrible progress:

![image](https://user-images.githubusercontent.com/9536682/183125468-564ead80-9546-428e-ab6b-41226de805a1.png)


## Why?

Because I want to try and find my old boards and didn't see a website like this so...

## Development

Everything uses docker. Run `./run.sh` and populate an `.env` file with these
DB credentials and you should be good to go on `localhost:8080`:

```
DB_CONNECTION=mysql
DB_HOST=database
DB_PORT=3306
DB_DATABASE=all_skate_decks
DB_USERNAME=root
DB_PASSWORD=password
```

### Technologies used

- Laravel
- HTMX
- Tailwind
- AlpineJs

### Troubleshootings

#### How to compile chages

```
docker-compose run --rm node npm run dev
```
