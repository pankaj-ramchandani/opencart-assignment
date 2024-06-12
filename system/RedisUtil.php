<?php
require_once __DIR__ . '/../vendor/autoload.php';
Predis\Autoloader::register();
class RedisUtil
{
    private $redis;

    public function __construct()
    {
        $this->redis =  new Credis_Client(REDIS_HOST, REDIS_PORT);
    }

    public function get($key)
    {
        return $this->redis->get($key);
    }

    public function set($key, $value, $timeout = 0)
    {
        return $this->redis->set($key, $value, $timeout);
    }

    public function exists($key)
    {
        return $this->redis->exists($key);
    }

    public function delete($key)
    {
        return $this->redis->del($key);
    }
}
