//
// openWYSIWYG v1.0 Copyright (c) 2006 openWebWare.com
// This copyright notice MUST stay intact for use.
//
// An open source WYSIWYG editor for use in web based applications.
// For full source code and docs, visit http://www.openwebware.com/
//
// This library is free software; you can redistribute it and/or modify 
// it under the terms of the GNU Lesser General Public License as published 
// by the Free Software Foundation; either version 2.1 of the License, or 
// (at your option) any later version.
//
// This library is distributed in the hope that it will be useful, but 
// WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
// or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser General Public 
// License for more details.
//
// You should have received a copy of the GNU Lesser General Public License along 
// with this library; if not, write to the Free Software Foundation, Inc., 59 
// Temple Place, Suite 330, Boston, MA 02111-1307 USA 


/* ---------------------------------------------------------------------- *\
  Global Variables: Set global variables such as images directory, 
	                  WYSIWYG Height, Width, and CSS Directory.
\* ---------------------------------------------------------------------- */

// Images Directory
imagesDir = "icons/";

// CSS Directory
cssDir = "styles/";

// Popups Directory
popupsDir = "popups/";

// WYSIWYG Width and Height
wysiwygWidth = 500;
wysiwygHeight = 250;

// Include Style Sheet
document.write('<link rel="stylesheet" type="text/css" href="' +cssDir+ 'styles.css">\n');


/* ---------------------------------------------------------------------- *\
  Toolbar Settings: Set the features and buttons available in the WYSIWYG
	                  Toolbar.
\* ---------------------------------------------------------------------- */


// List of available font types
  var Fonts = new Array();
  Fonts[0] = "Arial";
  Fonts[1] = "Sans Serif";
  Fonts[2] = "Tahoma";
	Fonts[3] = "Verdana";
	Fonts[4] = "Courier New";
	Fonts[5] = "Georgia";
	Fonts[6] = "Times New Roman";
	Fonts[7] = "Impact";
  Fonts[8] = "Comic Sans MS";

// List of available block formats (not in use)
var BlockFormats = new Array();
  BlockFormats[0]  = "Address";
  BlockFormats[1]  = "Bulleted List";
  BlockFormats[2]  = "Definition";
	BlockFormats[3]  = "Definition Term";
	BlockFormats[4]  = "Directory List";
	BlockFormats[5]  = "Formatted";
	BlockFormats[6]  = "Heading 1";
	BlockFormats[7]  = "Heading 2";
	BlockFormats[8]  = "Heading 3";
	BlockFormats[9]  = "Heading 4";
	BlockFormats[10] = "Heading 5";
	BlockFormats[11] = "Heading 6";
	BlockFormats[12] = "Menu List";
	BlockFormats[13] = "Normal";
	BlockFormats[14] = "Numbered List";

// List of available font sizes
var FontSizes = new Array();
  FontSizes[0]  = "1";
  FontSizes[1]  = "2";
  FontSizes[2]  = "3";
	FontSizes[3]  = "4";
	FontSizes[4]  = "5";
	FontSizes[5]  = "6";
	FontSizes[6]  = "7";

// Order of available commands in toolbar one
var buttonName = new Array();
  buttonName[0]  = "bold";
  buttonName[1]  = "italic";
  buttonName[2]  = "underline";
	//buttonName[3]  = "strikethrough";
  buttonName[4]  = "seperator";
	buttonName[5]  = "subscript";
	buttonName[6]  = "superscript";
	buttonName[7]  = "seperator";
	buttonName[8]  = "justifyleft";
	buttonName[9]  = "justifycenter";
	buttonName[10] = "justifyright";
	buttonName[11] = "seperator";
	buttonName[12] = "unorderedlist";
	buttonName[13] = "orderedlist";
	buttonName[14] = "outdent";
	buttonName[15] = "indent";

// Order of available commands in toolbar two
var buttonName2 = new Array();
  buttonName2[0]  = "forecolor";
	buttonName2[1]  = "backcolor";
	buttonName2[2]  = "seperator";
	buttonName2[3]  = "cut";
	buttonName2[4]  = "copy";
	buttonName2[5]  = "paste";
	buttonName2[6]  = "seperator";
  buttonName2[7]  = "undo";
	buttonName2[8]  = "redo";
  buttonName2[9]  = "seperator";
	buttonName2[10]  = "inserttable";
  buttonName2[11]  = "insertimage";
  buttonName2[12]  = "createlink";
	buttonName2[13]  = "seperator";
	buttonName2[14]  = "viewSource";
	buttonName2[15]  = "seperator";
  buttonName2[16]  = "help";
	
