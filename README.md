# License
__NOTE__ This plugin uses [JWPlayer](http://www.longtailvideo.com/players/jw-flv-player/) to embed HTML5 or Flash video onto any of your posts or pages. Please review the JWPlayer [license](http://creativecommons.org/licenses/by-nc-sa/3.0/) before using this plugin on your site. The [CUNY Academic Commons](http://commons.gc.cuny.edu) and the [author](https://github.com/humanshell) of this plugin are not responsible for improper use of the JWPlayer source code.

# Installation
This plugin is not yet in the WordPress plugin repo. To install you can clone this repo into your `/wp-content/plugins` directory:

```
cd PATH_TO_YOUR_WP_ROOT/wp-content/plugins
git clone https://github.com/cuny-academic-commons/cac-livestream.git
```

And then activate it on the Plugins Admin page.

Or you can [download](https://github.com/cuny-academic-commons/cac-livestream/zipball/master) the zip file from this repo and manually extract it into you plugins folder.

# Usage
The plugin provides you with a WordPress shortcode named: `[livestream]`. By placing this shortcode into the content area of any post or page you will be able to embed any number of video players that stream either HTML5 or Flash videos to your visitors.

You can read more about WordPress shortcodes [here](http://codex.wordpress.org/Shortcode) and [here](http://codex.wordpress.org/Shortcode_API).

You can pass a total of seven attributes to customize and control the video that will be embedded in your post or page (defaults shown):

```
width = "800"
height = "500"
image = "balloons.jpg"
autoplay = "false"
mp4file = ""
flashfile = ""
flashstream = ""
```

The `mp4file` __OR__ `flashfile` and `flashstream` attributes are required. The plugin will attempt to privide HTML5 video by default if you've supplied the `mp4file` attribute. Otherwise it will fall back on the flash version. For maximum support and performance, you should provide __BOTH__ `mp4file` and flash related attributes. This will ensure that you are displaying HTML5 video to clients that support it and flash to those that don't.

For example (In the content area of a "Live" page you've created on your site):

```
[livestream
width="640"
height="480"
image="http://example.com/splash.jpg"
mp4file="http://example.com/video.mp4"
flashfile="myStream.sdp"
flashstream="rtmp://example.com:1234/live"]
```

# Amazon AWS/EC2
The CAC Livestream plugin was designed primarily to enable the streaming of live feeds to a WordPress page through an AWS/EC2 account. This documentation is currently being written, please check back for instructions soon...

# Support
If you have any problems related to the setup or use of this plugin, please direct support requests to this repo's [issues](https://github.com/cuny-academic-commons/cac-livestream/issues) page.
