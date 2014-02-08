<?php

namespace Travis\HeritageAction;

class Scorecard {

    /**
     * Magic method for handling API methods.
     *
     * @param   string  $method
     * @param   array   $args
     * @return  array
     */
    public static function __callStatic($method, $args)
    {
        // capture arguments
        $args = isset($args[0]) ? $args[0] : array();
        $args['format'] = 'json';

        // set endpoint
        $endpoint = 'http://heritageactionscorecard.com/api/scorecard/'.strtolower($method).'/';
        foreach ($args as $key => $value)
        {
            $endpoint .= strtolower($key.'/'.$value).'/';
        }

        // curl request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        // if errors...
        if (curl_errno($ch))
        {
            // close connection
            #$errors = curl_error($ch);
            curl_close($ch);

            // return false
            return false;
        }

        // if NO errors...
        else
        {
            // close connection
            curl_close($ch);

            // return
            return json_decode($response);
        }
    }

}