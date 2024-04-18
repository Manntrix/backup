<?php

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
 */
namespace Google\Site_Kit_Dependencies\Google\Service\Analytics;

class AccountTreeResponse extends \Google\Site_Kit_Dependencies\Google\Model
{
    protected $accountType = \Google\Site_Kit_Dependencies\Google\Service\Analytics\Account::class;
    protected $accountDataType = '';
    /**
     * @var string
     */
    public $kind;
    protected $profileType = \Google\Site_Kit_Dependencies\Google\Service\Analytics\Profile::class;
    protected $profileDataType = '';
    protected $webpropertyType = \Google\Site_Kit_Dependencies\Google\Service\Analytics\Webproperty::class;
    protected $webpropertyDataType = '';
    /**
     * @param Account
     */
    public function setAccount(\Google\Site_Kit_Dependencies\Google\Service\Analytics\Account $account)
    {
        $this->account = $account;
    }
    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * @param string
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * @param Profile
     */
    public function setProfile(\Google\Site_Kit_Dependencies\Google\Service\Analytics\Profile $profile)
    {
        $this->profile = $profile;
    }
    /**
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
    /**
     * @param Webproperty
     */
    public function setWebproperty(\Google\Site_Kit_Dependencies\Google\Service\Analytics\Webproperty $webproperty)
    {
        $this->webproperty = $webproperty;
    }
    /**
     * @return Webproperty
     */
    public function getWebproperty()
    {
        return $this->webproperty;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\Analytics\AccountTreeResponse::class, 'Google\\Site_Kit_Dependencies\\Google_Service_Analytics_AccountTreeResponse');
