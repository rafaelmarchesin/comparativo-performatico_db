FROM mysql:5.6 AS reestruturaodb-battle_db_1
ENV MYSQL_DATABASE test_db
COPY ./mysql/sql-scripts/ /docker-entrypoint-initdb.d/