## Docker

    docker run -d -p 80:80 -p 3306:3306 -v ~/Development/happycity:/app alintuhut/happycity-app
    docker run -d -p 80:80 -p 3306:3306 -v /home/razvansg/work/happycity:/app alintuhut/happycity-app

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
    
    