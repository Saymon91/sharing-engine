<?php

namespace common\models\events;


use yii\base\BaseObject;
use yii\queue\Queue;

/**
 * Class Event
 * @package common\models\events
 *
 * @property string $id
 * @property array $params
 * @property int $sent
 * @property int $expire
 *
 * @property-read bool $expired
 */
class Event extends BaseObject implements \yii\queue\JobInterface
{
    public function __construct(array $config = [])
    {
        parent::__construct($config);
        if (!$this->sent) {
            $this->sent = time();
        }
    }

    public function getExpired()
    {
        return $this->expire && (time() - $this->sent) > $this->expire;
    }

    /**
     * @param Queue $queue which pushed and is handling the job
     */
    public function execute($queue)
    {
        // TODO: Implement execute() method.
    }
}