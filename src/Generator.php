<?php

declare(strict_types = 1);

namespace PSX\Atom;


class Generator implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $text = null;
    protected ?string $uri = null;
    protected ?string $version = null;
    public function setText(?string $text) : void
    {
        $this->text = $text;
    }
    public function getText() : ?string
    {
        return $this->text;
    }
    public function setUri(?string $uri) : void
    {
        $this->uri = $uri;
    }
    public function getUri() : ?string
    {
        return $this->uri;
    }
    public function setVersion(?string $version) : void
    {
        $this->version = $version;
    }
    public function getVersion() : ?string
    {
        return $this->version;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('text', $this->text);
        $record->put('uri', $this->uri);
        $record->put('version', $this->version);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

