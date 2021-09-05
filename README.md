# rsswidget
A PHP script that simply retrieves a Feed from RSS and displays a few lines. It features a single file to complete.


## Example
Set the Number of lines to display as a parameter.(Display 3 lines by default)
Set the feed URL as a parameter.
and access this script file.

`rsswidget.php?lines=3&url=https://blogs.sample.com/feed/`

![ss](https://user-images.githubusercontent.com/35519174/126019140-3a0ea598-2834-471e-942a-e3c1d9b09a1f.png)

"mm/dd title description..."
- date and title+description will be displayed for the specified number of lines.
- overflow will be abbreviated with "...".
- If you want to change the design, you can directly edit the CSS in the script.

## Demo
https://rsswidget.azurewebsites.net/rsswidget.php?lines=7&url=https://azure.microsoft.com/en-us/blog/feed/

## Purpose

It is useful to embed this in an iframe as widged on Google site or blog.
