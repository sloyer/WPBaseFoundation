#WPBaseFoundation

##Theme is no longer supported
First, let me say thanks for those who have been utlizing this bare minimal Foundation theme. It saddens me to say that I do not reccomend using this theme anymore as it no longer has support by me and is outdated. I switched employers and since then this theme has suffered as I had no need for it. 

I am excited to announce I am creating a new minimal base theme utlizing Foundation but more importantly will be utlizing the Twig templating engine. 

When the theme is released I will post a link here!

Also feel free to use this theme still, the repo will remain public but use at your own risk. 

##A few notes

A pretty much blank theme, with Foundation5 utilizing Compass/Sass. This is meant to be a pretty much blank theme, nothing more than the tools to get started. Think of it like Bones or Blankslate. Only use what you need.

#### Please Feel free to Contribute back
The idea for this theme is just to be a blank starter theme any Developer/Designer can enjoy using, cleaner base template files, more functions that can be uncommented and used, Mixins, Structure, anything you find useful, feel free to put a pull request in.

#Foundation 5

1. This theme is utulizing Zurb's Foundation 5. 
2. Its already set up and ready to rock. Simply just start laying out your grids in your templates or Sass.
3. To Start, just the Grid is being imported, you can import other Foundation Components throught the _settings.scss file; including the Kitchen Sink.
4. If you ever need to upgrade foundation, just run "foundation update" from the command line from the themes folder.
5. By Default, only the Foundation Grid is in place, you can import select components or the kitchen sink in the Foundation Setting
6. Foundation settings are set in 'scss/_settings.scss'.
7. By Default, a Mixin is in place setting the breakpoint of grid at 768px, you can of course change this.

#Javascript

1. Foundation is Initialized in the footer.php.
2. Foundation.min.js is register and enqueue in the functions.php - This load all Foundation Core and all Javascript plugins. To be selective with what Foundation/JS you want to load visit - http://foundation.zurb.com/docs/javascript.html

#SCSS

1. Compile your Sass by running 'compass watch' from the command line in your themes directory.
2. You will Need the Compass Ruby Gem.

#SMACSS
1. I try to follow my own adaption of the "SMACSS" worfklow, you don't have to but you should least read about it @ http://smacss.com

#Sass Globbing

1. Sass Globbing, is an awesome tool created by Chris Eppstein.
It allows us to import multiple Sass (In this theme it's including multiple Components) files at one with one import statement located in the app.scss file.

2. To turn off globbing Removed or Comment out the 'require' in config.rb

3. You will Need the Sass-Globbing Ruby Gem.

To learn more - https://github.com/chriseppstein/sass-globbing

#Mean Menu

1. By default, 'Mean Menu', comes working in the theme, with the breakpoint set at 769px.
2. Documentation can be found at - http://www.meanthemes.com/plugins/meanmenu/
3. You can disable Mean Menu by commenting/deleting the script calling it. The script is located in 'javascripts/scripts.js'
4. I enjoy Mean Menu specailly when doing small sites fast, but by all means use TopBar or anything else. This is just a base theme to get running. 

#Theme Functions

1. In the Theme's Functions.php file you will see thats where all scripts/stylesheets are being loaded in from. 
2. A main Menu and an Extra Menu are being called there.
3. Three sidebars are Registered
4. There is lots of commented out stuff, look through it, some could be handy. 