// List of available actions and their respective ID and images
var ToolbarList = {
//Name              buttonID                 buttonTitle           buttonImage                            buttonImageRollover
  "bold":           ['Bold',                 'Bold',               imagesDir + 'bold_on.gif',               imagesDir + 'bold.gif'],
  "italic":         ['Italic',               'Italic',             imagesDir + 'italics_on.gif',            imagesDir + 'italics.gif'],
  "underline":      ['Underline',            'Underline',          imagesDir + 'underline_on.gif',          imagesDir + 'underline.gif'],
	"strikethrough":  ['Strikethrough',        'Strikethrough',      imagesDir + 'strikethrough_on.gif',      imagesDir + 'strikethrough.gif'],
	"seperator":      ['',                     '',                   imagesDir + 'seperator_on.gif',          imagesDir + 'seperator_on.gif'],
	"subscript":      ['Subscript',            'Subscript',          imagesDir + 'subscript_on.gif',          imagesDir + 'subscript.gif'],
	"superscript":    ['Superscript',          'Superscript',        imagesDir + 'superscript_on.gif',        imagesDir + 'superscript.gif'],
	"justifyleft":    ['Justifyleft',          'Justifyleft',        imagesDir + 'justify_left_on.gif',       imagesDir + 'justify_left.gif'],
	"justifycenter":  ['Justifycenter',        'Justifycenter',      imagesDir + 'justify_center_on.gif',     imagesDir + 'justify_center.gif'],
	"justifyright":   ['Justifyright',         'Justifyright',       imagesDir + 'justify_right_on.gif',      imagesDir + 'justify_right.gif'],
	"unorderedlist":  ['InsertUnorderedList',  'InsertUnorderedList',imagesDir + 'list_unordered_on.gif',     imagesDir + 'list_unordered.gif'],
	"orderedlist":    ['InsertOrderedList',    'InsertOrderedList',  imagesDir + 'list_ordered_on.gif',       imagesDir + 'list_ordered.gif'],
	"outdent":        ['Outdent',              'Outdent',            imagesDir + 'indent_left_on.gif',        imagesDir + 'indent_left.gif'],
	"indent":         ['Indent',               'Indent',             imagesDir + 'indent_right_on.gif',       imagesDir + 'indent_right.gif'],
	"cut":            ['Cut',                  'Cut',                imagesDir + 'cut_on.gif',                imagesDir + 'cut.gif'],
	"copy":           ['Copy',                 'Copy',               imagesDir + 'copy_on.gif',               imagesDir + 'copy.gif'],
  "paste":          ['Paste',                'Paste',              imagesDir + 'paste_on.gif',              imagesDir + 'paste.gif'],
	"forecolor":      ['ForeColor',            'ForeColor',          imagesDir + 'forecolor_on.gif',          imagesDir + 'forecolor.gif'],
	"backcolor":      ['BackColor',            'BackColor',          imagesDir + 'backcolor_on.gif',          imagesDir + 'backcolor.gif'],
	"undo":           ['Undo',                 'Undo',               imagesDir + 'undo_on.gif',               imagesDir + 'undo.gif'],
	"redo":           ['Redo',                 'Redo',               imagesDir + 'redo_on.gif',               imagesDir + 'redo.gif'],
	"inserttable":    ['InsertTable',          'InsertTable',        imagesDir + 'insert_table_on.gif',       imagesDir + 'insert_table.gif'],
	"insertimage":    ['InsertImage',          'InsertImage',        imagesDir + 'insert_picture_on.gif',     imagesDir + 'insert_picture.gif'],
	"createlink":     ['CreateLink',           'CreateLink',         imagesDir + 'insert_hyperlink_on.gif',   imagesDir + 'insert_hyperlink.gif'],
	"viewSource":     ['ViewSource',           'ViewSource',         imagesDir + 'view_source_on.gif',        imagesDir + 'view_source.gif'],
	"viewText":       ['ViewText',             'ViewText',           imagesDir + 'view_text_on.gif',          imagesDir + 'view_text.gif'],
	"help":           ['Help',                 'Help',               imagesDir + 'help_on.gif',               imagesDir + 'help.gif'],
	"selectfont":     ['SelectFont',           'SelectFont',         imagesDir + 'select_font.gif',        imagesDir + 'select_font_on.gif'],
	"selectsize":     ['SelectSize',           'SelectSize',         imagesDir + 'select_size.gif',        imagesDir + 'select_size_on.gif']
};



