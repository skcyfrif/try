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
 * The "feedbackThreads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datalabelingService = new Google_Service_DataLabeling(...);
 *   $feedbackThreads = $datalabelingService->feedbackThreads;
 *  </code>
 */{/**
   * Delete a FeedbackThread. (feedbackThreads.delete)
   *
   * @param string $name Required. Name of the FeedbackThread that is going to be
   * deleted. Format: 'projects/{project_id}/datasets/{dataset_id}/annotatedDatase
   * ts/{annotated_dataset_id}/feedbackThreads/{feedback_thread_id}'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DataLabeling_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Get a FeedbackThread object. (feedbackThreads.get)
   *
   * @param string $name Required. Name of the feedback. Format: 'projects/{projec
   * t_id}/datasets/{dataset_id}/annotatedDatasets/{annotated_dataset_id}/feedback
   * Threads/{feedback_thread_id}'.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1FeedbackThread
   */(,=()){=();=(,);(,(),);}/**
   * List FeedbackThreads with pagination.
   * (feedbackThreads.listProjectsDatasetsAnnotatedDatasetsFeedbackThreads)
   *
   * @param string $parent Required. FeedbackThread resource parent. Format: "proj
   * ects/{project_id}/datasets/{dataset_id}/annotatedDatasets/{annotated_dataset_
   * id}"
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer results than requested. Default value is 100.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * for the server to return. Typically obtained by
   * ListFeedbackThreads.next_page_token of the previous
   * [DataLabelingService.ListFeedbackThreads] call. Return first page if empty.
   * @return Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListFeedbackThreadsResponse
   */(,=()){=();=(,);(,(),);}}