=== XL Testimonial Carousel ===
Contributors: xltheme, limon213
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SV2JWYC8JC7UW
Tags: XL Testimonial Carousel, XL Testimonial, XL Testimonial carousel, Testimonial slider, owlcarousel, Testimonial carousel, Best testimonial slider, Responsive testimonial slider, easy testimonial slider, client testimonial slider, testimonial slider wordpress, Testimonial , plugin, testimonial, xltheme, Khandaker Ikrama
Requires at least: 3.2
Tested up to: 4.9.4
Stable tag: 1.1
License: GPLv2 or later

XL Testimonial Carousel is a responsive WordPress plugin for client's testimonials.

== Description ==

XL Testimonial Carousel is a WordPress plugin which create custom post type to add client's testimonials / recommendations to display anywhere of your site using shortcode. It is simple but flexible & powerful.

*   [Upgrade to PRO &raquo;](https://www.xltheme.com/product/xl-testimonial-carousel/)
*   [View live Demos &raquo;](https://plugins.xltheme.com/xl-testimonial/)
*   [Documentations &raquo;](https://www.xltheme.com/docs/xl-testimonial-carousel/)
*   [Contact Us &raquo;](https://www.xltheme.com/contact-us/)


<strong>Plugin Features</strong>

* Testimonial Shortcode Ready
* Responsive Testimonial carousel.
* Very light weight.
* Custom post type for Testimonial posting.
* No need any settings.
* Work with all Wordpress theme.
* Easy to use.
* Developer friendly & easy to customize.
* Powered by Owl Carousel 2.
* Displaying Author Image with each Testimonial
* Its easy user interface allows you to manage, edit, create, and delete Testimonials.

<strong>Pro Features</strong>

* 70+ different In/Out Animation
* 9 global styles and 27 different styles. More style is coming.
* Different Author image styles. Square to circle from setting page or use our pre define parameters
* Lot's of shortcode parameters
* Category wise Testimonials
* Great Settings Panel
* On / Off - Stop on Hover
* 3 way to display slider navigation
* Unlimited Colors
* Auto select font from your website
* Different Theming
* Author Image size control
* 6 Different Author image styles
* 3 Different Alignment
* Works with any WordPress Theme.
* Build with HTML5 & CSS3.
* Responsive. Work on any device.
* Easy and user-friendly setup.
* Well documentation and 24/7 support.


<strong>Shortcode parameters</strong>

<strong>70+ different In/Out Animation</strong>

* bounce
* flash
* pulse
* rubberBand
* shake
* swing
* tada
* wobble
* jello
* bounceIn
* bounceInDown
* bounceInLeft
* bounceInRight
* bounceInUp
* bounceOut
* bounceOutDown
* bounceOutLeft
* bounceOutRight
* bounceOutUp
* fadeIn
* fadeInDown
* fadeInDownBig
* fadeInLeft
* fadeInLeftBig
* fadeInRight
* fadeInRightBig
* fadeInUp
* fadeInUpBig
* fadeOut
* fadeOutDown
* fadeOutDownBig
* fadeOutLeft
* fadeOutLeftBig
* fadeOutRight
* fadeOutRightBig
* fadeOutUp
* fadeOutUpBig
* flipInX
* flipInY
* flipOutX
* flipOutY
* lightSpeedIn
* lightSpeedOut
* rotateIn
* rotateInDownLeft
* rotateInDownRight
* rotateInUpLeft
* rotateInUpRight
* rotateOut
* rotateOutDownLeft
* rotateOutDownRight
* rotateOutUpLeft
* rotateOutUpRight
* hinge
* rollIn
* rollOut
* zoomIn
* zoomInDown
* zoomInLeft
* zoomInRight
* zoomInUp
* zoomOut
* zoomOutDown
* zoomOutLeft
* zoomOutRight
* zoomOutUp
* slideInDown
* slideInLeft
* slideInRight
* slideInUp
* slideOutDown
* slideOutLeft
* slideOutRight
* slideOutUp

Use any shortcode to display testimonials with preferred transition

`[xl_testimonial in_animation="zoomIn"]`
`[xl_testimonial out_animation="fadeOutUp"]`
`[xl_testimonial in_animation="flipInX" out_animation="slideOutDown"]`

<strong>9 different global styles in setting page</strong>

* style 1
* style 2
* style 3
* style 4
* style 5
* style 6
* style 7
* style 8
* style 9

<strong>6 Different Author image styles</strong>

* xl_square
* xl_circle
* xl_radius
* xl_square_shadow
* xl_circle_shadow
* xl_radius_shadow

<strong>3 Different Alignment</strong>

* xl_left
* xl_right
* xl_center


Example - One : 
Use following shortcode to display testimonials combined with in and out animation, category, circle author image and center align.

`[xl_testimonial cat_name='cat-1' out_animation='slideOutDown' in_animation='flipInX' author_img_style='xl_circle' alignment='xl_center']`

Still have any confusion? 

*   [View live Demos &raquo;](http://plugins.xltheme.com/xl-testimonial/)
*	[Visual Installation & Usage Guide &raquo;](http://docs.xltheme.com/xl-testimonial-carousel/)

Normally Testimonials will show by descending order, latest will show first. But if you wish to display ascending order, oldest at first then pass order="ASC" parameter to shortcode like 
`[xl_testimonial order='ASC']`


== Installation ==

Install XL Testimonial Carousel as a regular WordPress plugin. Here is different ways to install XL Testimonial Carousel plugin :

*   [Visual Installation & Usage Guide &raquo;](http://docs.xltheme.com/xl-testimonial-carousel/)

= Install by Search Plugin =
- In your Admin, go to menu Plugins > Add New
- Search XL Testimonial Carousel
- Click to install
- Activate the plugin
- Testimonials post type will show below POSTS

= Install by Upload Plugin =
- Download the latest version of XL Testimonial Carousel (.zip file)
- In your Admin, go to menu Plugins > Add New
- Select  "Upload Plugin"
- Click on “Choose File”
- Select downloaded xl-testimonial-carousel.zip & click on ‘Install Now’ button
- Activate the plugin
- Testimonials post type will show below POSTS

= Install Plugin using FTP =
- Upload xl-testimonial-carousel folder inside the /wp-content/plugins/ directory
- Go to WordPress dashboard > Plugins & Activate the Testimonials Carousel
- Testimonials post type will show below POSTS

* Put [xl_testimonial] shortcode, where you need to show the testimonial slider.

== Frequently Asked Questions ==

= How do I add new Testimonial? =
Testimonial post type will show below POSTS. To add new testimonial, go to Testimonial > Add New, then add Testimonial Author name at Title, Full testimonial at Editor, Author Image at Featured Image, Company Name / Country / City & Designation at Other's Info field in Client Info section and Finally Publish.

= What will be the Author image dimension? =
Better to add square size image. Default image size set to 80px X 80px.

= How to use shortcode inside page templates? =
WordPress has a great function, do_shortcode(), that will allow you to use shortcodes inside your theme files. For example, to output Testimonials in a Theme file, you would do this: ```<?php echo do_shortcode('[xl_testimonial]'); ?>```

== Screenshots ==
1. XL Testimonial output on pages/post after adding shortcode [xl_testimonial]
2. Demo style (Available only at PRO version)
3. Demo style (Available only at PRO version)
4. Demo style (Available only at PRO version)
5. Demo style (Available only at PRO version)
6. Demo style (Available only at PRO version)
7. Demo style (Available only at PRO version)
8. Demo style (Available only at PRO version)
9. Demo style (Available only at PRO version)
10. Demo style (Available only at PRO version)
11. Demo style (Available only at PRO version)
12. Demo style (Available only at PRO version)
13. Testimonials > Add New. Then add Author Name, Testimonial, Author Image, Company Name, Designation
14. Testimonial > Testimonial. View all Testimonials at a glance.
15. Testimonial > Categorie. Add new Categorie.
16. Testimonial > Settings -> General Settings (Available only at PRO version)
17. Testimonial > Settings -> Style Settings (Available only at PRO version)
18. Testimonial > Settings -> Advance Settings (Available only at PRO version)


== Changelog ==

= version 1.1 =
* WordPress compatibility and update

= version 1.0 =
* Initial release


== CREDIT ==

Developed by Khandaker Ikrama - http://ikrama.info/
Proudly powered by XL Theme - http://www.xltheme.com/

* Owlcarousel - http://www.owlcarousel.owlgraphic.com/


== CONTACT ==

Khandaker Ikrama - http://ikrama.info/contact/