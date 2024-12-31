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
 * The "calendars" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $calendars = $calendarService->calendars;
 *  </code>
 */{/**
   * Clears a primary calendar. This operation deletes all events associated with
   * the primary calendar of an account. (calendars.clear)
   *
   * @param string $calendarId Calendar identifier. To retrieve calendar IDs call
   * the calendarList.list method. If you want to access the primary calendar of
   * the currently logged in user, use the "primary" keyword.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Deletes a secondary calendar. Use calendars.clear for clearing all events on
   * primary calendars. (calendars.delete)
   *
   * @param string $calendarId Calendar identifier. To retrieve calendar IDs call
   * the calendarList.list method. If you want to access the primary calendar of
   * the currently logged in user, use the "primary" keyword.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Returns metadata for a calendar. (calendars.get)
   *
   * @param string $calendarId Calendar identifier. To retrieve calendar IDs call
   * the calendarList.list method. If you want to access the primary calendar of
   * the currently logged in user, use the "primary" keyword.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_Calendar
   */(,=()){=();=(,);(,(),);}/**
   * Creates a secondary calendar. (calendars.insert)
   *
   * @param Google_Service_Calendar_Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_Calendar
   */(,=()){=();=(,);(,(),);}/**
   * Updates metadata for a calendar. This method supports patch semantics.
   * (calendars.patch)
   *
   * @param string $calendarId Calendar identifier. To retrieve calendar IDs call
   * the calendarList.list method. If you want to access the primary calendar of
   * the currently logged in user, use the "primary" keyword.
   * @param Google_Service_Calendar_Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_Calendar
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates metadata for a calendar. (calendars.update)
   *
   * @param string $calendarId Calendar identifier. To retrieve calendar IDs call
   * the calendarList.list method. If you want to access the primary calendar of
   * the currently logged in user, use the "primary" keyword.
   * @param Google_Service_Calendar_Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Calendar_Calendar
   */(,,=()){=(,);=(,);(,(),);}}