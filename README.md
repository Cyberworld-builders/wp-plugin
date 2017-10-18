# Digital Freelancer WP Plugin#
This plugin is for common functionality across multiple sites on the digital freelancer network.

## Installation ##
It's a plugin. You just upload and install it through the network admin.

## Styles ##
- Develop styles in the assets/scss/ folder.
- Use gulp to compile them into dist/css/style.css.
- For now, that's all that compiles. We may support templates in the future but that seems like more of a theme thing than a plugin thing.

## Scripts ##
- Develop javascript directly in the dist/js folder. I wanted to keep these separate for the purpose of enqueuing and our current gulp file doesn't support multiple js files. i think.
- dist/js/scripts.js is enqueued by default because it has common functionality
- i started some pretty useful object classes there.
- there's a Df_Error class that handles modal messages nicely.
- there's also a Df_User class that will handle updating and validating users via javascript and the WP Rest Api

## PHP Classes ##
- classes are autoloaded.
- to add classes put them in a folder in src/ and namespace them.
- call classes wherever you want in wordpress. just use \\DigitalFreelancer\\{classname}::{method}()

## Shortcodes ##
- yes, it's wordpress so shortcodes are par for the course.
- find them in src/shortcodes
- typical convention is to enqueue needed css and js from the dist/ folder.
- if you need to add styles or javascript please create them or utilize them from the dist/ folder (remember that css is compiled from scss in the assets/scss/ folder via gulp)
- markup is included from the Views/ folder.
1. [df_signup_hijacker]
2. [df_user_profile_settings]
3. [df_error_modal]
4. [df_user_display_name]

## Rest API ##
- hooray for wp-rest!
- routes can be found in src/Rest/Api.php
- i may end up separating the callback functions out into the src/Rest/Routes folder because they add up quickly. but for now i just throw them down below the route creating action hooks.
- right now there are 2 routes. i will document them further as they grow in number and functionality
1. df/v1/user-name-form
2. df/v1/user-update-settings
- these are both post routes used by the javascript classes to update users

## Df Forms ##
-
