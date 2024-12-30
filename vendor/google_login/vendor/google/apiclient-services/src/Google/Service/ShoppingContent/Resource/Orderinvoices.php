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
 * The "orderinvoices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $orderinvoices = $contentService->orderinvoices;
 *  </code>
 */{/**
   * Creates a charge invoice for a shipment group, and triggers a charge capture
   * for orderinvoice enabled orders. (orderinvoices.createchargeinvoice)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param string $orderId The ID of the order.
   * @param Google_Service_ShoppingContent_OrderinvoicesCreateChargeInvoiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrderinvoicesCreateChargeInvoiceResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Creates a refund invoice for one or more shipment groups, and triggers a
   * refund for orderinvoice enabled orders. This can only be used for line items
   * that have previously been charged using `createChargeInvoice`. All amounts
   * (except for the summary) are incremental with respect to the previous
   * invoice. (orderinvoices.createrefundinvoice)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param string $orderId The ID of the order.
   * @param Google_Service_ShoppingContent_OrderinvoicesCreateRefundInvoiceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrderinvoicesCreateRefundInvoiceResponse
   */(,,,=()){=(,,);=(,);(,(),);}}