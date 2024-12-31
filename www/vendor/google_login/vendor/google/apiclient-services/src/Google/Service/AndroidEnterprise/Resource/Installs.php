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
 * The "installs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $installs = $androidenterpriseService->installs;
 *  </code>
 */{/**
   * Requests to remove an app from a device. A call to get or list will still
   * show the app as installed on the device until it is actually removed.
   * (installs.delete)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param string $installId The ID of the product represented by the install,
   * e.g. "app:com.google.android.gm".
   * @param array $optParams Optional parameters.
   */(,,,,=()){=(,,,);=(,);(,());}/**
   * Retrieves details of an installation of an app on a device. (installs.get)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param string $installId The ID of the product represented by the install,
   * e.g. "app:com.google.android.gm".
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Install
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Retrieves the details of all apps installed on the specified device.
   * (installs.listInstalls)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_InstallsListResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Requests to install the latest version of an app to a device. If the app is
   * already installed, then it is updated to the latest version if necessary.
   * (installs.update)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The Android ID of the device.
   * @param string $installId The ID of the product represented by the install,
   * e.g. "app:com.google.android.gm".
   * @param Google_Service_AndroidEnterprise_Install $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Install
   */(,,,,,=()){=(,,,,);=(,);(,(),);}}