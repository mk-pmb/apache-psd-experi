
* `http://localhost/sven/imagick/demo/fbres/` = fallback.php
  * will try later how to restore directory listing,
    maybe FilesMatch or LocationMatch.
  * could generate a dirlist from the PHP script.
* `http://localhost/sven/imagick/demo/fbres/fbr404.psd` = fallback.php
  * could generate 404 from the PHP script.

&nbsp;

* `http://localhost/sven/imagick/demo/fbres/fbr01.psd` = download, good.
* `http://localhost/sven/imagick/demo/fbres/fbr01.psd/layers/circles.png` =
  * The requested URL /sven/imagick/demo/fbres/fbr01.psd/layers/circles.png
    was not found on this server.
  * access log: 404 delivered; error log: no new entry

&nbsp;

* `http://localhost/sven/imagick/demo/fbres/sub/fbr01.psd` = download, good.
* `http://localhost/sven/imagick/demo/fbres/sub/fbr01.psd/layers/circles.png` =
  * The requested URL /sven/imagick/demo/fbres/sub/fbr01.psd/layers/circles.png
    was not found on this server.
  * access log: 404 delivered; error log: no new entry
