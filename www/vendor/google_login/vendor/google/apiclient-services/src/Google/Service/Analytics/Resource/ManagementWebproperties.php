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
 * The "webproperties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webproperties = $analyticsService->webproperties;
 *  </code>
 */{/**
   * Gets a web property to which the user has access. (webproperties.get)
   *
   * @param string $accountId Account ID to retrieve the web property for.
   * @param string $webPropertyId ID to retrieve the web property for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Webproperty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Create a new property if the account has fewer than 20 properties. Web
   * properties are visible in the Google Analytics interface only if they have at
   * least one profile. (webproperties.insert)
   *
   * @param string $accountId Account ID to create the web property for.
   * @param Google_Service_Analytics_Webproperty $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Webproperty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists web properties to which the user has access.
   * (webproperties.listManagementWebproperties)
   *
   * @param string $accountId Account ID to retrieve web properties for. Can
   * either be a specific account ID or '~all', which refers to all the accounts
   * that user has access to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results The maximum number of web properties to include in
   * this response.
   * @opt_param int start-index An index of the first entity to retrieve. Use this
   * parameter as a pagination mechanism along with the max-results parameter.
   * @return Google_Service_Analytics_Webproperties
   */(,=()){=();=(,);(,(),);}/**
   * Updates an existing web property. This method supports patch semantics.
   * (webproperties.patch)
   *
   * @param string $accountId Account ID to which the web property belongs
   * @param string $webPropertyId Web property ID
   * @param Google_Service_Analytics_Webproperty $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Webproperty
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates an existing web property. (webproperties.update)
   *
   * @param string $accountId Account ID to which the web property belongs
   * @param string $webPropertyId Web property ID
   * @param Google_Service_Analytics_Webproperty $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Webproperty
   */(,,,=()){=(,,);=(,);(,(),);}}