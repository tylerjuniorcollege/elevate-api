<?php

    // Elevate API Client
namespace ElevateAPI;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    protected $_client;
    protected $_parameters;
    protected $_auth_key;
    protected $_security = FALSE;
    
    // Constructor for the client class.
    public function __construct($base_url, $auth_key, $security = FALSE) {
        $this->_client = new GuzzleClient(['base_uri' => $base_url]);
        
        $this->_auth_key = $auth_key;
        
        $this->_security = $security;
    }
    
    public function get($endpoint, array $parameters) {
        // Merge Parameters with the auth.
        if(!$this->_security) {
            $parameters['auth'] = $this->_auth_key;
        }
        
        return $this->_client->request('GET', $endpoint, $parameters);
    }
}