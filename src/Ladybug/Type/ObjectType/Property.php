<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Type\ObjectType;

use Ladybug\Type\TypeInterface;

/**
 * Property is an abstraction of an object property
 */
class Property implements VisibilityInterface
{

    /** @var string $name Property name */
    protected $name;

    /** @var TypeInterface $value Property value */
    protected $value;

    /** @var string $name Property visibility */
    protected $visibility;

    /**
     * Set property name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get property name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @inheritdoc
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Sets the property value
     * @param TypeInterface $value Property value
     */
    public function setValue(TypeInterface $value)
    {
        $this->value = $value;
    }

    /**
     * Gets the property value.
     *
     * @return TypeInterface Property value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Gets the level of the underlying object value
     *
     * @return int Level
     */
    public function getLevel()
    {
        if (is_null($this->value)) {
            return 0;
        }

        return $this->value->getLevel();
    }

}
