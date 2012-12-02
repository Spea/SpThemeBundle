<?php

/*
 * This file is part of the SpThemeBundle package.
 *
 * (c) Martin Parsiegla <martin.parsiegla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sp\ThemeBundle;

/**
 * @author Martin Parsiegla <parsiegla@kuponjo.de>
 */
interface SettingsInterface
{
    /**
     * @return array
     */
    function getParameters();

    /**
     * @param array $parameters
     */
    function setParameters(array $parameters);

    /**
     * @param mixed $key
     * @param mixed $value
     */
    function setParameter($key, $value);

    /**
     * @param $key
     *
     * @return mixed
     */
    function getParameter($key);

    /**
     * @param \DateTime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt);

    /**
     * @return \DateTime
     */
    function getCreatedAt();

    /**
     * @param \DateTime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt);

    /**
     * @return \DateTime
     */
    function getUpdatedAt();
}
