<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

interface SrcInterface
{
    /**
     * The URL pointing to the image.
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * @param string $url
     * @return SrcInterface
     */
    public function setUrl(string $url): SrcInterface;

    /**
     * The width of the image in pixels.
     *
     * @return float
     */
    public function getWidth(): ?float;

    /**
     * @param null|float $width
     * @return SrcInterface
     */
    public function setWidth(?float $width): SrcInterface;

    /**
     * Pixel density descriptor. How many times the pixel density of this image
     * is of the 1:1 density version.
     *
     * @return float
     */
    public function getDpi(): ?float;

    /**
     * @param null|float $dpi
     * @return SrcInterface
     */
    public function setDpi(?float $dpi): SrcInterface;

    /**
     * @return string
     */
    public function __toString(): string;
}
