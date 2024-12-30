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
 * The "managedconfigurationsfordevice" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $managedconfigurationsfordevice = $androidenterpriseService->managedconfigurationsfordevice;
 *  </code>
 */{/**
   * Removes a per-device managed configuration for an app for the specified
   * device. (managedconfigurationsfordevice.delete)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param string $managedConfigurationForDeviceId The ID of the managed
   * configuration (a product ID), e.g. "app:com.google.android.gm".
   * @param array $optParams Optional parameters.
   */(,,,,=()){=(,,,);=(,);(,());}/**
   * Retrieves details of a per-device managed configuration.
   * (managedconfigurationsfordevice.get)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param string $managedConfigurationForDeviceId The ID of the managed
   * configuration (a product ID), e.g. "app:com.google.android.gm".
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfiguration
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Lists all the per-device managed configurations for the specified device.
   * Only the ID is set.
   * (managedconfigurationsfordevice.listManagedconfigurationsfordevice)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfigurationsForDeviceListResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Adds or updates a per-device managed configuration for an app for the
   * specified device. (managedconfigurationsfordevice.update)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param string $managedConfigurationForDeviceId The ID of the managed
   * configuration (a product ID), e.g. "app:com.google.android.gm".
   * @param Google_Service_AndroidEnterprise_ManagedConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ManagedConfiguration
   */(,,,,,=()){=(,,,,);=(,);(,(),);}}