# wp-meme-theme

This is a child theme that piggy-backs off the WordPress default theme(s) that allows you to turn your website into a posterboard for memes - turning pictures, gifs, iframes and even youtube videos into memes. 

Works well with WordPress plugins like: [youtube-embed-plus](https://wordpress.org/plugins/youtube-embed-plus/)

Designed for a raspberry pi to serve and display on a TV for easy image posting and sharing (hence the 60 refresh) and got a little out of control.

## Install and Usage:

* Download the index.php and the style.css files from this repo, and place them into a new directory inside your `wp-content/themes/` folder.
* Activate the theme within your WordPress dashboard.
* Create a new post with a body similar to this:

```
[embedyt] https://www.youtube.com/watch?v=dQw4w9WgXcQ[/embedyt]
top: You got
bottom: Rick Rolled!
color:white
size:70
```

* The example above uses the [youtube-embed-plus](https://wordpress.org/plugins/youtube-embed-plus/) plugin to display the video as the full size of your browser.
* Top determines what you are wanting the top line of text to say.
* Bottom determines the bottom line of text.
* Color defaults to black, but will work with white. Code can easily be altered to accept any hexcode colors. 
* Size wil determine the size of the text (both top and bottom row(s)) in units of px (pixels).

Listed below are other examples:

### Using an Iframe:

```
<iframe src="http://map.norsecorp.com/#/"></iframe>
top: Keep up the good work!
color:white
size:50
```

### Basic GIF Meme:

```
<img src="https://i.imgur.com/on8YVnK.gif" alt="cry" />
Top:When you need to fart!
Bottom:But your surrounded by coworkers
color:white
size:80
```
