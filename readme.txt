=== Plugin Name ===
Authors: LorenzoGangi
Version: 1.0
Author URI: http://ironlasso.com/
Plugin URI:http://ironlasso.com/jqueryfacebookwallwplight/
Tags: Facebook feed, Facebook wall, Facebook page, Facebook posts, facebook events, facebook albumn, facebook photo, facebook, feed, post, social networking, timeline, responsive
Requires at least: 3.5.1
Tested up to: 3.8
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

jQuery Facebook Wall WP Light retrieves a Facebook account's data and builds a Facebook styled feed on a page or post.


== Description ==

jQuery Facebook Wall WP Light (JQFW-WPL) is a light version of jQueryFacebookWallWP a wordpress plugin that will build a Facebook timeline or wall style post feed on your worpress website 
post or page with the Facebook account data of your choosing. jQuery Facebook Wall WP has settings to show events, likes, photos, and albums. It also includes a Facebook style lightbox to browse photo galleries. And best of all, it has user interactions so photos, posts, and comments can be liked or commented on. See it in action at http://ironlasso.com/jqueryfacebookwall-wordpress-plugin/ 
JQFW-WPL doesnt have the photos, albums, events and likes and limits the number of posts and comments you can retrieve from facebook to 5.

== Installation ==

Follow these instructions to get your Facebook feed on your website. When you downloaded JQFW-WPL you got a file called jQueryFacebookWallWPLight_download.zip

1. **unzip jQueryFacebookWallWPLight_download.zip** 
2. **Its contents should look this**: 
/docImages
readme.html
readme.txt
/jQueryFacebookWallWPLight.ZIP
  /css
  /images
  /js
  /licensing
  /template
  fb_app_token.php
  fb_get_app_token.php
  uninstall.php
  jQueryFacebookWallLight.php
	            
3. **Install your plugin** - Go to the Plugins page of your wordpress admin. 
	1. Click the "Add New" button this wil take you to the Intall Plugins page.
	2. Click the "Upload" link on the Install Plugins page.
	3. Choose the jQueryFacebookWallWPLight.zip and click the "Install Now" button. You should see a message about unpacking and installing your plugin.
	4. Click the "Activate Plugin" Link this should take you back to your plugins page.

