<?php

namespace OhKannaDuh\OsQueryTests;

use OhKannaDuh\OsQuery\Container;
use OhKannaDuh\OsQuery\Exceptions\AttributeNotFound;
use OhKannaDuh\OsQuery\Exceptions\AttributeTypeNotFound;

final class ModelTest extends TestCase
{


    /**
     * Ensure we our models loaded data is correct.
     *
     * @dataProvider modelDataProvider
     *
     * @param int $id
     * @param string $name
     * @param string $comment
     * @param bool $hidden
     * @param TestModel $model
     */
    public function testLoad(int $id, string $name, string $comment, bool $hidden, TestModel $model): void
    {
        $this->assertSame($model->getAttribute("id"), $id);
        $this->assertSame($model->getAttribute("name"), $name);
        $this->assertSame($model->getAttribute("comment"), $comment);
        $this->assertSame($model->getAttribute("hidden"), $hidden);
    }


    /**
     * Ensure we can check if an attribute exists on a model.
     *
     * @dataProvider modelDataProvider
     *
     * @param int $id
     * @param string $name
     * @param string $comment
     * @param bool $hidden
     * @param TestModel $model
     */
    public function testHasAttribute(int $id, string $name, string $comment, bool $hidden, TestModel $model): void
    {
        // Should have
        $this->assertTrue($model->hasAttribute("id"));
        $this->assertTrue($model->hasAttribute("name"));
        $this->assertTrue($model->hasAttribute("comment"));
        $this->assertTrue($model->hasAttribute("hidden"));
        // Should not have
        $this->assertFalse($model->hasAttribute("_id"));
        $this->assertFalse($model->hasAttribute("name_"));
        $this->assertFalse($model->hasAttribute("comment  "));
        $this->assertFalse($model->hasAttribute(""));
    }


    /**
     * Ensure we can get the models table.
     *
     * @dataProvider modelDataProvider
     *
     * @param int $id
     * @param string $name
     * @param string $comment
     * @param bool $hidden
     * @param TestModel $model
     */
    public function testGetTable(int $id, string $name, string $comment, bool $hidden, TestModel $model): void
    {
        $this->assertSame("tests", $model->getTable());
    }


    /**
     * Ensure we throw an exception if we try to load an attribute that isn't set.
     *
     * @dataProvider modelDataProvider
     *
     * @param int $id
     * @param string $name
     * @param string $comment
     * @param bool $hidden
     * @param TestModel $model
     */
    public function testAttributeNotFound(int $id, string $name, string $comment, bool $hidden, TestModel $model): void
    {
        $this->expectException(AttributeNotFound::class);
        $this->expectExceptionMessage("Attribute [test] not found on model [OhKannaDuh\OsQueryTests\TestModel]. Data [id, name, comment, hidden].");
        $model->getAttribute("test");
    }


    /**
     * Ensure we throw an exception if we try to load an attribute that isn't typed in the model schema.
     *
     * @dataProvider modelDataProvider
     *
     * @param int $id
     * @param string $name
     * @param string $comment
     * @param bool $hidden
     */
    public function testAttributeTypeNotFound(int $id, string $name, string $comment, bool $hidden): void
    {
        $this->expectException(AttributeTypeNotFound::class);
        $this->expectExceptionMessage("Type for attribute [test] not found on model [OhKannaDuh\OsQueryTests\TestModel]. Attributes [id, name, comment, hidden].");

        $test = "test";
        $model = TestModel::load(compact("id", "name", "comment", "hidden", "test"), Container::create());
        $model->getAttribute("test");
    }
}
