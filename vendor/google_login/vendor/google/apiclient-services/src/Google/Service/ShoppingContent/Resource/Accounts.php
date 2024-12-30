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
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $accounts = $contentService->accounts;
 *  </code>
 */{/**
   * Returns information about the authenticated user. (accounts.authinfo)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountsAuthInfoResponse
   */(=()){=();=(,);(,(),);}/**
   * Claims the website of a Merchant Center sub-account. (accounts.claimwebsite)
   *
   * @param string $merchantId The ID of the managing account. If this parameter
   * is not the same as accountId, then this account must be a multi-client
   * account and `accountId` must be the ID of a sub-account of this account.
   * @param string $accountId The ID of the account whose website is claimed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool overwrite Only available to selected merchants. When set to
   * `True`, this flag removes any existing claim on the requested website by
   * another account and replaces it with a claim from this account.
   * @return Google_Service_ShoppingContent_AccountsClaimWebsiteResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves, inserts, updates, and deletes multiple Merchant Center
   * (sub-)accounts in a single request. (accounts.custombatch)
   *
   * @param Google_Service_ShoppingContent_AccountsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountsCustomBatchResponse
   */(,=()){=();=(,);(,(),);}/**
   * Deletes a Merchant Center sub-account. (accounts.delete)
   *
   * @param string $merchantId The ID of the managing account. This must be a
   * multi-client account, and accountId must be the ID of a sub-account of this
   * account.
   * @param string $accountId The ID of the account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Flag to delete sub-accounts with products. The default
   * value is false.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a Merchant Center account. (accounts.get)
   *
   * @param string $merchantId The ID of the managing account. If this parameter
   * is not the same as accountId, then this account must be a multi-client
   * account and `accountId` must be the ID of a sub-account of this account.
   * @param string $accountId The ID of the account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Controls which fields will be populated. Acceptable
   * values are: "merchant" and "css". The default value is "merchant".
   * @return Google_Service_ShoppingContent_Account
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a Merchant Center sub-account. (accounts.insert)
   *
   * @param string $merchantId The ID of the managing account. This must be a
   * multi-client account.
   * @param Google_Service_ShoppingContent_Account $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Account
   */(,,=()){=(,);=(,);(,(),);}/**
   * Performs an action on a link between two Merchant Center accounts, namely
   * accountId and linkedAccountId. (accounts.link)
   *
   * @param string $merchantId The ID of the managing account. If this parameter
   * is not the same as accountId, then this account must be a multi-client
   * account and `accountId` must be the ID of a sub-account of this account.
   * @param string $accountId The ID of the account that should be linked.
   * @param Google_Service_ShoppingContent_AccountsLinkRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_AccountsLinkResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists the sub-accounts in your Merchant Center account.
   * (accounts.listAccounts)
   *
   * @param string $merchantId The ID of the managing account. This must be a
   * multi-client account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string label If view is set to "css", only return accounts that
   * are assigned label with given ID.
   * @opt_param string maxResults The maximum number of accounts to return in the
   * response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param string view Controls which fields will be populated. Acceptable
   * values are: "merchant" and "css". The default value is "merchant".
   * @return Google_Service_ShoppingContent_AccountsListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of accounts linked to your Merchant Center account.
   * (accounts.listlinks)
   *
   * @param string $merchantId The ID of the managing account. If this parameter
   * is not the same as accountId, then this account must be a multi-client
   * account and `accountId` must be the ID of a sub-account of this account.
   * @param string $accountId The ID of the account for which to list links.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of links to return in the
   * response, used for pagination.
   * @opt_param string pageToken The token returned