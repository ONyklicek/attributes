<?php
/**
 * Class TestingStatus
 *
 * @autor   Ondrej Nyklicek <ondrejnykicek@icloud.com>
 * @project attributes
 * @IDE     PhpStorm
 */

namespace Attributes;

use Attribute;

/**
 * The TestingStatus class is an attribute for specifying the testing status of a method.
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::TARGET_PROPERTY)]
class TestingStatus
{

    const SUCCESS = 'Success';
    const FAIL = 'Fail';
    const IN_PROGRESS = 'In progress';
    const DRAFT = 'Draft';
    private string $status;


    /**
     * @param string $status Return status of the method
     */
    public function __construct(string $status)
    {
        $this->status = $status;
    }

    /**
     * Get return status of the method.
     *
     * @return string Return status of the method
     */
    public function getStatus(): string
    {
        return $this->status;
    }
}