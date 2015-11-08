FROM tutum/lamp:latest

RUN rm -fr /app && git clone https://github.com/hacktm15/happycity.git /app

ADD     ./SSL/happycity_xyz.chained.crt /etc/ssl/certs/ssl-cert-snakeoil.pem
ADD     ./SSL/happycity_xyz.key /etc/ssl/private/ssl-cert-snakeoil.key
ADD     ./default-ssl /etc/apache2/sites-available/default-ssl.conf

RUN sudo a2enmod ssl
RUN sudo ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf
RUN sudo /etc/init.d/apache2 restart

RUN mysql -u root -e "grant all privileges on happycity.* to hacktm@'95.76.223.151' identified by 'Aethahg1';" mysql
RUN mysql -u root -e "flush privileges;" mysql

EXPOSE 80 443 3306

CMD ["/run.sh"]