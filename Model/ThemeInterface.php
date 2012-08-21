<?php

/*
 * This file is part of the Sp/ThemeBundle.
 *
 * (c) Martin Parsiegla <martin.parsiegla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sp\ThemeBundle;

/**
 * Theme interface.
 *
 * @author Martin Parsiegla <parsiegla@kuponjo.de>
 */
interface ThemeInterface
{
    /**
     * Gets the theme name
     *
     * @return string
     */
    function getName();

    /**
     * Sets the name.
     *
     * @param string $name
     */
    function setName($name);

    /**
     * Gets the canonical name.
     *
     * @return string
     */
    function getNameCanonical();

    /**
     * Sets the canonical name.
     *
     * @param string $nameCanonical
     */
    function setNameCanonical($nameCanonical);

    /**
     * Sets the datetime when this theme was created.
     *
     * @param \DateTime $created
     */
    function setCreatedAt(\DateTime $created);

    /**
     * Gets the datetime when this theme was created.
     *
     * @return \DateTime
     */
    function getCreatedAt();
}