4. **Configure your plugin** - Click the *settings* link in the jQueryFacebookWallLight row.
5. **Enter the Domain name of the website** where the plugin is installed in the field labeled Domain.
6. **Get your Facebook Account Name** (see below) and enter it in the field labeld **Facebook User**.
7. **Get / Create your Facebook Account App Id/Key and Secret** (see below)
	1. Find App ID and App Secret fields and Retrieve Button [Image](http://ironlasso.com/jQueryFacebookWallWPLightZip/docImages/wpAppTokenForm.png)
	2. Enter your App ID and App Secret and click the "Retrieve Facebook App Access Token" Button. [Image](http://ironlasso.com/jQueryFacebookWallWPLightZip/docImages/wpAppTokenFormDone.png)
	3.If your app token retrieval fails see **Get your Facebook Access Token**
8. **Save your settings**. Click the button on the bottom of the settings page that says **"Save jQueryFacebookWall Settings"** settings example - this will show the National Geographic facebook feed.
[Image](http://ironlasso.com/jQueryFcebookWallWPLightZip/docImages/generalSettings.png)
9. **Add a Facebook feed to a page or post**. In the wp-admin navigate to the page or post you would like to JQFW-WPL to. Paste the short code [jfw_light show=jQueryFacebookWallLight] in the content editor. Save and navigate to the page. You should see your facebook feed. 
[Image](http://ironlasso.com/jQueryFacebookWallWPLightZip/docImages/wpShortCode.png)
10. Adjust Plugin Settings - At this point your plugin is ready to go, however you can adjust the the other plugin settings as needed. See the [Plugin Settings](http://ironlasso.com/jqueryfacebookwallwp-documentation/) on ironlasso.com for details on settings function.

== Frequently Asked Questions ==

= Using the plugin on Windows IIS =

Yes can use the pluging with ASP and IIS! It takes few extra set up steps. You'll need to add .ejs mime types to IIS. 

IIS doesn’t like the file extension of the ejs javascript templateing engine used by the plugin (.ejs). You need to add a MIME extension for .ejs with type :text/html in your IIS administration panel. If you do that everything should work . Here is an blog I found on the subject 

The problem: http://forums.asp.net/t/1442319.aspx/1 

How to add a mime type in IIS: http://technet.microsoft.com/en-us/library/cc725608(v=ws.10).aspx 

== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the /assets directory or the directory that contains the stable readme.txt (tags or trunk). Screenshots in the /assets 
directory take precedence. For example, `/assets/screenshot-1.png` would win over `/tags/4.3/screenshot-1.png` 
(or jpg, jpeg, gif).
2. This is the second screen shot

== Changelog ==

= 1.0 =
* 12/12/14 Initial Release.


== Upgrade Notice ==

= 1.0 =
Go Pro! You deserve it! Here is what you get:
* Posts, Events, Likes, Albums, Photos sections
* Options to adjust order, show/hide sections
* Language translations
* Facebook style Light Box to view photos and albums
* Like and Comment on posts, photos, and albums

[Get the Pro Version Now!](http://ironlasso.com/jqueryfacebookwall-wordpress-plugin/)


== Getting Data from Facebook ==

jQueryFacebookWallWPLight use the Facebook's graph API to retrieve your Facebook account data. Facebook needs to know who is asking for and retrieving their data; consequently, they have an authentication system to manage these needs. One way to retrieve data in this authentication system is via a Facebook App. The App in turn can request an access token, and once an access token has been acquired it can make requests for data from the graph API. Long story short, jQueryFacebookWallWPLight needs three things to get your Facebook account data:

1. Your Facebook User Name (Id)
2. A Facebook App associated with your Facebook account
3. An Access Token for your Facebook App

= Get your Facebook Username Name =
Your Facebook username appears after the www.facebook.com/ in your browser URL. Usually it looks something like this: www.facebook.com/*yourUserName*. In other words, if you are Rick James, your Facebook URL looks something like: www.facebook.com/RickJames. Sometimes you have to look at your timeline to get your account name in the URL.
[IMAGE](http://ironlasso.com/jQueryFacebookWallWPLightZip/docImages/fbAccountName.png)

Once you have your username **yourUserName** you add it to yourplugin settings on the jQueryFacebookWall settings page	in	the Facebook User field.


= Create / Get your Facebook Account App Id/Key and Secret =

1. Log into your Facebook Account.
2. Go to https://developers.Facebook.com/apps
	1. If you have not registered with Facebook as a developer, do so.
	2. Click the Create New App button in the upper right hand corner to create a Facebook App.
	3. Fill out your App info, name, etc. The name is the only necessary field.
3. Make note of your App Id/API key and App Secret they will be used to generate you Facebook Access Token.
4. Use your App Id/API key for 'yourAppId' in the plugin call.
[Image](http://ironlasso.com/jQueryFacebookWallWPLightZip/docImages/fbApp.png)
= Get your Facebook Access Token =

You should be able to retrieve an Access Token via the setting page, if you cant your can try running the jQueryFacebookWallWPLight php access token retrieval script by hand. To use it:

1. Open fb_get_app_token.php and enter your Facebook App Id and Secret on lines 19&20.
                	
15	$app_id = '----------------';
16 $app_secret = '----------------';
                    
                
2. Save and exit the file.
3. Generate a Facebook access token for your Facebook App by running fb_get_app_token.php in your browser. If you have unzipped the plugin and put it in, say, yourDomainWebRoot/jQueryFacebooWall/, then in your browser open www.yourdomain.com/fb_get_app_token.php
4. fb_get_app_token.php will retrieve an access token from Facebook and write it to the fb_app_token.php file. Make sure that fb_app_token.php has full write permissions.
5. Open fb_app_token.php - it should contain something that looks like this: {"appToken":"2450 blahblahblahblahblah|fkLcyxj6C-_blahblahblahblahblah"}
6. If it doesn't, you didnâ€™t get an access token from Facebook. An alternative method of retrieving an App access token is running www.yourdomain.com/fb_get_app_token.php?debug=true This will show debugging information for the script. If it returns an access token, copy and paste it into fb_app_token.php
[Image](http://ironlasso.com/jQueryFacebookWallWPLightZip/docImages/fbAccessToken.png" style="width:750px">

* To generate an App access token via the fb_get_app_token.php script, php must have https wrapper enabled. In your php.ini ;extension=php_openssl.dll must be uncommented. If you canâ€™t do this you may have to contact your hosting provider or system administrator.

= Get your Facebook Access Token - Without php =

If your host doesn't support php, you don't have php's https wrappers enabled, or you just like doing things by hand, you can retrieve a Facebook access token by the following means:

1. In the URL below, replace app_secret and app_secret with the App Id and App Secret you retrieved from Facebook in the previous step
2. https://graph.facebook.com/oauth/access_token?client_id=app_id&client_secret=app_secret&grant_type=client_credentials
3. Copy and past the URL in your browser and Facebook will return an App access token to you. It will be something like: access_token=256518697824517|nLKpMxbgiABaYfjhSSHf1GJj
4. Open the fb_app_token.html The contents look like this:
{"appToken":"If you see this you haven't generated your App token yet"} 
Replace the "If you see this you haven't generated your App token yet" with the access_token you retrieved from Facebook. Make sure to leave the quotes. 
It should looks like this when your done: 
{"appToken":"256518697824517|nLKpMxbgiABaYfjhSSHf1GJj"}
5. Save and close fb_app_token.html

= Facebook Pages vs. Facebook User Accounts =

jQueryFacebookWallWPLight plugin makes use of Facebookâ€™s open graph API, which has various levels of authentication requirements. Facebook pages have looser restrictions than user accounts; therefore, the plugin can retrieve more info (posts and album data) for pages than normal accounts. jQueryFacebookWallWPLight will work with normal accounts, but you will not be able to retrieve album data and you will have to edit the permissions of your posts and photos in your Facebook account. If you donâ€™t have a Facebook page, you should consider creating one. You can do so by logging into Facebook and going here: https://www.Facebook.com/pages/create/

Here are the caveats imposed by Facebook's authentication requirements:

* Pages can have albums.
* Pages can show all posts.
* User accounts canâ€™t have albums.
* User accounts donâ€™t include all posts.

