# WP Object Injection Proof of Concept

This is a simple plugin to help in PoC's of PHP Object Injection in Wordpress.

## How use

First download the **WP-Object-Injection-PoC** plugin on your "wp-content/plugin" directory and then activate in your wordpress dashboard. 

Now you can easily do the PoC of insecure deserialization without worrying about POP chains.

## Payload Example
```php
echo serialize(new ObjectInjection("system","id"));
// O:2:"OI":2:{s:3:"fcn";s:6:"system";s:3:"cmd";s:2:"id";}
```
## References
- https://www.php.net/manual/en/language.oop5.magic.php
- https://www.php.net/manual/en/function.unserialize.php
- https://www.owasp.org/images/9/9e/Utilizing-Code-Reuse-Or-Return-Oriented-Programming-In-PHP-Application-Exploits.pdf
