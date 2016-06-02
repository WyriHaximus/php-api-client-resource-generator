<?php

namespace Example\Client\Resource;

use WyriHaximus\ApiClient\Resource\TransportAwareTrait;

abstract class Project implements ProjectInterface
{
    use TransportAwareTrait;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $desription;
    /**
     * @var array
     */
    protected $config = array();
    /**
     * @var SplObjectStorage
     */
    protected $plugins;
    /**
     * @var DateTimeInterface
     */
    protected $created;
    /**
     * @var DateTimeInterface
     */
    protected $updated;
    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * @return string
     */
    public function desription() : string
    {
        return $this->desription;
    }
    /**
     * @return array
     */
    public function config() : array
    {
        return $this->config;
    }
    /**
     * @return SplObjectStorage
     */
    public function plugins() : SplObjectStorage
    {
        return $this->plugins;
    }
    /**
     * @return DateTimeInterface
     */
    public function created() : DateTimeInterface
    {
        return $this->created;
    }
    /**
     * @return DateTimeInterface
     */
    public function updated() : DateTimeInterface
    {
        return $this->updated;
    }
}