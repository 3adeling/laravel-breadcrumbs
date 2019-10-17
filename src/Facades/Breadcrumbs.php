<?php

namespace DaveJamesMiller\Breadcrumbs\Facades;

use DaveJamesMiller\Breadcrumbs\BreadcrumbsManager;
use Illuminate\Support\Facades\Facade;

/**
 * Breadcrumbs facade - allows easy access to the Manager instance.
 *
 * @method static void for(string $page, callable $callback)
 * @method static void register(string $name, callable $callback)
 * @method static void before(callable $callback)
 * @method static void after(callable $callback)
 * @method static bool exists(string|null $name)
 * @method static \Illuminate\Support\Collection generate(string|null $name, ...$params)
 * @method static \Illuminate\Support\HtmlString view(string $view, string $name, ...$params)
 * @method static \Illuminate\Support\HtmlString render(string $name, ...$params)
 * @method static \stdClass|null current()
 * @method static array getCurrentRoute()
 * @method static void setCurrentRoute(string $name, ...$params)
 * @method static void clearCurrentRoute()
 *
 * @see BreadcrumbsManager
 */
class Breadcrumbs extends Facade
{
    /**
     * Get the name of the class registered in the Application container.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return BreadcrumbsManager::class;
    }
}
