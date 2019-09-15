<h2>Common Bash Commands</h2>

<p>
	Bash is a shell.  The Bash shell is the command line interface (cli) that we will be using.  You can get other shells too,  others include sh, csh, zsh and ksh. <br />
	On this page we will look at some of the most common commands you will need in day-to-day usage of Bash.<br />
	Open a Terminal/Console/Xterm (sorry, there are many names for the same thing).
</p>

<h3>Change folder</h3>
<p>
	<span class="code">cd</span> - This stands for change directory.  You can either specify a relative name, or an absolute name, or say to go up a directory.  <br />
	<span class="code">cd myFolder</span> will go down into myFolder, <br />
	<span class="code">cd /home/me/Documents</span> will change from wherever you are to that location and finally, <br />
	<span class="code">cd ../</span> will take you up a level to the parent directory (If you had /home/me/Documents/pictures and you wanted to go up from pictures <span class="code">cd ../</span> would take you to Documents).
</p>

<h3>List contents</h3>
<p>
	<span class="code">ls</span> - This will show the contents in the current folder.  Use <span class="code">ls -la</span> to get a list of ALL files as well as seeing details about each of them.<br />
	<img src="useful_geek_stuff/unix/1/lsla.png" alt="ls -la command" />
</p>

<h3>Where am I?</h3>
<p>
	<span class="code">pwd</span> - This command will tell you where you are in the file structure.<br />
	<img src="useful_geek_stuff/unix/1/pwd.png" alt="pwd command" />
</p>

<h3>Who else is on this machine?</h3>
<p>
	<span class="code">who</span> - Will tell you who else is logged into the machine/server.
</p>

<h3>Who's that user?</h3>
<p>
	<span class="code">finger</span> - Use this command followed by a user ID or a name to search for a user.  This command will bring up various information.<br />
	<img src="useful_geek_stuff/unix/1/finger.png" alt="finger command" />
</p>

<h3>Create a file</h3>
<p>
	<span class="code">touch</span> - This will create a plain file of your choice (html/txt/css/java/c/random) in the present directory. <br />
	<span class="code">touch myFile.html</span>  
</p>

<h3>Make a folder</h3>
<p>
	<span class="code">mkdir</span> - Use this to create a folder, a name should follow this command... <br />
	<span class="code">mkdir myNewFolder</span>  
</p>

<h3>Remove a file/folder</h3>
<p>
	<span class="code">rm</span> - <span class="code">rm thisFile</span> will delete thisFile.  If you want to delete a folder, use <br />
	<span class="code">rm -r myFolder</span> 
</p>

<h3>Get home</h3>
<p>
	<span class="code">~ or $HOME</span> - This is a reference to your home folder.  Use it with <span class="code">cd</span> or other commands.<br />
	<img src="useful_geek_stuff/unix/1/home.png" alt="~ and $HOME" />
</p>

<h3>What does that command do?</h3>
<p>
	<span class="code">man</span> - Use man with a command after it to bring up the UNIX man page.  Warning, these pages can be quite long and expect you to understand lots...That's why I've written these pages.<br />
	<img src="useful_geek_stuff/unix/1/man.png" alt="man command" />
</p>

<h3>Move a file</h3>
<p>
	<span class="code">mv</span> - <span class="code">mv file1 ~/Docs/stuff/file56</span> Will move file1 to the given folder and then name it file56.
</p>

<h3>Rename a file</h3>
<p>
	<span class="code">mv</span> - Use the above command.  <span class="code">mv file1 myFile</span>
</p>

<h3>Copy a file</h3>
<p>
	<span class="code">cp</span> or <span class="code">copy</span> - Like the <span class="code">mv</span> command.  <br />
	<span class="code">cv file1 ~/Docs/stuff/file56</span> This will copy and rename the file.
</p>

<h3>What processes are running</h3>
<p>
	<span class="code">ps</span> - Will show the currently running processes.
</p>

<h3>Clear the screen</h3>
<p>
	<span class="code">clear</span> - Clears the screen.
</p>

<p>
	That's pretty much it...I will update this page if and when I find a new command that I use.
</p>