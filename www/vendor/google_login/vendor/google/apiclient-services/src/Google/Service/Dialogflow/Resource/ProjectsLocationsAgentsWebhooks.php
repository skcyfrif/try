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
 * The "webhooks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $webhooks = $dialogflowService->webhooks;
 *  </code>
 */{/**
   * Creates a webhook in the specified agent. (webhooks.create)
   *
   * @param string $parent Required. The agent to create a webhook for. Format:
   * `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Webhook $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Webhook
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the specified webhook. (webhooks.delete)
   *
   * @param string $name Required. The name of the webhook to delete. Format:
   * `projects//locations//agents//webhooks/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force This field has no effect for webhook not being used.
   * For webhooks that are used by pages/flows/transition route groups: * If
   * `force` is set to false, an error will be returned with message indicating
   * the referenced resources. * If `force` is set to true, Dialogflow will remove
   * the webhook, as well as any references to the webhook (i.e. Webhook and tagin
   * fulfillments that point to this webhook will be removed).
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified webhook. (webhooks.get)
   *
   * @param string $name Required. The name of the webhook. Format:
   * `projects//locations//agents//webhooks/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Webhook
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of all webhooks in the specified agent.
   * (webhooks.listProjectsLocationsAgentsWebhooks)
   *
   * @param string $parent Required. The agent to list all webhooks for. Format:
   * `projects//locations//agents/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of items to return in a single
   * page. By default 100 and at most 1000.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListWebhooksResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified webhook. (webhooks.patch)
   *
   * @param string $name The unique identifier of the webhook. Required for the
   * Webhooks.UpdateWebhook method. Webhooks.CreateWebhook populates the name
   * automatically. Format: `projects//locations//agents//webhooks/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Webhook $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The mask to control which fields get updated. If
   * the mask is not present, all fields will be updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Webhook
   */(,,=()){=(,);=(,);(,(),);}}