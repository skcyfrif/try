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
 *   $vaultService = new Google_Service_Vault(...);
 *   $accounts = $vaultService->accounts;
 *  </code>
 */{/**
   * Adds a HeldAccount to a hold. Accounts can only be added to a hold that has
   * no held_org_unit set. Attempting to add an account to an OU-based hold will
   * result in an error. (accounts.create)
   *
   * @param string $matterId The matter ID.
   * @param string $holdId The hold ID.
   * @param Google_Service_Vault_HeldAccount $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_HeldAccount
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Removes a HeldAccount from a hold. If this request leaves the hold with no
   * held accounts, the hold will not apply to any accounts. (accounts.delete)
   *
   * @param string $matterId The matter ID.
   * @param string $holdId The hold ID.
   * @param string $accountId The ID of the account to remove from the hold.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_VaultEmpty
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists HeldAccounts for a hold. This will only list individually specified
   * held accounts. If the hold is on an OU, then use Admin SDK to enumerate its
   * members. (accounts.listMattersHoldsAccounts)
   *
   * @param string $matterId The matter ID.
   * @param string $holdId The hold ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_ListHeldAccountsResponse
   */(,,=()){=(,);=(,);(,(),);}}