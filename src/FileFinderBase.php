<?php

namespace QCubed\Plugin;

use QCubed as Q;
use QCubed\Bootstrap\Bootstrap;
use QCubed\Control\FormBase;
use QCubed\Control\ControlBase;

/**
 * Class FileFinder
 *
 * @package QCubed\Plugin
 */

class FileFinderBase extends FileFinderGen
{
    /**
     * @param $objParentObject
     * @param $strControlId
     * @throws Caller
     */
    public function __construct($objParentObject, $strControlId = null)
    {
        parent::__construct($objParentObject, $strControlId);

        $this->registerFiles();
    }

    /**
     * @throws Caller
     */
    protected function registerFiles()
    {
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/custom.js");
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/dayjs.min.js");
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/jquery.slimscroll.js");
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/qcubed.filefinder.js");
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/qcubed.fileinfo.js");
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/qcubed.filemanager.js");
        $this->AddJavascriptFile(QCUBED_FILEFINDER_ASSETS_URL . "/js/qcubed.uploadhandler.js");
        Bootstrap::loadJS($this);
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/awesome-bootstrap-checkbox.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/custom.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/font-awesome.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/jquery.fileupload.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/jquery.fileupload-ui.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/qcubed.fileinfo.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/qcubed.filemanager.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/qcubed.uploadhandler.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/select2-web-vauu.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/toastr.css");
        $this->addCssFile(QCUBED_FILEFINDER_ASSETS_URL . "/css/toastr.fontawesome.css");
        $this->AddCssFile(QCUBED_BOOTSTRAP_CSS); // make sure they know
    }
}