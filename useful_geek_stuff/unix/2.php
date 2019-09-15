<h2>Tarballs</h2>

<p>
	A tarball is an archived file, or a collection of archived files.  Do <span class="code">man tar</span> for more information.
</p>

<h3>Archive</h3>
<p>
	<span class="code">tar -cf myTar.tar folder/</span> - Will archive a folder and contents.<br />
	<span class="code">tar -cf myTar.tar thing.txt</span> - Will archive a file/
</p>

<p>
	-c, create a new archive.<br />
	-f, file.<br />
</p>

<h3>De-archive</h3>
<p>
	<span class="code">tar -xvf myTar.tar</span> - Will extract the file.
</p>

<p>
	-x, extract files from given archive.<br />
	-v, verbose.<br />
	-f, file.
</p>