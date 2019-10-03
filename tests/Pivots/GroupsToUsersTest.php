<?php

namespace OhKannaDuh\OsQueryTests\Pivots;

use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
use OhKannaDuh\OsQuery\Container;
use OhKannaDuh\OsQuery\Models\Group;
use OhKannaDuh\OsQuery\Models\User;
use OhKannaDuh\OsQuery\Pivots\GroupsToUsers;
use OhKannaDuh\OsQueryTests\ContainerMocker;
use OhKannaDuh\OsQueryTests\TestCase;
use OhKannaDuh\OsQueryTests\TestException;
use Ramsey\Collection\Collection;

final class GroupsToUsersTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


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
    public function testGetGroupsUsers(string $gid, array $users, GenericBuilder $builder): void
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

        $group = Group::load(compact("gid"), $this->container);
        if (!$group instanceof Group) {
            throw new TestException("group should be an instance of " . Group::class);
        }

        $groupUsers = (new GroupsToUsers($osQuery, $builder, $container))
            ->getGroupsUsers($group);

        $this->assertCount(count($users), $groupUsers);
    }


    /**
     * @dataProvider dataProvider
     *
     * @param string $uid
     * @param array $groups
     * @param GenericBuilder $builder
     */
    public function testGetUsersGroups(string $uid, array $groups, GenericBuilder $builder): void
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
                "uid" => $uid,
                "gid" => $group,
            ];
        }

        $mocker->addFactory(Group::class, $mocker->getMockFactory($expectations));
        $container = $mocker->getMock();

        $osQuery = $this->getOsQueryMock("SELECT user_groups.gid FROM user_groups WHERE (user_groups.uid = '{$uid}')", $return);

        $user = User::load(compact("uid"), $this->container);
        if (!$user instanceof User) {
            throw new TestException("user should be an instance of " . User::class);
        }

        $userGroups = (new GroupsToUsers($osQuery, $builder, $container))
            ->getUsersGroups($user);

        $this->assertCount(count($groups), $userGroups);
    }
}
