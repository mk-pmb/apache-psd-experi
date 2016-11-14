
* `http://localhost/sven/imagick/demo/fbres/` = fallback.php
  * will try later how to restore directory listing,
    maybe FilesMatch or LocationMatch.
  * could generate a dirlist from the PHP script.
* `http://localhost/sven/imagick/demo/fbres/fbr404.psd` = fallback.php
  * could generate 404 from the PHP script.
* `http://localhost/sven/imagick/demo/fbres/sub/fbr404.psd` =
  * The requested URL /sven/imagick/demo/fbres/sub/fbr404.psd
    was not found on this server.
  * access log: 404 delivered; error log:
    AH00128: File does not exist: /var/www/sven/imagick/demo/fbres/sub/fbr404.psd
  * why not fallback.php?

&nbsp;

* `http://localhost/sven/imagick/demo/fbres/fbr01.psd` = download, good.
* `http://localhost/sven/imagick/demo/fbres/fbr01.psd/layers/circles.png` =
  * `AcceptPathInfo On`: download of original file, but I want fallback.php
  * `AcceptPathInfo Off`:
    * The requested URL /sven/imagick/demo/fbres/fbr01.psd/layers/circles.png
      was not found on this server.
    * access log: 404 delivered; error log:
      AH00130: File does not exist:
      /var/www/sven/imagick/demo/fbres/fbr01.psd/layers/circles.png

&nbsp;

* `http://localhost/sven/imagick/demo/fbres/sub/fbr01.psd` = download, good.
* `http://localhost/sven/imagick/demo/fbres/sub/fbr01.psd/layers/circles.png` =
  * `AcceptPathInfo On`: download of original file, but I want fallback.php
  * `AcceptPathInfo Off`:
    * The requested URL /sven/imagick/demo/fbres/sub/fbr01.psd/layers/circles.png
      was not found on this server.
    * access log: 404 delivered; error log:
      AH00130: File does not exist:
      /var/www/sven/imagick/demo/fbres/sub/fbr01.psd/layers/circles.png
