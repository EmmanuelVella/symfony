docker build . -t symfony
docker run --rm -v "$PWD":/var/www/html -p 8000:8000 -d --name symfony symfony
docker exec symfony composer install

Go to http://localhost:8000/app.php
