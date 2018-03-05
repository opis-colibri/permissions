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

namespace OpisColibri\Permissions;

interface IPermissionRepository
{
    /**
     * Get all permissions
     *
     * @return iterable|IPermission[]
     */
    public function getAll(): iterable;

    /**
     * Get permission by its name
     *
     * @param string $name
     * @return null|IPermission
     */
    public function getByName(string $name): ?IPermission;

    /**
     * Get a permissions by their name
     *
     * @param iterable|string[] $permissions
     * @return iterable|IPermission[]
     */
    public function getMultipleByName(iterable $permissions): iterable;
}