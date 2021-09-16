About the pagecontroller and view example
===========================



Step 1: Pure HTML
---------------------------

This is pure HTML and a starting point for converting to PHP.



Step 2: PHP using include
---------------------------

This is a version where the PHP files uses includes to build up each page.



Step 3: Use pagecontroller and a layout
---------------------------

The pagecontroller is now only PHP-code and some content for the web page. The layout is rendered with $data to create the resulting page.



Step 4: Organize the directory structure with public dir
---------------------------

Create a `public` dir where all the public webfiles resides, all the other files should reside outside of that directory.



Step 5: Work with views
---------------------------

The layout renders the whole web page. But we can also render smaller parts of the webpage and we then call that views.

To be strict, a layout is a view.

Lets create some views.

* Show current in the navbar.
* Generate a linked list in the aside from an array.
* Measure details on the page loaded.



Step 6: PHP Debug Bar
---------------------------

http://phpdebugbar.com/



Step 7: Work with content
---------------------------

Lets add some content from separate files, it is always good to separate the content from the markup and the programming logic.

* Load file with text.
* Load file from markdown using a [Markdown parser](https://github.com/erusev/parsedown).



Step 8: Use forms to submit data to the server
---------------------------

Create a self submitting GET form.

Create a POST form, submitting to a processing page, redirecting to a result page.

HTML Form



TODO
----


Cookie
Session
(one task that is containing all of the above)
guessing game?
