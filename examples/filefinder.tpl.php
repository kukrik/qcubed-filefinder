<?php require(QCUBED_CONFIG_DIR . '/header.inc.php'); ?>

<style>
    body, html {background-color: #ffffff;}
    body {font-size: medium;}
    p, footer {font-size: medium;}
    .btn-orange {color: #fff;background-color: #f36118;border-color: #e44c14;}
    .btn-orange:hover, .btn-orange:focus, .btn-orange.active {color: #fff;background-color: #e44c14;border-color: #e44c14;}
    i {padding: 3px 0;}
    .icon-set, .btn-icon {display: inline-block;font-size: 16px;color: #7d898d;background-color: transparent;width: 38px;padding: 7px;text-align: center;vertical-align: middle;cursor: pointer;}
    .icon-set:hover, .btn-icon:hover {background: #f6f6f6;color: inherit;text-decoration: none;border: #ddd 1px solid;border-radius: 4px;}
</style>

<?php $this->RenderBegin(); ?>

<div class="instructions">
    <h1 class="instruction_title" style="padding-bottom: 15px;">Simple Examples: Options for Implementing Pop-Up Windows</h1>
</div>
<p>At times, you may require a quick and effortless method to search for and retrieve data from another PHP page through a pop-up window, among other functionalities.</p>
<p>This straightforward Filefinder plugin serves this purpose aptly and can be utilized repeatedly. To achieve this, you'll need to add one or more buttons that can trigger a pop-up according to your requirements. Each pop-up can be tailored to accommodate various datasets or other content.</p>
<p>Here's a simple example: Begin by specifying the data-popup button: 'some name tag'; at this stage, configuration is necessary:</p>
<code>
    $button = new Bs\Button($this);
    $button-> etc...
    $button->setDataAttribute('popup', 'some name tag');

    $object = new Q\Plugin\FileFinder($this);
    $object->PopupUrl = "finder.php"; // Any php page
    $object->TargetPopupName = 'some name tag';
</code>
<p>The default width and height of the popup window are set to 95%. It is possible to adjust the dimensions of the popup
    to be smaller. For this, you can use the following syntax:</p>
<code>
    $object->PopupWidth = '...%';
    $object->PopupHeight = '...%';
</code>
<p>Replace '...%' with the desired percentage value for width and height respectively.</p>

<?= _r($this->objFileFinder); ?>
<?= _r($this->objFileFinder1); ?>

<div style="margin-top: 25px; margin-bottom: 25px;">
    <?= _r($this->btnPopup); ?>
    <?= _r($this->btnPopup1); ?>
    <?= _r($this->btnPopup2); ?>
</div>

<p>In this example, we are using finder.php, which is based on FileHandler: https://github.com/kukrik/qcubed-filemanager.</p>
<p>Finder is placed in a popup window, where you can make some configurations as desired.</p>
<p>If you want to limit file selection by file type, you can change the default values of LockedDocuments and LockedImages to true on lines 168-169 in finder.php.</p>
<p>Additionally, you need to go to line 2659 to view and configure it. Please follow the instructions and recommendations provided there.</p>
<code>
    // Here, the "files" table needs to be updated to indicate that the selected image(s) are now locked.
    // If this is not done, the file manager will not provide accurate information about whether
    // the files are free or not. This is to prevent accidentally deleting files that are in use by others.
    $objFiles = Files::loadById($arrSome["data-id"]);
    $objFiles->setLockedFile($objFiles->getLockedFile() + 1);
    //$objFiles->save();


    // First, you need to create your own table with your chosen name and define the necessary columns.
    // However, here you must definitely add a column named "file_id", where you will pull the "id" value
    // from the "files" table.
    //
    //This is necessary so that when you need to delete from your table, you can release the lock in
    // the "files" table based on the "file_id". This ensures that FileHandler reflects the correct
    // information to other users.

    // $objSome = new Some();
    // $objSome->setFileId($arrSome["data-id"]);
    // $objSome->.... etc;
    // $objSome->.... etc;
</code>

<?php $this->RenderEnd(); ?>

<?php require(QCUBED_CONFIG_DIR . '/footer.inc.php'); ?>
