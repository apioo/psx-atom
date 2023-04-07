
# Atom

## About

This library contains model classes to generate an Atom specification in a type-safe way. The models are
automatically generated based on the [TypeSchema](https://typeschema.org/) specification (s. `typeschema.json`). The
following example shows how you can generate an Atom spec:

```php
$person = new Person();
$person->setName('foobar');
$person->setUri('http://foo.com');
$person->setEmail('foo@bar.com');

$text = new Text();
$text->setContent('foobar');

$entry = new Entry();
$entry->setAuthor([$person]);
$entry->setContent($text);
$entry->setId('http://localhost.com#1');
$entry->setTitle('Star City');
$entry->setPublished(LocalDateTime::from(new \DateTime('Tue, 10 Jun 2003 04:00:00 GMT')));

$atom = new Atom();
$atom->setId('http://localhost.com');
$atom->setTitle('Foo has bar');
$atom->setUpdated(LocalDateTime::from(new \DateTime('Tue, 10 Jun 2003 04:00:00 GMT')));
$atom->setEntry([$entry]);

echo json_encode($asyncAPI, JSON_PRETTY_PRINT);

```

This would result in the following JSON:

```json
{
  "id": "http:\/\/localhost.com",
  "title": "Foo has bar",
  "updated": "2003-06-10T04:00:00Z",
  "entry": [
    {
      "author": [
        {
          "name": "foobar",
          "uri": "http:\/\/foo.com",
          "email": "foo@bar.com"
        }
      ],
      "content": {
        "content": "foobar"
      },
      "id": "http:\/\/localhost.com#1",
      "published": "2003-06-10T04:00:00Z",
      "title": "Star City"
    }
  ]
}
```

## Contribution

If you want to suggest changes please only change the `typeschema.json` specification and then run
the `php gen.php` script to regenerate all model classes.
