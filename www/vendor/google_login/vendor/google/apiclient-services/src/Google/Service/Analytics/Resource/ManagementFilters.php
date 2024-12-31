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
 * The "filters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $filters = $analyticsService->filters;
 *  </code>
 */{/**
   * Delete a filter. (filters.delete)
   *
   * @param string $accountId Account ID to delete the filter for.
   * @param string $filterId ID of the filter to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns filters to which the user has access. (filters.get)
   *
   * @param string $accountId Account ID to retrieve filters for.
   * @param string $filterId Filter ID to retrieve filters for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */(,,=()){=(,);=(,);(,(),);}/**
   * Create a new filter. (filters.insert)
   *
   * @param string $accountId Account ID to create filter for.
   * @param Google_Service_Analytics_Filter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists all filters for an account (filters.listManagementFilters)
   *
   * @param string $accountId Account ID to retrieve filters for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results The maximum number of filters to include in this
   * response.
   * @opt_param int start-index An index of the first entity to retrieve. Use this
   * parameter as a pagination mechanism along with the max-results parameter.
   * @return Google_Service_Analytics_Filters
   */(,=()){=();=(,);(,(),);}/**
   * Updates an existing filter. This method supports patch semantics.
   * (filters.patch)
   *
   * @param string $accountId Account ID to which the filter belongs.
   * @param string $filterId ID of the filter to be updated.
   * @param Google_Service_Analytics_Filter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates an existing filter. (filters.update)
   *
   * @param string $accountId Account ID to which the filter belongs.
   * @param string $filterId ID of the filter to be updated.
   * @param Google_Service_Analytics_Filter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_Filter
   */(,,,=()){=(,,);=(,);(,(),);}}