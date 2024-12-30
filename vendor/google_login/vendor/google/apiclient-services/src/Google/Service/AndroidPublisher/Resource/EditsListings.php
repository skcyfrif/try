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
 * The "listings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $listings = $androidpublisherService->listings;
 *  </code>
 */{/**
   * Deletes a localized store listing. (listings.delete)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German).
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Deletes all store listings. (listings.deleteall)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Gets a localized store listing. (listings.get)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German).
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Listing
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists all localized store listings. (listings.listEditsListings)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ListingsListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Patches a localized store listing. (listings.patch)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German).
   * @param Google_Service_AndroidPublisher_Listing $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Listing
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Creates or updates a localized store listing. (listings.update)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German).
   * @param Google_Service_AndroidPublisher_Listing $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Listing
   */(,,,,=()){=(,,,);=(,);(,(),);}}