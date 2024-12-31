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
 * The "keyvaluemaps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $keyvaluemaps = $apigeeService->keyvaluemaps;
 *  </code>
 */{/**
   * Creates a key value map in an api proxy. (keyvaluemaps.create)
   *
   * @param string $parent Required. The name of the environment in which to
   * create the key value map. Must be of the form
   * `organizations/{organization}/apis/{api}`.
   * @param Google_Service_Apigee_GoogleCloudApigeeV1KeyValueMap $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1KeyValueMap
   */(,,=()){=(,);=(,);(,(),);}/**
   * Delete a key value map in an api proxy. (keyvaluemaps.delete)
   *
   * @param string $name Required. The name of the key value map. Must be of the
   * form `organizations/{organization}/apis/{api}/keyvaluemaps/{keyvaluemap}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1KeyValueMap
   */(,=()){=();=(,);(,(),);}}