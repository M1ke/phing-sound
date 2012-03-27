# Phing Sound Task

A really simple Phing task to play a Windows sound at any point during a Phing build. I wrote this because a number of builds were taking 20-30 seconds before I needed to enter a password, and staring at a command line is dull. The sound now alerts me when it's time to interact, saving many an occurence of switching window and forgetting to actually complete the deploy.

## Installation

+ Copy the `tasks` folder to your `phing` directory (usually found at `/php/phing`)
+ Add a Phing `taskdef` element to the top of your build file
	`<taskdef name="sound" classname="phing.tasks.ext.SoundTask"/>`
+ Anywhere in your build file you can now add the `<sound/>` element to trigger a sound.
+ You can optionall pass the _sound_ attribute with one of the following sounds:
++ `MB_ICONASTERISK` - See MB_ICONINFORMATION.
++ `MB_ICONEXCLAMATION` - See MB_ICONWARNING.
++ `MB_ICONERROR` - The sound specified as the Windows Critical Stop sound.
++ `MB_ICONHAND` - See MB_ICONERROR.
++ `MB_ICONINFORMATION` - The sound specified as the Windows Asterisk sound.
++ `MB_ICONQUESTION` - The sound specified as the Windows Question sound.
++ `MB_ICONSTOP` - See MB_ICONERROR.
++ `MB_ICONWARNING` - The sound specified as the Windows Exclamation sound.
++ `MB_OK` - The sound specified as the Windows Default Beep sound.