/* ---------------------------------------------------------------------- *\
  Function    : insertAdjacentHTML(), insertAdjacentText() and insertAdjacentElement()
  Description : Emulates insertAdjacentHTML(), insertAdjacentText() and 
	              insertAdjacentElement() three functions so they work with 
								Netscape 6/Mozilla
  Notes       : by Thor Larholm me@jscript.dk
\* ---------------------------------------------------------------------- */
if(typeof HTMLElement!="undefined" && !HTMLElement.prototype.insertAdjacentElement){
  HTMLElement.prototype.insertAdjacentElement = function
  (where,parsedNode)
	{
	  switch (where){
		case 'beforeBegin':
			this.parentNode.insertBefore(parsedNode,this)
			break;
		case 'afterBegin':
			this.insertBefore(parsedNode,this.firstChild);
			break;
		case 'beforeEnd':
			this.appendChild(parsedNode);
			break;
		case 'afterEnd':
			if (this.nextSibling) 
      this.parentNode.insertBefore(parsedNode,this.nextSibling);
			else this.parentNode.appendChild(parsedNode);
			break;
		}
	}

	HTMLElement.prototype.insertAdjacentHTML = function
  (where,htmlStr)
	{
		var r = this.ownerDocument.createRange();
		r.setStartBefore(this);
		var parsedHTML = r.createContextualFragment(htmlStr);
		this.insertAdjacentElement(where,parsedHTML)
	}


	HTMLElement.prototype.insertAdjacentText = function
  (where,txtStr)
	{
		var parsedText = document.createTextNode(txtStr)
		this.insertAdjacentElement(where,parsedText)
	}
};


// Create viewTextMode global variable and set to 0
// enabling all toolbar commands while in HTML mode
viewTextMode = 0;



