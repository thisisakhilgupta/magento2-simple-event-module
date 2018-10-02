<?php
namespace Akhil\Event\Observer;
/**
 * Akhil Gupta
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 *
 * DISCLAIMER**
 *
 * @category   MAGENTO2 Simple EVENT MODULE
 * @package    MAGENTO2 Simple EVENT MODULE
 * @url       https://www.youtube.com/user/thisisakhilgupta/
 * @author    Akhil Gupta
 */

use \Psr\Log\LoggerInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;


class EachPageLoad implements ObserverInterface
{

    protected $logger;


//   public function __construct(LoggerInterface $logger)
//My Custom log file
    public function __construct(\Akhil\Customlog\Logger\Customlogger $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $message= 'PAGE Loaded';
        $this->logger->warn($message);
    }
}
