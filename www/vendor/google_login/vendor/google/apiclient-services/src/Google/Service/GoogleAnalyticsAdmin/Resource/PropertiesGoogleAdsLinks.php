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
 * The "googleAdsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsadminService = new Google_Service_GoogleAnalyticsAdmin(...);
 *   $googleAdsLinks = $analyticsadminService->googleAdsLinks;
 *  </code>
 */{/**
   * Creates a GoogleAdsLink. (googleAdsLinks.create)
   *
   * @param string $parent Required. Example format: properties/1234
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGoogleAdsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGoogleAdsLink
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a GoogleAdsLink on a property (googleAdsLinks.delete)
   *
   * @param string $name Required. Example format:
   * properties/1234/googleAdsLinks/5678
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Lists GoogleAdsLinks on a property.
   * (googleAdsLinks.listPropertiesGoogleAdsLinks)
   *
   * @param string $parent Required. Example format: properties/1234
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of resources to return. If
   * unspecified, at most 50 resources will be returned. The maximum value is 200
   * (higher values will be coerced to the maximum).
   * @opt_param string pageToken A page token, received from a previous
   * `ListGoogleAdsLinks` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListGoogleAdsLinks` must match
   * the call that provided the page token.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListGoogleAdsLinksResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a GoogleAdsLink on a property (googleAdsLinks.patch)
   *
   * @param string $name Output only. Format:
   * properties/{propertyId}/googleAdsLinks/{googleAdsLinkId} Note:
   * googleAdsLinkId is not the Google Ads customer ID.
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGoogleAdsLink $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The list of fields to be updated.
   * Omitted fields will not be updated. To replace the entire entity, use one
   * path with the string "*" to match all fields.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaGoogleAdsLink
   */(,,=()){=(,);=(,);(,(),);}}