/* ---------------------------------------------------------------------- *\
  Function    : generate_wysiwyg()
  Description : replace textarea with wysiwyg editor
  Usage       : generate_wysiwyg("textarea_id");
  Arguments   : textarea_id - ID of textarea to replace
\* ---------------------------------------------------------------------- */
function generate_wysiwyg(textareaID) {
 
  	// Hide the textarea 
	document.getElementById(textareaID).style.display = 'none'; 
	
  // Pass the textareaID to the "n" variable.
  var n = textareaID;
	
	// Toolbars width is 2 pixels wider than the wysiwygs
	toolbarWidth = parseFloat(wysiwygWidth) + 2;
	
  // Generate WYSIWYG toolbar one
  var toolbar;
  toolbar =  '<table cellpadding="0" cellspacing="0" border="0" class="toolba" style="width:' + toolbarWidth + 'px;"><tr><td style="width: 6px;"><img src="' +imagesDir+ 'seperator2.gif" alt="" hspace="3"></td>';
  
	// Create IDs for inserting Font Type and Size drop downs
	toolbar += '<td style="width: 90px;"><span id="FontSelect' + n + '"></span></td>';
	toolbar += '<td style="width: 60px;"><span id="FontSizes'  + n + '"></span></td>';
  
	// Output all command buttons that belong to toolbar one
	for (var i = 0; i <= buttonName.length;) { 
    if (buttonName[i]) {
	    var buttonObj            = ToolbarList[buttonName[i]];
		  var buttonID             = buttonObj[0];
	    var buttonTitle          = buttonObj[1];
      var buttonImage          = buttonObj[2];
		  var buttonImageRollover  = buttonObj[3];
	    
			if (buttonName[i] == "seperator") {
		    toolbar += '<td style="width: 12px;" align="center"><img src="' +buttonImage+ '" border=0 unselectable="on" width="2" height="18" hspace="2" unselectable="on"></td>';
			}
	    else {
		    toolbar += '<td style="width: 22px;"><img src="' +buttonImage+ '" border=0 unselectable="on" title="' +buttonTitle+ '" id="' +buttonID+ '" class="button1" onClick="formatText(this.id,\'' + n + '\');" onmouseover="if(className==\'button1\'){className=\'button1Over\'}; this.src=\'' + buttonImageRollover + '\';" onmouseout="if(className==\'button1Over\'){className=\'button1\'}; this.src=\'' + buttonImage + '\';" unselectable="on" width="20" height="20"></td>';
	    }
    }
    i++;
  }

  toolbar += '<td>&nbsp;</td></tr></table>';  

  // Generate WYSIWYG toolbar two
  var toolbara;
  toolbara = '<table cellpadding="0" cellspacing="0" border="0" class="toolbara" style="width:' + toolbarWidth + 'px;"><tr><td style="width: 6px;"><img src="' +imagesDir+ 'seperator2.gif" alt="" hspace="3"></td>';
 
  // Output all command buttons that belong to toolbar two
  for (var j = 0; j <= buttonName2.length;) {
    if (buttonName2[j]) {
	    var buttonObj            = ToolbarList[buttonName2[j]];
		  var buttonID             = buttonObj[0];
	    var buttonTitle          = buttonObj[1];
      var buttonImage          = buttonObj[2];
		  var buttonImageRollover  = buttonObj[3];
	  
		  if (buttonName2[j] == "seperator") {
		    toolbara += '<td style="width: 12px;" align="center"><img src="' +buttonImage+ '" border=0 unselectable="on" width="2" height="18" hspace="2" unselectable="on"></td>';
			}
	    else if (buttonName2[j] == "viewSource"){
		    toolbara += '<td style="width: 22px;">';
				toolbara += '<span id="HTMLMode' + n + '"><img src="'  +buttonImage+  '" border=0 unselectable="on" title="' +buttonTitle+ '" id="' +buttonID+ '" class="button1" onClick="formatText(this.id,\'' + n + '\');" onmouseover="if(className==\'button1\'){className=\'button1Over\'}; this.src=\'' +buttonImageRollover+ '\';" onmouseout="if(className==\'button1Over\'){className=\'button1\'}; this.src=\'' + buttonImage + '\';" unselectable="on"  width="20" height="20"></span>';
				toolbara += '<span id="textMode' + n + '"><img src="' +imagesDir+ 'view_text.gif" border=0 unselectable="on" title="viewText"          id="ViewText"       class="button1" onClick="formatText(this.id,\'' + n + '\');" onmouseover="if(className==\'button1\'){className=\'button1Over\'}; this.src=\'' +imagesDir+ 'view_text_on.gif\';"    onmouseout="if(className==\'button1Over\'){className=\'button1\'}; this.src=\'' +imagesDir+ 'view_text.gif\';" unselectable="on"  width="20" height="20"></span>';
	      toolbara += '</td>';
			}
	    else {
		    toolbara += '<td style="width: 22px;"><img src="' +buttonImage+ '" border=0 unselectable="on" title="' +buttonTitle+ '" id="' +buttonID+ '" class="button1" onClick="formatText(this.id,\'' + n + '\');" onmouseover="if(className==\'button1\'){className=\'button1Over\'}; this.src=\'' +buttonImageRollover+ '\';" onmouseout="if(className==\'button1Over\'){className=\'button1\'}; this.src=\'' + buttonImage + '\';" unselectable="on" width="20" height="20"></td>';
	    }
    }
    j++;
  }

  toolbara += '<td>&nbsp;</td></tr></table>';  
	
 	
	// Create iframe which will be used for rich text editing
	var iframe = '<table cellpadding="0" cellspacing="0" border="1" style="width:' + wysiwygWidth + 'px; height:' + wysiwygHeight + 'px;border: 1px inset #CCCCCC;"><tr><td valign="top">\n'
  + '<iframe frameborder="0" id="wysiwyg' + n + '"></iframe>\n'
  + '</td></tr></table>\n';

  // Insert after the textArea both toolbar one and two
  document.getElementById(n).insertAdjacentHTML("afterEnd", toolbar + toolbara + iframe);
	
  // Insert the Font Type and Size drop downs into the toolbar
	outputFontSelect(n);
	outputFontSizes(n); 
	
  // Hide the dynamic drop down lists for the Font Types and Sizes
  hideFonts(n);
	hideFontSizes(n);
	
	// Hide the "Text Mode" button1
	document.getElementById("textMode" + n).style.display = 'none'; 
	
	// Give the iframe the global wysiwyg height and width
  document.getElementById("wysiwyg" + n).style.height = wysiwygHeight + "px";
  document.getElementById("wysiwyg" + n).style.width = wysiwygWidth + "px";
	
	// Pass the textarea's existing text over to the content variable
  var content = document.getElementById(n).value;
	
	var doc = document.getElementById("wysiwyg" + n).contentWindow.document;
	
	// Write the textarea's content into the iframe
  doc.open();
  doc.write(content);
  doc.close();
	
	// Make the iframe editable in both Mozilla and IE
  doc.body.contentEditable = true;
  doc.designMode = "on";
	
  	// Update the textarea with content in WYSIWYG when user submits form
  var browserName = navigator.appName;
  if (browserName == "Microsoft Internet Explorer") {
    for (var idx=0; idx < document.forms.length; idx++) {
      document.forms[idx].attachEvent('onsubmit', function() { updateTextArea(n); });
    }
  }
  else {
  	for (var idx=0; idx < document.forms.length; idx++) {
    	document.forms[idx].addEventListener('submit',function OnSumbmit() { updateTextArea(n); }, true);
    }
  }
 	

};



