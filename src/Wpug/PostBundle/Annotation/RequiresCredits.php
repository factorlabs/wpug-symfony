<?php
namespace Wpug\PostBundle\Annotation;
/**
 * @Annotation
 * @Attributes({
 *     @Attribute("credits", type="integer", required=true)
 * })
 */
class RequiresCredits
{
    public $credits;
}

