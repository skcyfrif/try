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
 * The "bucketAccessControls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $bucketAccessControls = $storageService->bucketAccessControls;
 *  </code>
 */{/**
   * Permanently deletes the ACL entry for the specified entity on the specified
   * bucket. (bucketAccessControls.delete)
   *
   * @param string $bucket Name of a bucket.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   */(,,=()){=(,);=(,);(,());}/**
   * Returns the ACL entry for the specified entity on the specified bucket.
   * (bucketAccessControls.get)
   *
   * @param string $bucket Name of a bucket.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_BucketAccessControl
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new ACL entry on the specified bucket.
   * (bucketAccessControls.insert)
   *
   * @param string $bucket Name of a bucket.
   * @param Google_Service_Storage_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_BucketAccessControl
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves ACL entries on the specified bucket.
   * (bucketAccessControls.listBucketAccessControls)
   *
   * @param string $bucket Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_BucketAccessControls
   */(,=()){=();=(,);(,(),);}/**
   * Patches an ACL entry on the specified bucket. (bucketAccessControls.patch)
   *
   * @param string $bucket Name of a bucket.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param Google_Service_Storage_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_BucketAccessControl
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates an ACL entry on the specified bucket. (bucketAccessControls.update)
   *
   * @param string $bucket Name of a bucket.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param Google_Service_Storage_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_BucketAccessControl
   */(,,,=()){=(,,);=(,);(,(),);}}