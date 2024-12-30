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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigtableadminService = new Google_Service_BigtableAdmin(...);
 *   $instances = $bigtableadminService->instances;
 *  </code>
 */{/**
   * Create an instance within a project. (instances.create)
   *
   * @param string $parent Required. The unique name of the project in which to
   * create the new instance. Values are of the form `projects/{project}`.
   * @param Google_Service_BigtableAdmin_CreateInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Delete an instance from a project. (instances.delete)
   *
   * @param string $name Required. The unique name of the instance to be deleted.
   * Values are of the form `projects/{project}/instances/{instance}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_BigtableadminEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets information about an instance. (instances.get)
   *
   * @param string $name Required. The unique name of the requested instance.
   * Values are of the form `projects/{project}/instances/{instance}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Instance
   */(,=()){=();=(,);(,(),);}/**
   * Gets the access control policy for an instance resource. Returns an empty
   * policy if an instance exists but does not have a policy set.
   * (instances.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_BigtableAdmin_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists information about instances in a project.
   * (instances.listProjectsInstances)
   *
   * @param string $parent Required. The unique name of the project for which a
   * list of instances is requested. Values are of the form `projects/{project}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken DEPRECATED: This field is unused and ignored.
   * @return Google_Service_BigtableAdmin_ListInstancesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Partially updates an instance within a project. This method can modify all
   * fields of an Instance and is the preferred way to update an Instance.
   * (instances.partialUpdateInstance)
   *
   * @param string $name The unique name of the instance. Values are of the form
   * `projects/{project}/instances/a-z+[a-z0-9]`.
   * @param Google_Service_BigtableAdmin_Instance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The subset of Instance fields which
   * should be replaced. Must be explicitly set.
   * @return Google_Service_BigtableAdmin_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Sets the access control policy on an instance resource. Replaces any existing
   * policy. (instances.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_BigtableAdmin_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns permissions that the caller has on the specified instance resource.
   * (instances.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_BigtableAdmin_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an instance within a project. This method updates only the display
   * name and type for an Instance. To update other Instance properties, such as
   * labels, use PartialUpdateInstance. (instances.update)
   *
   * @param string $name The unique name of the instance. Values are of the form
   * `projects/{project}/instances/a-z+[a-z0-9]`.
   * @param Google_Service_BigtableAdmin_Instance $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Instance
   */(,,=()){=(,);=(,);(,(),);}}