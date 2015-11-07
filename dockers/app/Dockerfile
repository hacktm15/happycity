FROM tutum/lamp:latest

RUN rm -fr /app && git clone https://github.com/hacktm15/happycity.git /app

ADD     ./SSL/happycity_xyz.chained.crt /etc/ssl/certs/ssl-cert-snakeoil.pem
ADD     ./SSL/happycity_xyz.key /etc/ssl/private/ssl-cert-snakeoil.key

RUN sudo a2enmod ssl
RUN sudo ln -s /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-enabled/default-ssl.conf
RUN sudo /etc/init.d/apache2 restart

EXPOSE 80 443 3306

CMD ["/run.sh"]