<?php

class Persist_model {

    private $endpoint = '';
    private $metricName;

    public function init( $endpoint, $metric )
    {
        $this->endpoint = $endpoint;
        $this->metricName = $metric;
        return $this;
    }

    public function data( $value, $tags = array() )
    {
        if (!empty($tags['city']))
            $tags['city'] = strtolower($tags['city']);

        $payload = sprintf("%s,%s value=%d", $this->metricName, http_build_query($tags,'',','), $value );

        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/octet-stream',
                'content' => $payload
            )
        );

        $context  = stream_context_create($opts);

        $result = file_get_contents($this->endpoint, false, $context);
        return $result;
    }

} // END class