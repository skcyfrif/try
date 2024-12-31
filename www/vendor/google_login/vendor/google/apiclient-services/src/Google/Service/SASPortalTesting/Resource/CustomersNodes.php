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
 * The "nodes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $prod_tt_sasportalService = new Google_Service_SASPortalTesting(...);
 *   $nodes = $prod_tt_sasportalService->nodes;
 *  </code>
 */{/**
   * Creates a new node. (nodes.create)
   *
   * @param string $parent Required. The parent resource name where the node is to
   * be created.
   * @param Google_Service_SASPortalTesting_SasPortalNode $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalNode
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a node. (nodes.delete)
   *
   * @param string $name Required. The name of the node.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Returns a requested node. (nodes.get)
   *
   * @param string $name Required. The name of the node.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalNode
   */(,=()){=();=(,);(,(),);}/**
   * Lists nodes. (nodes.listCustomersNodes)
   *
   * @param string $parent Required. The parent resource name, for example,
   * "nodes/1".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter The filter expression. The filter should have the
   * following format: "DIRECT_CHILDREN" or format: "direct_children". The filter
   * is case insensitive. If empty, then no nodes are filtered.
   * @opt_param int pageSize The maximum number of nodes to return in the
   * response.
   * @opt_param string pageToken A pagination token returned from a previous call
   * to ListNodes that indicates where this listing should continue from.
   * @return Google_Service_SASPortalTesting_SasPortalListNodesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Moves a node under another node or customer. (nodes.move)
   *
   * @param string $name Required. The name of the node to move.
   * @param Google_Service_SASPortalTesting_SasPortalMoveNodeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an existing node. (nodes.patch)
   *
   * @param string $name Output only. Resource name.
   * @param Google_Service_SASPortalTesting_SasPortalNode $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Fields to be updated.
   * @return Google_Service_SASPortalTesting_SasPortalNode
   */(,,=()){=(,);=(,);(,(),);}}