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
 * The "webpropertyUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webpropertyUserLinks = $analyticsService->webpropertyUserLinks;
 *  </code>
 */{/**
   * Removes a user from the given web property. (webpropertyUserLinks.delete)
   *
   * @param string $accountId Account ID to delete the user link for.
   * @param string $webPropertyId Web Property ID to delete the user link for.
   * @param string $linkId Link ID to delete the user link for.
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Adds a new user to the given web property. (webpropertyUserLinks.insert)
   *
   * @param string $accountId Account ID to create the user link for.
   * @param string $webPropertyId Web Property ID to create the user link for.
   * @param Google_Service_Analytics_EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityUserLink
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists webProperty-user links for a given web property.
   * (webpropertyUserLinks.listManagementWebpropertyUserLinks)
   *
   * @param string $accountId Account ID which the given web property belongs to.
   * @param string $webPropertyId Web Property ID for the webProperty-user links
   * to retrieve. Can either be a specific web property ID or '~all', which refers
   * to all the web properties that user has access to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results The maximum number of webProperty-user Links to
   * include in this response.
   * @opt_param int start-index An index of the first webProperty-user link to
   * retrieve. Use this parameter as a pagination mechanism along with the max-
   * results parameter.
   * @return Google_Service_Analytics_EntityUserLinks
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates permissions for an existing user on the given web property.
   * (webpropertyUserLinks.update)
   *
   * @param string $accountId Account ID to update the account-user link for.
   * @param string $webPropertyId Web property ID to update the account-user link
   * for.
   * @param string $linkId Link ID to update the account-user link for.
   * @param Google_Service_Analytics_EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityUserLink
   */(,,,,=()){=(,,,);=(,);(,(),);}}