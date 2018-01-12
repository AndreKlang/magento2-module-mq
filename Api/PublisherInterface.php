<?php

namespace Rcason\Mq\Api;

/**
 * Interface PublisherInterface
 * @package Rcason\Mq\Api
 * @api
 */
interface PublisherInterface
{
    /**
     * Publish message to queue
     */
    public function publish($queueName, $messageContent);
}
