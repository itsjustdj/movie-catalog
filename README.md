# movie-catalog

This project is a simple catalog I created for my family to track our movie and book collections. It's just HTML, CSS and PHP. At some point, I may add JavaScript to add some functionality and also create the ability to toggle which movies have been seen or updated by user.

I created this personal project so I could learn PHP. I realize there are a lot of things that coule be done differently or better, like using PDO instead of msql. It's not exactly a _super secure_ use of login code. I may update this or start a new project that uses better security.

The movies.sql and users.sql files are there to import into your own db if you want to try the site with data without having to build it yourself. You'll need to create your own passwords for the existing users, unless you want to use those encrypted long ones.

There is a movie catalog screen cap.jpg file so you can see how it should look.

_This is loosely based on the project in Alan Forbes's book The Joy of PHP._

## Instructions
This is best done on your local machine using MAMP, XAMP or something like that.
1. Put all the files in a folder
2. In PHP MyAdmin on your server, create a new database.
3. Import movies.sql and users.sql into the database.
4. Create a password for one of the users, or create a new user. Use MD5 for the password encryption.
5. Open up the site and play around!

If you have any questions, suggestions or just want to give me feedback on my code (please?), you can contact me at dj@itsjustdj.com.
