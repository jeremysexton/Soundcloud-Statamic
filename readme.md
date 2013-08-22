Soundcloud-Statamic
=================

A simple Statamic plugin for Soundcloud embeds.

Feed it the url of a Soundcloud Sound and it will return an embed.

##Installing

1. Create a folder in "_add-ons" called "soundcloud".
2. Copy "pi.soundcloud.php" into that folder.
3. Dance.

##Usage

The plugin is called with {{ soundcloud:sound }}.

The following parameters exist:

* url (required)
* width
* height

If width is not called, it will default to 100%, if height is not called, it will default to 166px.

##Example

	{{ soundcloud:sound url="https://soundcloud.com/twistedpanda/do-that-trouble-i-do" width="100%" height="166px" }}