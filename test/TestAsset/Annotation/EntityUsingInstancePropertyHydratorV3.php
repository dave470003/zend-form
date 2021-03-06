<?php
/**
 * @see       https://github.com/zendframework/zend-hydrator for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/zend-hydrator/blob/master/LICENSE.md New BSD License
 */

namespace ZendTest\Form\TestAsset\Annotation;

use Zend\Form\Annotation;

// @codingStandardsIgnoreStart
/**
 * @Annotation\Options({"use_as_base_fieldset":true})
 */
class EntityUsingInstancePropertyHydratorV3
{
    /**
     * @Annotation\Instance("ZendTest\Form\TestAsset\Annotation\Entity")
     * @Annotation\Type("Zend\Form\Fieldset")
     * @Annotation\Hydrator({"type":"Zend\Hydrator\ClassMethodsHydrator", "options": {"underscoreSeparatedKeys": false}})
     */
    public $object;
}
// @codingStandardsIgnoreEnd
