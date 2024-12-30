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
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $prod_tt_sasportalService = new Google_Service_SASPortalTesting(...);
 *   $devices = $prod_tt_sasportalService->devices;
 *  </code>
 */{/**
   * Deletes a device. (devices.delete)
   *
   * @param string $name Required. The name of the device.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets details about a device. (devices.get)
   *
   * @param string $name Required. The name of the device.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalDevice
   */(,=()){=();=(,);(,(),);}/**
   * Moves a device under another node or customer. (devices.move)
   *
   * @param string $name Required. The name of the device to move.
   * @param Google_Service_SASPortalTesting_SasPortalMoveDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates a device. (devices.patch)
   *
   * @param string $name Output only. The resource path name.
   * @param Google_Service_SASPortalTesting_SasPortalDevice $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Fields to be updated.
   * @return Google_Service_SASPortalTesting_SasPortalDevice
   */(,,=()){=(,);=(,);(,(),);}/**
   * Signs a device. (devices.signDevice)
   *
   * @param string $name Output only. The resource path name.
   * @param Google_Service_SASPortalTesting_SasPortalSignDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates a signed device. (devices.updateSigned)
   *
   * @param string $name Required. The name of the device to update.
   * @param Google_Service_SASPortalTesting_SasPortalUpdateSignedDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalDevice
   */(,,=()){=(,);=(,);(,(),);}}