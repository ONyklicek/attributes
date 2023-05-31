<?php
/**
 * Class Returning
 *
 * @autor   Ondrej Nyklicek <ondrejnykicek@icloud.com>
 * @project attributes
 * @IDE     PhpStorm
 */

namespace Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
class Returning
{

}