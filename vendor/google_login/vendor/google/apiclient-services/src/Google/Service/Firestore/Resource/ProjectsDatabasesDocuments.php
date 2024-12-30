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
 *   $firestoreService = new Google_Service_Firestore(...);
 *   $documents = $firestoreService->documents;
 *  </code>
 */{/**
   * Gets multiple documents. Documents returned by this method are not guaranteed
   * to be returned in the same order that they were requested.
   * (documents.batchGet)
   *
   * @param string $database Required. The database name. In the format:
   * `projects/{project_id}/databases/{database_id}`.
   * @param Google_Service_Firestore_BatchGetDocumentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Firestore_BatchGetDocumentsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Applies a batch of write operations. The BatchWrite method does not apply the
   * write operations atomically and can apply them out of order. Method does not
   * allow more than one write per document. Each write succeeds or fails
   * independently. See the BatchWriteResponse for the success status of each
   * write. If you require an atomically applied set of writes, use Commit
   * instead. (documents.batchWrite)
   *
   * @param string $database Required. The database name. In the format:
   * `projects/{project_id}/databases/{database_id}`.
   * @param Google_Service_Firestore_BatchWriteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Firestore_BatchWriteResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Starts a new transaction. (documents.beginTransaction)
   *
   * @param string $database Required. The database name. In the format:
   * `projects/{project_id}/databases/{database_id}`.
   * @param Google_Service_Firestore_BeginTransactionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Firestore_BeginTransactionResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Commits a transaction, while optionally updating documents.
   * (documents.commit)
   *
   * @param string $database Required. The database name. In the format:
   * `projects/{project_id}/databases/{database_id}`.
   * @param Google_Service_Firestore_CommitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Firestore_CommitResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new document. (documents.createDocument)
   *
   * @param string $parent Required. The parent resource. For example:
   * `projects/{project_id}/databases/{database_id}/documents` or `projects/{proje
   * ct_id}/databases/{database_id}/documents/chatrooms/{chatroom_id}`
   * @param string $collectionId Required. The collection ID, relative to
   * `parent`, to list. For example: `chatrooms`.
   * @param Google_Service_Firestore_Document $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string documentId The client-assigned document ID to use for this
   * document. Optional. If not specified, an ID will be assigned by the service.
   * @opt_param string mask.fieldPaths The list of field paths in the mask. See
   * Document.fields for a field path syntax reference.
   * @return Google_Service_Firestore_Document
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Deletes a document. (documents.delete)
   *
   * @param string $name Required. The resource name of the Document to delete. In
   * the format:
   * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool currentDocument.exists When set to `true`, the target
   * document must exist. When set to `false`, the target document must not exist.
   * @opt_param string currentDocument.updateTime When set, the target document
   * must exist and have been last updated at that time.
   * @return Google_Service_Firestore_FirestoreEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a single document. (documents.get)
   *
   * @param string $name Required. The resource name of the Document to get. In
   * the format:
   * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string mask.fieldPaths The list of field paths in the mask. See
   * Document.fields for a field path syntax reference.
   * @opt_param string readTime Reads the version of the document at the given
   * time. This may not be older than 270 seconds.
   * @opt_param string transaction Reads the document in a transaction.
   * @return Google_Service_Firestore_Document
   */(,=()){=();=(,);(,(),);}/**
   * Lists documents. (documents.listProjectsDatabasesDocuments)
   *
   * @param string $parent Required. The parent resource name. In the format:
   * `projects/{project_id}/databases/{database_id}/documents` or
   * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
   * For example: `projects/my-project/databases/my-database/documents` or
   * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
   * @param string $collectionId Required. The collection ID, relative to
   * `parent`, to list. For example: `chatrooms` or `messages`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string mask.fieldPaths The list of field paths in the mask. See
   * Document.fields for a field path syntax reference.
   * @opt_param string orderBy 