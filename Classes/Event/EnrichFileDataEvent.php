<?php

/*
 * This file is part of the "headless" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FriendsOfTYPO3\Headless\Event;

use TYPO3\CMS\Core\Resource\FileInterface;

final class EnrichFileDataEvent
{
    private FileInterface $fileReference;

    private array $properties;

    public function __construct(FileInterface $fileReference, array $properties = [])
    {
        $this->fileReference = $fileReference;
        $this->properties = $properties;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }

    public function getFileReference(): FileInterface
    {
        return $this->fileReference;
    }
}
