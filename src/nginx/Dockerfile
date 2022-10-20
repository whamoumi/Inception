FROM debian:buster
RUN apt-get update && apt-get install nginx openssl -y
RUN mkdir /etc/nginx/certificate
RUN openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/certificate/nginx-certificate.crt -keyout /etc/nginx/certificate/nginx.key -subj "/C=FR/ST=nice/L=nice/O=42/OU=42nice/CN="
RUN mkdir /var/run/php
COPY /requirement/default /etc/nginx/sites-available/default
EXPOSE 443
CMD ["nginx", "-g", "daemon off;"]
