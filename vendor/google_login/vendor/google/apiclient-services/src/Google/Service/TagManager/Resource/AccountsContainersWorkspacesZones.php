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
 * The "zones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $zones = $tagmanagerService->zones;
 *  </code>
 */{/**
   * Creates a GTM Zone. (zones.create)
   *
   * @param string $parent GTM Workspace's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
   * @param Google_Service_TagManager_Zone $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Zone
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a GTM Zone. (zones.delete)
   *
   * @param string $path GTM Zone's API relative path. Example: accounts/{account_
   * id}/containers/{container_id}/workspaces/{workspace_id}/zones/{zone_id}
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Gets a GTM Zone. (zones.get)
   *
   * @param string $path GTM Zone's API relative path. Example: accounts/{account_
   * id}/containers/{container_id}/workspaces/{workspace_id}/zones/{zone_id}
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Zone
   */(,=()){=();=(,);(,(),);}/**
   * Lists all GTM Zones of a GTM container workspace.
   * (zones.listAccountsContainersWorkspacesZones)
   *
   * @param string $parent GTM Workspace's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @return Google_Service_TagManager_ListZonesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Reverts changes to a GTM Zone in a GTM Workspace. (zones.revert)
   *
   * @param string $path GTM Zone's API relative path. Example: accounts/{account_
   * id}/containers/{container_id}/workspaces/{workspace_id}/zones/{zone_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fingerprint When provided, this fingerprint must match the
   * fingerprint of the zone in storage.
   * @return Google_Service_TagManager_RevertZoneResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a GTM Zone. (zones.update)
   *
   * @param string $path GTM Zone's API relative path. Example: accounts/{account_
   * id}/containers/{container_id}/workspaces/{workspace_id}/zones/{zone_id}
   * @param Google_Service_TagManager_Zone $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fingerprint When provided, this fingerprint must match the
   * fingerprint of the zone in storage.
   * @return Google_Service_TagManager_Zone
   */(,,=()){=(,);=(,);(,(),);}}