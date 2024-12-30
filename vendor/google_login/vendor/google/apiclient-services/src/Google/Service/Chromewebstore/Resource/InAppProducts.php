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
 * The "inAppProducts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chromewebstoreService = new Google_Service_Chromewebstore(...);
 *   $inAppProducts = $chromewebstoreService->inAppProducts;
 *  </code>
 */{/**
   * Gets the in-app product information of an item. (inAppProducts.get)
   *
   * @param string $itemId The ID of the item to query for in-app products.
   * @param string $sku The in-app product ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string gl Specifies the region code of the in-app product when
   * projection is THIN.
   * @opt_param string hl Specifies the language code of the in-app product when
   * projection is THIN.
   * @opt_param string projection Whether to return a subset of the result
   * @return Google_Service_Chromewebstore_InAppProduct
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the in-app product information of an item.
   * (inAppProducts.listInAppProducts)
   *
   * @param string $itemId The ID of the item to query for in-app products.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string gl Specifies the region code of the in-app product when
   * projection is THIN.
   * @opt_param string hl Specifies the language code of the in-app product when
   * projection is THIN.
   * @opt_param string projection Whether to return a subset of the result
   * @return Google_Service_Chromewebstore_InAppProductList
   */(,=()){=();=(,);(,(),);}}