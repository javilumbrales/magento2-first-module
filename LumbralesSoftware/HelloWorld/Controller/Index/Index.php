<?php
namespace LumbralesSoftware\HelloWorld\Controller\Index;

/**
 * Index
 *
 * @package
 * @version $id$
 * @copyright 2015, Lumbrales Software
 * @author Javier Carrascal <info@lumbrales-software.com>
 */
class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * execute
     *
     * @access public
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
