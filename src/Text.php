<?php

declare(strict_types = 1);

namespace PSX\Atom;


class Text implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $type = null;
    protected ?string $content = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setContent(?string $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?string
    {
        return $this->content;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('type', $this->type);
        $record->put('content', $this->content);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

