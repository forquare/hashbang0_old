<h2>Screen</h2>

<p>
	Imagine a time when all you had on your monitor was a single terminal, it's not a window, that's the interface to your computer.  How do you go about running multiple applications which want to output to the screen?  This is where screen comes in.  screen is to the command line what tabbed browsing is to Firefox or Safari.  But much more than that, screen allows you to close down the terminal window and carry on later, your processes continue to work!  And even better, you can log off and log back in somewhere else and continue your work!  It's not the easiest thing to get your head around, but after a little play it becomes quite easy.
</p>

<h3>Getting started</h3>
<p>
	To begin screen, just type <span class="code">screen</span> into a terminal window.  You probably won't see much of a difference, though the line you just typed has vanished (On Mac OS 10.6 (Snow Leopard) a message is printed before launching screen).  This is your new environment, it's strangely similar to your normal environment...
</p>

<h3>screen commands</h3>
<p>
	Screen has a number of commands which will look a tad weird to any newcomer, be patient, after a while you will understand them.  Here we go:
</p>
<ul>
	<li><span class="code">Ctrl+a c</span> - Creates a new 'tab'.  Literally press Control and 'a' (as if to do the usual select all operation) then let go and press 'c'.</li>
	<li><span class="code">Ctrl-a Ctrl-a</span> - Allows you to switch 'tabs'.</li>
	<li><span class="code">Ctrl-a "</span> - Will show you a list of 'tabs' and will allow you to select a tab to go to.</li>
	<li><span class="code">Ctrl-a A</span> - Give a name to a 'tab' (like "Email" or "Calendar").  Note: To produce a capital A, press shift - So Control and 'a' then let go and press shift and 'a'.</li>
	<li><span class="code">Ctrl-a d</span> - Will "detach" your screen session.  Essentially, just close screen, however, all of your programs you started will still be running...Type <span class="code">screen -r</span> to go back into your screen session.</li>
</ul>

<h3>Killing scren</h3>
<p>
	To kill the screen process, exit each of the shells by typing <span class="code">exit</span>, then exit screen.
</p>

<h3>Summary</h3>
<p>
	Like all UNIX tools, there is much more to screen than I have typed here.  For more information search the web, or <span class="code">man screen</span>.
</p>