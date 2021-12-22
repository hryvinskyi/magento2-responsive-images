<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

interface PictureInterface
{
    /**
     * @return ImageInterface
     */
    public function getImage(): ImageInterface;

    /**
     * @param ImageInterface $image
     * @return PictureInterface
     */
    public function setImage(ImageInterface $image): PictureInterface;

    /**
     * @return SourceInterface[]
     */
    public function getSources(): array;

    /**
     * @param SourceInterface[] $sources
     */
    public function setSources(array $sources): PictureInterface;

    /**
     * @param SourceInterface $source
     */
    public function addSource(SourceInterface $source): PictureInterface;

    /**
     * @return string
     */
    public function __toString(): string;
}
