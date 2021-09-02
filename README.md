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

## Drag Queen Adventure
In the summer of 2021 PixelStix was hired by a local mural festival to turn 12 of their murals into a scavenger hunt experience. The basic concept of the hunt was to provide a team with a starting PixelStix that, when scanned, gave the team a video clue which lead them to the first PixelStix in the hunt. If they scanned the wrong PixelStix they would receive default content and if they scanned the correct PixelStix they were given the next clue, and the next, and so on.

A registration PixelStix was scanned by each team upon starting the hunt which captured their team name and gave them basic instructions on how to start the hunt by scanning the entry PixelStix.

Lastly, we also gave each team a clue PixelStix that they could take with them and scan at any time to have the previous video clue played back.

##### Setup
- Upload the entire directory into your web server
- This hunt had 12 stops and a video was created for each stop that was entertaining and gave a challenging clue to help find the next stop. 
- Each video was uploaded to a PixelStix. Once uploaded the vimeo URL could be used in adventure.php.
- Teams were encouraged so that only the team captain's phone would 'enter' and progress through the hunt. 
- 'Entry' PixelStix were installed in various locations
- Be sure to modify adventure.php with the necessary URLs and images for your hunt

##### Usage
Be sure to deploy all the files to your server for the hunt to work. Local team data is stored in a JSON file so be sure to give that file sufficient permissions on your server. 

| pixelstix description  |  example link |
|---|---|
| Stop 1 in the hunt. Video on this PixelStix informs team how to find Stop 2 |  `https://content.pixelstix.com/drag_queen_adventure/adventure.php?scavenger_stop=1` |
| Stop 2 in the hunt. Video on this PixelStix informs team how to find Stop 3 |  `https://content.pixelstix.com/drag_queen_adventure/adventure.php?scavenger_stop=2` |
| Reset the phone currently experiencing the hunt |  `https://content.pixelstix.com/drag_queen_adventure/adventure.php?scavenger_stop=reset` |
| Register a team |  `https://content.pixelstix.com/drag_queen_adventure/adventure.php?scavenger_stop=register` |
| Begins the hunt for a phone |  `https://content.pixelstix.com/drag_queen_adventure/adventure.php?scavenger_stop=begin` |
| Replays the previous video clue so that teams can watch it while they hunt for the next stop |  `https://content.pixelstix.com/drag_queen_adventure/adventure.php?scavenger_stop=clue` |

