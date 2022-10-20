FROM debian:buster
RUN apt-get update &&  apt-get install mariadb-server -y
COPY ./requirement/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./requirement/script.sh script.sh
COPY ./requirement/sauvegarde.sql sauvegarde.sql
EXPOSE 3306
CMD ["bash", "script.sh"]


