<?php
class Parin_OrderImages_Helper_Data extends Mage_Core_Helper_Abstract
{
        public function BackendmoduleActive(){
            return (bool) Mage::getStoreConfigFlag('orderimages/backend/enabled',Mage::app()->getStore());
        }
        public function FrontendmoduleActive(){
            return (bool) Mage::getStoreConfigFlag('orderimages/frontend/enabled',Mage::app()->getStore());
        }
        public function getImageUrl($image_file){
            $url = false;
            $url = Mage::getBaseUrl('media').'catalog/product'. $image_file;
            return $url;
        }
        public function getFileExists($image_file){
            $file_exists = false;
            $file_exists = file_exists('media/catalog/product'. $image_file);
            return $file_exists;
        }
}