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
 * The "marketplacedeals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $marketplacedeals = $adexchangebuyerService->marketplacedeals;
 *  </code>
 */{/**
   * Delete the specified deals from the proposal (marketplacedeals.delete)
   *
   * @param string $proposalId The proposalId to delete deals from.
   * @param Google_Service_AdExchangeBuyer_DeleteOrderDealsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_DeleteOrderDealsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Add new deals for the specified proposal (marketplacedeals.insert)
   *
   * @param string $proposalId proposalId for which deals need to be added.
   * @param Google_Service_AdExchangeBuyer_AddOrderDealsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_AddOrderDealsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * List all the deals for a given proposal
   * (marketplacedeals.listMarketplacedeals)
   *
   * @param string $proposalId The proposalId to get deals for. To search across
   * all proposals specify order_id = '-' as part of the URL.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pqlQuery Query string to retrieve specific deals.
   * @return Google_Service_AdExchangeBuyer_GetOrderDealsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Replaces all the deals in the proposal with the passed in deals
   * (marketplacedeals.update)
   *
   * @param string $proposalId The proposalId to edit deals on.
   * @param Google_Service_AdExchangeBuyer_EditAllOrderDealsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_EditAllOrderDealsResponse
   */(,,=()){=(,);=(,);(,(),);}}