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
 * The "aliases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $aliases = $apigeeService->aliases;
 *  </code>
 */{/**
   * Creates an alias from a key/certificate pair. The structure of the request is
   * controlled by the `format` query parameter: - `keycertfile` - Separate PEM-
   * encoded key and certificate files are uploaded. Set `Content-Type: multipart
   * /form-data` and include the `keyFile`, `certFile`, and `password` (if keys
   * are encrypted) fields in the request body. If uploading to a truststore, omit
   * `keyFile`. - `pkcs12` - A PKCS12 file is uploaded. Set `Content-Type:
   * multipart/form-data`, provide the file in the `file` field, and include the
   * `password` field if the file is encrypted in the request body. -
   * `selfsignedcert` - A new private key and certificate are generated. Set
   * `Content-Type: application/json` and include CertificateGenerationSpec in the
   * request body. (aliases.create)
   *
   * @param string $parent Required. Name of the keystore. Use the following
   * format in your request:
   * `organizations/{org}/environments/{env}/keystores/{keystore}`.
   * @param Google_Service_Apigee_GoogleApiHttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string _password DEPRECATED: For improved security, specify the
   * password in the request body instead of using the query parameter. To specify
   * the password in the request body, set `Content-type: multipart/form-data`
   * part with name `password`. Password for the private key file, if required.
   * @opt_param string alias Alias for the key/certificate pair. Values must match
   * the regular expression `[\w\s-.]{1,255}`. This must be provided for all
   * formats except `selfsignedcert`; self-signed certs may specify the alias in
   * either this parameter or the JSON body.
   * @opt_param string format Required. Format of the data. Valid values include:
   * `selfsignedcert`, `keycertfile`, or `pkcs12`
   * @opt_param bool ignoreExpiryValidation Flag that specifies whether to ignore
   * expiry validation. If set to `true`, no expiry validation will be performed.
   * @opt_param bool ignoreNewlineValidation Flag that specifies whether to ignore
   * newline validation. If set to `true`, no error is thrown when the file
   * contains a certificate chain with no newline between each certificate.
   * Defaults to `false`.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Alias
   */(,,=()){=(,);=(,);(,(),);}/**
   * Generates a PKCS #10 Certificate Signing Request for the private key in an
   * alias. (aliases.csr)
   *
   * @param string $name Required. Name of the alias. Use the following format in
   * your request: `organizations/{org}/environments/{env}/keystores/{keystore}/al
   * iases/{alias}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleApiHttpBody
   */(,=()){=();=(,);(,(),);}/**
   * Deletes an alias. (aliases.delete)
   *
   * @param string $name Required. Name of the alias. Use the following format in
   * your request: `organizations/{org}/environments/{env}/keystores/{keystore}/al
   * iases/{alias}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Alias
   */(,=()){=();=(,);(,(),);}/**
   * Gets an alias. (aliases.get)
   *
   * @param string $name Required. Name of the alias. Use the following format in
   * your request: `organizations/{org}/environments/{env}/keystores/{keystore}/al
   * iases/{alias}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Alias
   */(,=()){=();=(,);(,(),);}/**
   * Gets the certificate from an alias in PEM-encoded form.
   * (aliases.getCertificate)
   *
   * @param string $name Required. Name of the alias. Use the following format in
   * your request: `organizations/{org}/environments/{env}/keystores/{keystore}/al
   * iases/{alias}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleApiHttpBody
   */(,=()){=();=(,);(,(),);}/**
   * Updates the certificate in an alias. (aliases.update)
   *
   * @param string $name Required. Name of the alias. Use the following format in
   * your request:
   * `organizations/{org}/environments/{env}/keystores/{keystore}/aliases/{alias}`
   * @param Google_Service_Apigee_GoogleApiHttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool ignoreExpiryValidation Required. Flag that specifies whether
   * to ignore expiry validation. If set to `true`, no expiry validation will be
   * performed.
   * @opt_param bool ignoreNewlineValidation Flag that specifies whether to ignore
   * newline validation. If set to `true`, no error is thrown when the file
   * contains a certificate chain with no newline between each certificate.
   * Defaults to `false`.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Alias
   */(,,=()){=(,);=(,);(,(),);}}