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
 * The "features" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $features = $adminService->features;
 *  </code>
 */{/**
   * Deletes a feature. (features.delete)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $featureKey The unique ID of the feature to delete.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a feature. (features.get)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $featureKey The unique ID of the feature to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Feature
   */(,,=()){=(,);=(,);(,(),);}/**
   * Inserts a feature. (features.insert)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param Google_Service_Directory_Feature $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Feature
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a list of features for an account. (features.listResourcesFeatures)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string pageToken Token to specify the next page in the list.
   * @return Google_Service_Directory_Features
   */(,=()){=();=(,);(,(),);}/**
   * Patches a feature via Apiary Patch Orchestration. (features.patch)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $featureKey The unique ID of the feature to update.
   * @param Google_Service_Directory_Feature $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Feature
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Renames a feature. (features.rename)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $oldName The unique ID of the feature to rename.
   * @param Google_Service_Directory_FeatureRename $postBody
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Updates a feature. (features.update)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $featureKey The unique ID of the feature to update.
   * @param Google_Service_Directory_Feature $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Feature
   */(,,,=()){=(,,);=(,);(,(),);}}