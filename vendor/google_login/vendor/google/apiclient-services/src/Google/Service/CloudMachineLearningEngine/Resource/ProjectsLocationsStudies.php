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
 * The "studies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mlService = new Google_Service_CloudMachineLearningEngine(...);
 *   $studies = $mlService->studies;
 *  </code>
 */{/**
   * Creates a study. (studies.create)
   *
   * @param string $parent Required. The project and location that the study
   * belongs to. Format: projects/{project}/locations/{location}
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Study $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string studyId Required. The ID to use for the study, which will
   * become the final component of the study's resource name.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Study
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a study. (studies.delete)
   *
   * @param string $name Required. The study name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a study. (studies.get)
   *
   * @param string $name Required. The study name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Study
   */(,=()){=();=(,);(,(),);}/**
   * Lists all the studies in a region for an associated project.
   * (studies.listProjectsLocationsStudies)
   *
   * @param string $parent Required. The project and location that the study
   * belongs to. Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListStudiesResponse
   */(,=()){=();=(,);(,(),);}}