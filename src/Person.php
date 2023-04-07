<?php

declare(strict_types = 1);

namespace PSX\Atom;


class Person implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $name = null;
    protected ?string $uri = null;
    protected ?string $email = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setUri(?string $uri) : void
    {
        $this->uri = $uri;
    }
    public function getUri() : ?string
    {
        return $this->uri;
    }
    public function setEmail(?string $email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : ?string
    {
        return $this->email;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('uri', $this->uri);
        $record->put('email', $this->email);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

