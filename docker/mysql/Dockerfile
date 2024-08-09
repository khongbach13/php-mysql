FROM mysql:5.7

# Sao chép file init.sql vào thư mục /docker-entrypoint-initdb.d
COPY init.sql /docker-entrypoint-initdb.d/
WORKDIR /var/lib/mysql

ENV MYSQL_ROOT_PASSWORD=Phuong@2000
ENV MYSQL_DATABASE=web
ENV MYSQL_USER=phuonglv
ENV MYSQL_PASSWORD=Phuong@2000

EXPOSE 3306

CMD ["mysqld"]
