# Seventy Seven Brand Site

### Built With

This section should list any major frameworks/libraries used to bootstrap your project. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.

* [![Laravel Jigsaw][Laravel Jigsaw]][https://jigsaw.tighten.co/]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]


<!-- GETTING STARTED -->
## Getting Started

The site is built using Laravel Jigsaw, Bootstrap 5, and VanillaJS.
Based on the theme [BraveX Theme](https://www.11-76.com/themes/puce/bravex/) with the following changes:
- JQuery has been replaced with VanillaJS.
- Bootstrap 3 upgraded to latest Bootstrap 5
- Lightbox changed to https://trvswgnr.github.io/bs5-lightbox/ 

### Prerequisites

- PHP 8
- Composer 2
- Node.js
- NPM

### Installation

1. Clone repo & cd into directory
2. Run 
   ```sh
   npm install && composer install
   ```
4. If editing JS or CSS files, run 
   ```sh
   npm run watch
   ```
5. To view site in browser, run 
   ```sh
   ./vendor/bin/jigsaw serve
   ```

## TODO:

### 5/21/2023

- [ ] Add Swiper Carousel to Home Page with 3 projects. See https://www.11-76.com/themes/puce/bravex/index-05.html for example of ow it should look and function.
- [ ] Implement Bootstrap Lightbox for videos, and popups. 
- [ ] Finish implementing counter code for project page stats 
- [ ] Finish converting navigation to vanilla JS to match sticky nav on https://www.11-76.com/themes/puce/bravex/index-05.html 
- [ ] Add blog post template to match https://www.11-76.com/themes/puce/bravex/news-01.html
- [ ] Cleanup HTML comments with Laravel comments

### Pre-launch
- [ ] Add Google Analytics
- [ ] Add Google Tag Manager
- [ ] Add Google Search Console
- [ ] Add Google Optimize
- [ ] Add Facebook Pixel
- [ ] Add minification to CSS, JS, and HTML files
