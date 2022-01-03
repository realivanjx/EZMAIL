<?php

namespace EZMAIL;

class SMTPFactory implements ISMTPFactory
{
    private ILogger $logger;

    public function __construct(
        ?ILogger $logger = null
    )
    {
        if ($logger == null)
        {
            $this->logger = new EmptyLogger;
        }
        else
        {
            $this->logger = $logger;
        }
    }

    public function create(
        string $hostName,
        int $portNumber,
        float $timeout = 30
    ) : ISMTP
    {
        return new SMTP(
            $hostName,
            $portNumber,
            $timeout,
            logger: $this->logger
        );
    }
}

?>