# EZMAIL 

## Overview
EZMAIL is a lightweight package created with PHP using the official MIME documentation to send emails using the latest SMTP configuration. By using this package you will be able to send encrypted emails to anyone with a valid email address.

## Features
- Send SMTP emails from PHP 
- Send mail from localhost or server
- Send one or multiple attachments supported
- Send emails with multiple To, CC and BCC
- Auto email encryption
- Supports LOGIN, PLAIN and XOAUTH2 login types
- Compatible with php 7.4 or later
- Supports (php mail by using the mail() function). (requires php.ini config) (not recommended).
- Easy implementation within any php code.
- Supports Plain or HTML body


## Further Documentation for developers

[Link to RFC0821](https://www.ietf.org/rfc/rfc0821.txt)

[Link to RFC0822](https://tools.ietf.org/html/rfc822)

[Link to RFC1869](https://tools.ietf.org/html/rfc1869)

[Link to RFC2045](https://tools.ietf.org/html/rfc2045)

[Link to RFC2821](https://www.ietf.org/rfc/rfc2821.txt)

## Installation


## Ussage 

```php
<?php
    use EZMAIL\EZMAIL; //update this according to your path.
    use \Exceptions; 

    $config = [
        "appName" => "EZMAIL",
        "subject" => "Test Email",
        "body" => "<p>This is a sample email that can be in plain text or HTML</p>",
        "to" => ["My name" => "example@host.com"],
        "config" => [
            "hostName" => "smtp.myhost.com",
            "portNumber" => 587,
            "username" => "example@host.com",
            "password" => "MyCredentials",
        ]
    ];


    try
    {
        $ezmail = new EZMAIL($config);
        
        if($ezmail->send()) print("Email sent succesfully");
    }
    catch(Exception $ex)
    {
        #Errors
        print($ex->getMessage());
    }   

```


## Tips
- If you are using gmail as your SMTP server you must enable the less secure apps on google. [Learn more](https://www.google.com/settings/security/lesssecureapps)  


## Credits
This module was inspired and created by [@jerryurenaa](http://jerryurenaa.com)


## License
EZMAIL is [MIT](https://github.com/Nerdtrix/FetchAsync/blob/main/LICENSE.md) licensed.


###### Powered by [Nerdtrix.com](http://nerdtrix.com)