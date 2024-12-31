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
 * The "environments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $environments = $tagmanagerService->environments;
 *  </code>
 */{/**
   * Creates a GTM Environment. (environments.create)
   *
   * @param string $parent GTM Container's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Environment
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a GTM Environment. (environments.delete)
   *
   * @param string $path GTM Environment's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/environments/{environment_id}
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Gets a GTM Environment. (environments.get)
   *
   * @param string $path GTM Environment's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/environments/{environment_id}
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Environment
   */(,=()){=();=(,);(,(),);}/**
   * Lists all GTM Environments of a GTM Container.
   * (environments.listAccountsContainersEnvironments)
   *
   * @param string $parent GTM Container's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @return Google_Service_TagManager_ListEnvironmentsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Re-generates the authorization code for a GTM Environment.
   * (environments.reauthorize)
   *
   * @param string $path GTM Environment's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/environments/{environment_id}
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Environment
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates a GTM Environment. (environments.update)
   *
   * @param string $path GTM Environment's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/environments/{environment_id}
   * @param Google_Service_TagManager_Environment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fingerprint When provided, this fingerprint must match the
   * fingerprint of the environment in storage.
   * @return Google_Service_TagManager_Environment
   */(,,=()){=(,);=(,);(,(),);}}