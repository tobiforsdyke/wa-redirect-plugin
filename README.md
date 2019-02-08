# WA Redirect plugin
Plugin to check a post and redirect to another URL if it has that specified.
## How to use:
Add the content to search for in the $search array and the content to swap it with into the $replace array. For example:

```php
$search = array( 'mispelled', 'wac', 'saerch', 'Github' );
$replace = array( 'misspelled', 'WAC', 'search', 'GitHub' );
```
