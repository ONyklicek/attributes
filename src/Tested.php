<?php
/**
 * Class Tested
 *
 * @autor   Ondrej Nyklicek <ondrejnykicek@icloud.com>
 * @project attributes
 * @IDE     PhpStorm
 */

namespace Attributes;

use Attribute;

/**
 * @since 8.0
 */
#[Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD)]
class Tested {
}