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
 * The "creatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $realtimebiddingService = new Google_Service_RealTimeBidding(...);
 *   $creatives = $realtimebiddingService->creatives;
 *  </code>
 */{/**
   * Lists creatives. (creatives.listBiddersCreatives)
   *
   * @param string $parent Required. Name of the parent buyer that owns the
   * creatives. The pattern for this resource is either `buyers/{buyerAccountId}`
   * or `bidders/{bidderAccountId}`. For `buyers/{buyerAccountId}`, the
   * `buyerAccountId` can be one of the following: 1. The ID of the buyer that is
   * accessing their own creatives. 2. The ID of the child seat buyer under a
   * bidder account. So for listing creatives pertaining to the child seat buyer
   * (`456`) under bidder account (`123`), you would use the pattern:
   * `buyers/456`. 3. The ID of the bidder itself. So for listing creatives
   * pertaining to bidder (`123`), you would use `buyers/123`. If you want to
   * access all creatives pertaining to both the bidder and all of its child seat
   * accounts, you would use `bidders/{bidderAccountId}`, e.g., for all creatives
   * pertaining to bidder (`123`), use `bidders/123`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Query string to filter creatives. If no filter is
   * specified, all active creatives will be returned. Example: 'accountId=12345
   * AND (dealsStatus:DISAPPROVED AND disapprovalReason:UNACCEPTABLE_CONTENT) OR
   * declaredAttributes:IS_COOKIE_TARGETED'
   * @opt_param int pageSize Requested page size. The server may return fewer
   * creatives than requested (due to timeout constraint) even if more are
   * available via another call. If unspecified, server will pick an appropriate
   * default. Acceptable values are 1 to 1000, inclusive.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return. Typically, this is the value of
   * ListCreativesResponse.nextPageToken returned from the previous call to the
   * 'ListCreatives' method.
   * @opt_param string view Controls the amount of information included in the
   * response. By default only creativeServingDecision is included. To retrieve
   * the entire creative resource (including the declared fields and the creative
   * content) specify the view as "FULL".
   * @return Google_Service_RealTimeBidding_ListCreativesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Watches all creatives pertaining to a bidder. It is sufficient to invoke this
   * endpoint once per bidder. A Pub/Sub topic will be created and notifications
   * will be pushed to the topic when any of the bidder's creatives change status.
   * All of the bidder's service accounts will have access to read from the topic.
   * Subsequent invocations of this method will return the existing Pub/Sub
   * configuration. (creatives.watch)
   *
   * @param string $parent Required. To watch all creatives pertaining to the
   * bidder and all its child seat accounts, the bidder must follow the pattern
   * `bidders/{bidderAccountId}`.
   * @param Google_Service_RealTimeBidding_WatchCreativesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_WatchCreativesResponse
   */(,,=()){=(,);=(,);(,(),);}}