/* ---------------------------------------------------------------------- *\
  Function    : formatText()
  Description : replace textarea with wysiwyg editor
  Usage       : formatText(id, n, selected);
  Arguments   : id - The execCommand (e.g. Bold)
                n  - The editor identifier that the command 
								     affects (the textarea's ID)
                selected - The selected value when applicable (e.g. Arial)
\* ---------------------------------------------------------------------- */
function formatText(id, n, selected) {

  // When user clicks toolbar button1 make sure it always targets its respective WYSIWYG
  document.getElementById("wysiwyg" + n).contentWindow.focus();
	
	// When in Text Mode these execCommands are disabled
	var formatIDs = new Array("FontSize","FontName","Bold","Italic","Underline","Subscript","Superscript","Strikethrough","Justifyleft","Justifyright","Justifycenter","InsertUnorderedList","InsertOrderedList","Indent","Outdent","ForeColor","BackColor","InsertImage","InsertTable","CreateLink");
  
	// Check if button1 clicked is in disabled list
	for (var i = 0; i <= formatIDs.length;) {
		if (formatIDs[i] == id) {
			 var disabled_id = 1; 
		}
	  i++;
	}
	
	// Check if in Text Mode and disabled button1 was clicked
	if (viewTextMode == 1 && disabled_id == 1) {
	  alert ("You are in HTML Mode. This feature has been disabled.");	
	}
	
	else {
	
	  // FontSize
	  if (id == "FontSize") {
      document.getElementById("wysiwyg" + n).contentWindow.document.execCommand("FontSize", false, selected);
	  }
	  
		// FontName
	  else if (id == "FontName") {
      document.getElementById("wysiwyg" + n).contentWindow.document.execCommand("FontName", false, selected);
	  }
	
	  // ForeColor and BackColor
    else if (id == 'ForeColor' || id == 'BackColor') {
      var w = screen.availWidth;
      var h = screen.availHeight;
      var popW = 210, popH = 165;
      var leftPos = (w-popW)/2, topPos = (h-popH)/2;
      var currentColor = _dec_to_rgb(document.getElementById("wysiwyg" + n).contentWindow.document.queryCommandValue(id));
   
	    window.open(popupsDir + 'select_color.html?color=' + currentColor + '&command=' + id + '&wysiwyg=' + n,'popup','location=0,status=0,scrollbars=0,width=' + popW + ',height=' + popH + ',top=' + topPos + ',left=' + leftPos);
    }
	  
		// InsertImage
	  else if (id == "InsertImage") {
      window.open(popupsDir + 'insert_image.html?wysiwyg=' + n,'popup','location=0,status=0,scrollbars=0,resizable=0,width=400,height=190');
	  }
	  
		// InsertTable
	  else if (id == "InsertTable") {
	    window.open(popupsDir + 'create_table.html?wysiwyg=' + n,'popup','location=0,status=0,scrollbars=0,resizable=0,width=400,height=360');
	  }
	  
		// CreateLink
	  else if (id == "CreateLink") {
	    window.open(popupsDir + 'insert_hyperlink.html?wysiwyg=' + n,'popup','location=0,status=0,scrollbars=0,resizable=0,width=300,height=110');
	  }
	  
		// ViewSource
    else if (id == "ViewSource") {
	    viewSource(n);
	  }
		
		// ViewText
		else if (id == "ViewText") {
	    viewText(n);
	  }

		// Help
		else if (id == "Help") {
	    window.open(popupsDir + 'about.html','popup','location=0,status=0,scrollbars=0,resizable=0,width=400,height=330');
	  }
	  
		// Every other command
	  else {
      document.getElementById("wysiwyg" + n).contentWindow.document.execCommand(id, false, null);
		}
  }
};



