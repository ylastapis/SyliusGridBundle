<?php

namespace Sylius\Bundle\GridBundle\Doctrine\API;

use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Sylius\Component\Grid\Data\DataSourceInterface;
use Sylius\Component\Grid\Parameters;

final class DataSource implements DataSourceInterface
{
    /**
     * @var
     */
    private $api;
    /**
     * @var
     */
    private $method;
    /**
     * @var
     */
    private $parameters;

    private $expressionBuilder;
    private $data;
    private $page;
    private $limit;
    private $total;
    private $pages;

    /**
     * DataSource constructor.
     *
     * @param     $api
     * @param     $method
     * @param     $parameters
     */
    function __construct(
        $api,
        $method,
        $parameters
    )
    {
        $this->api = $api;
        $this->method = $method;
        $this->parameters = $parameters;
        $this->expressionBuilder = new ExpressionBuilder();

        $d = $api->$method();

        $this->page = $d['page'];
        $this->limit = $d['limit'];
        $this->pages = $d['pages'];
        $this->total = $d['total'];
        $this->data = $d['_embedded']['items'];
    }

    /**
     * {@inheritdoc}
     */
    public function restrict($expression, $condition = DataSourceInterface::CONDITION_AND)
    {
        throw new \BadMethodCallException('Not supported yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function getExpressionBuilder()
    {
        return $this->expressionBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function getData(Parameters $parameters)
    {
        $paginator = new Pagerfanta(new ArrayAdapter($this->data));
        $paginator->setNormalizeOutOfRangePages(true);
        $paginator->setCurrentPage($parameters->get('page', 1));

        return $paginator;
    }
}
