/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	// activate plugin save toolbar
	// textarea must wrapped by form html tag
	config.extraPlugins = "save";
	config.language = "en";
	config.uiColor = "#aaaaaa";
	config.height = 400;
	// skin
	config.skin = "kama";
};
