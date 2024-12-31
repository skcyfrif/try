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
 * The "documents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $languageService = new Google_Service_CloudNaturalLanguage(...);
 *   $documents = $languageService->documents;
 *  </code>
 */{/**
   * Finds named entities (currently proper names and common nouns) in the text
   * along with entity types, salience, mentions for each entity, and other
   * properties. (documents.analyzeEntities)
   *
   * @param Google_Service_CloudNaturalLanguage_AnalyzeEntitiesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudNaturalLanguage_AnalyzeEntitiesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Finds entities, similar to AnalyzeEntities in the text and analyzes sentiment
   * associated with each entity and its mentions.
   * (documents.analyzeEntitySentiment)
   *
   * @param Google_Service_CloudNaturalLanguage_AnalyzeEntitySentimentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudNaturalLanguage_AnalyzeEntitySentimentResponse
   */(,=()){=();=(,);(,(),);}/**
   * Analyzes the sentiment of the provided text. (documents.analyzeSentiment)
   *
   * @param Google_Service_CloudNaturalLanguage_AnalyzeSentimentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudNaturalLanguage_AnalyzeSentimentResponse
   */(,=()){=();=(,);(,(),);}/**
   * Analyzes the syntax of the text and provides sentence boundaries and
   * tokenization along with part of speech tags, dependency trees, and other
   * properties. (documents.analyzeSyntax)
   *
   * @param Google_Service_CloudNaturalLanguage_AnalyzeSyntaxRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudNaturalLanguage_AnalyzeSyntaxResponse
   */(,=()){=();=(,);(,(),);}/**
   * A convenience method that provides all the features that analyzeSentiment,
   * analyzeEntities, and analyzeSyntax provide in one call.
   * (documents.annotateText)
   *
   * @param Google_Service_CloudNaturalLanguage_AnnotateTextRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudNaturalLanguage_AnnotateTextResponse
   */(,=()){=();=(,);(,(),);}/**
   * Classifies a document into categories. (documents.classifyText)
   *
   * @param Google_Service_CloudNaturalLanguage_ClassifyTextRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudNaturalLanguage_ClassifyTextResponse
   */(,=()){=();=(,);(,(),);}}