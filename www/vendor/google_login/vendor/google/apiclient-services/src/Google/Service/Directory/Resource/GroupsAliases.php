/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *//**
 * The "aliases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $aliases = $adminService->aliases;
 *  </code>
 */{/**
   * Removes an alias. (aliases.delete)
   *
   * @param string $groupKey Identifies the group in the API request. The value
   * can be the group's email address, group alias, or the unique group ID.
   * @param string $alias The alias to be removed
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Adds an alias for the group. (aliases.insert)
   *
   * @param string $groupKey Identifies the group in the API request. The value
   * can be the group's email address, group alias, or the unique group ID.
   * @param Google_Service_Directory_Alias $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Alias
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists all aliases for a group. (aliases.listGroupsAliases)
   *
   * @param string $groupKey Identifies the group in the API request. The value
   * can be the group's email address, group alias, or the unique group ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Aliases
   */(,=()){=();=(,);(,(),);}}