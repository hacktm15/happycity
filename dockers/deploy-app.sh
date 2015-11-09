docker stop happycity-app
docker rm happycity-app
docker pull dlucian/happycity-app
cd /happycity-app
git pull
docker run -d -p 80:80 -p 443:443 -p 3306:3306 --name happycity-app -v /happycity-app:/app -v /var/lib/_data:/var/lib/mysql dlucian/happycity-app
