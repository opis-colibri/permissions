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

namespace Opis\Colibri\Modules\Permissions;

interface IRoleRepository
{
    /**
     * Create role
     *
     * @return IRole
     */
    public function create(): IRole;

    /**
     * Get all roles
     *
     * @return iterable|IRole[]
     */
    public function getAll(): iterable;

    /**
     * Get a role by its name
     *
     * @param string $role
     * @return null|IRole
     */
    public function getByName(string $role): ?IRole;

    /**
     * @param string $id
     * @return null|IRole
     */
    public function getById(string $id): ?IRole;

    /**
     * Get roles by their names
     *
     * @param string[] $roles
     * @return iterable|IRole[]
     */
    public function getMultipleByName(array $roles): iterable;

    /**
     * Save role
     *
     * @param IRole $role
     * @return bool
     */
    public function save(IRole $role): bool;

    /**
     * Delete role
     *
     * @param IRole $role
     * @return bool
     */
    public function delete(IRole $role): bool;

    /**
     * @param string $id
     * @return bool
     */
    public function deleteById(string $id): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function deleteByName(string $name): bool;

    /**
     * @param string[] $ids
     * @return int
     */
    public function deleteMultipleById(array $ids): int;

    /**
     * @param string[] $names
     * @return int
     */
    public function deleteMultipleByName(array $names): int;
}
