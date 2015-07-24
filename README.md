# 2015-developer-workshop
Code Repo for Examples from the 2015 Developer Workshop

## Local WordPress Development Environment

### Vagrant
More advanced option to run your site.  Creates a whole virtual server using something like Virtual Box for a totally sandboxed environment.
Can fully match servers if you want or find "Vagrant Boxes"

 - Vagrant Site - http://vagrantup.com
 - VVV -
 
### Locally Installed PHP and Server
 Install PHP, MySQL, Apache/Nginx on your own local computer.  Most advanced of the options.
 
### *AMP Family

 
- XAMPP https://www.apachefriends.org/index.html
- MAMP https://www.mamp.info/en/
- WAMP http://www.wampserver.com/en/

### DesktopServer
http://serverpress.com


## Custom Post Types and Taxonomies



## Custom Fields and Metaboxes

### Advanced Custom Fields

http://www.advancedcustomfields.com/
https://wordpress.org/plugins/advanced-custom-fields/

The top GUI (Graphical) Custom Field plugin.  This will give you options to create fields and boxes to contain those fields within the WordPress admin.  It has a ton of different fields available in the free version and also has premium add-ons to enable more features.  By default, it saves all field data to the database.  You can export code to include in your theme or plugin which will only work with ACF installed.

### CMB2

https://wordpress.org/plugins/cmb2/
https://github.com/WebDevStudios/CMB2/

This is a library allowing you to easily add custom fields and metaboxes through code.  You can install this as a plugin or include it within a theme, plugin, or in mu-plugins.  This does not use the database at all for setting up the fields.

### Using WordPress Functions

#### Functions
add_post_meta() https://codex.wordpress.org/Function_Reference/add_post_meta
update_post_meta() https://codex.wordpress.org/Function_Reference/update_post_meta
delete_post_meta() https://codex.wordpress.org/Function_Reference/delete_post_meta
get_post_meta() https://developer.wordpress.org/reference/functions/get_post_meta/

#### Hooks
