/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

$url_ckfinder = $('.base_url').val() + '/backend/plugins/';

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = $url_ckfinder + 'ckfinder/ckfinder.php';
	config.filebrowserImageBrowseUrl = $url_ckfinder + 'ckfinder/ckfinder.php';	 
	config.filebrowserFlashBrowseUrl = $url_ckfinder + 'ckfinder/ckfinder.php?type=Flash';	 
	config.filebrowserUploadUrl = $url_ckfinder + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';	 
	config.filebrowserImageUploadUrl = $url_ckfinder + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = $url_ckfinder + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.enterMode = 2;
	config.shiftEnterMode = 1;
	config.toolbar = [
		{ name: 'document', items: [ 'Print' ] },
		{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
		{ name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
		{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'CopyFormatting' ] },
		{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
		{ name: 'align', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
		{ name: 'links', items: [ 'Link', 'Unlink' ] },
		{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
		{ name: 'insert', items: [ 'Image', 'Html5video', 'Youtube', 'Table', 'Smiley' ] },
		{ name: 'tools', items: [ 'Maximize' ] },
		{ name: 'editing', items: [ 'Scayt' ] }
	];
	config.extraPlugins = 'image2,html5video,widget,widgetselection,clipboard,lineutils,youtube';
	config.language = 'vi';
	config.height = 500;
	config.allowedContent = true;
	config.removePlugins = 'iframe';
	config.extraAllowedContent = 'p(*)[*]{*};div(*)[*]{*};li(*)[*]{*};ul(*)[*]{*};iframe(*)[*]{*}';
};
