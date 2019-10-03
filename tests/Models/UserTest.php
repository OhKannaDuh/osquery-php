<?php

namespace OhKannaDuh\OsQueryTests\Models;

use Mockery\MockInterface;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use OhKannaDuh\OsQuery\Container;
use OhKannaDuh\OsQuery\Models\Group;
use OhKannaDuh\OsQuery\Models\User;
use OhKannaDuh\OsQuery\Pivots\GroupsToUsers;
use OhKannaDuh\OsQueryTests\ContainerMocker;
use OhKannaDuh\OsQueryTests\TestCase;
use Ramsey\Collection\Collection;

final class UserTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the uid attribute from our model [User].
     */
    public function testGetUid(): void
    {
        $model = User::load([
            "uid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUid());
    }


    /**
     * Ensure we can get the gid attribute from our model [User].
     */
    public function testGetGid(): void
    {
        $model = User::load([
            "gid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getGid());
    }


    /**
     * Ensure we can get the uid_signed attribute from our model [User].
     */
    public function testGetUidSigned(): void
    {
        $model = User::load([
            "uid_signed" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getUidSigned());
    }


    /**
     * Ensure we can get the gid_signed attribute from our model [User].
     */
    public function testGetGidSigned(): void
    {
        $model = User::load([
            "gid_signed" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getGidSigned());
    }


    /**
     * Ensure we can get the username attribute from our model [User].
     */
    public function testGetUsername(): void
    {
        $model = User::load([
            "username" => "username",
        ], $this->container);

        $this->assertSame("username", $model->getUsername());
    }


    /**
     * Ensure we can get the description attribute from our model [User].
     */
    public function testGetDescription(): void
    {
        $model = User::load([
            "description" => "description",
        ], $this->container);

        $this->assertSame("description", $model->getDescription());
    }


    /**
     * Ensure we can get the directory attribute from our model [User].
     */
    public function testGetDirectory(): void
    {
        $model = User::load([
            "directory" => "directory",
        ], $this->container);

        $this->assertSame("directory", $model->getDirectory());
    }


    /**
     * Ensure we can get the shell attribute from our model [User].
     */
    public function testGetShell(): void
    {
        $model = User::load([
            "shell" => "shell",
        ], $this->container);

        $this->assertSame("shell", $model->getShell());
    }


    /**
     * Ensure we can get the uuid attribute from our model [User].
     */
    public function testGetUuid(): void
    {
        $model = User::load([
            "uuid" => "uuid",
        ], $this->container);

        $this->assertSame("uuid", $model->getUuid());
    }


        /** @return iterable */
    public function dataProvider(): iterable
    {
        $builder = new GenericBuilder();

        return [
            [
                "1",
                range(1, 3),
                $builder
            ],
            [
                "2",
                range(1, 2),
                $builder
            ],
            [
                "3",
                range(1, 5),
                $builder
            ],
        ];
    }


        /**
         * @dataProvider dataProvider
         *
         * @param string $uid
         * @param array $groups
         * @param GenericBuilder $builder
         */
    public function testGetGroups(string $uid, array $groups, GenericBuilder $builder): void
    {
        $mocker = new ContainerMocker();
        $expectations = [];
        $return = [];
        foreach ($groups as $group) {
            $expectations[] = [
                "method" => "where",
                "arguments" => ["gid" => $group],
                "return" => new Collection(Group::class, [Group::load(["gid" => $group], $this->container)]),
            ];

            $return[] = [
                "gid" => $group,
                "uid" => $uid,
            ];
        }

        $mocker->addFactory(Group::class, $mocker->getMockFactory($expectations));
        /** @var Container&MockInterface */
        $container = $mocker->getMock();

        $osQuery = $this->getOsQueryMock("SELECT user_groups.gid FROM user_groups WHERE (user_groups.uid = '{$uid}')", $return);
        $container
            ->shouldReceive("get")
            ->with(GroupsToUsers::class)
            ->andReturn(new GroupsToUsers($osQuery, $builder, $container));

        $user = User::load(compact("uid"), $container);

        $this->assertCount(count($groups), $user->getGroups());
    }
}
