# pixelscripts
A series of scripts that, when assigned to a PixelStix, provide certain functionalities. 


## OneSwitch.php
Send a device to a specific URL only on the second scan. All other scans (including the first) will go to a default URL. This is escpecially handy when you want to offer a coupon destination only for the second scan. 

##### Usage
Assign the OneSwitch link to a PixelStix as you normally would

`https://content.pixelstix.com/oneswitch.php?a=aHR0cHM6Ly93d3cuZ3JlZXRpbmdzdG91ci5jb20vcGl4ZWxzdGl4LXBhc2FkZW5hLWFsdGFkZW5h&b=aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbS9zZWFyY2g/cT1PTkUrVElNRStQQUdFK0dPRVMrSEVSRQ==`

- encoded in the OneSwitch link are the two URLs (`a` and `b`) that you'd like to send your users based on which PixelStix scan they just performed. 
- the value of `a` is a base64 encoded URL that you want users to be sent to for the first scan.
- the value of `b` is a base64 encoded URL that you want users to be sent to only on the second scan.
- note that all subsequent scans will be sent to `a`
- You can base64 encode your URLs here: https://www.base64encode.org/
