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
 * The "consumers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicemanagementService = new Google_Service_ServiceManagement(...);
 *   $consumers = $servicemanagementService->consumers;
 *  </code>
 */{/**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (consumers.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_ServiceManagement_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (consumers.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_ServiceManagement_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning.
   * (consumers.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_ServiceManagement_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}}