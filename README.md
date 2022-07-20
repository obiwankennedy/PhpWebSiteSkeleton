trPhpWebSiteSkeleton
====================

Template for php web site.
It is probably not working right now but you can find online website using it: 

* http://nwod.rolisteam.org/ [online]
* https://github.com/obiwankennedy/french_talking_clock_game/tree/main/site [source code]



```
├── include
│   ├── connection
│   │   └── driversql.inc.php
│   ├── css
│   │   ├── jquery.tagsinput.css
│   │   └── nwod.css
│   ├── js
│   │   ├── after.js
│   │   ├── jquery-2.0.3.js
│   │   ├── jquery-2.0.3.min.js
│   │   ├── jquery.tagsinput.min.js
│   │   ├── jquery-ui.js
│   │   ├── js
│   │   │   ├── lib.js
│   │   │   └── prototype.js
│   │   ├── lib.js
│   │   └── prototype.js
│   ├── libphp
│   │   ├── lib.php
│   │   └── session_lib.php
│   ├── resources
│   │   └── README.md
│   ├── template
│   │   └── template_z.html
│   └── theme
│       └── vtr
│           └── style.css
├── index.php
├── LICENSE
├── menu.php
├── modules
│   ├── default
│   │   └── index.php
│   └── page2
│       └── index.php
└── README.md

```

# Include directory

Everything software component that should be include in php or html pages: Lib, framework, classes, css, js, images, font, classes…


# modules 

each module reprents a feature of the website or a page.

# menu.php

fetch data to set the menus on the pages

# index.php 

Basically the web site don't allow to go to other page that the main index. But the main index reads parameter to access the content the user want. 

To display page2.php. 
You must go the url: http://mysite.fr/page2  (which in fact it is equivalent to http://mysite.fr/index.php?path=page2) (see the .htaccess file for more details).




