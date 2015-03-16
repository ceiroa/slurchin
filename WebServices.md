We want the user to be able to see images of his home remotely, using the Internet. But we have to provide a security layer, so that nobody else can access these images.


The user has to define a `password` in the application's configuration file, and the images are saved with a unique name (almost impossible to guess) in an images folder. The folder has an index.html file so that the contents cannot be browsed.

## Desired ##

We would like to define an API that would allow a Slug to automatically send an alert through HTTP when an alarm is triggered.

The alert message could include:

  * Address
  * Time
  * An image (maybe also a key to access that image)
  * Contact number