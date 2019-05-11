<?php
namespace lohn\yii2websocket\events;

use yii\base\Event;

class WSClientEvent extends Event
{
    /**
     * @var \Ratchet\ConnectionInterface $client
     */
    public $client;
}
