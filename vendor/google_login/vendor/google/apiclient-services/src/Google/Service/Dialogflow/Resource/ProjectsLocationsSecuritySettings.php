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
 * The "securitySettings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $securitySettings = $dialogflowService->securitySettings;
 *  </code>
 */{/**
   * Create security settings in the specified location. (securitySettings.create)
   *
   * @param string $parent Required. The location to create an SecuritySettings
   * for. Format: `projects//locations/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettings $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettings
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the specified SecuritySettings. (securitySettings.delete)
   *
   * @param string $name Required. The name of the SecuritySettings to delete.
   * Format: `projects//locations//securitySettings/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified SecuritySettings. The returned settings may be stale
   * by up to 1 minute. (securitySettings.get)
   *
   * @param string $name Required. Resource name of the settings. Format:
   * `projects//locations//securitySettings/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettings
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of all security settings in the specified location.
   * (securitySettings.listProjectsLocationsSecuritySettings)
   *
   * @param string $parent Required. The location to list all security settings
   * for. Format: `projects//locations/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of items to return in a single
   * page. By default 20 and at most 100.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListSecuritySettingsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified SecuritySettings. (securitySettings.patch)
   *
   * @param string $name Required. Resource name of the settings. Format:
   * `projects//locations//securitySettings/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettings $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to control which fields get
   * updated. If the mask is not present, all fields will be updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3SecuritySettings
   */(,,=()){=(,);=(,);(,(),);}}