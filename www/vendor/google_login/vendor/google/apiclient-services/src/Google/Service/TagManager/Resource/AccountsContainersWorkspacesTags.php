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
 * The "tags" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $tags = $tagmanagerService->tags;
 *  </code>
 */{/**
   * Creates a GTM Tag. (tags.create)
   *
   * @param string $parent GTM Workspace's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
   * @param Google_Service_TagManager_Tag $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Tag
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a GTM Tag. (tags.delete)
   *
   * @param string $path GTM Tag's API relative path. Example: accounts/{account_i
   * d}/containers/{container_id}/workspaces/{workspace_id}/tags/{tag_id}
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Gets a GTM Tag. (tags.get)
   *
   * @param string $path GTM Tag's API relative path. Example: accounts/{account_i
   * d}/containers/{container_id}/workspaces/{workspace_id}/tags/{tag_id}
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_Tag
   */(,=()){=();=(,);(,(),);}/**
   * Lists all GTM Tags of a Container.
   * (tags.listAccountsContainersWorkspacesTags)
   *
   * @param string $parent GTM Workspace's API relative path. Example:
   * accounts/{account_id}/containers/{container_id}/workspaces/{workspace_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @return Google_Service_TagManager_ListTagsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Reverts changes to a GTM Tag in a GTM Workspace. (tags.revert)
   *
   * @param string $path GTM Tag's API relative path. Example: accounts/{account_i
   * d}/containers/{container_id}/workspaces/{workspace_id}/tags/{tag_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fingerprint When provided, this fingerprint must match the
   * fingerprint of thetag in storage.
   * @return Google_Service_TagManager_RevertTagResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a GTM Tag. (tags.update)
   *
   * @param string $path GTM Tag's API relative path. Example: accounts/{account_i
   * d}/containers/{container_id}/workspaces/{workspace_id}/tags/{tag_id}
   * @param Google_Service_TagManager_Tag $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string fingerprint When provided, this fingerprint must match the
   * fingerprint of the tag in storage.
   * @return Google_Service_TagManager_Tag
   */(,,=()){=(,);=(,);(,(),);}}