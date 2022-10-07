<?php
namespace Praveen\Helloworld\Block;
use Magento\Framework\View\Element\Template;

class Helloworld extends Template
{
    public $scopeConfig;
    public function __construct(
     \Magento\Framework\View\Element\Template\Context $context,
     \Magento\Framework\App\config\ScopeConfigInterface $scopeConfig
    )
{
    $this->scopeConfig = $scopeConfig;
    parent::__construct($context);
}
    public function getText() {
        $value = $this->scopeConfig->getValue(
            'helloworld/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        ); 
        if($value == 1)
        {
        return "Hello World!";
        }
        else{
            return "";
        }
    }
}