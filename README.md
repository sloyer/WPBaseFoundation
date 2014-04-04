#========================
#WPBaseFoundation
#========================

#A few notes

A pretty much blank theme, with Foundation5 utilizing Compass/Sass. This is meant to be a pretty much blank theme, nothing more than the tools to get started. Think of it like Bones or Blankslate.

#### Please Feel free to Contribute back
The idea for this theme is just to be a blank starter theme any Developer/Designer can enjoy using, cleaner base template files, more functions that can be uncommented and used, Mixins, Structure, anything you find useful, feel free to put a pull request in.

#Foundation 5

1. This theme is utulizing Zurb's Foundation. 
2. Its already set up and ready to rock. Simply just start laying out your grids in your templates or Sass.
3. To Start, just the Grid is being imported, you can import other Foundation Components throught the _settings.scss file; including the Kitchen Sink.
4. If you ever need to upgrade foundation, just run "foundation update" from the command line from the themes folder.
5. By Default, only the Foundation Grid is in place, you can import select components or the kitchen sink in the Foundation Setting
6.Foundation settings are set in 'scss/_settings.scss'.
7. By Default, a Mixin is in place setting the breakpoint of grid at 768px.

#SCSS

1. Compile your Sass by running 'compass watch' from the command line in your themes directory
2. I try to follow my own adaption of the "SMACSS" worfklow, you don't have to but you should least read about it @ http://smacss.com

#Sass Globbing

Sass Globbing, is an awesome tool created by Chris Eppstein.
It allows us to import multiple Sass (In this theme it's including multiple Components) files at one with one import statement located in the app.scss file.

To turn off globbing Removed or Comment out the 'require' in config.rb

To learn more - https://github.com/chriseppstein/sass-globbing

#Mean Menu

1. By default, 'Mean Menu', comes working in the theme, with the breakpoint set at 769px.
2. Documentation can be found at - http://www.meanthemes.com/plugins/meanmenu/
3. You can disable Mean Menu by commenting/deleting the script calling it. The script is located in 'javascripts/scripts.js'
4. I enjoy Mean Menu specailly when doing small sites fast, but by all means use TopBar or anything else. This is just a base theme to get running. 

#Javascripts

1. Put any extra javascript plugins under the javascripts folder.
2. If you ever need to run a script, simply place it in 'javascripts/scripts.js' or do whatever you want.

#Theme Functions
1. In the Theme's Functions.php file you will see thats where all scripts/stylesheets are being loaded in from. 
2. A main Menu and an Extra Menu are being called there.
3. Three sidebars are Registered
4.  There is lots of commented out stuff, look through it, some could be handy. 

