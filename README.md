# Say Hello to Blockly

Blockly is a WordPress starter theme built to support "Gutenberg" editor blocks. Like [_s], this is a starter theme. You don't need to add a child theme - just start hacking!

### Theme Highlights
- **Gutenberg Ready**: This theme is made for WordPress’s [Gutenberg] block editor. Every block has it's own `.scss` file. Checkout [/styles/blocks].
- **Extenable Structure**: Styles, scripts and PHP includes are organized so you can easily add particular content you need.
- **SASS ready**: Key theme parts are segmented into corresponding SASS files.

### Getting Started
1. Install.
2. Activate.
3. Edit.

### Updating Styles
Lots of thought went into Blockly's structure. Checkout [/styles]. We're being explicit, while avoiding redundancy. All dependent styles are compiled into `styles.scss` and I've added easy to understand notes.

### Required Plugins
To run Blockly properly, you'll need version of WordPress. [Advanced Custom Fields] is also required to hide and show content titles. You also will need a SASS compiler to generate CSS from the SCSS. 

### Custom Fields
Blockly includes a few features, not usually included with themes. First, you can add an action button or search form to the menu with a "Header Menu" display location. You can also hide or show content tiles by toggling the "Hide title?" meta field when editing a post. Both these features rely on [Advanced Custom Fields].

### Contributing
This is an open repo! Add [Issues], [Fork], watch and contribute.

### Issue Reporting and Questions
Issues and questions can be added under my open repo's [Issues] tab. 

This theme is currently developed by me, [@bbertucc], and folks in my company, [Decubing].

Happy hacking!

-Bb.

[_s]:https://github.com/Automattic/_s
[Gutenberg]:https://wordpress.org/gutenberg/
[/styles/blocks]:https://github.com/bbertucc/blockly/tree/master/styles/blocks
[/styles]:https://github.com/bbertucc/blockly/tree/master/styles
[Advanced Custom Fields]:https://advancedcustomfields.com
[Issues]:https://github.com/bbertucc/blockly/issues
[Fork]:https://github.com/bbertucc/blockly/fork
[@bbertucc]:https://github.com/bbertucc
[Decubing]:http://decubing.com
