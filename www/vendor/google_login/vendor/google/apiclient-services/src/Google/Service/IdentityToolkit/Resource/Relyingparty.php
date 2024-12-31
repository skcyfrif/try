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
 * The "relyingparty" collection of methods.
 * Typical usage is:
 *  <code>
 *   $identitytoolkitService = new Google_Service_IdentityToolkit(...);
 *   $relyingparty = $identitytoolkitService->relyingparty;
 *  </code>
 */{/**
   * Creates the URI used by the IdP to authenticate the user.
   * (relyingparty.createAuthUri)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_CreateAuthUriResponse
   */(,=()){=();=(,);(,(),);}/**
   * Delete user account. (relyingparty.deleteAccount)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_DeleteAccountResponse
   */(,=()){=();=(,);(,(),);}/**
   * Batch download user accounts. (relyingparty.downloadAccount)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_DownloadAccountResponse
   */(,=()){=();=(,);(,(),);}/**
   * Reset password for a user. (relyingparty.emailLinkSignin)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyEmailLinkSigninRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_EmailLinkSigninResponse
   */(,=()){=();=(,);(,(),);}/**
   * Returns the account info. (relyingparty.getAccountInfo)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_GetAccountInfoResponse
   */(,=()){=();=(,);(,(),);}/**
   * Get a code for user action confirmation.
   * (relyingparty.getOobConfirmationCode)
   *
   * @param Google_Service_IdentityToolkit_Relyingparty $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_GetOobConfirmationCodeResponse
   */(,=()){=();=(,);(,(),);}/**
   * Get project configuration. (relyingparty.getProjectConfig)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string delegatedProjectNumber Delegated GCP project number of the
   * request.
   * @opt_param string projectNumber GCP project number of the request.
   * @return Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetProjectConfigResponse
   */(=()){=();=(,);(,(),);}/**
   * Get token signing public key. (relyingparty.getPublicKeys)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse
   */(=()){=();=(,);(,(),);}/**
   * Get recaptcha secure param. (relyingparty.getRecaptchaParam)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_GetRecaptchaParamResponse
   */(=()){=();=(,);(,(),);}/**
   * Reset password for a user. (relyingparty.resetPassword)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_ResetPasswordResponse
   */(,=()){=();=(,);(,(),);}/**
   * Send SMS verification code. (relyingparty.sendVerificationCode)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySendVerificationCodeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySendVerificationCodeResponse
   */(,=()){=();=(,);(,(),);}/**
   * Set account info for a user. (relyingparty.setAccountInfo)
   *
   * @param Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @re