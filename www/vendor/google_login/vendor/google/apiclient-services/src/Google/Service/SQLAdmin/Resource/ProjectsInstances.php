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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $instances = $sqladminService->instances;
 *  </code>
 */{/**
   * Reschedules the maintenance on the given instance.
   * (instances.rescheduleMaintenance)
   *
   * @param string $project ID of the project that contains the instance.
   * @param string $instance Cloud SQL instance ID. This does not include the
   * project ID.
   * @param Google_Service_SQLAdmin_SqlInstancesRescheduleMaintenanceRequestBody $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SQLAdmin_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Start External primary instance migration. (instances.startExternalSync)
   *
   * @param string $project ID of the project that contains the instance.
   * @param string $instance Cloud SQL instance ID. This does not include the
   * project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool skipVerification Whether to skip the verification step
   * (VESS).
   * @opt_param string syncMode External sync mode.
   * @return Google_Service_SQLAdmin_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Verify External primary instance external sync settings.
   * (instances.verifyExternalSyncSettings)
   *
   * @param string $project Project ID of the project that contains the instance.
   * @param string $instance Cloud SQL instance ID. This does not include the
   * project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string syncMode External sync mode
   * @opt_param bool verifyConnectionOnly Flag to enable verifying connection only
   * @return Google_Service_SQLAdmin_SqlInstancesVerifyExternalSyncSettingsResponse
   */(,,=()){=(,);=(,);(,(),);}}