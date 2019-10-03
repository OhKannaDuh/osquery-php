<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\ChromeExtensions;
use OhKannaDuh\OsQueryTests\TestCase;

final class ChromeExtensionsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the uid attribute from our model [ChromeExtensions].
     */
    public function testGetUid(): void
    {
        $model = ChromeExtensions::load([
            "uid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUid());
    }


    /**
     * Ensure we can get the name attribute from our model [ChromeExtensions].
     */
    public function testGetName(): void
    {
        $model = ChromeExtensions::load([
            "name" => "name",
        ], $this->container);

        $this->assertSame("name", $model->getName());
    }


    /**
     * Ensure we can get the profile attribute from our model [ChromeExtensions].
     */
    public function testGetProfile(): void
    {
        $model = ChromeExtensions::load([
            "profile" => "profile",
        ], $this->container);

        $this->assertSame("profile", $model->getProfile());
    }


    /**
     * Ensure we can get the identifier attribute from our model [ChromeExtensions].
     */
    public function testGetIdentifier(): void
    {
        $model = ChromeExtensions::load([
            "identifier" => "identifier",
        ], $this->container);

        $this->assertSame("identifier", $model->getIdentifier());
    }


    /**
     * Ensure we can get the version attribute from our model [ChromeExtensions].
     */
    public function testGetVersion(): void
    {
        $model = ChromeExtensions::load([
            "version" => "version",
        ], $this->container);

        $this->assertSame("version", $model->getVersion());
    }


    /**
     * Ensure we can get the description attribute from our model [ChromeExtensions].
     */
    public function testGetDescription(): void
    {
        $model = ChromeExtensions::load([
            "description" => "description",
        ], $this->container);

        $this->assertSame("description", $model->getDescription());
    }


    /**
     * Ensure we can get the locale attribute from our model [ChromeExtensions].
     */
    public function testGetLocale(): void
    {
        $model = ChromeExtensions::load([
            "locale" => "locale",
        ], $this->container);

        $this->assertSame("locale", $model->getLocale());
    }


    /**
     * Ensure we can get the update_url attribute from our model [ChromeExtensions].
     */
    public function testGetUpdateUrl(): void
    {
        $model = ChromeExtensions::load([
            "update_url" => "update_url",
        ], $this->container);

        $this->assertSame("update_url", $model->getUpdateUrl());
    }


    /**
     * Ensure we can get the author attribute from our model [ChromeExtensions].
     */
    public function testGetAuthor(): void
    {
        $model = ChromeExtensions::load([
            "author" => "author",
        ], $this->container);

        $this->assertSame("author", $model->getAuthor());
    }


    /**
     * Ensure we can get the persistent attribute from our model [ChromeExtensions].
     */
    public function testGetPersistent(): void
    {
        $model = ChromeExtensions::load([
            "persistent" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPersistent());
    }


    /**
     * Ensure we can get the path attribute from our model [ChromeExtensions].
     */
    public function testGetPath(): void
    {
        $model = ChromeExtensions::load([
            "path" => "path",
        ], $this->container);

        $this->assertSame("path", $model->getPath());
    }


    /**
     * Ensure we can get the permissions attribute from our model [ChromeExtensions].
     */
    public function testGetPermissions(): void
    {
        $model = ChromeExtensions::load([
            "permissions" => "permissions",
        ], $this->container);

        $this->assertSame("permissions", $model->getPermissions());
    }
}
