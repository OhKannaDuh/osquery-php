<?php

namespace OhKannaDuh\OsQueryTests;

use HaydenPierce\ClassFinder\ClassFinder;
use OhKannaDuh\OsQuery\Container;

final class ContainerTest extends TestCase
{
    /** @var string */
    private const MODELS_NAMESPACE = "OhKannaDuh\OsQuery\Models";


    /**
     * @return iterable
     */
    public function modelProvider(): iterable
    {
        $container = Container::create();

        $models = ClassFinder::getClassesInNamespace(self::MODELS_NAMESPACE);
        foreach ($models as $model) {
            yield [$model, $container];
        }
    }


    /**
     * Ensure our factories are mapped correctly.
     *
     * @dataProvider modelProvider
     *
     * @param string $model
     * @param Container $container
     *
     * @return void
     */
    public function testGetFactory(string $model, Container $container): void
    {
        $factory = $container->getFactory($model);

        $this->assertSame($model, $factory->getModelClass());
    }


    /**
     * Ensure we can get components from the get method.
     */
    public function testGet(): void
    {
        $container = Container::create();

        $this->assertSame($container, $container->get(Container::class));
    }
}