/* ---------------------------------------------------------------------- *\
  Function    : insertHTML()
  Description : insert HTML into WYSIWYG in rich text
  Usage       : insertHTML(<b>hello</b>, "textareaID")
  Arguments   : html - The HTML being inserted (e.g. <b>hello</b>)
                n  - The editor identifier that the HTML 
								     will be inserted into (the textarea's ID)
\* ---------------------------------------------------------------------- */
function insertHTML(html, n) {

  var browserName = navigator.appName;
	 	 
	if (browserName == "Microsoft Internet Explorer") {	  
	  document.getElementById('wysiwyg' + n).contentWindow.document.selection.createRange().pasteHTML(html);   
	} 
	 
	else {
	  var div = document.getElementById('wysiwyg' + n).contentWindow.document.createElement("div");
		 
		div.innerHTML = html;
		var node = insertNodeAtSelection(div, n);		
	}
	
}


/* ---------------------------------------------------------------------- *\
  Function    : insertNodeAtSelection()
  Description : insert HTML into WYSIWYG in rich text (mozilla)
  Usage       : insertNodeAtSelection(insertNode, n)
  Arguments   : insertNode - The HTML being inserted (must be innerHTML 
	                           inserted within a div element)
                n          - The editor identifier that the HTML will be 
								             inserted into (the textarea's ID)
\* ---------------------------------------------------------------------- */
function insertNodeAtSelection(insertNode, n) {
  // get current selection
  var sel = document.getElementById('wysiwyg' + n).contentWindow.getSelection();

  // get the first range of the selection
  // (there's almost always only one range)
  var range = sel.getRangeAt(0);

  // deselect everything
  sel.removeAllRanges();

  // remove content of current selection from document
  range.deleteContents();

  // get location of current selection
  var container = range.startContainer;
  var pos = range.startOffset;

  // make a new range for the new selection
  range=document.createRange();

  if (container.nodeType==3 && insertNode.nodeType==3) {

    // if we insert text in a textnode, do optimized insertion
    container.insertData(pos, insertNode.nodeValue);

    // put cursor after inserted text
    range.setEnd(container, pos+insertNode.length);
    range.setStart(container, pos+insertNode.length);
  } 
	
	else {
    var afterNode;
    
		if (container.nodeType==3) {
      // when inserting into a textnode
      // we create 2 new textnodes
      // and put the insertNode in between

      var textNode = container;
      container = textNode.parentNode;
      var text = textNode.nodeValue;

      // text before the split
      var textBefore = text.substr(0,pos);
      // text after the split
      var textAfter = text.substr(pos);

      var beforeNode = document.createTextNode(textBefore);
      afterNode = document.createTextNode(textAfter);

      // insert the 3 new nodes before the old one
      container.insertBefore(afterNode, textNode);
      container.insertBefore(insertNode, afterNode);
      container.insertBefore(beforeNode, insertNode);

      // remove the old node
      container.removeChild(textNode);
    } 
	
	  else {
      // else simply insert the node
      afterNode = container.childNodes[pos];
      container.insertBefore(insertNode, afterNode);
    }

    range.setEnd(afterNode, 0);
    range.setStart(afterNode, 0);
  }

  sel.addRange(range);
};

	

/* ---------------------------------------------------------------------- *\
  Function    : _dec_to_rgb
  Description : convert a decimal color value to rgb hexadecimal
  Usage       : var hex = _dec_to_rgb('65535');   // returns FFFF00
  Arguments   : value   - dec value
\* ---------------------------------------------------------------------- */

function _dec_to_rgb(value) {
  var hex_string = "";
  for (var hexpair = 0; hexpair < 3; hexpair++) {
    var myByte = value & 0xFF;            // get low byte
    value >>= 8;                          // drop low byte
    var nybble2 = myByte & 0x0F;          // get low nybble (4 bits)
    var nybble1 = (myByte >> 4) & 0x0F;   // get high nybble
    hex_string += nybble1.toString(16);   // convert nybble to hex
    hex_string += nybble2.toString(16);   // convert nybble to hex
  }
  return hex_string.toUpperCase();
};



