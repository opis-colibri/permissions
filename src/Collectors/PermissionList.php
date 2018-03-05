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

namespace OpisColibri\Permissions\Collectors;

use Serializable;

class PermissionList implements Serializable
{
    /** @var array */
    protected $permissions = [];

    /**
     * @param string[] $permissions
     */
    public function add(array $permissions)
    {
        $this->permissions += $permissions;
    }

    /**
     * @return string[]
     */
    public function get(): array
    {
        return $this->permissions;
    }

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return serialize($this->permissions);
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
        $this->permissions = unserialize($serialized);
    }
}