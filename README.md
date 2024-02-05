1) Avviare il container Docker con php, apache e composer

`docker run --rm --name phpcomposer -v ./:/var/www/html -p 8080:80 benvenuti/php-composer:1.0`


2) In un altro terminale ottenere una bash nel container. In un altro terminale eseguire il seguente comando:

`docker exec -it phpcomposer bash`



3) Dentro il container, aggiornare le dipendenze

`composer update`