/* ---------------------------------------------------------------------- *\
  Function    : outputFontSelect()
  Description : creates the Font Select drop down and inserts it into 
	              the toolbar
  Usage       : outputFontSelect(n)
  Arguments   : n   - The editor identifier that the Font Select will update
	                    when making font changes (the textarea's ID)
\* ---------------------------------------------------------------------- */
function outputFontSelect(n) {

  var FontSelectObj        = ToolbarList['selectfont'];
  var FontSelect           = FontSelectObj[2];
  var FontSelectOn         = FontSelectObj[3];
  
	Fonts.sort();
	var FontSelectDropDown = new Array;
	FontSelectDropDown[n] = '<table border="0" cellpadding="0" cellspacing="0"><tr><td onMouseOver="document.getElementById(\'selectFont' + n + '\').src=\'' + FontSelectOn + '\';" onMouseOut="document.getElementById(\'selectFont' + n + '\').src=\'' + FontSelect + '\';"><img src="' + FontSelect + '" id="selectFont' + n + '" width="85" height="20" onClick="showFonts(\'' + n + '\');" unselectable="on"><br>';
	FontSelectDropDown[n] += '<span id="Fonts' + n + '" class="dropdown1" style="width: 145px;">';

	for (var i = 0; i <= Fonts.length;) {
	  if (Fonts[i]) {
      FontSelectDropDown[n] += '<button1 type="button1" onClick="formatText(\'FontName\',\'' + n + '\',\'' + Fonts[i] + '\')\; hideFonts(\'' + n + '\');" onMouseOver="this.className=\'mouseOver\'" onMouseOut="this.className=\'mouseOut\'" class="mouseOut" style="width: 120px;"><table cellpadding="0" cellspacing="0" border="0"><tr><td align="left" style="font-family:' + Fonts[i] + '; font-size: 12px;">' + Fonts[i] + '</td></tr></table></button1><br>';	
    }	  
	  i++;
  }
	FontSelectDropDown[n] += '</span></td></tr></table>';
	document.getElementById('FontSelect' + n).insertAdjacentHTML("afterBegin", FontSelectDropDown[n]);
};



/* ---------------------------------------------------------------------- *\
  Function    : outputFontSizes()
  Description : creates the Font Sizes drop down and inserts it into 
	              the toolbar
  Usage       : outputFontSelect(n)
  Arguments   : n   - The editor identifier that the Font Sizes will update
	                    when making font changes (the textarea's ID)
\* ---------------------------------------------------------------------- */
function outputFontSizes(n) {

  var FontSizeObj        = ToolbarList['selectsize'];
  var FontSize           = FontSizeObj[2];
  var FontSizeOn         = FontSizeObj[3];

	FontSizes.sort();
	var FontSizesDropDown = new Array;
	FontSizesDropDown[n] = '<table border="0" cellpadding="0" cellspacing="0"><tr><td onMouseOver="document.getElementById(\'selectSize' + n + '\').src=\'' + FontSizeOn + '\';" onMouseOut="document.getElementById(\'selectSize' + n + '\').src=\'' + FontSize + '\';"><img src="' + FontSize + '" id="selectSize' + n + '" width="49" height="20" onClick="showFontSizes(\'' + n + '\');" unselectable="on"><br>';
  FontSizesDropDown[n] += '<span id="Sizes' + n + '" class="dropdown1" style="width: 170px;">';

	for (var i = 0; i <= FontSizes.length;) {
	  if (FontSizes[i]) {
      FontSizesDropDown[n] += '<button1 type="button1" onClick="formatText(\'FontSize\',\'' + n + '\',\'' + FontSizes[i] + '\')\;hideFontSizes(\'' + n + '\');" onMouseOver="this.className=\'mouseOver\'" onMouseOut="this.className=\'mouseOut\'" class="mouseOut" style="width: 145px;"><table cellpadding="0" cellspacing="0" border="0"><tr><td align="left" style="font-family: arial, verdana, helvetica;"><font size="' + FontSizes[i] + '">size ' + FontSizes[i] + '</font></td></tr></table></button1><br>';	
    }	  
	  i++;
  }
	FontSizesDropDown[n] += '</span></td></tr></table>';
	document.getElementById('FontSizes' + n).insertAdjacentHTML("afterBegin", FontSizesDropDown[n]);
};



