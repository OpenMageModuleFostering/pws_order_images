<?php
class Parin_OrderImages_Block_About extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
		$logopath	=	'https://cmsblogheart.files.wordpress.com/2014/06/rvpatel.png';
        $html = <<<HTML
                <div style="background:url('$logopath') no-repeat scroll 14px 14px #EAF0EE;border:1px solid #CCCCCC;margin-bottom:10px;padding:20px 5px 20px 164px;">
                    <p>
                        <strong>FREE MAGENTO EXTENSIONS & CUSTOMIZATION</strong><br /><br />
                        <a href="http://www.linkedin.com/in/ravippatel" target="_blank">Ravipatel</a> You can find For Magento theme Customization and Solutions.<br />
                        <a href="http://parinwebsolutions.blogspot.in/" target="_blank">Parin Web Solutions</a><br />
                    </p>
                </div>
HTML;
        return $html;
    }
}