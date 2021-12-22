<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\ResponsiveImages\Module;

class Picture implements PictureInterface
{
    public ImageInterface $image;
    public array $sources = [];
    public SrcsetGeneratorInterface $srcsetGenerator;

    /**
     * @inheirtDoc
     */
    public function getImage(): ImageInterface
    {
        return $this->image;
    }

    /**
     * @inheirtDoc
     */
    public function setImage(ImageInterface $image): PictureInterface
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function getSources(): array
    {
        return $this->sources;
    }

    /**
     * @inheirtDoc
     */
    public function setSources(array $sources): PictureInterface
    {
        $this->sources = $sources;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function addSource(SourceInterface $source): PictureInterface
    {
        $this->sources[] = $source;

        return $this;
    }

    /**
     * @inheirtDoc
     */
    public function __toString(): string
    {
        if (count($this->getSources()) > 0) {
            return '<picture>' . implode('', array_merge($this->getSources(), [$this->getImage()])) . '</picture>';
        }

        return (string)$this->getImage();
    }
}
