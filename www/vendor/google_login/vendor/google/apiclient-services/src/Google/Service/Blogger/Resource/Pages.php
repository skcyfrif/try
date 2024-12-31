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
 * The "pages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_Service_Blogger(...);
 *   $pages = $bloggerService->pages;
 *  </code>
 */{/**
   * Deletes a page by blog id and page id. (pages.delete)
   *
   * @param string $blogId
   * @param string $pageId
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Gets a page by blog id and page id. (pages.get)
   *
   * @param string $blogId
   * @param string $pageId
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view
   * @return Google_Service_Blogger_Page
   */(,,=()){=(,);=(,);(,(),);}/**
   * Inserts a page. (pages.insert)
   *
   * @param string $blogId
   * @param Google_Service_Blogger_Page $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool isDraft
   * @return Google_Service_Blogger_Page
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists pages. (pages.listPages)
   *
   * @param string $blogId
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool fetchBodies
   * @opt_param string maxResults
   * @opt_param string pageToken
   * @opt_param string status
   * @opt_param string view
   * @return Google_Service_Blogger_PageList
   */(,=()){=();=(,);(,(),);}/**
   * Patches a page. (pages.patch)
   *
   * @param string $blogId
   * @param string $pageId
   * @param Google_Service_Blogger_Page $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool publish
   * @opt_param bool revert
   * @return Google_Service_Blogger_Page
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Publishes a page. (pages.publish)
   *
   * @param string $blogId
   * @param string $pageId
   * @param array $optParams Optional parameters.
   * @return Google_Service_Blogger_Page
   */(,,=()){=(,);=(,);(,(),);}/**
   * Reverts a published or scheduled page to draft state. (pages.revert)
   *
   * @param string $blogId
   * @param string $pageId
   * @param array $optParams Optional parameters.
   * @return Google_Service_Blogger_Page
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates a page by blog id and page id. (pages.update)
   *
   * @param string $blogId
   * @param string $pageId
   * @param Google_Service_Blogger_Page $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool publish
   * @opt_param bool revert
   * @return Google_Service_Blogger_Page
   */(,,,=()){=(,,);=(,);(,(),);}}