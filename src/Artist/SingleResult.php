<?php

namespace LastFm\Artist;

class SingleResult
{
    /** @var array */
    protected $result;

    /** @var string */
    protected $defaultString = '';

    public function __construct(array $result)
    {
        $this->result = $result;
    }

    public function name(): string
    {
        return $this->fieldFromResults('name');
    }

    public function listeners(): string
    {
        return $this->fieldFromResults('listeners');
    }

    public function mbid(): string
    {
        return (string) $this->fieldFromResults('mbid');
    }

    public function url(): string
    {
        return $this->fieldFromResults('url');
    }

    public function streamable(): bool
    {
        return (bool) array_get($this->result, 'streamable', false);
    }

    public function smallImage(): string
    {
        return $this->imageSize('small');
    }

    public function mediumImage(): string
    {
        return $this->imageSize('medium');
    }

    public function largeImage(): string
    {
        return $this->imageSize('large');
    }

    public function extraLargeImage(): string
    {
        return $this->imageSize('extralarge');
    }

    public function megaImage(): string
    {
        return $this->imageSize('mega');
    }

    protected function fieldFromResults(string $field): string
    {
        return array_get($this->result, $field, $this->defaultString);
    }

    protected function imageSize($size): string
    {
        foreach (array_get($this->result, 'image') as $image) {
            if (strtolower(array_get((array) $image, 'size')) === $size) {
                return array_get((array) $image, '#text', $this->defaultString);
            }
        }

        return $this->defaultString;
    }
}
