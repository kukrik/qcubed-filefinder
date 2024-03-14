<?php
require_once('qcubed.inc.php');

error_reporting(E_ALL); // Error engine - always ON!
ini_set('display_errors', TRUE); // Error display - OFF in production env or real server
ini_set('log_errors', TRUE); // Error logging

use QCubed as Q;
use QCubed\Action\ActionParams;
use QCubed\Jqui\Event\SelectableStop;
use QCubed\Project\Application;
use QCubed\Bootstrap as Bs;
use QCubed\Project\Control\ControlBase;
use QCubed\Project\Control\FormBase as Form;
use QCubed\Query\QQ;

class ExamplesForm extends Form
{
    protected $objFileFinder;
    protected $objFileFinder1;

    protected $btnPopup;
    protected $btnPopup1;
    protected $btnPopup2;

    protected function formCreate()
    {
        $this->objFileFinder = new Q\Plugin\FileFinder($this);
        $this->objFileFinder->PopupUrl = "finder.php";
        $this->objFileFinder->TargetPopupName = 'popup';

        $this->objFileFinder1 = new Q\Plugin\FileFinder($this);
        $this->objFileFinder1->PopupUrl = "second_popup.html";
        $this->objFileFinder1->PopupWidth = '30%';
        $this->objFileFinder1->PopupHeight = '30%';
        $this->objFileFinder1->TargetPopupName = 'second_popup';

        $this->btnPopup = new Bs\Button($this);
        $this->btnPopup->Text = ' Add files';
        $this->btnPopup->Glyph = 'fa fa-link';
        $this->btnPopup->CssClass = 'btn btn-orange';
        $this->btnPopup->setDataAttribute('popup', 'popup');

        $this->btnPopup1 = new Bs\Button($this);
        $this->btnPopup1->Text = ' Second popup';
        $this->btnPopup1->CssClass = 'btn btn-primary';
        $this->btnPopup1->setDataAttribute('popup', 'second_popup');

        $this->btnPopup2 = new Bs\Button($this);
        $this->btnPopup2->Glyph = 'fa fa-link';
        $this->btnPopup2->Tip = true;
        $this->btnPopup2->ToolTip = t('Add files');
        $this->btnPopup2->CssClass = 'btn btn-icon btn-xs';
        $this->btnPopup2->setDataAttribute('popup', 'popup');
    }
}
ExamplesForm::Run('ExamplesForm');