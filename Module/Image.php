<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

use Hryvinskyi\Base\Helper\Html;

class Image implements ImageInterface
{
    private string $url;
    private string $alt;
    private string $tag;
    private array $attributes = [];

    /**
     * @inheirtDoc
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @inheirtDoc
     */
    public function setUrl(string $url): ImageInterface
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @inheirtDoc
     */
    public function setAlt(string $alt): ImageInterface
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @inheirtDoc
     */
    public function setAttributes(array $attributes): ImageInterface
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getRenderedTag(): ?string
    {
        return $this->tag;
    }

    /**
     * @inheirtDoc
     */
    public function setRenderedTag(?string $tag = null): ImageInterface
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        if ($this->getRenderedTag() === null) {
            $this->setRenderedTag(
                Html::img($this->getUrl(), array_merge($this->getAttributes(), ['alt' => $this->getAlt()]))
            );
        }

        return $this->getRenderedTag();
    }
}
