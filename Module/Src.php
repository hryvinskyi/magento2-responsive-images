<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

/**
 * Defines an image source to be used in the `srcset` attribute.
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-srcset
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source#attr-srcset
 */
class Src implements SrcInterface
{
    private string $url;
    private ?float $width = null;
    private ?float $dpi = null;

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
    public function setUrl(string $url): SrcInterface
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * @inheirtDoc
     */
    public function setWidth(?float $width): SrcInterface
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getDpi(): ?float
    {
        return $this->dpi;
    }

    /**
     * @inheirtDoc
     */
    public function setDpi(?float $dpi): SrcInterface
    {
        $this->dpi = $dpi;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function __toString(): string
    {
        $result = $src = $this->url;

        if ($this->width !== null) {
            $result = "$src {$this->width}w";
        }

        if ($this->dpi !== null) {
            $result = "$src {$this->dpi}x";
        }

        return $result;
    }
}
