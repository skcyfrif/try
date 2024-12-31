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
 * The "schedules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $notebooksService = new Google_Service_AIPlatformNotebooks(...);
 *   $schedules = $notebooksService->schedules;
 *  </code>
 */{/**
   * Creates a new Scheduled Notebook in a given project and location.
   * (schedules.create)
   *
   * @param string $parent Required. Format:
   * `parent=projects/{project_id}/locations/{location}`
   * @param Google_Service_AIPlatformNotebooks_Schedule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string scheduleId Required. User-defined unique ID of this
   * schedule.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes schedule and all underlying jobs (schedules.delete)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/schedules/{schedule_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Gets details of schedule (schedules.get)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/schedules/{schedule_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Schedule
   */(,=()){=();=(,);(,(),);}/**
   * Lists schedules in a given project and location.
   * (schedules.listProjectsLocationsSchedules)
   *
   * @param string $parent Required. Format:
   * `parent=projects/{project_id}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Filter applied to resulting schedules.
   * @opt_param string orderBy Field to order results by.
   * @opt_param int pageSize Maximum return size of the list call.
   * @opt_param string pageToken A previous returned page token that can be used
   * to continue listing from the last result.
   * @return Google_Service_AIPlatformNotebooks_ListSchedulesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Triggers execution of an existing schedule. (schedules.trigger)
   *
   * @param string $name Required. Format:
   * `parent=projects/{project_id}/locations/{location}/schedules/{schedule_id}`
   * @param Google_Service_AIPlatformNotebooks_TriggerScheduleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}}