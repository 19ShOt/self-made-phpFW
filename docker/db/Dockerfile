
FROM mysql:5.7

RUN apt-get update \
    && apt-get install -y \
    vim \
    locales \
    locales-all

COPY ./etc/locale.gen /etc/locale.gen
COPY ./etc/inputrc /etc/inputrc

RUN locale-gen \
    update-locale

COPY ./conf.d/my.cnf /etc/mysql/conf.d/my.cnf

CMD ["mysqld"]