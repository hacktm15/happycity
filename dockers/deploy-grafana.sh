docker stop happycity-grafana
docker rm happycity-grafana
docker pull dlucian/happycity-grafana

# Light it up

#docker run -d -p 80:80 -p 3306:3306 --name happycity-app -v /happycity-app:/app  alintuhut/happycity-app
#docker run -d -p 8083:8083 -p 8086:8086 --expose 8090 --expose 8099 alintuhut/happycity-influxdb

docker run -d -p 3000:3000 \
	-e "GF_SERVER_ROOT_URL=http://happycity.xyz:3000" \
	-e "GF_SECURITY_ADMIN_PASSWORD='Thie4shei*Boo(ko'" \
	-e "GF_AUTH_ANONYMOUS_ENABLED=true" \
	--name happycity-grafana \
	dlucian/happycity-grafana
