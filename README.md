# Cyberworld Builders WP Plugin#

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

## Shortcodes ##
- yes, it's wordpress so shortcodes are par for the course.
- find them in src/shortcodes
- typical convention is to enqueue needed css and js from the dist/ folder.
- if you need to add styles or javascript please create them or utilize them from the dist/ folder (remember that css is compiled from scss in the assets/scss/ folder via gulp)
- markup is included from the Views/ folder.

## Rest API ##

