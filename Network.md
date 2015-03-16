Reasons to set up a network:

  1. Being able to refer to the Slug by name instead of IP address + if the IP changes (because of DHCP) you don't have to guess the new IP
  1. Being able to access the Slug remotely via SSH
  1. Being able to expose some functionality from the Slug to the outside world

### To set up the network: ###

All this has been done for the  typical Linksys home wireless router, but most home routers should have similar functionality.

Go to the site DynDNS, and open a free account. There are other companies that offer similar services, but this is one of the best.

Install and configure [ddclient](http://www.dyndns.com/support/kb/using_ddclient_with_dyndns_services.html).


To configure the router point your browser to 192.168.1.1, and log in. If you've never logged in, or you've never changed the default settings, these are as follows:

```
username: 'admin' 
password: 'admin'
```

Once in the router's admin panel, go to `Setup|DDNS`, and enter the information of the account you just opened with your Dinamic DNS provider.

Then go back to your DDNS providers site, and check the IP address listed for your device. If it's an internal IP address (for example 192.168.1.101), you'll have to change it to the external IP address that you can see in your router's admin panel (in mine it shows it in the same DDNS tab).

### Security ###

To improve the security of your network, once you've opened it to the external world, you should scan the ports of all the devices connected to the network (including laptops, desktops, the router, and the Slug).

There should not be anything open that you have not opened yourself.

If you find the a port for PnP open, close it (if it's in the router, you can do that from the admin panel). It's for Plug-and-play devices, and you most probably don't need.

It's also recommended that you change the default web port (80) to some unknown port (not 8080 or other similar common alternative). You can do this in the web server's config file. For Cherokee server this is `/etc/cherokee/cherokee.conf`.

Optionally, you can use the "Wireless Mac Filter" functionality of your router, and lists the mac addresses of the devices you are going to allow access your network.