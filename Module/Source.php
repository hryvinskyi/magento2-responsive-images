<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

use Hryvinskyi\Base\Helper\Html;

class Source implements SourceInterface
{
    private ?string $mediaQuery = null;
    private array $srcItems;
    private array $attributes = [];

    /**
     * @inheirtDoc
     */
    public function getMediaQuery(): ?string
    {
        return $this->mediaQuery;
    }

    /**
     * @inheirtDoc
     */
    public function setMediaQuery(?string $mediaQuery): SourceInterface
    {
        $this->mediaQuery = $mediaQuery;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getSrcItems(): array
    {
        return $this->srcItems;
    }

    /**
     * @inheirtDoc
     */
    public function setSrcItems(array $srcItems): SourceInterface
    {
        $this->srcItems = $srcItems;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addSrc(SrcInterface $src): SourceInterface
    {
        $this->srcItems[] = $src;

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
    public function setAttributes(array $attributes): SourceInterface
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function __toString(): string
    {
        $attributes = $this->getAttributes();

        $srcItems = array_map(static function (SrcInterface $src) {
            return (string)$src;
        }, $this->getSrcItems());

        $srcItems = implode(', ', $srcItems);
        $attributes['srcset'] = $srcItems;
        $attributes['media'] = $this->getMediaQuery();

        return Html::beginTag('source', $attributes);
    }
}
