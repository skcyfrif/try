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
 * The "remarketingAudience" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $remarketingAudience = $analyticsService->remarketingAudience;
 *  </code>
 */{/**
   * Delete a remarketing audience. (remarketingAudience.delete)
   *
   * @param string $accountId Account ID to which the remarketing audience
   * belongs.
   * @param string $webPropertyId Web property ID to which the remarketing
   * audience belongs.
   * @param string $remarketingAudienceId The ID of the remarketing audience to
   * delete.
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Gets a remarketing audience to which the user has access.
   * (remarketingAudience.get)
   *
   * @param string $accountId The account ID of the remarketing audience to
   * retrieve.
   * @param string $webPropertyId The web property ID of the remarketing audience
   * to retrieve.
   * @param string $remarketingAudienceId The ID of the remarketing audience to
   * retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Creates a new remarketing audience. (remarketingAudience.insert)
   *
   * @param string $accountId The account ID for which to create the remarketing
   * audience.
   * @param string $webPropertyId Web property ID for which to create the
   * remarketing audience.
   * @param Google_Service_Analytics_RemarketingAudience $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists remarketing audiences to which the user has access.
   * (remarketingAudience.listManagementRemarketingAudience)
   *
   * @param string $accountId The account ID of the remarketing audiences to
   * retrieve.
   * @param string $webPropertyId The web property ID of the remarketing audiences
   * to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results The maximum number of remarketing audiences to
   * include in this response.
   * @opt_param int start-index An index of the first entity to retrieve. Use this
   * parameter as a pagination mechanism along with the max-results parameter.
   * @opt_param string type
   * @return Google_Service_Analytics_RemarketingAudiences
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an existing remarketing audience. This method supports patch
   * semantics. (remarketingAudience.patch)
   *
   * @param string $accountId The account ID of the remarketing audience to
   * update.
   * @param string $webPropertyId The web property ID of the remarketing audience
   * to update.
   * @param string $remarketingAudienceId The ID of the remarketing audience to
   * update.
   * @param Google_Service_Analytics_RemarketingAudience $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Updates an existing remarketing audience. (remarketingAudience.update)
   *
   * @param string $accountId The account ID of the remarketing audience to
   * update.
   * @param string $webPropertyId The web property ID of the remarketing audience
   * to update.
   * @param string $remarketingAudienceId The ID of the remarketing audience to
   * update.
   * @param Google_Service_Analytics_RemarketingAudience $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_RemarketingAudience
   */(,,,,=()){=(,,,);=(,);(,(),);}}