<?php

namespace OhKannaDuh\OsQueryTests\Models;

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use OhKannaDuh\OsQuery\Models\Group;
use OhKannaDuh\OsQuery\Models\User;
use OhKannaDuh\OsQuery\Pivots\GroupsToUsers;
use OhKannaDuh\OsQueryTests\ContainerMocker;
use OhKannaDuh\OsQueryTests\TestCase;
use Ramsey\Collection\Collection;

final class GroupTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the gid attribute from our model [Group].
     */
    public function testGetGid(): void
    {
        $model = Group::load([
            "gid" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getGid());
    }


    /**
     * Ensure we can get the gid_signed attribute from our model [Group].
     */
    public function testGetGidSigned(): void
    {
        $model = Group::load([
            "gid_signed" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getGidSigned());
    }


    /**
     * Ensure we can get the groupname attribute from our model [Group].
     */
    public function testGetGroupname(): void
    {
        $model = Group::load([
            "groupname" => "groupname",
        ], $this->container);

        $this->assertSame("groupname", $model->getGroupname());
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
     * @param string $gid
     * @param array $users
     * @param GenericBuilder $builder
     */
    public function testGetUsers(string $gid, array $users, GenericBuilder $builder): void
    {
        $mocker = new ContainerMocker();
        $expectations = [];
        $return = [];
        foreach ($users as $user) {
            $expectations[] = [
                "method" => "where",
                "arguments" => ["uid" => $user],
                "return" => new Collection(User::class, [User::load(["uid" => $user], $this->container)]),
            ];

            $return[] = [
                "uid" => $user,
                "gid" => $gid,
            ];
        }

        $mocker->addFactory(User::class, $mocker->getMockFactory($expectations));
        $container = $mocker->getMock();

        $osQuery = $this->getOsQueryMock("SELECT user_groups.uid FROM user_groups WHERE (user_groups.gid = '{$gid}')", $return);
        $container
        ->shouldReceive("get")
        ->with(GroupsToUsers::class)
        ->andReturn(new GroupsToUsers($osQuery, $builder, $container));


        $group = Group::load(compact("gid"), $container);

        $this->assertCount(count($users), $group->getUsers());
    }
}
