<h2>Download entire folder/site using WGET</h2>

<p>
	Sometimes we want to download an entire folder (or sometimes and entire site).  Perhaps you want to download a whole 'mini' site that contains all of your lecture notes?  Or perhaps a complete website?
</p>

<p>
	The WGET program can do all of this for you!  You just have to know what to bash into the command line.  You can try something like this:
</p>

<p class="code">
	wget -r -k -p http://www.example.com
</p>

<p>
	"-r" will get files recursively, "-k" will convert links to look at local files and "-p" will get everything needed to display each page correctly (images, etc)
</p>

<p>
	For a site that requires a password, you can try something like this:
</p>

<p class="code">
	wget -r -k -p \ <br />
	--cookies=on \<br />
	--keep-session-cookies \<br />
	--save-cookies=cookie.txt \<br />
	--post-data 'user=USERNAME&amp;password=MYPASS' \<br />
	http://www.example.com
</p>

<p>
	This might or might not work.  If it does, great!  If not, I'm afraid that you may have to <a href="http://www.google.co.uk">Google</a> a bit more.
</p>