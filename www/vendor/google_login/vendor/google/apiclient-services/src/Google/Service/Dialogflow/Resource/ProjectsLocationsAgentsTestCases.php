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
 * The "testCases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $testCases = $dialogflowService->testCases;
 *  </code>
 */{/**
   * Batch deletes test cases. (testCases.batchDelete)
   *
   * @param string $parent Required. The agent to delete test cases from. Format:
   * `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3BatchDeleteTestCasesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Kicks off a batch run of test cases. (testCases.batchRun)
   *
   * @param string $parent Required. Agent name. Format:
   * `projects//locations//agents/ `.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3BatchRunTestCasesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Calculates the test coverage for an agent. (testCases.calculateCoverage)
   *
   * @param string $agent Required. The agent to calculate coverage for. Format:
   * `projects//locations//agents/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string type Required. The type of coverage requested.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3CalculateCoverageResponse
   */(,=()){=();=(,);(,(),);}/**
   * Creates a test case for the given agent. (testCases.create)
   *
   * @param string $parent Required. The agent to create the test case for.
   * Format: `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCase $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCase
   */(,,=()){=(,);=(,);(,(),);}/**
   * Exports the test cases under the agent to a Cloud Storage bucket or a local
   * file. Filter can be applied to export a subset of test cases.
   * (testCases.export)
   *
   * @param string $parent Required. The agent where to export test cases from.
   * Format: `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ExportTestCasesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a test case. (testCases.get)
   *
   * @param string $name Required. The name of the testcase. Format:
   * `projects//locations//agents//testCases/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCase
   */(,=()){=();=(,);(,(),);}/**
   * Imports the test cases from a Cloud Storage bucket or a local file. It always
   * creates new test cases and won't overwite any existing ones. The provided ID
   * in the imported test case is neglected. (testCases.import)
   *
   * @param string $parent Required. The agent to import test cases to. Format:
   * `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ImportTestCasesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Fetches a list of test cases for a given agent.
   * (testCases.listProjectsLocationsAgentsTestCases)
   *
   * @param string $parent Required. The agent to list all pages for. Format:
   * `projects//locations//agents/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of items to return in a single
   * page. By default 20. Note that when TestCaseView = FULL, the maximum page
   * size allowed is 20. When TestCaseView = BASIC, the maximum page size allowed
   * is 500.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous list request.
   * @opt_param string view Specifies whether response should include all fields
   * or just the metadata.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListTestCasesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified test case. (testCases.patch)
   *
   * @param string $name The unique identifier of the test case.
   * TestCases.CreateTestCase will populate the name automatically. Otherwise use
   * format: `projects//locations//agents/ /testCases/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCase $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to specify which fields
   * should be updated. The `creationTime` and `lastTestResult` cannot be updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3TestCase
   */(,,=()){=(,);=(,);(,(),);}/**
   * Kicks off a test case run. (testCases.run)
   *
   * @param string $name Required. Format of test case name to run:
   * `projects//locations/ /agents//testCases/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3RunTestCaseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}}