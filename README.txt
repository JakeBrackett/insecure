This is the !Secure Web Application. It is currently under development

git tutorial, how to get up and running:
1. Open the terminal application
2. Run:
cd /Library/WebServer/Documents
3. Run:
git clone https://github.com/JakeBrackett/insecure.git
4. Run:
cd
ln -s /Library/WebServer/Documents/insecure .
5. Run:
cd ~/insecure

-------------------------------------------------------------------------------------------------
To run in Mac OS X:

6. run:
	apachectl start

7. open in browser: 
	http://localhost/insecure 
-------------------------------------------------------------------------------------------------
Once you make changes to files in the insecure directory, go back to the command line:
Run: 
cd ~/insecure
git pull

The cd command will take you to the directory where your files are. Git pull grabs any changes that the other people working on the project have made while you were working. Always run git pull before running git push to make sure you have an up to date version of the files.

git status

This will output a list of the files that you have changed. They will say "untracked". You must add them.
You can do this individually by typing git add FILENAME but below is a shortcut for adding everything at once

git add *

If you deleted or renamed a file, you must remove it manually with git rm FILENAME. Run git status again to ensure all your changes are ready to commit.
Now that the changes are added, run
git commit -m 'COMMIT MESSAGE'

replace COMMIT MESSAGE with a little bit of an explaination of what you did, for example, 'added xxx.php and new database functionality'
Finally your changes are ready to be synced with the remote repository on github.com. Run:

git push


Projects:
1. PHP File Upload Page
Project details

Create a page where users can upload files and have them displayed on the website. Only allow login users to see the file submission: if(!empty($_SESSION["user"]))

You should check the MIME type of the file to ensure it "is" an image file. (http://php.net/manual/en/function.mime-content-type.php)

Save the file names to the database. Upload to somewhere like photos/* and save the full path, photos/upload.jpg to the database. The user account should be associated with the picture upload in the database, so that you can display a username next to a picture (you can get user from $_SESSION["user"] for convenience.

See: https://stackoverflow.com/questions/35253550/upload-a-file-using-php
	
	
