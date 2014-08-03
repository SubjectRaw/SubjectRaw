MarkDown Syntax
===============

This is a demo of most of MarkDown-specific syntactic rules processed by marked.js (the MarkDown HTML renderer used by Subject.Raw.)

## Titles, Chapters, Subchapters, Atoms

## H2
### H3
#### H4
##### H5
###### H6

etc.

####### Atoms can happen at any level

This is an atom text. Atoms are "leaf" nodes in the hierarcy.

Alternatively, for H1 and H2, an __underline-ish__ style:

Formatting text
---------------

Emphasis, aka italics, with *asterisks* or _underscores_.

Strong emphasis, aka bold, with **asterisks** or __underscores__.

Combined emphasis with **asterisks and _underscores_**.

Strikethrough uses two tildes. ~~Scratch this.~~

## Lists

1. First ordered list item
2. Another item
* Unordered sub-list. 
1. Actual numbers don't matter, just that it's a number
1. Ordered sub-list
4. And another item.


   You can have properly indented paragraphs within list items. Notice the blank line above, and the leading spaces (at least one, but we'll use three here to also align the raw Markdown).

   To have a line break without a paragraph, you will need to use two trailing spaces.  
   Note that this line is separate, but within the same paragraph.  
   (This is contrary to the typical GFM line break behaviour, where trailing spaces are not required.)

* Unordered list can use asterisks
- Or minuses
+ Or pluses


## Links, Images

https://www.google.com

[I'm an inline-style link](https://www.google.com)

[I'm an inline-style link with title](https://www.google.com "Google's Homepage")

[I'm a reference-style link][Arbitrary case-insensitive reference text]

[I'm a relative reference to a repository file](md.html?url=subject/en/subject.md)

[You can use numbers for reference-style link definitions][1]

Or leave it empty and use the [link text itself]

Some text to show that the reference links can follow later.


Here's our logo (hover to see the title text):

![My image link text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "some caption")

Inline-style: 
![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")

Reference-style: 
![alt text][logo]

## Source code, keywords, controlled vocabulary

Inline `code` has `back-ticks around` it.


```javascript
 var s = "JavaScript syntax highlighting";
 alert(s);

 s = "Python syntax highlighting"
 print s


 No language indicated, so no syntax highlighting. 
 But let's throw in a tag.
```

## Tables

Colons can be used to align columns.

| Tables        | Are           | Cool  |
| ------------- |:-------------:| -----:|
| col 3 is      | right-aligned | $1600 |
| col 2 is      | centered      |   $12 |
| zebra stripes | are neat      |    $1 |

The outer pipes (|) are optional, and you don't need to make the raw Markdown line up prettily. You can also use inline Markdown.

Markdown | Less | Pretty
--- | --- | ---
*Still* | `renders` | **nicely**
1 | 2 | 3

## Blockquotes

> Blockquotes are very handy in email to emulate reply text.
> This line is part of the same quote.

Quote break.

> This is a very long line that will still be quoted properly when it wraps. Oh boy let's keep writing to make sure this is long enough to actually wrap for everyone. Oh, you can *put* **Markdown** into a blockquote. 

## Section break

Three or more...

---

Hyphens

***

Asterisks

___

Underscores

## Paragraphs

Here's a line for us to start with.

This line is separated from the one above by two newlines, so it will be a *separate paragraph*.

This line is also a separate paragraph, but...
This line is only separated by a single newline, so it's a separate line in the *same paragraph*.

## Videos

[![IMAGE ALT TEXT HERE2](http://img.youtube.com/vi/HNlOXQqgomI/0.jpg "some caption")](http://www.youtube.com/watch?v=HNlOXQqgomI)

## HTML source

<dl>
  <dt>Definition list</dt>
  <dd>Is something people use sometimes.</dd>

  <dt>Markdown in HTML</dt>
  <dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
</dl>
