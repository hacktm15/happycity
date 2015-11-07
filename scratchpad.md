## Docker

    docker run -d -p 80:80 -p 3306:3306 -v ~/Development/happycity:/app alintuhut/happycity-app
    docker run -d -p 80:80 -p 3306:3306 -v /home/razvansg/work/happycity:/app alintuhut/happycity-app
    
    docker run -d -p 80:80 -p 443:443 -p 3306:3306 --name happycity-app -v /happycity-app:/app dlucian/happycity-app
    
    docker run -d -p 80:80 -p 3306:3306 -p 443:443 -v ~/Development/happycity:/app dlucian/happycity-app
        # create dockers/grafana/Dockerfile

### Grafana

    docker build -t dlucian/happycity-grafana .
    docker login
    docker push dlucian/happycity-grafana

Useful: 

 * https://github.com/kamon-io/docker-grafana-influxdb
 * https://github.com/grafana/grafana-docker/blob/master/Dockerfile
 
To see current docker instance info:

    docker inspect happycity-grafana
    
### InfluxDB
    
    SELECT * FROM metric_name
    
    
    http://happycity.xyz:3000/dashboard/db/curiosity?panelId=2&fullscreen&from=now-15m&to=now&theme=light