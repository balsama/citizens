## Overview

Alters the href of any menu item whose title is "English" or "Español" to
point to the translated version of the current menu item. If no translation
exists for the current menu item, the link will point to the translated
version of the homepage.

## Usage

1. Enable the module on the module administration page.
2. Create two menu items. One with "English" as the title and one with
"Español" as the title. Set the path for both menu items to `node`. (Note
that the path really doesn't matter since the module will override it.)

## Customize

You can easily swap references to Español with, for example, Français - or
add a langueage. It would be nice to have the links automatically created for
each of the enabled languages. But for now, it's easy enough to tweak a few
lines for your project.
