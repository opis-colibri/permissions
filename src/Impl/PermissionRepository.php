<?php
/* ===========================================================================
 * Copyright 2018 The Opis Project
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ============================================================================ */

namespace Opis\Colibri\Modules\Permissions\Impl;

use function Opis\Colibri\Functions\app;
use Opis\Colibri\Modules\Permissions\IPermission;
use Opis\Colibri\Modules\Permissions\IPermissionRepository;

class PermissionRepository implements IPermissionRepository
{
    /** @var  null|IPermission[] */
    private $permissions;

    /** @var string[] */
    private $names;

    /**
     * Get all permissions
     *
     * @return iterable|IPermission[]
     */
    public function getAll(): iterable
    {
        if ($this->permissions === null) {

            /** @var array $list */
            $list = app()->getCollector()->collect('permissions')->get();

            $key = 0;
            $names = [];
            $permissions = [];

            foreach ($list as $name => $description) {
                $permissions[] = new Permission($name, $description);
                $names[$name] = $key;
                $key++;
            }

            $this->permissions = $permissions;
            $this->names = $names;
        }

        return $this->permissions;
    }

    /**
     * @inheritdoc
     */
    public function getByName(string $name): ?IPermission
    {
        if ($this->permissions === null) {
            $this->getAll();
        }

        if (!isset($this->names[$name])) {
            return null;
        }

        return $this->permissions[$this->names[$name]];
    }

    /**
     * @inheritdoc
     */
    public function getMultipleByName(iterable $permissions): iterable
    {
        if ($this->permissions === null) {
            $this->getAll();
        }

        $results = [];

        foreach ($permissions as $permission) {
            if (isset($this->names[$permission])) {
                $results[] = $this->permissions[$this->names[$permission]];
            }
        }

        return $results;
    }
}