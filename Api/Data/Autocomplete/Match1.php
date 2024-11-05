<?php

namespace Flekto\Postcode\Api\Data\Autocomplete;

class Match1 implements MatchInterface
{
    /** @var string */
    public $value;

    /** @var string */
    public $label;

    /** @var string */
    public $description;

    /** @var string */
    public $precision;

    /** @var string */
    public $context;

    /** @var int[][] */
    public $highlights;

    /**
     * __construct function.
     *
     * @access public
     * @param array $match
     * @return void
     */
    public function __construct(array $match)
    {
        $this->value = $match['value'];
        $this->label = $match['label'];
        $this->description = $match['description'];
        $this->precision = $match['precision'];
        $this->context = $match['context'];
        $this->highlights = $match['highlights'];
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrecision(): string
    {
        return $this->precision;
    }

    public function getContext(): string
    {
        return $this->context;
    }

    public function getHighlights(): array
    {
        return $this->highlights;
    }
}
