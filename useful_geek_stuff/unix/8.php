<h2>CRON</h2>

<p>
	Do you have jobs that you could automate?  Perhaps a program or a script that needs running at a certain time of day, or maybe a backup to kick off at 2am?<br />
	Rather than using some third party application, or setting an alarm to remind you to do it, or waiting up until 2am every night, use CRON, it's already part of your system as long you're using UNIX or Linux based systems.
</p>

<h3>On the command line</h3>

<p>
	OK, fire up your command line application (Terminal, xterm, gnome-terminal, etc) and enter the following:<br />
	<span class="code">$ crontab -e</span><br />
	Don't forget, "$" doesn't need to be entered.  The '-e' is to edit the CRON table.  You should find a blank screen, you have been launched into your default text editor.
</p>

<p>
	As a side note, your default editor is set using the EDITOR variable (in bash), change it for the current session using this:<br />
	<span class="code">$ export EDITOR=<editor></span><br />
	Replace <editor> with an installed program, for example: vi, vim, emacs, nano, pico, etc.<br />
	To make this more permanent, add the line above to your .bash_rc<br />
</p>

<p>
	CRON takes arguments that are separated by a space, it is important that you don't use tabs!  The arguments are like this:<br />
	<span class="code">&lt;minute&gt; &lt;hour&gt; &lt;day_of_month&gt; &lt;month&gt; &lt;day_of_week&gt; &lt;command&gt;</span><br />
	Here is a list of the possible values:
</p>

<ul>
	<li>Minute = 0-59</li>
	<li>Hour = 0-23</li>
	<li>Day_of_month = 1-31</li>
	<li>Month = 1-12</li>
	<li>Day_of_week = 0-6 (Sunday == 0)</li>
</ul>

<p>
	So, the editor is up, we know what the values are, lets do some examples:
</p>

<p class="code">
	# Add comments with a hash!<br />
	# OK, for that 2am backup:<br />
	58 1 * * * /opt/scripts/user-area-backup<br />
	<br />
	#Lets do a whole system backup once a month:<br />
	43 22 1 * * /opt/scripts/full-system-backup<br />
	<br />
	#Just for fun, let's crash the system on the seventh <br />
	#day of the tenth month at 5am, but only when that day is a Friday<br />
	0 5 * 7 10 5 /opt/scripts/crash<br />
	<br />
	#Last one<br />
	#Lets purge a temporary folder every two hours, between 8am and 8pm, Monday to Friday:<br />
	0 8,10,12,14,16,18,20 * * 1,2,3,4,5 /opt/scripts/remove_temp_files</span>
</p>

<p>
As you can see, I've used asterisks to say "every", and commas to list multiple values for an argument.
</p>

<p>
One last thing to note, you need to add a blank line at the end of the file!  If you're using Vi or Vim then it is done for you.
</p>

<h3>Using a GUI</h3>
<p>
	There are a number of GUI editors that will do the job for you, having done some research, and a little playing around, I've found the following:
</p>

<ul>
	<li><a href="http://h775982.serverkompetenz.net:9080/abstracture_public/projects-en/cronnix">CronniX</a> for OS X gives you a simple and expert interface, it does have an interface for intervals, but it is not active as of version  3.2</li>
	<li><a href="http://www.arquired.es/users/aldelgado/proy/gcrontab/">Grontab</a> for Linux/UNIX provides a simple GUI for managing CRON tasks</li>
	<li><a href="http://piki.org/patrick/gat/">The GNOME Task Scheduler</a> (Gat) is another GUI for Linux/UNIX which provides basic functionality.</li>
</ul>