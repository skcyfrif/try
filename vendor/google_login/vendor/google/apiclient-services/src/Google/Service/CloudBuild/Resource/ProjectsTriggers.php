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
 * The "triggers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbuildService = new Google_Service_CloudBuild(...);
 *   $triggers = $cloudbuildService->triggers;
 *  </code>
 */{/**
   * Creates a new `BuildTrigger`. This API is experimental. (triggers.create)
   *
   * @param string $projectId Required. ID of the project for which to configure
   * automatic builds.
   * @param Google_Service_CloudBuild_BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_BuildTrigger
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a `BuildTrigger` by its project ID and trigger ID. This API is
   * experimental. (triggers.delete)
   *
   * @param string $projectId Required. ID of the project that owns the trigger.
   * @param string $triggerId Required. ID of the `BuildTrigger` to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_CloudbuildEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns information about a `BuildTrigger`. This API is experimental.
   * (triggers.get)
   *
   * @param string $projectId Required. ID of the project that owns the trigger.
   * @param string $triggerId Required. Identifier (`id` or `name`) of the
   * `BuildTrigger` to get.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_BuildTrigger
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists existing `BuildTrigger`s. This API is experimental.
   * (triggers.listProjectsTriggers)
   *
   * @param string $projectId Required. ID of the project for which to list
   * BuildTriggers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Number of results to return in the list.
   * @opt_param string pageToken Token to provide to skip to a particular spot in
   * the list.
   * @return Google_Service_CloudBuild_ListBuildTriggersResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a `BuildTrigger` by its project ID and trigger ID. This API is
   * experimental. (triggers.patch)
   *
   * @param string $projectId Required. ID of the project that owns the trigger.
   * @param string $triggerId Required. ID of the `BuildTrigger` to update.
   * @param Google_Service_CloudBuild_BuildTrigger $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_BuildTrigger
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Runs a `BuildTrigger` at a particular source revision. (triggers.run)
   *
   * @param string $projectId Required. ID of the project.
   * @param string $triggerId Required. ID of the trigger.
   * @param Google_Service_CloudBuild_RepoSource $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * ReceiveTriggerWebhook [Experimental] is called when the API receives a
   * webhook request targeted at a specific trigger. (triggers.webhook)
   *
   * @param string $projectId Project in which the specified trigger lives
   * @param string $trigger Name of the trigger to run the payload against
   * @param Google_Service_CloudBuild_HttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string secret Secret token used for authorization if an OAuth
   * token isn't provided.
   * @return Google_Service_CloudBuild_ReceiveTriggerWebhookResponse
   */(,,,=()){=(,,);=(,);(,(),);}}