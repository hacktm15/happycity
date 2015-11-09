docker stop happycity-influxdb
docker rm happycity-influxdb
docker pull alintuhut/happycity-influxdb
#docker run -d -p 80:80 -p 3306:3306 --name happycity-app -v /happycity-app:/app  alintuhut/happycity-app

docker run -d -p 8083:8083 -p 8086:8086 --expose 8090 --expose 8099 -v /var/lib/influxdb:/data alintuhut/happycity-influxdb
