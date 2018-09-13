<?php
namespace PHPSTORM_META {
    override(\Opis\Colibri\Collector\Manager::collect(0), map([
        'permissions' => \Opis\Colibri\Modules\Permissions\Collectors\PermissionList::class
    ]));

    override(\Opis\Colibri\Functions\collect(0), map([
        'permissions' => \Opis\Colibri\Modules\Permissions\Collectors\PermissionList::class
    ]));
}