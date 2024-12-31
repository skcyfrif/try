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
 * The "shippingsettings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $shippingsettings = $contentService->shippingsettings;
 *  </code>
 */{/**
   * Retrieves and updates the shipping settings of multiple accounts in a single
   * request. (shippingsettings.custombatch)
   *
   * @param Google_Service_ShoppingContent_ShippingsettingsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingsettingsCustomBatchResponse
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the shipping settings of the account. (shippingsettings.get)
   *
   * @param string $merchantId The ID of the managing account. If this parameter
   * is not the same as accountId, then this account must be a multi-client
   * account and `accountId` must be the ID of a sub-account of this account.
   * @param string $accountId The ID of the account for which to get/update
   * shipping settings.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingSettings
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves supported carriers and carrier services for an account.
   * (shippingsettings.getsupportedcarriers)
   *
   * @param string $merchantId The ID of the account for which to retrieve the
   * supported carriers.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingsettingsGetSupportedCarriersResponse
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves supported holidays for an account.
   * (shippingsettings.getsupportedholidays)
   *
   * @param string $merchantId The ID of the account for which to retrieve the
   * supported holidays.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingsettingsGetSupportedHolidaysResponse
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves supported pickup services for an account.
   * (shippingsettings.getsupportedpickupservices)
   *
   * @param string $merchantId The ID of the account for which to retrieve the
   * supported pickup services.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingsettingsGetSupportedPickupServicesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Lists the shipping settings of the sub-accounts in your Merchant Center
   * account. (shippingsettings.listShippingsettings)
   *
   * @param string $merchantId The ID of the managing account. This must be a
   * multi-client account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of shipping settings to
   * return in the response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_ShippingsettingsListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the shipping settings of the account. Any fields that are not
   * provided are deleted from the resource. (shippingsettings.update)
   *
   * @param string $merchantId The ID of the managing account. If this parameter
   * is not the same as accountId, then this account must be a multi-client
   * account and `accountId` must be the ID of a sub-account of this account.
   * @param string $accountId The ID of the account for which to get/update
   * shipping settings.
   * @param Google_Service_ShoppingContent_ShippingSettings $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ShippingSettings
   */(,,,=()){=(,,);=(,);(,(),);}}