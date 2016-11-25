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

use Sylius\Component\Grid\Data\DriverInterface;
use Sylius\Component\Grid\Parameters;
use Symfony\Component\DependencyInjection\ContainerInterface;

final class Driver implements DriverInterface
{
    const NAME = 'api';
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * Driver constructor.
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataSource(array $configuration, Parameters $parameters)
    {
        if (!array_key_exists('service', $configuration)) {
            throw new \InvalidArgumentException('"service" must be configured.');
        }

        $api = $this->container->get($configuration["service"]);
        if ($api === null) {
            throw new \InvalidArgumentException('"'.$configuration["service"].'" must be defined');
        }

        if (!array_key_exists('index', $configuration)) {
            throw new \InvalidArgumentException('"index" must be configured.');
        }

        $method = $configuration["index"];

        return new DataSource($api, $method, $parameters);
    }
}
