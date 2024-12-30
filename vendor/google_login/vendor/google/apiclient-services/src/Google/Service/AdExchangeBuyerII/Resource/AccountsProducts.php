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
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $products = $adexchangebuyer2Service->products;
 *  </code>
 */{/**
   * Gets the requested product by ID. (products.get)
   *
   * @param string $accountId Account ID of the buyer.
   * @param string $productId The ID for the product to get the head revision for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Product
   */(,,=()){=(,);=(,);(,(),);}/**
   * List all products visible to the buyer (optionally filtered by the specified
   * PQL query). (products.listAccountsProducts)
   *
   * @param string $accountId Account ID of the buyer.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An optional PQL query used to query for products.
   * See https://developers.google.com/ad-manager/docs/pqlreference for
   * documentation about PQL and examples. Nested repeated fields, such as
   * product.targetingCriterion.inclusions, cannot be filtered.
   * @opt_param int pageSize Requested page size. The server may return fewer
   * results than requested. If unspecified, the server will pick an appropriate
   * default.
   * @opt_param string pageToken The page token as returned from
   * ListProductsResponse.
   * @return Google_Service_AdExchangeBuyerII_ListProductsResponse
   */(,=()){=();=(,);(,(),);}}