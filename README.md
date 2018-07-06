# My WordPress Starter Theme, Made for Gutenberg

This repo contains my WordPress starter theme. This theme includes many of my standards after 10+ developing/designing websites.

### Theme Highlights
- *Gutenberg Ready*: This theme is made for WordPress's upcoming editor, [Gutenberg]. 
- *Exensible Structure*: Styles, scripts and PHP includes are organized so you can easily add particular content you need.
- *SASS-ready*: Key theme parts are segmented into corresponding SASS files.
- *Font Awesome Integrated*: [Font Awesome] is included in this theme. Simple add your `$fa-var-` and include `fa-icon()`.

This theme is a bit of an evolution of [a gist] that I wrote about organizing WordPress theme code. 

### Getting Started
Follow these steps to integrate the theme:
1. Install [Gutenberg] (version 5+)
2. Install & activate the theme.

### Styling the Theme
Lots of thought went into the structure in the `/styles` folder. I'm trying to be explicit, while avoiding redundancy. All SCSS is pulled into `style.scss`. In that file, you can update the theme name and add any external fonts. You should then move to `_variables.scss`, where all the theme variables are stored. After that, I would jump into any one of the files (they all should be pretty straight forward and most correspond with template parts).

### Required Plugins
To run the theme properly, you'll need [Gutenberg]. You also will need a SASS compiler to spit out CSS from the SCSS I've included. 

### Contributing
The `master` branch includes the most stable site build. Other branches are feature specific. 

I actively update the theme to incorporate stable technology, architecture, and best practices. [_s] and [Sage] loosely inspired my theme's' architecture. [@mdo]'s [code guide] was also an inspiration. I love to follow [DRY] principles and keep features and elements modular when possible. That said, I also love to keep code explicit and readable.

### Issue Reporting and Questions
Issues and questions can be added under this repo's ["Issues" tab]. You can always send me a message, [@bbertucc].

Happy hacking!

-Bb.

[Font Awesome]:http://fontawesome.io/cheatsheet/
[Gutenberg]:https://wordpress.org/gutenberg/
[a gist]:https://gist.github.com/bbertucc/0918e342a8c981e78e88e714cde1e9d5
[Gutenberg]:https://wordpress.org/gutenberg/
[@bbertucc]:https://github.com/bbertucc
["Issues" tab]:https://github.com/lowling/boilerplate.decubing.com/issues
