# elevate-api
API Wrapper for Ellucian Elevate API

# LICENSE
See LICENSE File for more information

# Purpose
This is a simple wrapper to access the Ellucian Elevate API.

# Usage
## New Client
Getting a new client is easy.
```php
<?php

use ElevateAPI\Client as ElevateClient; // using use to change the name of the client class.

/* the arguments for the Elevate Client are 
   - the URL before the "solar.qll_web" endpoint
   - the auth key 
   - the security type for accessing the system. */
$client = new ElevateClient('http://example.com', 'auth_key', 'key');

// OR - Less code
$client = new ElevateAPI\Client(/** args here **/);
```

## Querying the API
Each query you make with the Elevate API must be submitted using the Query Wrapper for that specific query.

For example, if you're trying to access the Common API endpoint, you would create a new instance of the `ElevateAPI\Query\Common` class

```php
$query = new Elevate\Query\Common();

// You set the Parameters using setParam();
$query->setParam('serviceCode', 'ONLINE_REG');

// Pass the query to $client->get(); and the result is a SimpleXMLElement object with your data.
$result = $client->get($query);
```

### Available Query Endpoints
All the currently documented query endpoints have been coded, including Common and Ping.
