Automatically exported from code.google.com/p/slurchin

# Slurchin
Home Security Application using a NSLU2 (aka Slug)

The objective of the project is to create software for the NSLU2 running some flavor of embedded Linux (currently SlugOS) that will allow us to collect information through sensors, such as a webcam or a smoke detector, connected to the Slug.

The monitoring functionality will be exposed in a RESTful style.

We intend to develop a protocol that would allow us to alert emergency services. This will be done using REST too.

# Guidelines
1. We write clear instructions. All the instructions in our documentation are explained step by step, and show the actual commands that need to be run, without missing any. (No "of course you should have done x before doing y.")

2. We comment our code

3. Whenever we can, we do OO programming, and we try our best to:

  * Reuse quality code (if there's any out there that can be useful for us)
  * Make use of design patterns

4. We try to save Slug memory. For that we try not to install unnecessary software in it, or we clean it to the basic modules (or package, or whatever) that we need

5. We LOVE consistency. In documentation, code, and almost every aspect related to software

6. We use the appropriate quality open source tools at our disposal, and cheap hardware
