<?php
declare(strict_types=1);

namespace Foo\Bar\Model\Data;

use Foo\Bar\Api\Data\SampleInterface;
use Magento\Framework\DataObject;

class Sample extends DataObject implements SampleInterface
{
    /**
     * @inheritDoc
     */
    public function getSampleProperty(): ?string
    {
        return $this->getData(self::SAMPLE_PROPERTY) === null ? null
            : (string)$this->getData(self::SAMPLE_PROPERTY);
    }

    /**
     * @inheritDoc
     */
    public function setSampleProperty(?string $sampleProperty): void
    {
        $this->setData(self::SAMPLE_PROPERTY, $sampleProperty);
    }
}
