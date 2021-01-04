A **self-hosted** disposable temporary mailbox service using php, catch-all email and imap.

**Forked From**: https://github.com/synox/disposable-mailbox

I made some minor modifications and use it as live production at the following website:

**Live & Demo**: [Joyabo (www.joyabo.com)](https://www.joyabo.com/) 

Joyabo is a project of [Wufuquan](https://www.wufuquan.com/)

![Screenshot](https://excite.wufuquan.com/images/2020/joyabo-screenshot-example-02.png)


## Features

* Anonymous usage.
* Generate random email addresses or specify your own. 
* Download your emails.
* Display emails as text with sanitization filter. 
* Display emails based on one [catch-all imap mailbox](https://www.google.ch/search?q=how+to+setup+catch-all+imap+mailbox).
* Only requires PHP >=7.2 and [imap extension](http://php.net/manual/book.imap.php).


## Usage


### Requirements

* Webserver with php >=7.2
* Php [imap extension](http://php.net/manual/book.imap.php)
* IMAP account and a domain with [catch-all configuration](https://www.google.ch/search?q=how+to+setup+catch-all+imap+mailbox). (all emails go to one mailbox). 


### Before you start :heavy_exclamation_mark:

* Subscribe to [![Join the chat at https://gitter.im/synox/disposable-mailbox](https://badges.gitter.im/synox/disposable-mailbox.svg)](https://gitter.im/synox/disposable-mailbox?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge) to be notified about issues and bugfixes.  
* This is **Beta** software, [there are still unsolved problems](https://github.com/synox/disposable-mailbox/issues). Contributions are welcome! :heart:
* License: **GPL-3.0**. You can modify this application and run it anywhere, charge money and show advertisement. Any forks or repacked distribution must follow the [GPL-3.0 license](https://opensource.org/licenses/GPL-3.0).  
* A link to https://github.com/joyabo/disposable-mailbox in the footer is appreciated.  


### Installation

Disposable-mailbox can be installed by copying the src directory to a webserver. 

1. Assure the [imap extension](http://php.net/manual/book.imap.php) is installed. The following command should not print any errors:

        <?php print imap_base64("SU1BUCBleHRlbnNpb24gc2VlbXMgdG8gYmUgaW5zdGFsbGVkLiA="); ?>

2. Download a [release](https://github.com/synox/disposable-mailbox/releases) or clone this repository
3. Copy the files in the `src` directory to your web server (not the whole repo!).
4. Rename `config.sample.php` to `config.php` and apply the imap settings. Move `config.php` to a safe location in a *parent directory* outside the `public_html`, so it is not reachable through the browser.
5. Open it in your browser, check your php error log for messages. 


### Troubleshooting

* **IMAP Server has invalid certificate**: You might have to add `novalidate-cert` to the IMAP settings. See flags on http://php.net/manual/en/function.imap-open.php.
* **Error 500, Internal error**: Check your error log file. Add to `config.php`: 

    ini_set('display_errors', 1);    ini_set('display_startup_errors', 1);    error_reporting(E_ALL);


## Credit :thumbsup:

This could not be possible without...
* https://github.com/synox/disposable-mailbox
* https://github.com/barbushin/php-imap
* https://github.com/gnugat-legacy/PronounceableWord
* http://htmlpurifier.org/, 
* https://github.com/turbolinks/turbolinks
* http://tobiasahlin.com/spinkit/

## Others

Looking for similar services with different approaches? Try: [Ikahana](https://www.ikahana.com/) or [Markotop](https://www.markotop.com/).
