<?php

declare(strict_types=1);

namespace Adrenth\Raindrop\Response;

/**
 * Class VerifySignatureResponse
 *
 * @package Adrenth\Raindrop\Response
 */
class VerifySignatureResponse
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var integer
     */
    private $timestamp;

    /**
     * @param string $identifier
     * @param int $timestamp
     */
    public function __construct(string $identifier, int $timestamp)
    {
        $this->identifier = $identifier;
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
}
