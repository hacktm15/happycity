#!/usr/bin/env bash
curl -i -XPOST 'http://happycity.xyz:8086/write?db=test' --data-binary 'metric_name,city=Lugoj,question_id=1 value=4'