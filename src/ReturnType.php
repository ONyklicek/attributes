<?php

declare(strict_types=1);

namespace ONyklicek\Attributes;

use Attribute;

/**
 * The ReturnType class is an attribute for specifying the return type of the method.
 */
#[Attribute(Attribute::TARGET_METHOD)]
class ReturnType
{
    private string $type;

    /**
     * @param string $type Return type of the method
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Get return type of the method.
     *
     * @return string Return type of the method.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
