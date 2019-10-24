<?php declare(strict_types=1);

use React\Dns\Resolver\ResolverInterface;
use React\EventLoop\LoopInterface;
use React\Socket\Connector;
use React\Socket\ConnectorInterface;
use function DI\factory;

return [
    ConnectorInterface::class => factory(function (
        LoopInterface $loop,
        ResolverInterface $resolver
    ) {
        return new Connector(
            $loop,
            [
                'dns' => $resolver,
            ]
        );
    }),
];
