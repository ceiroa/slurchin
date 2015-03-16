This information is in other pages, but it's so important for the project that we give it its own section.

# Drivers #

For a Logitech 961400-0403 Quickcam for Notebooks Deluxe we need the following drivers (listed next to the driver is its dependencies):

```
    gspca                 600708  0
    videodev               23072  1 gspca
    v4l1_compat            11652  1 videodev
    v4l2_common            12640  1 videodev
```

`v4l1_compat` and `v4l2_common` are included in most Linux distribution, including SlugOS. I believe `videodev` might be included as well. For `gspca`, and `videodev`, if necessary, you can install them with `ipkg`, the package manager included in SlugOS. For `gspca` run `ipkg install gspcav1`.

To see the drivers currently loaded in your device run `lsmod`.

You can find the drivers you have, loaded or not, at the following locations:

  * `/lib/modules/2.6.21.7/kernel/drivers/media/video/`
  * `/lib/modules/2.6.21.7/kernel/drivers/usb/media/`

You must load the modules in the right order, which is the reverse order of this list (starting with `v4l2_common`).

We can also find the dependencies for each driver at `/lib/modules/2.6.21.7/modules.dep`.

Link of interest: http://www.linuxjournal.com/video/get-your-webcam-working-gspca