/* ---------------------------------------------------------------------- *\
  Function    : hideFonts()
  Description : Hides the list of font names in the font select drop down
  Usage       : hideFonts(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function hideFonts(n) {
  document.getElementById('Fonts' + n).style.display = 'none'; 
};



/* ---------------------------------------------------------------------- *\
  Function    : hideFontSizes()
  Description : Hides the list of font sizes in the font sizes drop down
  Usage       : hideFontSizes(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function hideFontSizes(n) {
  document.getElementById('Sizes' + n).style.display = 'none'; 
};



/* ---------------------------------------------------------------------- *\
  Function    : showFonts()
  Description : Shows the list of font names in the font select drop down
  Usage       : showFonts(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function showFonts(n) { 
  if (document.getElementById('Fonts' + n).style.display == 'block') {
    document.getElementById('Fonts' + n).style.display = 'none';
	}
  else {
    document.getElementById('Fonts' + n).style.display = 'block'; 
    document.getElementById('Fonts' + n).style.position = 'absolute';		
  }
};



/* ---------------------------------------------------------------------- *\
  Function    : showFontSizes()
  Description : Shows the list of font sizes in the font sizes drop down
  Usage       : showFonts(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function showFontSizes(n) { 
  if (document.getElementById('Sizes' + n).style.display == 'block') {
    document.getElementById('Sizes' + n).style.display = 'none';
	}
  else {
    document.getElementById('Sizes' + n).style.display = 'block'; 
    document.getElementById('Sizes' + n).style.position = 'absolute';		
  }
};



/* ---------------------------------------------------------------------- *\
  Function    : viewSource()
  Description : Shows the HTML source code generated by the WYSIWYG editor
  Usage       : showFonts(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function viewSource(n) {
  var getDocument = document.getElementById("wysiwyg" + n).contentWindow.document;
  var browserName = navigator.appName;
	
	// View Source for IE 	 
  if (browserName == "Microsoft Internet Explorer") {
    var iHTML = getDocument.body.innerHTML;
    getDocument.body.innerText = iHTML;
	}
 
  // View Source for Mozilla/Netscape
  else {
    var html = document.createTextNode(getDocument.body.innerHTML);
    getDocument.body.innerHTML = "";
    getDocument.body.appendChild(html);
	}
  
	// Hide the HTML Mode button1 and show the Text Mode button1
  document.getElementById('HTMLMode' + n).style.display = 'none'; 
	document.getElementById('textMode' + n).style.display = 'block';
	
	// set the font values for displaying HTML source
	getDocument.body.style.fontSize = "12px";
	getDocument.body.style.fontFamily = "Courier New"; 
	
  viewTextMode = 1;
};



/* ---------------------------------------------------------------------- *\
  Function    : viewSource()
  Description : Shows the HTML source code generated by the WYSIWYG editor
  Usage       : showFonts(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function viewText(n) { 
  var getDocument = document.getElementById("wysiwyg" + n).contentWindow.document;
  var browserName = navigator.appName;
	
	// View Text for IE 	  	 
  if (browserName == "Microsoft Internet Explorer") {
    var iText = getDocument.body.innerText;
    getDocument.body.innerHTML = iText;
	}
  
	// View Text for Mozilla/Netscape
  else {
    var html = getDocument.body.ownerDocument.createRange();
    html.selectNodeContents(getDocument.body);
    getDocument.body.innerHTML = html.toString();
	}
  
	// Hide the Text Mode button1 and show the HTML Mode button1
  document.getElementById('textMode' + n).style.display = 'none'; 
	document.getElementById('HTMLMode' + n).style.display = 'block';
	
	// reset the font values
  getDocument.body.style.fontSize = "";
	getDocument.body.style.fontFamily = ""; 
	viewTextMode = 0;
};



/* ---------------------------------------------------------------------- *\
  Function    : updateTextArea()
  Description : Updates the text area value with the HTML source of the WYSIWYG
  Usage       : updateTextArea(n)
  Arguments   : n   - The editor identifier (the textarea's ID)
\* ---------------------------------------------------------------------- */
function updateTextArea(n) {
  document.getElementById(n).value = document.getElementById("wysiwyg" + n).contentWindow.document.body.innerHTML;
};