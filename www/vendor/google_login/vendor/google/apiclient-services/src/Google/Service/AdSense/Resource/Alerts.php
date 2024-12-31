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
 * The "alerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adsenseService = new Google_Service_AdSense(...);
 *   $alerts = $adsenseService->alerts;
 *  </code>
 */{/**
   * Dismiss (delete) the specified alert from the publisher's AdSense account.
   * (alerts.delete)
   *
   * @param string $alertId Alert to delete.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * List the alerts for this AdSense account. (alerts.listAlerts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale The locale to use for translating alert messages.
   * The account locale will be used if this is not supplied. The AdSense default
   * (English) will be used if the supplied locale is invalid or unsupported.
   * @return Google_Service_AdSense_Alerts
   */(=()){=();=(,);(,(),);}}