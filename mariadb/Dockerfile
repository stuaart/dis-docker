FROM mariadb:10.8
MAINTAINER stuart reeves
ENV MYSQL_ALLOW_EMPTY_PASSWORD no
ENV MYSQL_ROOT_PASSWORD rootpwd
COPY ./1_phpdemos.sql /docker-entrypoint-initdb.d/
COPY ./2_coursework-2-database.sql /docker-entrypoint-initdb.d/
RUN chown -R mysql:mysql /docker-entrypoint-initdb.d/
EXPOSE 3306
