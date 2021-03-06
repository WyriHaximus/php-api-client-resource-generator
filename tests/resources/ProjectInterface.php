<?php declare(strict_types=1);

namespace Example\Client\Resource;

use WyriHaximus\ApiClient\Resource\ResourceInterface;

interface ProjectInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return array
     */
    public function builds() : array;

    /**
     * @return Project\Build
     */
    public function latestBuild() : Project\Build;

    /**
     * @return Project\Config
     */
    public function config() : Project\Config;

    /**
     * @return SplObjectStorage
     */
    public function plugins() : SplObjectStorage;

    /**
     * @return DateTimeInterface
     */
    public function created() : DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updated() : DateTimeInterface;
}
