# WP Object Injection Proof of Concept

This is a simple plugin to help in PoC's of PHP Object Injection in Wordpress.

## How use

First download the **WP-Object-Injection-PoC** plugin on your "wp-content/plugin" directory and then activate in your wordpress dashboard. 

Now you can easy do the PoC of insecure deserialization without worrying about POP chains.

## Payload Example
```php
echo serialize(new ObjectInjection("system","id"));
// O:15:"ObjectInjection":2:{s:20:"ObjectInjectioncmd";s:2:"id";s:20:"ObjectInjectionfcn";s:6:"system";}
```
