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
 * The "proposals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $proposals = $adexchangebuyerService->proposals;
 *  </code>
 */{/**
   * Get a proposal given its id (proposals.get)
   *
   * @param string $proposalId Id of the proposal to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Proposal
   */(,=()){=();=(,);(,(),);}/**
   * Create the given list of proposals (proposals.insert)
   *
   * @param Google_Service_AdExchangeBuyer_CreateOrdersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_CreateOrdersResponse
   */(,=()){=();=(,);(,(),);}/**
   * Update the given proposal. This method supports patch semantics.
   * (proposals.patch)
   *
   * @param string $proposalId The proposal id to update.
   * @param string $revisionNumber The last known revision number to update. If
   * the head revision in the marketplace database has since changed, an error
   * will be thrown. The caller should then fetch the latest proposal at head
   * revision and retry the update at that revision.
   * @param string $updateAction The proposed action to take on the proposal. This
   * field is required and it must be set when updating a proposal.
   * @param Google_Service_AdExchangeBuyer_Proposal $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Proposal
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Search for proposals using pql query (proposals.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pqlQuery Query string to retrieve specific proposals.
   * @return Google_Service_AdExchangeBuyer_GetOrdersResponse
   */(=()){=();=(,);(,(),);}/**
   * Update the given proposal to indicate that setup has been completed.
   * (proposals.setupcomplete)
   *
   * @param string $proposalId The proposal id for which the setup is complete
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Update the given proposal (proposals.update)
   *
   * @param string $proposalId The proposal id to update.
   * @param string $revisionNumber The last known revision number to update. If
   * the head revision in the marketplace database has since changed, an error
   * will be thrown. The caller should then fetch the latest proposal at head
   * revision and retry the update at that revision.
   * @param string $updateAction The proposed action to take on the proposal. This
   * field is required and it must be set when updating a proposal.
   * @param Google_Service_AdExchangeBuyer_Proposal $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_Proposal
   */(,,,,=()){=(,,,);=(,);(,(),);}}