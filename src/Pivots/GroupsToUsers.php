<?php

namespace OhKannaDuh\OsQuery\Pivots;

use OhKannaDuh\OsQuery\Models\Group;
use OhKannaDuh\OsQuery\Models\User;
use OhKannaDuh\OsQuery\Pivot;
use Ramsey\Collection\Collection;

final class GroupsToUsers extends Pivot
{
    /** @var string */
    protected $table = "user_groups";


    /**
     * Get all users that belong to a group.
     *
     * @param Group $group
     *
     * @return Collection
     */
    public function getGroupsUsers(Group $group): Collection
    {
        $gid = $group->getGid();
        $collection = new Collection(User::class);
        $factory = $this->container->getFactory(User::class);

        $results = $this->where(["gid" => $gid], ["uid"]);

        foreach ($results as $result) {
            $model = $factory->where(["uid" => $result["uid"]])->first();

            $collection->add($model);
        }

        return $collection;
    }


    /**
     * Get all groups the given user belongs to.
     *
     * @param User $user
     *
     * @return Collection
     */
    public function getUsersGroups(User $user): Collection
    {
        $uid = $user->getUid();
        $collection = new Collection(Group::class);
        $factory = $this->container->getFactory(Group::class);

        $results = $this->where(["uid" => $uid], ["gid"]);

        foreach ($results as $result) {
            $model = $factory->where(["gid" => $result["gid"]])->first();

            $collection->add($model);
        }

        return $collection;
    }
}
