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
 * The "transitionRouteGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $transitionRouteGroups = $dialogflowService->transitionRouteGroups;
 *  </code>
 */{/**
   * Creates an TransitionRouteGroup in the specified flow.
   * (transitionRouteGroups.create)
   *
   * @param string $parent Required. The flow to create an TransitionRouteGroup
   * for. Format: `projects//locations//agents//flows/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language to list transition route groups
   * for. The field `messages` in TransitionRoute is language dependent. If not
   * specified, the agent's default language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroup
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the specified TransitionRouteGroup. (transitionRouteGroups.delete)
   *
   * @param string $name Required. The name of the TransitionRouteGroup to delete.
   * Format: `projects//locations//agents//flows//transitionRouteGroups/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force This field has no effect for transition route group
   * that no page is using. If the transition route group is referenced by any
   * page: * If `force` is set to false, an error will be returned with message
   * indicating pages that reference the transition route group. * If `force` is
   * set to true, Dialogflow will remove the transition route group, as well as
   * any reference to it.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified TransitionRouteGroup. (transitionRouteGroups.get)
   *
   * @param string $name Required. The name of the TransitionRouteGroup. Format:
   * `projects//locations//agents//flows//transitionRouteGroups/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language to list transition route groups
   * for. The field `messages` in TransitionRoute is language dependent. If not
   * specified, the agent's default language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroup
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of all transition route groups in the specified flow.
   * (transitionRouteGroups.listProjectsLocationsAgentsFlowsTransitionRouteGroups)
   *
   * @param string $parent Required. The flow to list all transition route groups
   * for. Format: `projects//locations//agents//flows/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language to list transition route groups
   * for. The field `messages` in TransitionRoute is language dependent. If not
   * specified, the agent's default language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @opt_param int pageSize The maximum number of items to return in a single
   * page. By default 100 and at most 1000.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListTransitionRouteGroupsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified TransitionRouteGroup. (transitionRouteGroups.patch)
   *
   * @param string $name The unique identifier of the transition route group.
   * TransitionRouteGroups.CreateTransitionRouteGroup populates the name
   * automatically. Format:
   * `projects//locations//agents//flows//transitionRouteGroups/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language to list transition route groups
   * for. The field `messages` in TransitionRoute is language dependent. If not
   * specified, the agent's default language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @opt_param string updateMask The mask to control which fields get updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TransitionRouteGroup
   */(,,=()){=(,);=(,);(,(),);}}