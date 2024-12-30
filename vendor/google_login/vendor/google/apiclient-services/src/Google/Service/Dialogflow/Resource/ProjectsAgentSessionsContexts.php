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
 * The "contexts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $contexts = $dialogflowService->contexts;
 *  </code>
 */{/**
   * Creates a context. If the specified context already exists, overrides the
   * context. (contexts.create)
   *
   * @param string $parent Required. The session to create a context for. Format:
   * `projects//agent/sessions/` or
   * `projects//agent/environments//users//sessions/`. If `Environment ID` is not
   * specified, we assume default 'draft' environment. If `User ID` is not
   * specified, we assume default '-' user.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2Context $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Context
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the specified context. (contexts.delete)
   *
   * @param string $name Required. The name of the context to delete. Format:
   * `projects//agent/sessions//contexts/` or
   * `projects//agent/environments//users//sessions//contexts/`. If `Environment
   * ID` is not specified, we assume default 'draft' environment. If `User ID` is
   * not specified, we assume default '-' user.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified context. (contexts.get)
   *
   * @param string $name Required. The name of the context. Format:
   * `projects//agent/sessions//contexts/` or
   * `projects//agent/environments//users//sessions//contexts/`. If `Environment
   * ID` is not specified, we assume default 'draft' environment. If `User ID` is
   * not specified, we assume default '-' user.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Context
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of all contexts in the specified session.
   * (contexts.listProjectsAgentSessionsContexts)
   *
   * @param string $parent Required. The session to list all contexts from.
   * Format: `projects//agent/sessions/` or
   * `projects//agent/environments//users//sessions/`. If `Environment ID` is not
   * specified, we assume default 'draft' environment. If `User ID` is not
   * specified, we assume default '-' user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of items to return in a
   * single page. By default 100 and at most 1000.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2ListContextsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified context. (contexts.patch)
   *
   * @param string $name Required. The unique identifier of the context. Format:
   * `projects//agent/sessions//contexts/`, or
   * `projects//agent/environments//users//sessions//contexts/`. The `Context ID`
   * is always converted to lowercase, may only contain characters in a-zA-Z0-9_-%
   * and may be at most 250 bytes long. If `Environment ID` is not specified, we
   * assume default 'draft' environment. If `User ID` is not specified, we assume
   * default '-' user. The following context names are reserved for internal use
   * by Dialogflow. You should not use these contexts or create contexts with
   * these names: * `__system_counters__` * `*_id_dialog_context` *
   * `*_dialog_params_size`
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2Context $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The mask to control which fields get
   * updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Context
   */(,,=()){=(,);=(,);(,(),);}}