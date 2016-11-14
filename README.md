
Current problem:

http://localhost/sven/imagick/demo/psp/ex01.psd/layers/circles.png

> The requested URL /var/www/sven/imagick/demo/dump-psd.php was not found on this server.

Obviously, becuase it's a file. So let's try and construct a URL from
the variables that `mod_rewrite` offers. To see which ones are available,
I replace `ex01.psd` with `dumpvars.redir`, also add some query string,
and get this: [psp/dumpvars.txt](psp/dumpvars.txt)

```bash
$ cut -d '&' -sf 2- psp/dumpvars.txt | grep -Pie '/[a-z]'
CONTEXT_DOCUMENT_ROOT=/var/www/sven/
CONTEXT_PREFIX=/sven/
DOCUMENT_ROOT=/var/www/default-site
PATH_INFO=/layers/circles.png
REQUEST_FILENAME=/var/www/sven/imagick/demo/psp/dumpvars.redir
REQUEST_URI=/sven/imagick/demo/psp/dumpvars.redir/layers/circles.png
SCRIPT_FILENAME=/var/www/sven/imagick/demo/psp/dumpvars.redir
```

For the URL, we have every path component EXCEPT the interesting ones:

```text
REQUEST_URI    = /sven/imagick/demo/psp/dumpvars.redir/layers/circles.png
CONTEXT_PREFIX = /sven/
    ???        =       imagick/demo/                    (e.g. CONTEXT_SUBDIR)
    ???        =                    psp/dumpvars.redir  (e.g. CONTEXT_SUBFILE)
PATH_INFO      =                                      /layers/circles.png
```

