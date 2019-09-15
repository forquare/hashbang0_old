<h2>SCP</h2>

<p>
	SCP is a copying tool for copying data over a network.<br />
	You supply the command with the source file and where you want to copy it to.  Examples below show copying from the machine your on, to another machine; copying from another machine to your machine; and copying from one other machine to another machine...<br />
	This tool is very handy, and seems quicker than SMB or FTP...
</p>

<h3>From your machine to another:</h3>
<p>
	<img src="useful_geek_stuff/unix/4/metoyou.png" alt="Me to You file transfer: SCP" /><br />
	The above line will take the file "mike.zip" from wherever I am at the moment and place it on Desktop of the user "ben" on the machine called "solaris-box".
</p>

<h3>From another to yours:</h3>
<p>
	<img src="useful_geek_stuff/unix/4/youtome.png" alt="You to Me file transfer: SCP" /><br />
	The above line will take the file "show.txt" from the Documents folder that belongs to the user "ben" on the machine "solaris-box", it will then copy that file to my Documents folder (Notice the tilde (~), this denotes my home directory.).
</p>

<h3>From another to yet another!:</h3>
<p>
	<img src="useful_geek_stuff/unix/4/youtoyou.png" alt="You to You file transfer: SCP" /><br />
	The above line will take the file "show.txt" from the Documents folder that belongs to the user "ben" on the machine "solaris-box", it will then copy that file to the Desktop of the user "ben" on the machine called "tux-box".
</p>

<p>
	<em>A quick note</em>: When specifying the place you want copy or drop a file on another machine, you must put a period (.) for the home directory...I've not dabbled in copying files to other places on the machine, so play by all means, just don't blame me!
</p>