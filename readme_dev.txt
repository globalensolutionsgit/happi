# -----------------------------------------------------------------
# Here are some notices that can help with WP integration:
# -----------------------------------------------------------------

1) Homepage, (Top Slider)
Every Slide has a text with Title + Subtile. Text positions can be modified by adding classes: "left, center, right, middle, bottom".
For e.g. if we need to place text at Right-Bottom the code will be: 
<div class="slide_text bottom right">
	<div class="slide_title"><strong>GOLF & TRAVEL</strong></div>
	<p class="subtitle">5 resorts to get your swing back</p>	
</div>
so combining those classses we can place TEXT in 9 different places.

2) Dropdown MegaMenu. 
	2.1 Menu dependencies (jquery.js, general.js, hoverIntent.js)
	2.2 HTML Structure of Menu need to be like this:

	<ul class="dropdown">
		<li class="menu-level-0"><a href="#"><span>Menu Item 0.1</span></a></li>
		<li class="menu-level-0 mega-nav"><a href="#"><span>Mega Menu Parent 0.2</span></a>
			<ul class="sub-menu-1">			
				<li class="menu-level-1"><a href="#"><img src="images/icons/menu_icon1.png" alt=""> <span>Mega Menu Item 1.1</span></a>
					<ul class="sub-menu-2">
						<li class="menu-level-2"><a href="#"><span>Mega Menu Item 2.1</span></a></li>
						<li class="menu-level-2"><a href="#"><span>Mega Menu Item 2.2</span></a></li>
					</ul>
				</li>			
		</li>
		<li class="menu-level-0"><a href="#"><span>Menu Item 0.3</span></a>	
			<ul class="sub-menu-1">
				<li class="menu-level-1"><a href="#"><img src="images/icons/menu_icon2.png" alt=""> <span>Menu Item 1.1</span></a>
					<ul class="sub-menu-2">
						<li class="menu-level-2"><a href="#"><span>Menu Item 2.1</span></a></li>					
					</ul>
				</li>
		</li>
	</ul>	

	2.3 Every submenu UL has class=sub-menu-X (X-is number of level menu, starting with 0)
	2.4 Every li has class="menu-level-X" (X-is level of menu)
	2.5 Add class="mega-nav" to parent LI item and standart menu will become MegaMenu
	2.6 Icons can be added only to LI with "menu-level-1" inside <a><img src=icon_image> <span>Menu Title</span></a> 
		*need more time to make it posiible to add in any level.
	2.7 Maximum Menu level is 3.
	2.8 Add class="more-nav" to the LI with "menu-level-2" and the link will be styled Different.

3) TopSearch.
- works with hoverIntent.js

4) Homepage, Special prices with Sale Ribbons
- Ribbon Icons has predifined class for 5-80% OFF (classes: .off-5, .off-10, ....off-80)
e.g. <span class="ribbon off-30">SALE: 30% OFF</span>

5) Breadcrumbs
The div <div class="breadcrumbs"></div> should be always on page even if there will not be Breadcrumb links, bc this div is used as Gap.

6) Main Structures - Columns Layout. 
- Page can be displayed in 3 layouts: Right Sidbear (default), Left Sidebar, Full Width. 
To switch Sidebars you need to add class "sidebar_left" to DIV with #middle:
Class "cols2" is used for 2 columns layout.

<div id="middle" class="cols2 sidebar_left">
	<div class="content">
	...
	</div>
	<div class="sidebar">
	...
	</div>
</div>

<div id="middle" class="cols2"> - sidebar right
<div id="middle" class="cols2 sidebar_left"> - sidebar left
<div id="middle" class="full_width"> - for full width page / without sidebar

7) Preload Images 
In /js/general.js find block "preload images" and replace the path to images to be FULL Path:
$.preLoadImages("../images/dropdown_bg.png","../images/dropdown_sub_arrow.png");

8) Adpative Images (http://adaptive-images.com/)
- on server side there is a solution to make images smaller for Mobiles. I've implimented on test server.
here is a discusion of WP implimentation: http://wordpress.org/support/topic/adaptive-images