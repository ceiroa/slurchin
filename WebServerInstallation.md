A web server is not bundled with the application due to the memory constrains of the hardware. However, you should be able to run our application with any web server, and having more than one installed in the Slug is a waste of resources.

We like the Cherokee server the most. It has great documentation, that you can find here: http://www.cherokee-project.com/doc/

For installing and configuring the server just run `ipkg install cherokee`.

This will download and install the server. You can find Cherokee-related files in these directories:

```
  /etc/cherokee/
  /usr/bin/
```

And the webpages, including our app, need to be placed at `/var/www/`.