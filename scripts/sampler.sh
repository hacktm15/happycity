#!/usr/bin/env bash
RVALUE=$(( ( RANDOM % 5 )  + 1 ))
curl -i -XPOST 'http://happycity.xyz:8086/write?db=test' --data-binary "metric_name,city=$1,question_id=1 value=$RVALUE"
RVALUE=$(( ( RANDOM % 5 )  + 1 ))
curl -i -XPOST 'http://happycity.xyz:8086/write?db=test' --data-binary "metric_name,city=$1,question_id=2 value=$RVALUE"
RVALUE=$(( ( RANDOM % 5 )  + 1 ))
curl -i -XPOST 'http://happycity.xyz:8086/write?db=test' --data-binary "metric_name,city=$1,question_id=3 value=$RVALUE"
RVALUE=$(( ( RANDOM % 5 )  + 1 ))
curl -i -XPOST 'http://happycity.xyz:8086/write?db=test' --data-binary "metric_name,city=$1,question_id=4 value=$RVALUE"
RVALUE=$(( ( RANDOM % 5 )  + 1 ))
curl -i -XPOST 'http://happycity.xyz:8086/write?db=test' --data-binary "metric_name,city=$1,question_id=5 value=$RVALUE"
