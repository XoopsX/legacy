<?php
/**
 *
 * @package Legacy
 * @version $Id: BlockInstallFilterForm.class.php,v 1.3 2008/09/25 15:11:19 kilica Exp $
 * @copyright Copyright 2005-2007 XOOPS Cube Project  <https://github.com/xoopscube/legacy>
 * @license https://github.com/xoopscube/legacy/blob/master/docs/GPL_V2.txt GNU GENERAL PUBLIC LICENSE Version 2
 *
 */

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

require_once XOOPS_MODULE_PATH . "/legacy/admin/forms/BlockFilterForm.class.php";

class Legacy_BlockInstallFilterForm extends Legacy_BlockFilterForm
{
    public function _getVisible()
    {
        return 0;
    }
}
