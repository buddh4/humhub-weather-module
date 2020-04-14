## End User Manual

### CSP

 - Requires `frame-src` https://weatherwidget.io/ in case you've overwritten the default csp header.
 
 ```php
"frame-src" => [
    "self" => true,
    "allow" => [
        'https://weatherwidget.io/'
    ]
],
```
