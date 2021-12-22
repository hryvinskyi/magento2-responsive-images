<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

interface ImageInterface
{
    /**
     * @return string
     */
    public function getUrl(): string;

    /**
     * @param string $url
     * @return ImageInterface
     */
    public function setUrl(string $url): ImageInterface;

    /**
     * @return string
     */
    public function getAlt(): string;

    /**
     * @param string $alt
     * @return ImageInterface
     */
    public function setAlt(string $alt): ImageInterface;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param array $attributes
     * @return ImageInterface
     */
    public function setAttributes(array $attributes): ImageInterface;

    /**
     * @return string
     */
    public function getRenderedTag(): ?string;

    /**
     * @param string|null $tag
     * @return ImageInterface
     */
    public function setRenderedTag(?string $tag = null): ImageInterface;

    /**
     * @return string
     */
    public function __toString(): string;
}
