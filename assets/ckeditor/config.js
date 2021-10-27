/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	config.extraPlugins='imagepaste'; 
	config.enterMode = CKEDITOR.ENTER_BR;
	config.autoParagraph = false;
	config.extraPlugins = 'youtube';
	config.youtube_width = '640';
	config.youtube_height = '480';
	config.youtube_responsive = true;
	config.youtube_related = true;
	config.youtube_older = false;
	config.youtube_privacy = false;
	config.youtube_autoplay = false;
	config.youtube_controls = true;
	config.youtube_disabled_fields = ['txtEmbed', 'chkAutoplay'];
  config.extraPlugins = 'mathjax';
  config.mathJaxLib = '//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML';
  config.removePlugins = 'blockquote,image,save,flash,iframe,tabletools,pagebreak,templates,about,showblocks,newpage,language,print,div';
  config.removeButtons = 'Print,Form,TextField,Textarea,Button,CreateDiv,PasteText,PasteFromWord,Select,HiddenField,Radio,Checkbox,ImageButton,Anchor,BidiLtr,BidiRtl,Indent,Outdent';
	config.font_names = 
	'Mallanna-Regular;' + 
	'Ramabhadra-Regular;' + 
	config.font_names; 
	 //config.uiColor = '#AADC6E';
};
