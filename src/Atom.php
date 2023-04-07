<?php

declare(strict_types = 1);

namespace PSX\Atom;


class Atom implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<Person>|null
     */
    protected ?array $author = null;
    /**
     * @var array<Category>|null
     */
    protected ?array $category = null;
    /**
     * @var array<Person>|null
     */
    protected ?array $contributor = null;
    protected ?Generator $generator = null;
    protected ?string $icon = null;
    protected ?string $logo = null;
    protected ?string $id = null;
    /**
     * @var array<Link>|null
     */
    protected ?array $link = null;
    protected ?string $rights = null;
    protected ?Text $subTitle = null;
    protected ?string $title = null;
    protected ?\PSX\DateTime\LocalDateTime $updated = null;
    /**
     * @var array<Entry>|null
     */
    protected ?array $entry = null;
    /**
     * @param array<Person>|null $author
     */
    public function setAuthor(?array $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : ?array
    {
        return $this->author;
    }
    /**
     * @param array<Category>|null $category
     */
    public function setCategory(?array $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : ?array
    {
        return $this->category;
    }
    /**
     * @param array<Person>|null $contributor
     */
    public function setContributor(?array $contributor) : void
    {
        $this->contributor = $contributor;
    }
    public function getContributor() : ?array
    {
        return $this->contributor;
    }
    public function setGenerator(?Generator $generator) : void
    {
        $this->generator = $generator;
    }
    public function getGenerator() : ?Generator
    {
        return $this->generator;
    }
    public function setIcon(?string $icon) : void
    {
        $this->icon = $icon;
    }
    public function getIcon() : ?string
    {
        return $this->icon;
    }
    public function setLogo(?string $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : ?string
    {
        return $this->logo;
    }
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * @param array<Link>|null $link
     */
    public function setLink(?array $link) : void
    {
        $this->link = $link;
    }
    public function getLink() : ?array
    {
        return $this->link;
    }
    public function setRights(?string $rights) : void
    {
        $this->rights = $rights;
    }
    public function getRights() : ?string
    {
        return $this->rights;
    }
    public function setSubTitle(?Text $subTitle) : void
    {
        $this->subTitle = $subTitle;
    }
    public function getSubTitle() : ?Text
    {
        return $this->subTitle;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setUpdated(?\PSX\DateTime\LocalDateTime $updated) : void
    {
        $this->updated = $updated;
    }
    public function getUpdated() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->updated;
    }
    /**
     * @param array<Entry>|null $entry
     */
    public function setEntry(?array $entry) : void
    {
        $this->entry = $entry;
    }
    public function getEntry() : ?array
    {
        return $this->entry;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('author', $this->author);
        $record->put('category', $this->category);
        $record->put('contributor', $this->contributor);
        $record->put('generator', $this->generator);
        $record->put('icon', $this->icon);
        $record->put('logo', $this->logo);
        $record->put('id', $this->id);
        $record->put('link', $this->link);
        $record->put('rights', $this->rights);
        $record->put('subTitle', $this->subTitle);
        $record->put('title', $this->title);
        $record->put('updated', $this->updated);
        $record->put('entry', $this->entry);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}

