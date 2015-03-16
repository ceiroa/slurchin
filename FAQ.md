# SLURCHIN FAQ #

**1. Which drivers do I need to install?**

If you have a Logitech 961400-0403 Quickcam for Notebooks Deluxe, see [Drivers](Drivers.md).

If you have other type of usb camera, do the following:

> a.) Connect the camera

> b.) Download and install usbutils: `ipkg install usbutils`

> c.) Run lsusb: `lsusb`. This will show the devices connected to the ports, for example:

```
    Bus 3 Device 1: ID 0000:0000  
    Bus 2 Device 3: ID 046d:08a9 Logitech, Inc. 
    Bus 2 Device 1: ID 0000:0000  
    Bus 1 Device 1: ID 0000:0000  
    Bus 1 Device 2: ID 03f0:3207 Hewlett-Packard 
```

> d.) The numbers represent manufacturer and model, in this order. Look for the drivers you need by vendor and product ID at http://mxhaard.free.fr/spca5xx.html

> You need ALL the mentioned drivers.

> e.) Install the drivers.

> f.) Load the drivers (`insmod` command).


**2. Do I need to add a Swap space?**

No, but your Slug will run faster with it.

**3.  How do I install a swap memory space?**

Follow the instructions at http://www.nslu2-linux.org/wiki/HowTo/AddAdditionalSwapSpace.

**4. Do I need to install Cherokee?**

No, but it's the web server we like the most in this environment, so far.