<h2>Reverse SSH'ing</h2>

<p>
	OK, you've got a system sitting at home and you want to access it over SSH while your out on the road?  You can use reverse SSH to achieve this.  We will assume the following:
</p>

<ul>
	<li>The home system is called A</li>
	<li>On the home machine (called A) is the user called Auser</li>
	<li>There is some middle system you can SSH to (perhaps a web server?), this is called B</li>
	<li>The machine called B has the user Buser</li>
	<li>Your laptop your taking on the road is called C</li>
</ul>

<p>
	OK, so from machine A we will do the following:
</p>

<p class="code">
	A$ ssh -R 10002:localhost:22 Buser@B
</p>

<p>
	That will connect you to the middle computer.  When you want to connect to your home machine (called A), just do this from your laptop (machine C):
</p>

<p class="code">
	C$ ssh Buser@B<br />
	B$ ssh Auser@localhost -p 10002
</p>

<p>
	You are now connected!  You may want to write some sort of script to reconnect your home machine should it go down.  You can use any number, it doesn't have to be 10002 :)
</p>

<h3>EDIT:</h3>

<p>
	If your connection keeps dropping, try the following:
</p>

<p class="code">
	A$ ssh -N -f -R 10002:localhost:22 Buser@B
</p>