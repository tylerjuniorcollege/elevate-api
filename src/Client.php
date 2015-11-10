<?php

    // Elevate API Client
namespace ElevateAPI;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
use ElevateAPI\Query\QueryAbstract;

class Client
{
    protected $_client;
    protected $_parameters;
    protected $_auth_key;
    protected $_security = 'key';
    
    // Constructor for the client class.
    public function __construct($base_url, $auth_key, $security = 'key') {
        $this->_client = new GuzzleClient(['base_uri' => $base_url]);
        //$this->_client->setDefaultOption('verify', false);
        
        $this->_auth_key = $auth_key;
        
        $this->_security = $security;
    }
    
    public function get(QueryAbstract $query) {
        $parameters = $query->parameters;
        
        // Merge Parameters with the auth.
        $parameters['auth'] = $query->authSecurityString($this->_security, $this->_auth_key);
        
        // grab the endpoint from the query class.
        $endpoint = 'solar.qll_web.' . $query->query;
        
        try {
            $response = $this->_client->request('GET', $endpoint, ['query' => $parameters, 'verify' => false]);
        } catch(GuzzleException $e) {
            throw $e;
        }
        
        // We need to check to see if the content type is text/xml, but for right now this will work fine.
        if($response->getStatusCode() == '200') {
            $xml = $response->getBody()->getContents();
            
            return new \SimpleXMLElement($xml);
        }
    }
}