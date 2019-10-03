# osquery-php
This library serves as a link between [osquery](https://osquery.io/) and php.

## Installation
The library can be installed via composer
```
composer require ohkannaduh/osquery-php
```

## Getting started
The easiest way to hop in and get started with the library is to use the container `\OhKannaDuh\OsQuery\Container`.

### The container
```php
use OhKannaDuh\OsQuery\Container;
...
$container = Container::create();
```
The static `create` method on the container will automatically register all factories in the `OhKannaDuh\OsQuery\Factories` namespace, if you want something specific you can instantiate the class with the `new` keyword to get an instnace with no registered factories.
```php
$container = new Container();
```
#### Registering factories
Once you have your container you can register additional containers using the `register` method. This method takes an instance of `OhKannaDuh\OsQuery\FactoryInterface`.
```php
/** @var FactoryInterface $factory */
$container->register($factory);
```
This will map the factories model to the factory inside the container.

#### Getting factories
You can retrieve a registered factory with the `getFactory` method that takes a string of the models class.
```php
use OhKannaDuh\OsQuery\Models\User;
...
$users = $container->getFactory(User::class);
```

### Factories
Factories are one of the main parts of this library, they are used to interact with OsQuery and get the models we need.

### Factory Api
#### all
The `all` method gets all instance of a given model.
```php
/** @var \OhKannaDuh\OsQuery\Factories\UserFactory $users */
foreach ($users->all() as $user) {
    echo $user->getUsername() . PHP_EOL;
}
```
You can also limit the data that we gather with the optional `$columns` parameter on the `all` method.
```php
/** @var \OhKannaDuh\OsQuery\Factories\UserFactory $users */
foreach ($users->all(["username", "uid"]) as $user) {
    $user->hasAttribute("username"); // true
    $user->hasAttribute("uid"); // true
    $user->hasAttribute("gid"); // false
}
```

#### where
The `where` method lets us specify parameters for OsQuery.
```php
/** @var \OhKannaDuh\OsQuery\Factories\UserFactory $users */
$result = $users->where([
    "username" => "root", // All users with the username root
]);

foreach ($results as $user) {
    echo $user->getUsername() . PHP_EOL;
}
```

```php
/** @var \OhKannaDuh\OsQuery\Factories\UserFactory $users */
$result = $users->where([
    "gid" => "985", // All users in group 985
]);

foreach ($results as $user) {
    echo $user->getUsername() . PHP_EOL;
}
```
