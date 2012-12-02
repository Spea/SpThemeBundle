<?php

/*
 * This file is part of the SpThemeBundle package.
 *
 * (c) Martin Parsiegla <martin.parsiegla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sp\ThemeBundle\Model;

use Sp\ThemeBundle\SettingsInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Martin Parsiegla <martin.parsiegla@gmail.com>
 */
abstract class Settings implements SettingsInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * Construct.
     */
    public function __construct()
    {
        $this->parameters = new ArrayCollection();
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function setParameter($key, $value)
    {
        $this->parameters->set($key, $value);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function getParameter($key)
    {
        $this->parameters->get($key);
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

}
