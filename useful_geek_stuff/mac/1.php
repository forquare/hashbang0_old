<h2>Burning a Windows/Linux compatible CD</h2>

<p>
	OS X predominately uses it's own disk imaging format known as DMG (Disk iMaGe), this isn't compatible with other operating systems.  OS X can, however, create compatible disks.  Being geeky, I like to use the command line for this, so that is what I'll show you.
</p>

<p>
	Suppose you have a bunch of files to burn to disk.  Create a new folder somewhere and name it.  In this example, I have placed the folder on my Desktop, and called it foo.  I will create a cross-platform disk image called bar.
</p>

<p class="code">
	 hdiutil makehybrid -iso -o ~/Desktop/bar ~/Desktop/foo
</p>

<p>
	If you look now, you will have a new file.  In this case, I will have a file called bar.iso on my Desktop.  To burn this onto a CD, run the following command:
</p>

<p class="code">
	 hdiutil burn  ~/Desktop/bar.iso
</p>