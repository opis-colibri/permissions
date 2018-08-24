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

interface IRole
{
    /**
     * @return string
     */
    public function id(): string;

    /**
     * Role's name
     *
     * @return  string
     */
    public function name(): string;

    /**
     * @param string $name
     * @return IRole
     */
    public function setName(string $name): self;

    /**
     * Role's description
     *
     * @return  string
     */
    public function description(): string;

    /**
     * @param string $description
     * @return IRole
     */
    public function setDescription(string $description): self;

    /**
     * Checks if the role was created by an user
     *
     * @return bool
     */
    public function isUserCreated(): bool;

    /**
     * @param bool $value
     * @return IRole
     */
    public function setIsUserCreated(bool $value): self;

    /**
     * Role's permissions
     *
     * @return  iterable|IPermission[]
     */
    public function permissions(): iterable;

    /**
     * @param iterable|IPermission[] $permissions
     * @return IRole
     */
    public function setPermissions(iterable $permissions): self;
}
