<?php

declare(strict_types = 1);

namespace PSX\Atom;


class Category implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $term = null;
    protected ?string $scheme = null;
    protected ?string $label = null;
    public function setTerm(?string $term) : void
    {
        $this->term = $term;
    }
    public function getTerm() : ?string
    {
        return $this->term;
    }
    public function setScheme(?string $scheme) : void
    {
        $this->scheme = $scheme;
    }
    public function getScheme() : ?string
    {
        return $this->scheme;
    }
    public function setLabel(?string $label) : void
    {
        $this->label = $label;
    }
    public function getLabel() : ?string
    {
        return $this->label;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('term', $this->term);
        $record->put('scheme', $this->scheme);
        $record->put('label', $this->label);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

