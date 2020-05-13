FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get -y update \
    && apt-get install -y apache2 php php-mysql \
    #cleaning up
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/*  \
    && rm /var/www/html/index.html 

#copy website files
COPY ./app/ /var/www/html/   

#serve website
CMD /usr/sbin/apache2ctl -D FOREGROUND

EXPOSE 80