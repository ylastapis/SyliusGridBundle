<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\GridBundle\Doctrine\API;

use Sylius\Component\Grid\Data\ExpressionBuilderInterface;

class ExpressionBuilder implements ExpressionBuilderInterface
{
    public function __construct()
    {}

    /**
     * {@inheritdoc}
     */
    public function andX(...$expressions)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function orX(...$expressions)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function comparison($field, $operator, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function equals($field, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function notEquals($field, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function lessThan($field, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function lessThanOrEqual($field, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function greaterThan($field, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function greaterThanOrEqual($field, $value)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function in($field, array $values)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function notIn($field, array $values)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function isNull($field)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function isNotNull($field)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function like($field, $pattern)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function notLike($field, $pattern)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function orderBy($field, $direction)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function addOrderBy($field, $direction)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    private function getFieldName($field)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * @param string $field
     *
     * @return string
     */
    private function getParameterName($field)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }
}
