<?php
// wcf imports
require_once(WCF_DIR.'lib/action/AbstractAction.class.php');

/**
 * Exports a language.
 * 
 * @author	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	WoltLab Burning Board License <http://www.woltlab.com/products/burning_board/license.php>
 * @package	com.woltlab.wcf.acp.display.language
 * @subpackage	acp.action
 * @category 	Community Framework (commercial)
 */
class LanguageExportAction extends AbstractAction {
	public $languageID = 0;
	
	/**
	 * @see Action::readParameters()
	 */
	public function readParameters() {
		parent::readParameters();
		
		if (isset($_REQUEST['languageID'])) $this->languageID = intval($_REQUEST['languageID']);
	}
	
	/**
	 * @see Action::execute()
	 */
	public function execute() {
		parent::execute();
		
		// check permission
		WCF::getUser()->checkPermission('admin.language.canEditLanguage');
		
		// export language
		require_once(WCF_DIR.'lib/system/language/LanguageEditor.class.php');
		$language = new LanguageEditor($this->languageID);	
		if (!$language->getLanguageID()) {
			throw new IllegalLinkException();
		}
		
		// send headers
		header('Content-Type: text/xml; charset='.CHARSET);
		header('Content-Disposition: attachment; filename="'.$language->getLanguageCode().'.xml"');
		
		// export
		$language->export();
		
		$this->executed();
	}
}
?>