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
 * The "userLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsadminService = new Google_Service_GoogleAnalyticsAdmin(...);
 *   $userLinks = $analyticsadminService->userLinks;
 *  </code>
 */{/**
   * Lists all user links on an account or property, including implicit ones that
   * come from effective permissions granted by groups or organization admin
   * roles. If a returned user link does not have direct permissions, they cannot
   * be removed from the account or property directly with the DeleteUserLink
   * command. They have to be removed from the group/etc that gives them
   * permissions, which is currently only usable/discoverable in the GA or GMP
   * UIs. (userLinks.audit)
   *
   * @param string $parent Required. Example format: accounts/1234
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLinksRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLinksResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates information about multiple users' links to an account or property.
   * This method is transactional. If any UserLink cannot be created, none of the
   * UserLinks will be created. (userLinks.batchCreate)
   *
   * @param string $parent Required. The account or property that all user links
   * in the request are for. This field is required. The parent field in the
   * CreateUserLinkRequest messages must either be empty or match this field.
   * Example format: accounts/1234
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchCreateUserLinksRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchCreateUserLinksResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes information about multiple users' links to an account or property.
   * (userLinks.batchDelete)
   *
   * @param string $parent Required. The account or property that all user links
   * in the request are for. The parent of all values for user link names to
   * delete must match this field. Example format: accounts/1234
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchDeleteUserLinksRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleProtobufEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets information about multiple users' links to an account or property.
   * (userLinks.batchGet)
   *
   * @param string $parent Required. The account or property that all user links
   * in the request are for. The parent of all provided values for the 'names'
   * field must match this field. Example format: accounts/1234
   * @param array $optParams Optional parameters.
   *
   * @opt_param string names Required. The names of the user links to retrieve. A
   * maximum of 1000 user links can be retrieved in a batch. Format:
   * accounts/{accountId}/userLinks/{userLinkId}
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchGetUserLinksResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates information about multiple users' links to an account or property.
   * (userLinks.batchUpdate)
   *
   * @param string $parent Required. The account or property that all user links
   * in the request are for. The parent field in the UpdateUserLinkRequest
   * messages must either be empty or match this field. Example format:
   * accounts/1234
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaBatchUpdateUserLinksResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a user link on an account or property. If the user with the specified
   * email already has permissions on the account or property, then the user's
   * existing permissions will be unioned with the permissions specified in the
   * new UserLink. (userLinks.create)
   *
   * @param string $parent Required. Example format: accounts/1234
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaUserLink $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool notifyNewUser Optional. If set, then email the new user
   * notifying them that they've been granted permissions to the resource.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaUserLink
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a user link on an account or property. (userLinks.delete)
   *
   * @param string $name Required. Example format: accounts/1234/userLinks/5678
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets information about a user's link to an account or pr