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
 * The "roles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $roles = $adminService->roles;
 *  </code>
 */{/**
   * Deletes a role. (roles.delete)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param string $roleId Immutable ID of the role.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a role. (roles.get)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param string $roleId Immutable ID of the role.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Role
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a role. (roles.insert)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param Google_Service_Directory_Role $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Role
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a paginated list of all the roles in a domain. (roles.listRoles)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string pageToken Token to specify the next page in the list.
   * @return Google_Service_Directory_Roles
   */(,=()){=();=(,);(,(),);}/**
   * Patch role via Apiary Patch Orchestration (roles.patch)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param string $roleId Immutable ID of the role.
   * @param Google_Service_Directory_Role $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Role
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates a role. (roles.update)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param string $roleId Immutable ID of the role.
   * @param Google_Service_Directory_Role $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Role
   */(,,,=()){=(,,);=(,);(,(),);}}