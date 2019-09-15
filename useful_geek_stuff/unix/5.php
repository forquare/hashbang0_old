<h2>rsync</h2>

<p>
	rsync allows you to ONE-WAY synchronise your files.  It works similarly to SCP in it's syntax.
</p>

<p>
	Firstly, cd to the respective directory.  I have gone into my local host htdocs folder where I have a few web projects.<br /><br />
	
	<img src="useful_geek_stuff/unix/5/rsync.png" alt="Me to You file transfer: SCP" /><br /><br />
	
	The above will sync all the files from public_html on my local machine to the public_html folder in the home directory of the machine called solaris-box.
</p>

<p>
	rsync -avub -e ssh from_here/ user@remote_machine:./to_here/
</p>

<p>
	-a, archive<br />
	-v, verbose (say what it's doing)<br />
	-u, update (don't overwrite newer files)<br />
	-b, backup<br />
	-e, specify remote shell<br />
</p>

<p>
	<em>Note</em>: You can always switch the remote machine and your local machine around.
</p>