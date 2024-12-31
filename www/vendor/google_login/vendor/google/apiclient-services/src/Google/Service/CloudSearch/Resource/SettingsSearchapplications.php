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
 * The "searchapplications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudsearchService = new Google_Service_CloudSearch(...);
 *   $searchapplications = $cloudsearchService->searchapplications;
 *  </code>
 */{/**
   * Creates a search application. **Note:** This API requires an admin account to
   * execute. (searchapplications.create)
   *
   * @param Google_Service_CloudSearch_SearchApplication $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSearch_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Deletes a search application. **Note:** This API requires an admin account to
   * execute. (searchapplications.delete)
   *
   * @param string $name The name of the search application to be deleted. Format:
   * applications/{application_id}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool debugOptions.enableDebugging If you are asked by Google to
   * help with debugging, set this field. Otherwise, ignore this field.
   * @return Google_Service_CloudSearch_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Gets the specified search application. **Note:** This API requires an admin
   * account to execute. (searchapplications.get)
   *
   * @param string $name Name of the search application. Format:
   * searchapplications/{application_id}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool debugOptions.enableDebugging If you are asked by Google to
   * help with debugging, set this field. Otherwise, ignore this field.
   * @return Google_Service_CloudSearch_SearchApplication
   */(,=()){=();=(,);(,(),);}/**
   * Lists all search applications. **Note:** This API requires an admin account
   * to execute. (searchapplications.listSettingsSearchapplications)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool debugOptions.enableDebugging If you are asked by Google to
   * help with debugging, set this field. Otherwise, ignore this field.
   * @opt_param int pageSize The maximum number of items to return.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous List request, if any. The default value is 10
   * @return Google_Service_CloudSearch_ListSearchApplicationsResponse
   */(=()){=();=(,);(,(),);}/**
   * Resets a search application to default settings. This will return an empty
   * response. **Note:** This API requires an admin account to execute.
   * (searchapplications.reset)
   *
   * @param string $name The name of the search application to be reset. Format:
   * applications/{application_id}.
   * @param Google_Service_CloudSearch_ResetSearchApplicationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSearch_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates a search application. **Note:** This API requires an admin account to
   * execute. (searchapplications.update)
   *
   * @param string $name Name of the Search Application. Format:
   * searchapplications/{application_id}.
   * @param Google_Service_CloudSearch_SearchApplication $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSearch_Operation
   */(,,=()){=(,);=(,);(,(),);}}