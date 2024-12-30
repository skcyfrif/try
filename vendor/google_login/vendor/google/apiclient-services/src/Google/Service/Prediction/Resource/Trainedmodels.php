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
 * The "trainedmodels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $predictionService = new Google_Service_Prediction(...);
 *   $trainedmodels = $predictionService->trainedmodels;
 *  </code>
 */{/**
   * Get analysis of the model and the data the model was trained on.
   * (trainedmodels.analyze)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Prediction_Analyze
   */(,,=()){=(,);=(,);(,(),);}/**
   * Delete a trained model. (trainedmodels.delete)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Check training status of your model. (trainedmodels.get)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Prediction_Insert2
   */(,,=()){=(,);=(,);(,(),);}/**
   * Train a Prediction API model. (trainedmodels.insert)
   *
   * @param string $project The project associated with the model.
   * @param Google_Service_Prediction_Insert $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Prediction_Insert2
   */(,,=()){=(,);=(,);(,(),);}/**
   * List available models. (trainedmodels.listTrainedmodels)
   *
   * @param string $project The project associated with the model.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults Maximum number of results to return.
   * @opt_param string pageToken Pagination token.
   * @return Google_Service_Prediction_PredictionList
   */(,=()){=();=(,);(,(),);}/**
   * Submit model id and request a prediction. (trainedmodels.predict)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param Google_Service_Prediction_Input $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Prediction_Output
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Add new data to a trained model. (trainedmodels.update)
   *
   * @param string $project The project associated with the model.
   * @param string $id The unique name for the predictive model.
   * @param Google_Service_Prediction_Update $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Prediction_Insert2
   */(,,,=()){=(,,);=(,);(,(),);}}