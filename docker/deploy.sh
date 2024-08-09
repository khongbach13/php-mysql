docker build -t mysql:phuonglv -f ./mysql/Dockerfile ./mysql/
docker build -t php:phuonglv -f ./src/Dockerfile ./src/
docker network create -d bridge phuonglv
docker run -d --name mysql-my -p 3366:3306 --network phuonglv  mysql:phuonglv
docker run -d --name php-my -p 8899:80 --network phuonglv php:phuonglv
