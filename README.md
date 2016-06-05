# Crawler tests

I need to make a crawler; PHP or else.

This repo is to quickly test if it cna be done effectively in PHP or I need to switch the language. Below are the notes of my short R&D.

## Initial path

## Few URL

I found below URLs useful during initial search.

### Possible options

- [https://www.quora.com/Which-is-the-best-programming-language-for-developing-a-most-efficient-web-crawler](https://www.quora.com/Which-is-the-best-programming-language-for-developing-a-most-efficient-web-crawler)
- [https://www.quora.com/What-are-some-good-free-web-scrapers-scraping-techniques](https://www.quora.com/What-are-some-good-free-web-scrapers-scraping-techniques) - Check answer by Eric Wu

### Tools

- [phpcrawl](http://phpcrawl.cuab.de/) In PHP, but just for idea. Not good fit due to GPL license. (I do not consider GPL as Free license)
- [Scrapy](scrapy.org) in Python.
- [Scrape](http://zesty.ca/scrape/) in Python
- [Apache Nutch](http://nutch.apache.org/) in java
- [Confluence Heritrix](https://webarchive.jira.com/wiki/display/Heritrix) in Java
- [Web Sphinx](http://www.cs.cmu.edu/~rcm/websphinx/) in Java

## PHP Options

During last few years, I am mainly working in PHP so yes, PHP is my preferred tool of choice as it will not involve big learning curve. Yes I'm open for Python and also have professional Java experience in the past, PHP will be my preference if it can provide decent performance. I believe PHP can do it on high scale with PHP 7, different caching, multiple servers along with message queue.

**Decision 1: Try first with PHP.** Again, this is just initial experiment si I'd like to give PHP first chance.

### Looking available PHP options

- **PHP crawl** is not an option due to its restrictive license (GPL). However I'd like to check its code to see how it is doing things at lower level. May be I get few ideas from there.

Since there is no other crawler option in PHP, I probably need to make my own crawler. Another reason, in future, if idea clicks, crawler will have lot of responsibility. It will be heart and soul of my application so I do not want to be restricted by any third party tool. Also I want to learn how crawler.

**Decision 2: Try custom crawler** Look at other open source solutions but at least attempt to make own crawler. May be it could be new open source crawler or at least I'll learn some thing new :)

Preference: New open source project. (Get idea from other open source projects)

Open for: If custom take a lot of time, open for other open source project in PHP, Python and Java.

- [PHP Simple Test Scriptable Browser](http://www.simpletest.org/en/browser_documentation.html) seems another part to look at. It is not actually a crawler but if I need to make a crawler from scratch, this could make reading web pages easy.

## PHP1

First experiment in php is listed in [php1.md](php1.md)