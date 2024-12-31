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
 * The "testers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $testers = $androidpublisherService->testers;
 *  </code>
 */{/**
   * Gets testers. (testers.get)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $track The track to read from.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Testers
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Patches testers. (testers.patch)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $track The track to update.
   * @param Google_Service_AndroidPublisher_Testers $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Testers
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Updates testers. (testers.update)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $track The track to update.
   * @param Google_Service_AndroidPublisher_Testers $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Testers
   */(,,,,=()){=(,,,);=(,);(,(),);}}