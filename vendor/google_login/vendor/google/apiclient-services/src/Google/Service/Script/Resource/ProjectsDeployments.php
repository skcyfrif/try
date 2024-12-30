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
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $scriptService = new Google_Service_Script(...);
 *   $deployments = $scriptService->deployments;
 *  </code>
 */{/**
   * Creates a deployment of an Apps Script project. (deployments.create)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param Google_Service_Script_DeploymentConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Deployment
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a deployment of an Apps Script project. (deployments.delete)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param string $deploymentId The deployment ID to be undeployed.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_ScriptEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a deployment of an Apps Script project. (deployments.get)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param string $deploymentId The deployment ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Deployment
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the deployments of an Apps Script project.
   * (deployments.listProjectsDeployments)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of deployments on each returned
   * page. Defaults to 50.
   * @opt_param string pageToken The token for continuing a previous list request
   * on the next page. This should be set to the value of `nextPageToken` from a
   * previous response.
   * @return Google_Service_Script_ListDeploymentsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a deployment of an Apps Script project. (deployments.update)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param string $deploymentId The deployment ID for this deployment.
   * @param Google_Service_Script_UpdateDeploymentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Deployment
   */(,,,=()){=(,,);=(,);(,(),);}}