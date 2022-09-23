<?php

/** 
 * render a template from the site templates directory, similar to a django style
 * template.  This is just a step on the way to cleaning up this codebase, so new things
 * aren't even crazier than they are now.
 *
 * @param template_name (the filename)
 * @param context (a key-value array of items to be given in the template
 *
 */
function renderTemplate($template_name, $context) {
	// load the context vars into the current function variable symbol table:
	extract($context);
	include(SITE_ROOT_DIR . 'templates/' . $template_name);
}
