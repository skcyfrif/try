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
 * The "surveys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $consumersurveysService = new Google_Service_ConsumerSurveys(...);
 *   $surveys = $consumersurveysService->surveys;
 *  </code>
 */{/**
   * Removes a survey from view in all user GET requests. (surveys.delete)
   *
   * @param string $surveyUrlId External URL ID for the survey.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ConsumerSurveys_SurveysDeleteResponse
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves information about the specified survey. (surveys.get)
   *
   * @param string $surveyUrlId External URL ID for the survey.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ConsumerSurveys_Survey
   */(,=()){=();=(,);(,(),);}/**
   * Creates a survey. (surveys.insert)
   *
   * @param Google_Service_ConsumerSurveys_Survey $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ConsumerSurveys_Survey
   */(,=()){=();=(,);(,(),);}/**
   * Lists the surveys owned by the authenticated user. (surveys.listSurveys)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults
   * @opt_param string startIndex
   * @opt_param string token
   * @return Google_Service_ConsumerSurveys_SurveysListResponse
   */(=()){=();=(,);(,(),);}/**
   * Begins running a survey. (surveys.start)
   *
   * @param string $resourceId
   * @param Google_Service_ConsumerSurveys_SurveysStartRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ConsumerSurveys_SurveysStartResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Stops a running survey. (surveys.stop)
   *
   * @param string $resourceId
   * @param array $optParams Optional parameters.
   * @return Google_Service_ConsumerSurveys_SurveysStopResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a survey. Currently the only property that can be updated is the
   * owners property. (surveys.update)
   *
   * @param string $surveyUrlId External URL ID for the survey.
   * @param Google_Service_ConsumerSurveys_Survey $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ConsumerSurveys_Survey
   */(,,=()){=(,);=(,);(,(),);}}