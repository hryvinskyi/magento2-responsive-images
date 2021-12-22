<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

interface SourceInterface
{
    /**
     * @return string|null
     */
    public function getMediaQuery(): ?string;

    /**
     * @param string|null $mediaQuery
     * @return SourceInterface
     */
    public function setMediaQuery(?string $mediaQuery): SourceInterface;

    /**
     * A list of image sizes represented in this <source>.
     *
     * @return SrcInterface[]
     */
    public function getSrcItems(): array;

    /**
     * @param SrcInterface[] $srcItems
     * @return SourceInterface
     */
    public function setSrcItems(array $srcItems): SourceInterface;

    /**
     * @param SrcInterface $src
     *
     * @return SourceInterface
     */
    public function addSrc(SrcInterface $src): SourceInterface;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param array $attributes
     * @return SourceInterface
     */
    public function setAttributes(array $attributes): SourceInterface;

    /**
     * Generates the HTML for the represented <source> element.
     * @return string
     */
    public function __toString(): string;
}
