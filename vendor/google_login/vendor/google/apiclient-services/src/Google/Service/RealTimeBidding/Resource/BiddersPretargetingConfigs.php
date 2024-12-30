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
 * The "pretargetingConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $realtimebiddingService = new Google_Service_RealTimeBidding(...);
 *   $pretargetingConfigs = $realtimebiddingService->pretargetingConfigs;
 *  </code>
 */{/**
   * Activates a pretargeting configuration. (pretargetingConfigs.activate)
   *
   * @param string $name Required. The name of the pretargeting configuration.
   * Format: bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_ActivatePretargetingConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds targeted apps to the pretargeting configuration.
   * (pretargetingConfigs.addTargetedApps)
   *
   * @param string $pretargetingConfig Required. The name of the pretargeting
   * configuration. Format:
   * bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_AddTargetedAppsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds targeted publishers to the pretargeting config.
   * (pretargetingConfigs.addTargetedPublishers)
   *
   * @param string $pretargetingConfig Required. The name of the pretargeting
   * configuration. Format:
   * bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_AddTargetedPublishersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds targeted sites to the pretargeting configuration.
   * (pretargetingConfigs.addTargetedSites)
   *
   * @param string $pretargetingConfig Required. The name of the pretargeting
   * configuration. Format:
   * bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_AddTargetedSitesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a pretargeting configuration. A pretargeting configuration's state
   * (PretargetingConfig.state) is active upon creation, and it will start to
   * affect traffic shortly after. A bidder may create a maximum of 10
   * pretargeting configurations. Attempts to exceed this maximum results in a 400
   * bad request error. (pretargetingConfigs.create)
   *
   * @param string $parent Required. Name of the bidder to create the pretargeting
   * configuration for. Format: bidders/{bidderAccountId}
   * @param Google_Service_RealTimeBidding_PretargetingConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a pretargeting configuration. (pretargetingConfigs.delete)
   *
   * @param string $name Required. The name of the pretargeting configuration to
   * delete. Format: bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_RealtimebiddingEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a pretargeting configuration. (pretargetingConfigs.get)
   *
   * @param string $name Required. Name of the pretargeting configuration to get.
   * Format: bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,=()){=();=(,);(,(),);}/**
   * Lists all pretargeting configurations for a single bidder.
   * (pretargetingConfigs.listBiddersPretargetingConfigs)
   *
   * @param string $parent Required. Name of the bidder whose pretargeting
   * configurations will be listed. Format: bidders/{bidderAccountId}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of pretargeting configurations to
   * return. If unspecified, at most 10 pretargeting configurations will be
   * returned. The maximum value is 100; values above 100 will be coerced to 100.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return. This value is received from a previous
   * `ListPretargetingConfigs` call in
   * ListPretargetingConfigsResponse.nextPageToken.
   * @return Google_Service_RealTimeBidding_ListPretargetingConfigsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a pretargeting configuration. (pretargetingConfigs.patch)
   *
   * @param string $name Output only. Name of the pretargeting configuration that
   * must follow the pattern
   * `bidders/{bidder_account_id}/pretargetingConfigs/{config_id}`
   * @param Google_Service_RealTimeBidding_PretargetingConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Field mask to use for partial in-place updates.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Removes targeted apps from the pretargeting configuration.
   * (pretargetingConfigs.removeTargetedApps)
   *
   * @param string $pretargetingConfig Required. The name of the pretargeting
   * configuration. Format:
   * bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_RemoveTargetedAppsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Removes targeted publishers from the pretargeting config.
   * (pretargetingConfigs.removeTargetedPublishers)
   *
   * @param string $pretargetingConfig Required. The name of the pretargeting
   * configuration. Format:
   * bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_RemoveTargetedPublishersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Removes targeted sites from the pretargeting configuration.
   * (pretargetingConfigs.removeTargetedSites)
   *
   * @param string $pretargetingConfig Required. The name of the pretargeting
   * configuration. Format:
   * bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_RemoveTargetedSitesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Suspends a pretargeting configuration. (pretargetingConfigs.suspend)
   *
   * @param string $name Required. The name of the pretargeting configuration.
   * Format: bidders/{bidderAccountId}/pretargetingConfig/{configId}
   * @param Google_Service_RealTimeBidding_SuspendPretargetingConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}}