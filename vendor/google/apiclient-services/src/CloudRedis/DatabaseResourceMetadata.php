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

namespace Google\Service\CloudRedis;

class DatabaseResourceMetadata extends \Google\Collection
{
  protected $collection_key = 'entitlements';
  protected $availabilityConfigurationType = AvailabilityConfiguration::class;
  protected $availabilityConfigurationDataType = '';
  protected $backupConfigurationType = BackupConfiguration::class;
  protected $backupConfigurationDataType = '';
  protected $backupRunType = BackupRun::class;
  protected $backupRunDataType = '';
  /**
   * @var string
   */
  public $creationTime;
  /**
   * @var string
   */
  public $currentState;
  protected $customMetadataType = CustomMetadataData::class;
  protected $customMetadataDataType = '';
  protected $entitlementsType = Entitlement::class;
  protected $entitlementsDataType = 'array';
  /**
   * @var string
   */
  public $expectedState;
  protected $idType = DatabaseResourceId::class;
  protected $idDataType = '';
  /**
   * @var string
   */
  public $instanceType;
  /**
   * @var string
   */
  public $location;
  protected $primaryResourceIdType = DatabaseResourceId::class;
  protected $primaryResourceIdDataType = '';
  protected $productType = Product::class;
  protected $productDataType = '';
  /**
   * @var string
   */
  public $resourceContainer;
  /**
   * @var string
   */
  public $resourceName;
  /**
   * @var string
   */
  public $updationTime;
  /**
   * @var string[]
   */
  public $userLabels;

  /**
   * @param AvailabilityConfiguration
   */
  public function setAvailabilityConfiguration(AvailabilityConfiguration $availabilityConfiguration)
  {
    $this->availabilityConfiguration = $availabilityConfiguration;
  }
  /**
   * @return AvailabilityConfiguration
   */
  public function getAvailabilityConfiguration()
  {
    return $this->availabilityConfiguration;
  }
  /**
   * @param BackupConfiguration
   */
  public function setBackupConfiguration(BackupConfiguration $backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }
  /**
   * @return BackupConfiguration
   */
  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }
  /**
   * @param BackupRun
   */
  public function setBackupRun(BackupRun $backupRun)
  {
    $this->backupRun = $backupRun;
  }
  /**
   * @return BackupRun
   */
  public function getBackupRun()
  {
    return $this->backupRun;
  }
  /**
   * @param string
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * @param string
   */
  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }
  /**
   * @return string
   */
  public function getCurrentState()
  {
    return $this->currentState;
  }
  /**
   * @param CustomMetadataData
   */
  public function setCustomMetadata(CustomMetadataData $customMetadata)
  {
    $this->customMetadata = $customMetadata;
  }
  /**
   * @return CustomMetadataData
   */
  public function getCustomMetadata()
  {
    return $this->customMetadata;
  }
  /**
   * @param Entitlement[]
   */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /**
   * @return Entitlement[]
   */
  public function getEntitlements()
  {
    return $this->entitlements;
  }
  /**
   * @param string
   */
  public function setExpectedState($expectedState)
  {
    $this->expectedState = $expectedState;
  }
  /**
   * @return string
   */
  public function getExpectedState()
  {
    return $this->expectedState;
  }
  /**
   * @param DatabaseResourceId
   */
  public function setId(DatabaseResourceId $id)
  {
    $this->id = $id;
  }
  /**
   * @return DatabaseResourceId
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }
  /**
   * @return string
   */
  public function getInstanceType()
  {
    return $this->instanceType;
  }
  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param DatabaseResourceId
   */
  public function setPrimaryResourceId(DatabaseResourceId $primaryResourceId)
  {
    $this->primaryResourceId = $primaryResourceId;
  }
  /**
   * @return DatabaseResourceId
   */
  public function getPrimaryResourceId()
  {
    return $this->primaryResourceId;
  }
  /**
   * @param Product
   */
  public function setProduct(Product $product)
  {
    $this->product = $product;
  }
  /**
   * @return Product
   */
  public function getProduct()
  {
    return $this->product;
  }
  /**
   * @param string
   */
  public function setResourceContainer($resourceContainer)
  {
    $this->resourceContainer = $resourceContainer;
  }
  /**
   * @return string
   */
  public function getResourceContainer()
  {
    return $this->resourceContainer;
  }
  /**
   * @param string
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * @param string
   */
  public function setUpdationTime($updationTime)
  {
    $this->updationTime = $updationTime;
  }
  /**
   * @return string
   */
  public function getUpdationTime()
  {
    return $this->updationTime;
  }
  /**
   * @param string[]
   */
  public function setUserLabels($userLabels)
  {
    $this->userLabels = $userLabels;
  }
  /**
   * @return string[]
   */
  public function getUserLabels()
  {
    return $this->userLabels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseResourceMetadata::class, 'Google_Service_CloudRedis_DatabaseResourceMetadata');
