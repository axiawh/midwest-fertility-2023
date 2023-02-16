(function() {
		tinymce.PluginManager.add('lefttextbox', function( editor, url ) {
		editor.addButton( 'lefttextbox', {
			 title: 'Left Text Box',
			icon: 'wp_page',
			onclick: function() {
				editor.insertContent('[lefttextbox]Place Your Content Here![/lefttextbox]');
			}
		});
	});
	
	
	tinymce.PluginManager.add('righttextbox', function( editor, url ) {
		editor.addButton( 'righttextbox', {
			 title: 'Right Text Box',
			 icon: 'wp_page',
			onclick: function() {
				editor.insertContent('[righttextbox]Place Your Content Here![/righttextbox]');
			}
		});
	});
	
	tinymce.PluginManager.add('dropcap', function( editor, url ) {
		editor.addButton( 'dropcap', {
			title : 'Add a Drop Cap Letter',
			 icon: 'backcolor',
			onclick: function() {
				editor.insertContent('[dropcap]Place Your Content Here![/dropcap]');
			}
		});
	});
	
	
	tinymce.PluginManager.add('popover', function( editor, url ) {
		editor.addButton( 'popover', {
			 title : 'Add a PopOver',
			 icon: 'blockquote',
			onclick: function() {
				editor.insertContent('[popover size="btn-default" color="btn-midwest" popcontent="Hello I am a PopOver" poptitle="I am a PopOver Cloud!" fa="fas fa-comments" placement="auto" trigger="hover"]Enter Your Content Between this area Here.[/popover]');
			}
		});
	});
tinymce.PluginManager.add('bstooltip', function( editor, url ) {
		editor.addButton( 'bstooltip', {
			 title : 'Add a Tooltip',
			 icon: 'wp_help',
			onclick: function() {
				editor.insertContent('[bstooltip size="btn-default" color="btn-midwest" tooltip="Hello I am a ToolTip!" fa="fas fa-envelope" placement="auto" trigger="hover"]Enter Your Content Between this area Here.[/bstooltip]');
			}
		});
	});	

		tinymce.PluginManager.add('highlightbox', function( editor, url ) {
		editor.addButton( 'highlightbox', {
			  title : 'Add a Highlight Box',
			 icon: 'wp_more',
			onclick: function() {
				editor.insertContent('[highlightbox color="alert-success"]Place Text Here.[/highlightbox]');
			}
		});
	});
	
	tinymce.PluginManager.add('bsbutton', function( editor, url ) {
		editor.addButton( 'bsbutton', {
			  title : 'Add a Button',
			 icon: 'bold',
			onclick: function() {
				editor.insertContent('[bsbutton size="btn-default" color="btn-midwest" fa="fas fa-envelope" url="http://www.domain.com" target="_parent"]Enter Your Content Between this area Here[/bsbutton]');
			}
		});
	});
	
	tinymce.PluginManager.add('bsdownloadbutton', function( editor, url ) {
		editor.addButton( 'bsdownloadbutton', {
			  title : 'Add a Download Button',
			 icon: 'bold',
			onclick: function() {
				editor.insertContent('[bsdownloadbutton size="btn-default" color="btn-midwest" fa="fas fa-arrow-circle-down" url="http://www.domain.com" target="_parent" download="downloadpdf"]Download Document[/bsdownloadbutton]');
			}
		});
	});
	
	
	tinymce.PluginManager.add('collapse', function( editor, url ) {
		editor.addButton( 'collapse', {
			  title : 'Add an Collapsible Accordion',
			 icon: 'alignjustify',
			onclick: function() {
				editor.insertContent('[collapse size="btn-default" color="btn-midwest" hash="RENAMEME" buttonlabel="Read More"]Enter Your Content Here!!![/collapse]');
			}
		});
	});

tinymce.PluginManager.add('fa', function( editor, url ) {
		editor.addButton( 'fa', {
			 title: 'Add a Font Awesome Icon',
			 icon: 'pastetext',
			onclick: function() {
				editor.insertContent('[fa size="fa-2x" icon="fas fa-cloud-download-alt"]');
			}
		});
	});	
tinymce.PluginManager.add('twocolumns', function( editor, url ) {
		editor.addButton( 'twocolumns', {
			 title: 'Add a 2 Column Content Set',
			 icon: 'alignleft',
			onclick: function() {
				editor.insertContent('[twocolumns][column]Column 1 Content[/column][column]Column 2 Content[/column][/twocolumns]');
			}
		});
	});		
tinymce.PluginManager.add('threecolumns', function( editor, url ) {
		editor.addButton( 'threecolumns', {
			 title: 'Add a 3 Column Content Set',
			 icon: 'alignleft',
			onclick: function() {
				editor.insertContent('[threecolumns][column]Column 1 Content[/column][column]Column 2 Content[/column][column]Column 3 Content[/column][/threecolumns]');
			}
		});
	});		
	
tinymce.PluginManager.add('fourcolumns', function( editor, url ) {
		editor.addButton( 'fourcolumns', {
			 title: 'Add a 4 Column Content Set',
			 icon: 'alignleft',
			onclick: function() {
				editor.insertContent('[fourcolumns][column]Column 1 Content[/column][column]Column 2 Content[/column][column]Column 3 Content[/column][column]Column 4 Content[/column][/fourcolumns]');
			}
		});
	});	
	
tinymce.PluginManager.add('scrollbox', function( editor, url ) {
		editor.addButton( 'scrollbox', {
			 title: 'Add a Box with Scroll Bar',
			 icon: 'pluscircle',
			onclick: function() {
				editor.insertContent('[scrollbox scrollboxtitle="ENTER SCROLL BOX TITLE HERE"]ENTER SCROLL BOX CONTENT HERE[/scrollbox]');
			}
		});
	});	

})();