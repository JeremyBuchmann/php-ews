<?php
/**
 * Defines a timezone context.
*
* @package php-ews
* @subpackage Types
*/

namespace PhpEws\EWSType;

/**
 * Definition of the TimeZoneContextType type.
 */
class TimeZoneContextType extends EWSType
{
    /**
     * The time zone definition
     *
     * @var TimeZoneDefinitionType
     */
    public $TimeZoneDefinition;
}
