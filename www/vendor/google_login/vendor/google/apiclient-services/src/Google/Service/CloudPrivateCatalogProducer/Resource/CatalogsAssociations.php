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
 * The "associations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudprivatecatalogproducerService = new Google_Service_CloudPrivateCatalogProducer(...);
 *   $associations = $cloudprivatecatalogproducerService->associations;
 *  </code>
 */{/**
   * Creates an Association instance under a given Catalog. (associations.create)
   *
   * @param string $parent The `Catalog` resource's name.
   * @param Google_Service_CloudPrivateCatalogProducer_GoogleCloudPrivatecatalogproducerV1beta1CreateAssociationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudPrivateCatalogProducer_GoogleCloudPrivatecatalogproducerV1beta1Association
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the given Association. (associations.delete)
   *
   * @param string $name The resource name of the `Association` to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudPrivateCatalogProducer_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Returns the requested Association resource. (associations.get)
   *
   * @param string $name The resource name of the `Association` to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudPrivateCatalogProducer_GoogleCloudPrivatecatalogproducerV1beta1Association
   */(,=()){=();=(,);(,(),);}/**
   * Lists all Association resources under a catalog.
   * (associations.listCatalogsAssociations)
   *
   * @param string $parent The resource name of the `Catalog` whose `Associations`
   * are being retrieved. In the format `catalogs/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken A pagination token returned from the previous
   * call to `ListAssociations`.
   * @opt_param int pageSize The maximum number of catalog associations to return.
   * @return Google_Service_CloudPrivateCatalogProducer_GoogleCloudPrivatecatalogproducerV1beta1ListAssociationsResponse
   */(,=()){=();=(,);(,(),);}}