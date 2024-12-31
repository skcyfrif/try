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
 * The "preferreddeals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangesellerService = new Google_Service_AdExchangeSeller(...);
 *   $preferreddeals = $adexchangesellerService->preferreddeals;
 *  </code>
 */{/**
   * Get information about the selected Ad Exchange Preferred Deal.
   * (preferreddeals.get)
   *
   * @param string $accountId Account owning the deal.
   * @param string $dealId Preferred deal to get information about.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeSeller_PreferredDeal
   */(,,=()){=(,);=(,);(,(),);}/**
   * List the preferred deals for this Ad Exchange account.
   * (preferreddeals.listAccountsPreferreddeals)
   *
   * @param string $accountId Account owning the deals.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeSeller_PreferredDeals
   */(,=()){=();=(,);(,(),);}}