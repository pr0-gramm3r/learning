# learning

This repo has Mail sending capability. You need to just make some changes to send the mail from your mail to others .

1.) Add recipient mail in mailcontroller.php  --path "app/Http/Controllers/MailController.php". 

2.) Add your email in line(54,57) and add password in line (55) inside the .env file as described there.

like:

MAIL_MAILER=smtp

MAIL_SCHEME=smtp

MAIL_HOST=smtp.gmail.com

MAIL_PORT=587

MAIL_USERNAME=//your email address here

MAIL_PASSWORD=//your email password here using app password from google account

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS=//your email address here

MAIL_FROM_NAME="Your company Name Here"

3.) You can make changes to route and view files as well.

4.) view file's mail.blade.php contains massage to be shown to the recipient.

5.) view file's home.blade.php contains the link to mail the recipient.

Thanks for visiting my repository
