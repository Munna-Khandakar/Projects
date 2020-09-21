/*
* Author: Łukasz Holeczek
* Template: Metro Admin Template - Bootstrap Theme
* Version: 1.0.0
* Bootstrap version: 2.3.1
* Copyright 2013 creativeLabs
* www: http://clabs.co
* mail: lukasz@clabs.co
* You can buy this theme on WrapBootstrap: https://wrapbootstrap.com/user/creativelabs
*/

/* Import Section
=================================================================== */
@import url("jquery-ui-1.8.21.custom.css");								/* jQuery User Interface Framework Styles */
@import url("fullcalendar.css");										/* Calendars Styles */
@import url("chosen.css");												/* Select Boxes Styles */  
@import url("uniform.default.css");										/* Uniform Styles */
@import url("jquery.cleditor.css");										/* Text Editor Styles. */  
@import url("jquery.noty.css");											/* Noty Notifications Style */
@import url("noty_theme_default.css");									/* Noty Notifications Style */
@import url("elfinder.min.css");										/* File Manager Style */
@import url("elfinder.theme.css");										/* File Manager Style */
@import url("jquery.iphone.toggle.css");								/* Styles for iPhone */
@import url("uploadify.css");											/* Uploadify Styles */
@import url("jquery.gritter.css");										/* Growl Like Notifications Styles */
@import url("font-awesome.min.css");									/* Font Awesome Styles */
@import url("font-awesome-ie7.min.css");								/* Font Awesome Styles */
@import url("glyphicons.css");											/* Glyphicons Font */
@import url("halflings.css");											/* Glyphicons Halflings Font */
@import url("style-forms.css");											/* Forms */

/* Main Colors
=================================================================== */

.black,
.black [class="box-header"],
.black.box,
.slider.black .ui-slider-range, 
.progress.black .ui-progressbar-value
.sliderVertical.black .ui-slider-range,
.progressSlim.black .ui-progressbar-value {
	background: #222 !important;
	border-color: #222 !important;
	color: #fff;
}

.black .box-header h2 i,
.black .box-header .box-icon i,
.black .box-header .box-icon i:hover {
	opacity: 1;
	filter: alpha(opacity=100);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.green,
.green [class="box-header"],
.green.box,
.slider.green .ui-slider-range, 
.progress.green .ui-progressbar-value,
.sliderVertical.green .ui-slider-range,
.progressSlim.green .ui-progressbar-value,
.label-success,
.badge-success {
	background: #00A300 !important;
	border-color: #00A300 !important;
	color: #fff;
}

.greenDark,
.greenDark [class="box-header"],
.greenDark.box,
.slider.greenDark .ui-slider-range, 
.progress.greenDark .ui-progressbar-value,
.sliderVertical.greenDark .ui-slider-range,
.progressSlim.greenDark .ui-progressbar-value {
	background: #1E7145 !important;
	border-color: #1E7145 !important;
	color: #fff;
}

.greenLight,
.greenLight [class="box-header"],
.greenLight.box,
.slider.greenLight .ui-slider-range, 
.progress.greenLight .ui-progressbar-value,
.sliderVertical.greenLight .ui-slider-range,
.progressSlim.greenLight .ui-progressbar-value {
	background: #99B433 !important;
	border-color: #99B433 !important;
	color: #fff;
}

.pink,
.pink [class="box-header"],
.pink.box,
.slider.pink .ui-slider-range, 
.progress.pink .ui-progressbar-value,
.sliderVertical.pink .ui-slider-range,
.progressSlim.pink .ui-progressbar-value {
	background: #9F00A7 !important;
	border-color: #9F00A7 !important;
	color: #fff;
}

.pinkDark,
.pinkDark [class="box-header"],
.pinkDark.box,
.slider.pinkDark .ui-slider-range, 
.progress.pinkDark .ui-progressbar-value,
.sliderVertical.pinkDark .ui-slider-range,
.progressSlim.pinkDark .ui-progressbar-value {
	background: #7E3878 !important;
	border-color: #7E3878 !important;
	color: #fff;
}

.yellow,
.yellow [class="box-header"],
.yellow.box,
.slider.yellow .ui-slider-range, 
.progress.yellow .ui-progressbar-value,
.sliderVertical.yellow .ui-slider-range,
.progressSlim.yellow .ui-progressbar-value,
.label-warning,
.badge-warning {
	background: #FFC40D !important;
	border-color: #FFC40D !important;
	color: #fff;
}

.purple,
.purple [class="box-header"],
.purple.box,
.slider.purple .ui-slider-range, 
.progress.purple .ui-progressbar-value,
.sliderVertical.purple .ui-slider-range,
.progressSlim.purple .ui-progressbar-value {
	background: #603CBA !important;
	border-color: #603CBA !important;
	color: #fff;
}

.blue,
.blue [class="box-header"],
.blue.box,
.slider.blue .ui-slider-range, 
.progress.blue .ui-progressbar-value,
.sliderVertical.blue .ui-slider-range,
.progressSlim.blue .ui-progressbar-value,
.label-info,
.badge-info {
	background: #2D89EF !important;
	border-color: #2D89EF !important;
	color: #fff;
}

.blueDark,
.blueDark [class="box-header"],
.blueDark.box,
.slider.blueDark .ui-slider-range, 
.progress.blueDark .ui-progressbar-value,
.sliderVertical.blueDark .ui-slider-range,
.progressSlim.blueDark .ui-progressbar-value {
	background: #2B5797 !important;
	border-color: #2B5797 !important;
	color: #fff;
}

.blueLight,
.blueLight [class="box-header"],
.blueLight.box,
.slider.blueLight .ui-slider-range, 
.progress.blueLight .ui-progressbar-value,
.sliderVertical.blueLight .ui-slider-range,
.progressSlim.blueLight .ui-progressbar-value {
	background: #EFF4FF !important;
	border-color: #EFF4FF !important;
	color: #fff;
}

.orange,
.orange [class="box-header"],
.orange.box,
.slider.orange .ui-slider-range, 
.progress.orange .ui-progressbar-value,
.sliderVertical.orange .ui-slider-range,
.progressSlim.orange .ui-progressbar-value {
	background: #E3A21A !important;
	border-color: #E3A21A !important;
	color: #fff;
}

.orangeDark,
.orangeDark [class="box-header"],
.orangeDark.box,
.slider.orangeDark .ui-slider-range, 
.progress.oragneDark .ui-progressbar-value,
.sliderVertical.orangeDark .ui-slider-range,
.progressSlim.orangeDark .ui-progressbar-value {
	background: #DA532C !important;
	border-color: #DA532C !important;
	color: #fff;
}

.red,
.red [class="box-header"],
.red.box,
.slider.red .ui-slider-range, 
.progress.red .ui-progressbar-value,
.sliderVertical.red .ui-slider-range,
.progressSlim.red .ui-progressbar-value,
.label-important,
.badge-important {
	background: #EB3C00 !important;
	border-color: #EB3C00 !important;
	color: #fff;
}

.widget.green h2 .glyphicons i:before,
.widget.greenDark h2 .glyphicons i:before,
.widget.greenLight h2 .glyphicons i:before,
.widget.pink h2 .glyphicons i:before,
.widget.pinkDark h2 .glyphicons i:before,
.widget.yellow h2 .glyphicons i:before,
.widget.purple h2 .glyphicons i:before,
.widget.blue h2 .glyphicons i:before,
.widget.blueDark h2 .glyphicons i:before,
.widget.blueLight h2 .glyphicons i:before,
.widget.orange h2 .glyphicons i:before,
.widget.orangeDark h2 .glyphicons i:before,
.widget.red h2 .glyphicons i:before {
	color: #fff;
}

/* Basic
=================================================================== */

body {
	background: #F5F5F5;
	color: #333;
	border: none;
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
}

a {
	color: #646464;
}

hr {
	height: 2px;
	border: none;
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y5ZjlmOSIgc3RvcC1vcGFjaXR5PSIwLjI1Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iI2Y5ZjlmOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmOWY5ZjkiIHN0b3Atb3BhY2l0eT0iMC4yNSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(left,  rgba(249,249,249,0.25) 0%, rgba(249,249,249,1) 50%, rgba(249,249,249,0.25) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(249,249,249,0.25)), color-stop(50%,rgba(249,249,249,1)), color-stop(100%,rgba(249,249,249,0.25))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(249,249,249,0.25) 0%,rgba(249,249,249,1) 50%,rgba(249,249,249,0.25) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(249,249,249,0.25) 0%,rgba(249,249,249,1) 50%,rgba(249,249,249,0.25) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(249,249,249,0.25) 0%,rgba(249,249,249,1) 50%,rgba(249,249,249,0.25) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(249,249,249,0.25) 0%,rgba(249,249,249,1) 50%,rgba(249,249,249,0.25) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#40f9f9f9', endColorstr='#40f9f9f9',GradientType=1 ); /* IE6-8 */
}

.noMarginLeft {
	margin-left: 0px !important;
}

h1 {
	font-size: 32px;
	line-height: 32px;
	font-weight: 300;
}

h2 {
	font-size: 16px;
	line-height: 16px;
}

h3 {
	font-size: 15px;
	line-height: 15px;
}

h4 {
	font-size: 14px;
	line-height: 14px;
}

h5 {
	font-size: 13px;
	line-height: 13px;
}

h6 {
	font-size: 12px;
	line-height: 12px;
}

/* Header Section
=================================================================== */
.navbar {
	margin-bottom: 0px;
}

.navbar-inner {
	margin-bottom: 0px;
  	min-height: 40px;
  	padding-right: 20px;
  	padding-left: 20px;
	background: #080808;
	filter: none;
	text-shadow: 1px 1px 1px #0a0c0e;
	border: none;
	color: #fff;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
  	*zoom: 1;
	border-bottom: 1px solid #38383D; /* rgba(0, 0, 0, 0.05); */
	
}

.navbar-inner a {
	color: #7b7b7b;
	text-shadow: 0 -1px 1px #0b090a;
}

.navbar-inner a i {
	margin-top: 2px;
}

.navbar-inner a:hover i {
	opacity: .8;
	filter: alpha(opacity=80);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.brand img {
	margin: -12px 0px -5px 0px;
}

a.brand span {
	color: #fff;
	text-shadow: none;
}

.header-nav {
	padding: 0px;
	color: #fff !important;
	background: #000 !important;
}

.header-nav .nav {
	margin: 0px;
}
.header-nav .btn {
  	display: inline-block;
  	padding: 21px 20px;
	margin-top: 0px;
  	margin-left: 0px;
  	font-size: 14px;
  	line-height: 20px;
  	text-align: center;
  	text-shadow: none;
  	vertical-align: middle;
  	cursor: pointer;
  	background: transparent;
  	border-left: none;
	border-right: none;
	border-top: 0px;
	border-bottom: 0px;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
  	-webkit-box-shadow: none !important;
       -moz-box-shadow: none !important;
          	box-shadow: none !important;
}

.header-nav a.btn  {
	color: #fff !important;
	text-shadow: none !important;
	padding: 10px 25px !important;
}

.header-nav .btn .caret {
	border-top-color: #fff !important;
	border-bottom-color: #fff !important;
}

.header-nav .btn:hover .caret {
	border-top-color: #fff !important;
	border-bottom-color: #fff !important;
}

/* Navigation Section
=================================================================== */

#sidebar-left {
	background: #3A3A3A;
}

.sidebar-nav > ul{
	margin: 0px;
	padding-bottom: 1px;
	font-size: 14px;
}

.sidebar-nav > ul > li > ul {
	list-style: none;
	margin: 0px;
	display: none;
	background: rgba(0,0,0,.25);
}

.nav-tabs.nav-stacked > li > a,
.nav-tabs.nav-stacked > li > ul > li > a {
	padding: 15px 10px 14px 10px;
	color: #fff;
	border-top: none;
  	border-bottom: 1px solid #666;
	border-left: none;
	border-right: none;
	text-decoration: none;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;		
}

.nav-tabs.nav-stacked > li:last-child > a {
  	border-bottom: 1px solid transparent;		
}

.nav-tabs.nav-stacked > li > ul > li > a{
	padding: 15px 10px 14px 10px;
	display: block;
}

.nav-tabs.nav-stacked > li > a > i,
.nav-tabs.nav-stacked > li > ul > li > a > i {
	opacity: 1;
	filter: alpha(opacity=100);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	font-size: 16px;
}

.nav-tabs.nav-stacked > li > ul > li > a > i {
	font-size: 20px;
}

.nav-tabs.nav-stacked > li > a:hover > i {
	opacity: 1;
	filter: alpha(opacity=100);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.nav-tabs.nav-stacked > li > a:hover,
.nav-tabs.nav-stacked > li > ul > li > a:hover {
  	color: #666;
}

.nav-tabs.nav-stacked  > li.active > a,
.nav-tabs.nav-stacked  > li > ul > li.active > a {
  	background: #2D89EF;
	border-bottom: 1px solid #2D89EF;
}

.nav-tabs.nav-stacked  > li.active > a:hover,
.nav-tabs.nav-stacked  > li > ul > li.active > a:hover {
  	background: #2D89EF;
	color: #fff;
	border: none;
	border-bottom: 1px solid #2D89EF;
}

.nav-tabs.nav-stacked  > li.active > ul {
	padding: 5px 0px;
  	color: #3b3b41;
  	background: #fff;
}

.nav-tabs.nav-stacked > li:first-child > a {
	margin: 0px 0px 0px 0px;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
}

.nav-tabs.nav-stacked > li:last-child > a {
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
}

.navbar .nav li.dropdown.open > .dropdown-toggle,
.navbar .nav li.dropdown.active > .dropdown-toggle,
.navbar .nav li.dropdown.open.active > .dropdown-toggle {
  	color: #555555;
  	background-color: #000;
  	outline: 0;
	-webkit-box-shadow: none;
       -moz-box-shadow: none;
            box-shadow: none;
}

.dropdown-menu:after,
.dropdown-menu:before {
	top: -1px;
	left: 10px;
	border-right: 9px solid transparent;
	border-bottom: 9px solid #222 !important;
	border-left: 9px solid transparent;
	content: '';
}

.dropdown-menu {
  	position: absolute;
  	top: 100%;
  	left: 0;
  	z-index: 1000;
  	display: none;
  	float: left;
  	min-width: 160px;
	max-width: 300px;
  	padding: 0px 0;
  	margin: 5px 0 0 0;
  	list-style: none;
	text-shadow: none;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
  	-webkit-box-shadow: none;
       -moz-box-shadow: none;
            box-shadow: none;	
}

.dropdown-menu.pull-right {
  	right: 0;
  	left: auto;
}

.dropdown-menu .divider {
  	*width: 100%;
  	height: 1px;
  	margin: 0px 1px;
  	*margin: -5px 0 5px;
  	overflow: hidden;
  	background-color: #eee;
  	border-bottom: 1px solid #ffffff;
}

.dropdown-menu li a {
  	display: block;
  	padding: 7px 10px !important;
  	clear: both;
  	font-weight: normal;
  	line-height: 20px;
  	color: #000;
	text-shadow: none;
  	white-space: normal !important;
}

.dropdown-menu li {
	border-bottom: 1px solid #eee;
}

.dropdown-menu li:first-child {
	border-top: 0px !important;
}

.dropdown-menu li:last-child {
	border-bottom: 0px !important;
}

.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {
  	color: #ffffff;
  	text-decoration: none;
  	background: #2D89EF;
}

.dropdown-menu .active > a,
.dropdown-menu .active > a:hover {
  	color: #ffffff;
  	text-decoration: none;
  	background: #2D89EF;
}

.dropdown-menu .disabled > a,
.dropdown-menu .disabled > a:hover {
  	color: #999999;
}

.dropdown-menu .disabled > a:hover {
  	text-decoration: none;
  	cursor: default;
  	background-color: transparent;
}

.dropdown-menu-title {
	background: #222;
	color: #fff;
	padding: 8px 0px;
	position: relative;
}

.dropdown-menu-title span {
	margin-left: 15px;
}

.dropdown-menu-title a:link {
	position: absolute;
	right: 4px;
	top: 4px;
	padding: 4px 6px !important;
}

.dropdown-menu-title a i {
	color: #fff;
}

.dropdown-menu-title a:hover {
	background: #fff !important;
}

.dropdown-menu-title a:hover i {
	color: #222 !important;
}

.dropdown-menu-sub-footer {
	background: #eee;
}

.dropdown-menu ul,
.dropdown-menu ul li  {
	padding: 0px !important;
	margin: 0px !important;
}

ul.notifications li,
ul.tasks li,
ul.messages li{
	width: 260px;
}

ul.notifications li .avatar img,
ul.tasks li .avatar img,
ul.messages li .avatar img {
	float: left;
	height: 40px;
	width: 40px;
	margin-right: 10px;
}


ul.messages li .header {
	display: block;
}

ul.messages li .header .from {
	font-size: 12px;
	font-weight: bold;
}

ul.notifications li .icon {
	margin: 0px 10px 0px -10px !important;
	padding: 7px 10px 9px 10px;
}

ul.notifications li .time,
ul.tasks li .header .percent,
ul.messages li .header .time {
	font-size: 11px;
	font-weight: bold;
	font-style: italic;
	position: absolute;
	right: 5px;
}
ul.tasks li .title,
ul.notifications li .message {
	font-size: 12px;
}

ul.notifications li.warning a {
	color: #FA5833;
}
 
ul.messages li .message {
	font-size: 11px;
}

/* Content and Main Elements
=================================================================== */

#content {
	background: #ffffff;
	filter: none;
	min-height: 100%;
	padding: 20px 20px;
	position: relative;
}

.breadcrumb {
	margin: -28px -28px 28px -28px;
	line-height: 34px;
	background: #eee;
	border: 0px;
	color: #aaa;
	-webkit-box-shadow: none;
	   -moz-box-shadow: none;
	   		box-shadow: none;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
	        border-radius: 0px; 	
}

.breadcrumb span {
	text-shadow: 1px 1px 0px #fff;
}

.breadcrumb a {
	color: #aaa;
	text-shadow: 0px 1px 1px #fff;	
}

.breadcrumb a:hover {
	color: #646464;
	text-shadow: 0px 1px 1px #fff;
	text-decoration: none;	
}

.dark {
	background: #fdfdfd;
	text-shadow: 0px 1px 1px #fff !important;
	padding: 20px;
	top: -28px;
	right: -28px;
	margin-bottom: -56px;
	margin-right: -30px;
	position: relative;
	border-left: 2px solid #eee;
	min-height: 100%;
	overflow: hidden;		
}

.well {
	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
	        border-radius: 0px;
	-webkit-box-shadow: none;
	   -moz-box-shadow: none;
		    box-shadow: none;
}

.statbox {
	height: 120px;
	padding: 10px;
	position: relative;
	margin-bottom: 28px;
}
	
	.statbox .number {
		font-size: 40px;
		position: absolute;
		top: 10px;
		right: 10px;
	}
	
	.statbox .title {
		font-size: 16px;
		position: absolute;
		top: 50px;
		right: 10px;
	}

	.statbox .footer {
		background: rgba(0,0,0,.1);
		background-color: #19FFFFFF;
		position: absolute;
		bottom: 0px;
		left: 0px;
		padding: 10px;
	}
	
	.statbox .footer:hover {
		background: rgba(0,0,0,.2);
	}
	
	.statbox .footer a {
		color: #fff;
		text-decoration: none;
	}

.widget {
	padding: 10px;
	margin-bottom: 28px;
}

.widget h2 {
	padding: 10px 10px 0px 10px;
	font-size: 18px !important;
	line-height: 18px !important;
	margin-bottom: -5px;
	font-weight: 300;
	text-shadow: 0px 1px 0px #fff;
}

.widget h2 .glyphicons i:before {
	margin-top: -7px;
	font-size: 20px !important;
	line-height: 20px !important;
}

.box {
	border: 2px solid #eee;
	background: #fff !important;
	margin-bottom: 28px;	
}

.box-header {
	height: 16px;
	font-size: 16px;
	line-height: 16px;
  	padding: 10px;
  	background: #eee;
	-webkit-box-shadow: none;
     	-moz-box-shadow: none;
          box-shadow: none;
	overflow: hidden;
}

.box-header h2{
	float:left;
	margin-top: 0px;
	font-weight: 300;
}

.box-header h2 i {
	margin: 0px 3px 0px 4px;
	opacity: .8;
	filter: alpha(opacity=80);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.box-header .break{
	border-left: 1px solid #FFF;
	margin: -12px 10px -10px 10px;
	padding: 12px 0px 10px 0px;
	
}

.box-header .box-icon {
	float:right;
	margin-top: 1px;
}

.box-header .box-icon i {
	-webkit-transition: all 0.1s ease-in-out;
	-moz-transition: all 0.1s ease-in-out;
	-o-transition: all 0.1s ease-in-out;
	-ms-transition: all 0.1s ease-in-out;
	transition: all 0.1s ease-in-out;
	opacity: .8;
	filter: alpha(opacity=80);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.box-header .box-icon i:hover {
	opacity: 1;
	filter: alpha(opacity=100);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.box-header .box-icon a {
	margin: 0px 5px;
}

.box-content {
	position: relative;
	z-index: 50;
  	margin-top: -1px;
	padding: 10px;
	background: #fff !important;
}

/* Vertical Bar Chart
=================================================================== */

.verticalChart {
	width: 100%;
}
	
.verticalChart .singleBar {
	width: 9%;
	float: left;
	margin-left: 0.5%;
	margin-right: 0.5%;
}	
	
.verticalChart .singleBar .bar {
	position: relative;
	height: 200px;
	background: rgba(255,255,255,0.2);
	overflow: hidden;
}
	
.verticalChart .singleBar .bar .value {
	position: absolute;
	bottom: 0;
	width: 100%;
	background: #fff;
	color: #fff;
}

.verticalChart .singleBar .bar .value span{
	position: absolute;
	font-size: 12px;
	bottom: 0;
	width: 100%;
	height: 20px;
	color: #ddd;
	text-shadow: 0px -1px 0px #fff, 0px 1px 0px #fff, 1px 0px 0px #fff, -1px 0px 0px #fff, -1px -1px 0px #fff,-1px 1px 0px #fff, 1px 1px 0px #fff, 1px -1px 0px #fff;
	display: none;
	text-align: center;
}			

.verticalChart .singleBar .title {
	margin-top: 5px;
	text-align: center;
}

/* Browsers Stats
=================================================================== */

.browserStat.big {
	display:inline-block;
	width: 49%;
	text-align: center;
	margin-bottom: 20px;
	padding: 0px;
}

.browserStat {
	display:inline-block;
	width: 32%;
	text-align: center;
	margin: 0px;
	padding: 0px;
}

.browserStat span{
	display:block;
	text-align: center;
	margin-top: 10px;
}

/* Notifications & Labels
=================================================================== */

.notification {
	position: absolute;
	top: -1px;
	right: -1px;
	line-height: 16px;
	height: 16px;
	padding: 3px 6px;
	color: white !important;
	text-shadow: 0 1px hsla(0, 0%, 0%, 0.25);
	border-width: 1px;
	border-style: solid;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
	-webkit-box-shadow: 0 1px 1px hsla(0, 0%, 0%, 0.08), inset 0 1px hsla(0, 100%, 100%, 0.3);
	   -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08), inset 0 1px rgba(255, 255, 255, 0.3);
			box-shadow: 0 1px 1px hsla(0, 0%, 0%, 0.08), inset 0 1px hsla(0, 100%, 100%, 0.3);
}

.notification-small {
	padding: 2px 7px;
	color: white !important;
	text-shadow: 0 1px hsla(0, 0%, 0%, 0.25);
	border-width: 1px;
	border-style: solid;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
	-webkit-box-shadow: 0 1px 1px hsla(0, 0%, 0%, 0.08), inset 0 1px hsla(0, 100%, 100%, 0.3);
	   -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08), inset 0 1px rgba(255, 255, 255, 0.3);
			box-shadow: 0 1px 1px hsla(0, 0%, 0%, 0.08), inset 0 1px hsla(0, 100%, 100%, 0.3);
}

.label,
.badge {
  	text-shadow: none;
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 12px;
	padding: 3px 6px;
}

.label {
	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
}

/* Quick Buttons
=================================================================== */

.quick-button {
	border: 1px solid #ddd;
	margin-bottom: -1px;
  	padding: 30px 0px 10px 0px;
	font-size: 14px;
  	background-color: #fafafa;
  	background-image: -moz-linear-gradient(top, #fafafa, #efefef);
  	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fafafa), to(#efefef));
  	background-image: -webkit-linear-gradient(top, #fafafa, #efefef);
  	background-image: -o-linear-gradient(top, #fafafa, #efefef);
  	background-image: linear-gradient(to bottom, #fafafa, #efefef);
  	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fafafa', endColorstr='#efefef', GradientType=0);
  	-webkit-box-shadow: 0 1px 0px rgba(255, 255, 255, .8);
	   -moz-box-shadow: 0 1px 0px rgba(255, 255, 255, .8);
			box-shadow: 0 1px 0px rgba(255, 255, 255, .8);
  	-webkit-border-radius: 2px;
       -moz-border-radius: 2px;
          	border-radius: 2px;
	display:block;
	color: #646464;
	text-shadow: 0 1px 0px rgba(255, 255, 255, .6);
	text-align: center;
	cursor: pointer;
	position: relative;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}

.quick-button:hover {
	text-decoration: none;
	border-color: #a5a5a5;
	color: #444444;
	text-shadow: 0 1px 0px rgba(255, 255, 255, 1);
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
  	-webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.25);
       -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.25);
          	box-shadow: 0px 0px 3px rgba(0,0,0,.25);
}
.quick-button:hover .notification {
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	-webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.6);
       -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.6);
          	box-shadow: 0px 0px 3px rgba(0,0,0,.6);
}

.quick-button i {
	font-size: 32px;
}

/* Quick Buttons Metro Style
=================================================================== */

.quick-button.metro {
	position: relative;
	color: #fff;
	text-shadow: 0 1px 1px rgba(0, 0, 0, .25);
	filter: none;
	padding: 30px 10px 0px 10px;
	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
          	border-radius: 0px;
}

.quick-button.metro p {
	text-align: left;
	margin-top: 20px;
}

.quick-button.metro:hover {
	color: rgba(255,255,255,.9);
	text-shadow: none;
}

.quick-button.metro i {
	font-size: 64px;
	text-align: center !important;
}

.quick-button.metro .badge {
	text-align: center !important;
	position: absolute;
	top: 50%;
	left: 70%;
	background: none;
	text-shadow: 0 1px 1px rgba(0, 0, 0, .25);
}


/* Quick Buttons Small
=================================================================== */

.quick-button-small {
	border: 1px solid #ddd;
  	padding: 15px 0px 0px 0px;
	font-size: 10px;
  	background-color: #fafafa;
  	background-image: -moz-linear-gradient(top, #fafafa, #efefef);
  	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fafafa), to(#efefef));
  	background-image: -webkit-linear-gradient(top, #fafafa, #efefef);
  	background-image: -o-linear-gradient(top, #fafafa, #efefef);
  	background-image: linear-gradient(to bottom, #fafafa, #efefef);
  	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#fafafa', endColorstr='#efefef', GradientType=0);
  	-webkit-box-shadow: 0 1px 0px rgba(255, 255, 255, .8);
	   -moz-box-shadow: 0 1px 0px rgba(255, 255, 255, .8);
			box-shadow: 0 1px 0px rgba(255, 255, 255, .8);
  	-webkit-border-radius: 2px;
       -moz-border-radius: 2px;
          	border-radius: 2px;
	display:block;
	color: #646464;
	text-shadow: 0 1px 0px rgba(255, 255, 255, .6);
	text-align: center;
	cursor: pointer;
	position: relative;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}

.quick-button-small:hover {
	text-decoration: none;
	border-color: #a5a5a5;
	color: #444444;
	text-shadow: 0 1px 0px rgba(255, 255, 255, 1);
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
  	-webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.25);
       -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.25);
          	box-shadow: 0px 0px 3px rgba(0,0,0,.25);
}

.quick-button-small:hover .notification {
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	-webkit-box-shadow: 0px 0px 3px rgba(0,0,0,.6);
       -moz-box-shadow: 0px 0px 3px rgba(0,0,0,.6);
          	box-shadow: 0px 0px 3px rgba(0,0,0,.6);
}

.quick-button-small i {
	font-size: 20px;
}

/* Dashboard Lists ex.
=================================================================== */

ul.dashboard-list li{
	padding: 5px 0;
	list-style:none;
	border-bottom: 1px solid #eee;
	font-size: 12px;
}

ul.dashboard-list li i{
	font-size: 18px;
	opacity: .7;
	filter: alpha(opacity=70);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
	padding: 2px 2px 0px 2px;
	margin-right: -2px;
}

ul.dashboard-list li:first-child {
	border-top: none;
	border-bottom: 1px solid #eee;
}

ul.dashboard-list li:last-child {
	border-bottom: none;
}

ul.dashboard-list a:hover{
	text-decoration:none;
}

ul.dashboard-list{
	margin:0;
}

ul.dashboard-list li a span {
	display: inline-block;
	font-size: 18px;
	font-weight: bold;
	text-align: right;
	padding: 0px 4px;
}

ul.dashboard-list li .avatar {
	height: 50px;
	width: 50px;
	padding: 1px;
	float: left;
	margin-top: 3px;
	margin-right: 15px;
	border: 1px solid #eee;
}

ul.dashboard-list li .avatar img{
	height: 40px;
	width: 40px;
	padding: 1px;
	float: left;
	margin-top: 3px;
	margin-right: 15px;
	border: 1px solid #eee;
}

/* Dashboard Lists Metro Style ex.
=================================================================== */

ul.dashboard-list.metro {
	margin: -10px -10px;
}

ul.dashboard-list.metro li {
	padding: 5px 0;
	list-style:none;
	border-bottom: 1px solid #eee;
	font-size: 12px;
}

ul.dashboard-list.metro li:last-child {
	border-bottom: none;
}

ul.dashboard-list.metro li i {
	font-size: 18px;
	padding: 9px 7px;
	margin: -5px 10px -5px 0px;
}

ul.dashboard-list a:hover{
	text-decoration:none;
}

ul.dashboard-list.metro li .avatar {
	height: 50px;
	width: 50px;
	float: left;
	margin: 3px 15px 0px 10px;
	border: none;
}

/* Support tickets
=================================================================== */

ul.tickets {
	margin:0;
}

ul.tickets li {
	list-style: none;
	padding: 5px 0;
  	border-top: 1px solid #fff;
	border-bottom: 1px solid #eee;
	font-size: 12px;
}

ul.tickets li:first-child {
	border-top: none;
	border-bottom: 1px solid #eee;
}

ul.tickets li:last-child {
	border-bottom: none;
}


ul.tickets li.ticket .header {
	width: 100%;
	display: inline-block;
	font-weight: bold;
	font-size: 13px;
}

ul.tickets li.ticket .header .title {
	float: left;
	text-align: left;
}

ul.tickets li.ticket .header .number {
	float: right;
	text-align: right;
}

ul.tickets li.ticket .avatar img {
	height: 36px;
	width: 36px;
	padding: 1px;
	float: left;
	margin-top: 1px;
	margin-right: 10px;
	border: 1px solid #eee;
}

ul.tickets li.ticket .content{
	display: inline-block;
	width: 100%;
}

ul.tickets li.ticket .content .name,
ul.tickets li.ticket .content .status {
	float: left;
	text-align: left;
	width: 40%;
	white-space: nowrap;
	overflow:hidden !important;
	text-overflow: ellipsis;	
}

ul.tickets li.ticket .content .priority,
ul.tickets li.ticket .content .date {
	float: right;
	text-align: right;	
}

/* Support tickets Metro Style
=================================================================== */

ul.tickets.metro {
	margin: -10px;
}

ul.tickets.metro li {
	padding: 5px 10px;
}

ul.tickets.metro li a {
	color: #fff !important;
}

ul.tickets li.ticket .avatar img {
	padding: 0px;
	border: none;
}

/* Chat
=================================================================== */

ul.chat {
	margin:0;
}

ul.chat li {
	list-style: none;
	padding: 5px 0;
	margin: 10px auto;
	font-size: 12px;
}


ul.chat li img.avatar {
	height: 50px;
	width: 50px;
	padding: 1px;
	border: 1px solid #eee;
}

ul.chat li.left img.avatar {
	float: left;
	margin-right: 10px;
}

ul.chat li.right img.avatar {
	float: right;
	margin-left: 10px;
}

ul.chat li .message {
	display: block;
	border: 2px solid #eee;
	padding: 5px;
	position: relative;
	-webkit-border-radius: 4px;
   	   -moz-border-radius: 4px;
      		border-radius: 4px;
}

ul.chat li.left .message {
	text-align: left;
	margin-left: 65px;
	background: #fff 
}

ul.chat li.left .message .arrow {
	height: 20px;
	width: 20px;
	display: block;
	position: absolute;
	top: 5px;
	left: -20px;
	background: url(../img/chat-left.png) no-repeat 0px 0px;
}

ul.chat li.right .message .arrow {
	height: 20px;
	width: 20px;
	display: block;
	position: absolute;
	top: 5px;
	right: -20px;
	background: url(../img/chat-right.png) no-repeat 0px 0px;
}

ul.chat li.right .message {
	text-align: right;
	margin-right: 65px;
	background: #fcfcfc;
}

ul.chat li .message .text {
	display: block;	
}

.chat-form {
	border-top: 1px solid #ddd;
	background: #eee;
	padding: 10px;
	margin: 20px -10px -10px -10px;
}

.chat-form textarea {
	width: 100%;
	padding: 0.5em;
	-webkit-box-sizing: border-box; /* Safari, Chrome et al  */
	   -moz-box-sizing: border-box; /* Firefox */
	        box-sizing: border-box; /* Opera/IE 8+ */	
	height: 80px;
	outline: 0px !important;
	font-size: 12px;
}

/* Chat Metro Style
=================================================================== */

ul.chat.metro {
	margin:-10px -10px -20px -10px;
	padding: 10px;
}

ul.chat.metro li img.avatar {
	padding: 0px;
	border: none;
}

ul.chat.metro li .message {
	background: rgba(0,0,0,.2) !important;
	border: 2px solid rgba(0,0,0,.27) !important;
	-webkit-border-radius: 0px;
   	   -moz-border-radius: 0px;
      		border-radius: 0px;
}

ul.chat.metro li.left .message .arrow {
	left: -22px;
	background: url(../img/chat-left-metro.png) no-repeat 0px 0px;
}

ul.chat.metro li.right .message .arrow {
	right: -22px;
	background: url(../img/chat-right-metro.png) no-repeat 0px 0px;
}

/* Forms
=================================================================== */

.form-actions {
  	padding: 19px 20px 20px;
  	margin: 20px -10px -30px -10px;
  	background-color: #eee;
  	border-top: 1px solid #eee;
  	*zoom: 1;
}

.form-actions:before,
.form-actions:after {
  	display: table;
  	line-height: 0;
  	content: "";
}

.form-actions:after {
 	clear: both;
}

/* Buttons
=================================================================== */

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: 500;
  line-height: 20px;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid #a7a9aa;
  -webkit-border-radius: 0px !important;
  border-radius: 0px !important;
}

.btn i {
	margin-top: 2px;
}

.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

.btn:hover,
.btn:focus {
  color: #fff;
  text-decoration: none;
}

.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: default;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-large {
  padding: 11px 14px;
  font-size: 17.5px;
  border-radius: 0px;
}

.btn-small {
  padding: 2px 10px;
  font-size: 11.9px;
  border-radius: 0px;
}

.btn-mini {
  padding: 0 6px;
  font-size: 10.5px;
  border-radius: 0px;
}

.btn-block {
  display: block;
  width: 100%;
  padding-right: 0;
  padding-left: 0;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

.btn-block + .btn-block {
  margin-top: 5px;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.btn {
 	color: #ffffff;
  	background-color: #a7a9aa;
  	border-color: #a7a9aa;
	background-image: none;
	filter: none;
	text-shadow: none;
}

.btn:hover,
.btn:focus,
.btn:active {
  background-color: #9a9c9d;
  border-color: #8d9091;
}

.btn.disabled:hover,
.btn[disabled]:hover,
fieldset[disabled] .btn:hover,
.btn.disabled:focus,
.btn[disabled]:focus,
fieldset[disabled] .btn:focus,
.btn.disabled:active,
.btn[disabled]:active,
fieldset[disabled] .btn:active {
  background-color: #a7a9aa;
  border-color: #a7a9aa;
}

.btn-primary {
  background-color: #2D89EF;
  border-color: #2D89EF;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
  background-color: #357ebd;
  border-color: #3071a9;
}

.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active {
  background-color: #2D89EF;
  border-color: #2D89EF;
}

.btn-warning {
  background-color: #FFC40D;
  border-color: #FFC40D;
}

.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active {
  background-color: #eea236;
  border-color: #ec971f;
}

.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active {
  background-color: #FFC40D;
  border-color: #FFC40D;
}

.btn-danger {
  background-color: #EB3C00;
  border-color: #EB3C00;
}

.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active {
  background-color: #d43f3a;
  border-color: #c9302c;
}

.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active {
  background-color: #EB3C00;
  border-color: #EB3C00;
}

.btn-success {
  background-color: #00A300;
  border-color: #00A300;
}

.btn-success:hover,
.btn-success:focus,
.btn-success:active {
  background-color: #4cae4c;
  border-color: #449d44;
}

.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active {
  background-color: #00A300;
  border-color: #00A300;
}

.btn-info {
  background-color: #5bc0de;
  border-color: #5bc0de;
}

.btn-info:hover,
.btn-info:focus,
.btn-info:active {
  background-color: #46b8da;
  border-color: #31b0d5;
}

.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active {
  background-color: #5bc0de;
  border-color: #5bc0de;
}

.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}

.btn-link {
  font-weight: normal;
  color: #2D89EF;
  cursor: pointer;
  border-radius: 0;
}

.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}

.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #333333;
  text-decoration: none;
}

/* Alert Boxes
=================================================================== */
.alert {
	font-family: Arial, sans-serif;
	font-size: 12px;
	line-height: 18px;
	margin-bottom: 15px;
	position: relative;
	padding: 14px 40px 14px 18px;
	-webkit-box-shadow:  0px 1px 1px 0px rgba(180, 180, 180, 0.1);
	box-shadow:  0px 1px 1px 0px rgba(180, 180, 180, 0.1);
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

.alert.alert-success {
	background-color: #edf6e5 !important;
	color: #7a9659 !important;
	border: 1px solid #9fc76f !important;
}

.alert.alert-error {
	background-color: #fdeaea !important;
	color: #ca6f74 !important;
	border: 1px solid #f27b81 !important;
}

.alert {
	background-color: #fffee1 !important;
	color: #daac50 !important;
	border: 1px solid #f5c056 !important;
}

.alert.alert-info {
	background-color: #e9f8ff !important;
	color: #5d9fa9 !important;
	border: 1px solid #75c7d3 !important;
}

/* Tables
=================================================================== */

.table th,
.table td {
  border-top: 1px solid #eee;	
}

.table-bordered {
  border-color: #eee;	
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered th,
.table-bordered td {
  border-left: 1px solid #eee;
}

.table-bordered thead:first-child tr:first-child > th:first-child,
.table-bordered tbody:first-child tr:first-child > td:first-child,
.table-bordered tbody:first-child tr:first-child > th:first-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered thead:first-child tr:first-child > th:last-child,
.table-bordered tbody:first-child tr:first-child > td:last-child,
.table-bordered tbody:first-child tr:first-child > th:last-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered thead:last-child tr:last-child > th:first-child,
.table-bordered tbody:last-child tr:last-child > td:first-child,
.table-bordered tbody:last-child tr:last-child > th:first-child,
.table-bordered tfoot:last-child tr:last-child > td:first-child,
.table-bordered tfoot:last-child tr:last-child > th:first-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered thead:last-child tr:last-child > th:last-child,
.table-bordered tbody:last-child tr:last-child > td:last-child,
.table-bordered tbody:last-child tr:last-child > th:last-child,
.table-bordered tfoot:last-child tr:last-child > td:last-child,
.table-bordered tfoot:last-child tr:last-child > th:last-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered tfoot + tbody:last-child tr:last-child td:first-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered caption + thead tr:first-child th:first-child,
.table-bordered caption + tbody tr:first-child td:first-child,
.table-bordered colgroup + thead tr:first-child th:first-child,
.table-bordered colgroup + tbody tr:first-child td:first-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.table-bordered caption + thead tr:first-child th:last-child,
.table-bordered caption + tbody tr:first-child td:last-child,
.table-bordered colgroup + thead tr:first-child th:last-child,
.table-bordered colgroup + tbody tr:first-child td:last-child {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
}

.pagination ul {
  -webkit-border-radius: 0px !important;
	 -moz-border-radius: 0px !important;
          border-radius: 0px !important;
  -webkit-box-shadow: none;
     -moz-box-shadow: none;
          box-shadow: none;
}

.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
  -webkit-border-bottom-left-radius: 0px;
          border-bottom-left-radius: 0px;
  -webkit-border-top-left-radius: 0px;
          border-top-left-radius: 0px;
  -moz-border-radius-bottomleft: 0px;
  -moz-border-radius-topleft: 0px;
}

.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span {
  -webkit-border-top-right-radius: 0px;
          border-top-right-radius: 0px;
  -webkit-border-bottom-right-radius: 0px;
          border-bottom-right-radius: 0px;
  -moz-border-radius-topright: 0px;
  -moz-border-radius-bottomright: 0px;
}

/* Tabs
=================================================================== */

.tab-menu.nav-tabs {
  	*zoom: 1;
	margin-top: -46px;
}

.tab-menu.nav-tabs > li {
  	float: right;
}

.tab-menu.nav-tabs {
  	border-bottom: none;
}

.tab-menu.nav-tabs > li {
  	margin-bottom: -1px;
}

.tab-menu.nav-tabs > li > a {
  	padding-top: 10px;
  	padding-bottom: 10px;
  	line-height: 16px;
	margin-left: 0px;
	border: none;
  	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
            border-radius: 0px;
}

.tab-menu.nav-tabs > li > a:hover {
	border: none;
	
}

.tab-menu.nav-tabs > .active > a  {
  	color: #555555;
  	cursor: default;
  	background-color: #fff;
  	border: none;
}

.tab-menu.nav-tabs > .active > a:hover { 
	background-color: #fafafa;
}

/* Masonry Gallery
=================================================================== */

.masonry-thumb {
  	display: inline-block;
  	vertical-align: top;
  	margin-bottom: 6px;
}

/* Login Box
=================================================================== */

.login-box {
	width: 400px;
	margin: 100px auto;
	background: rgb(245,245,245); /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y1ZjVmNSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjE5JSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijc3JSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNWY1ZjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(245,245,245,1) 0%, rgba(255,255,255,1) 19%, rgba(255,255,255,1) 77%, rgba(245,245,245,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(245,245,245,1)), color-stop(19%,rgba(255,255,255,1)), color-stop(77%,rgba(255,255,255,1)), color-stop(100%,rgba(245,245,245,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(245,245,245,1) 0%,rgba(255,255,255,1) 19%,rgba(255,255,255,1) 77%,rgba(245,245,245,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(245,245,245,1) 0%,rgba(255,255,255,1) 19%,rgba(255,255,255,1) 77%,rgba(245,245,245,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(245,245,245,1) 0%,rgba(255,255,255,1) 19%,rgba(255,255,255,1) 77%,rgba(245,245,245,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(245,245,245,1) 0%,rgba(255,255,255,1) 19%,rgba(255,255,255,1) 77%,rgba(245,245,245,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f5f5', endColorstr='#f5f5f5',GradientType=0 ); /* IE6-8 */
	color: #000;
	overflow: hidden;
	-webkit-box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.15);
       -moz-box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.15);
         	box-shadow: 0px 0px 0px 5px rgba(0,0,0,0.15);
}

.login-box .icons {
	text-align: right;
	margin: 20px 15px;
	
}

.login-box .icons i {
	text-align: right;
	opacity: .2;
	filter: alpha(opacity=20);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
	margin: 0px 5px;
}

.login-box .icons i:hover {
	opacity: .8;
	filter: alpha(opacity=80);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
}

.login-box h2 {
	color: #646464;
	margin-left: 30px;
	font-family: monaco;
	font-weight: normal;
}

.login-box h3 {
	color: #646464;
	margin-left: 30px;
	font-family: monaco;
	font-weight: normal;
}

.login-box p {
	margin: 10px 30px;
	font-weight: normal;
}

.login-box .input-prepend {
	background: #fff;
	width: 100%;
	text-align: center;
	padding: 15px 0px;
	border-left: 3px solid #fff;
}

.login-box .input-prepend-focus {
	background: #fcfcfc;
	width: 100%;
	text-align: center;
	padding: 15px 0px;
	border-left: 3px solid #646464;
}

.login-box .add-on {
	border: 1px solid #eee !important;
	background: #fff;
	margin-left: -10px;
}

.login-box .add-on i{
	opacity: .1;
	filter: alpha(opacity=10);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=10)";
}

.login-box input[type="text"],
.login-box input[type="password"] {
	border: 1px solid #eee !important;
	color: #aaa;
	border-left: none !important;
	-webkit-box-shadow: none;
       -moz-box-shadow: none;
          	box-shadow: none;
}

.login-box .remember {
	margin-top: 20px;
	margin-left: 20px;
	float: left;
}

.login-box .button-login {
	margin-top: 20px;
	margin-right: 20px;
	float: right;
}

/* UI - Uniform
=================================================================== */

div.checker {
	margin-top: -4px !important;
}

div.radio {
	margin-top: -4px !important;
}

div.uploader{
	-webkit-border-radius:14px;
	   -moz-border-radius:14px;
			border-radius:14px;
}	

/* UI - Sliders & Progress
=================================================================== */

.ui-slider-handle {
	display: inline-block;
	border: 1px solid #ddd;
	height: 16px;
	width: 16px;
	position: absolute !important;
	background: url("../img/slider_r8.png") no-repeat center center scroll #f4f4f4 !important;
	background: url("../img/slider_r8.png") no-repeat center center scroll, -webkit-linear-gradient(top , #F4F4F4 0%, #F7F7F7 100%) !important;
	background: url("../img/slider_r8.png") no-repeat center center scroll, -moz-linear-gradient(top , #F4F4F4 0%, #F7F7F7 100%) !important;
	background: url("../img/slider_r8.png") no-repeat center center scroll, -o-linear-gradient(top , #F4F4F4 0%, #F7F7F7 100%) !important;
	background: url("../img/slider_r8.png") no-repeat center center scroll, -ms-linear-gradient(top , #F4F4F4 0%, #F7F7F7 100%) !important;
	background: url("../img/slider_r8.png") no-repeat center center scroll, linear-gradient(top , #F4F4F4 0%, #F7F7F7 100%) !important;
	margin-top: -1px !important;
	outline: none !important;
}

.sliderVertical .ui-slider-handle {
	margin: 0px 0px -10px 0px !important;
}

.slider {
	background: #eee !important;
	border: 1px solid #ddd !important;
	height: 10px;
	position: relative;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.slider .ui-slider-range {
	position: absolute;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.sliderVertical {
	background: #eee !important;
	border: 1px solid #ddd !important;
	width: 6px;
	top: auto;
	bottom: auto;
	padding: 15px 3px !important;
	position: relative;
	margin: 8px 0;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	float: left;
    height: 100px;
    margin-right: 40px;
}


.sliderVertical .ui-slider-range {
	height: 100%;
	width: 100%;
	top: auto;
	bottom: auto;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.ui-slider-range-max {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.ui-slider-range-min {
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.sliderVertical .ui-slider-range-max {
	top: 0;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.sliderVertical .ui-slider-range-min {
	bottom: 0;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
}

.progress {
	background: #eee !important;
	border: 1px solid #ddd !important;
	height: 14px;
	-webkit-box-shadow: none;
	   -moz-box-shadow: none;
			box-shadow: none;
	-webkit-border-radius: 0px;
	   -moz-border-radius: 0px;
			border-radius: 0px;		
	position: relative;
}

.ui-progressbar-value {
	border-color: transparent;
	height: 100%;
	top: 0px;
	position: absolute;
	left: 0px;
}

.progressBarValue span{
	font-size: 12px;
}

.progressBarValue span.progressCustomValueVal {
	font-size: 18px; font-weight: 700; padding:0 5px; color: #FA5833;
}


.progressSlim {
	background: #ddd !important;
	height: 12px;
	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
	        border-radius: 0px;
	position: relative
}

.tasks .progressSlim {
	overflow: hidden;
	border: none !important;
	height: 12px;
	-webkit-box-shadow: none !important;
	   -moz-box-shadow: none !important;
			box-shadow: none !important;
	margin-top: 0px;
}

.tasks .progressSlim .ui-progressbar-value {
	overflow: hidden;
	margin: 0px;
	border: none !important;
	-webkit-border-radius: 0px;
       -moz-border-radius: 0px;
	        border-radius: 0px;
}

.progressSlim .ui-progressbar-value {
	border-color: transparent;
	height: 100%;
	top: 0px;
	position: absolute;
	left: 0px;
}

/* ToDo List
=================================================================== */
.todo ul{
	list-style: none;
	padding: 0px;
	margin: 0px;
}

.todo ul li{
	margin-left: 0px !important;
	padding: 5px;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #f6f6f6;
	font-size: 12px;
	position: relative;
}

.todo-actions{
	position: absolute;
	right: 0px;
}

.todo .label {
	position: absolute;
	right: 60px;
}

.todo-actions i {
	opacity: .3;
	filter: alpha(opacity=30);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	margin: 2px 5px 0px 5px;	
}

.todo-actions i:hover {
	opacity: .6;
	filter: alpha(opacity=60);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
}

.todo ul li:first-child{
	border-top: 0px;
}

.todo ul li:last-child{
	border-bottom: 0px;
}

/* ToDo List Metro Style
=================================================================== */
.todo.metro ul{
	list-style: none;
	padding: 0px;
	margin: -10px;
}

.todo.metro ul li {
	padding: 8px;
	border-bottom: none;
	font-size: 12px;
	position: relative;
	color: #fff !important;
}

.todo.metro ul li a {
	color: #fff !important;
	text-decoration: none;
	font-size: 14px;
}

.todo.metro ul li strong {
	position: absolute;
	right: 10px;
}

.todo .label {
	position: absolute;
	right: 60px;
}

.todo-actions i {
	opacity: .3;
	filter: alpha(opacity=30);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	margin: 2px 5px 0px 5px;	
}

.todo-actions i:hover {
	opacity: .6;
	filter: alpha(opacity=60);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=60)";
}

.todo ul li:first-child{
	border-top: 0px;
}

.todo ul li:last-child{
	border-bottom: 0px;
}

/* Skill Bars
=================================================================== */
.skill-bar h5 {
	margin-bottom:6px;
}

.skill-bar li {
	margin-bottom:12px;
	list-style: none;
	margin-left: -26px;
	padding-left: 0px;
}

.meter { 
	height: 14px; 
	position: relative;
	background: #fff !important;
	border: 1px solid #ddd;
}

.meter > span {
	display: block;
	height: 100%;
	position: relative;
	overflow: hidden;
	background:#ddd;
}

.meter > span:after, .animate > span > span {
	content: "";
	position: absolute;
	top: 0; 
	left: 0; 
	bottom: 0; 
	right: 0;
	overflow: hidden;
}

.meter > span:after, 
.animate > span > spans li.current {
}

/* Star Rating
=================================================================== */

.rating {
  unicode-bidi: bidi-override;
  direction: rtl;
  font-size: 30px;
}
.rating span.star,
.rating span.star {
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  display: inline-block;
}
.rating span.star:hover,
.rating span.star:hover {
  cursor: pointer;
}
.rating span.star:before,
.rating span.star:before {
  content: "\f006";
  padding-right: 5px;
  color: #999999;
}
.rating span.star:hover:before,
.rating span.star:hover:before,
.rating span.star:hover ~ span.star:before,
.rating span.star:hover ~ span.star:before {
  content: "\f005";
  color: #e3cf7a;
}

/* Footer
=================================================================== */

footer {
	min-height: 24px;
	background: #3A3A3A;
	color: #fff !important;
	-webkit-border-radius: 0px;
	   -moz-border-radius: 0px;
	      	border-radius: 0px;
}

/* Sparkline stats
=================================================================== */

.sparkLineStats {
	position: relative; 
	margin-bottom: -4px;
}

.sparkLineStats ul {
	margin:0;
}
	
.sparkLineStats li {
	margin-bottom: 0; 
	line-height: 42px; 
	padding-top:3px; 
	font-size: 12px
}

.sparkLineStats li .number {
	font-size: 17px;
	font-weight: 700; 
	padding:0px 0px 0px 2px; 
	color: #fff;
}

.sparkLineStats li span:first-child {
	margin-right: 5px;
}

.sparkLineStats h4 {
	position: relative;
	border-bottom: 1px solid #c4c4c4; 
	padding-bottom: 0px; 
	margin-bottom: 10px; 
	line-height: 37px;
	-webkit-box-shadow: 0 1px 0px rgba(255, 255, 255, 1);
	   -moz-box-shadow:0 1px 0px rgba(255, 255, 255, 1);
			box-shadow: 0 1px 0px rgba(255, 255, 255, 1);
}

/* Circle stats
=================================================================== */

.circleStats {text-align: center; position: relative;}

.circleStatsItemBox {
	position: relative;
	background: #67C2EF;
	width:100%;
	min-width: 130px; 
	height: 160px;
	padding-top: 40px;
	margin-bottom: 28px;
}

.circleStatsItemBox .header {
	background: rgba(255,255,255,0.2);
	color: rgba(255,255,255,0.9);
	width: 100%; 
	height: 20px;
	padding: 5px 0px;
	position: absolute;
	top: 0px;
}

.circleStatsItemBox .footer {
	background: rgba(0,0,0,0.1);
	color: rgba(255,255,255,0.9);
	width: 100%; 
	height: 20px;
	padding: 5px 0px;
	position: absolute;
	bottom: 0px;
}

.circleStatsItemBox .footer .count{
	font-size: 12px;
}

.circleStatsItemBox .footer .value{
	font-weight: bold;
}

.circleStatsItemBox .percent {
	font-size: 12px;
	position: absolute;
	top:110px; 
	width: 100%; 
	left: 0px;
	text-align: center;
	color: rgba(255,255,255,0.9);
}

.circleStatsItemBox input {
	cursor: default;
	box-shadow: none;
	border:none;
	height: auto;
	position: absolute;
	top:30px;
	padding: 5px 0px !important;
	border-color: rgba(0, 0, 0, 0.8);
}

.circleStatsItemBox input:focus {
	outline: 0;
	outline: thin dotted 0;
  	-webkit-box-shadow: none;
       -moz-box-shadow: none;
         	box-shadow: none;
}

/* Typography - Blockquote
=================================================================== */	
blockquote {
	background: url(../img/quote.png) no-repeat 0px 10px;
	font-style: italic;
	border-left: none;
	padding: 0 0 0 30px;
}

/* Icons
=================================================================== */

.the-icons {
	list-style: none;
}

.glyphicons p {
	width: 33%;
	float: left;
	line-height: 44px;
}

/* Page: Messages
=================================================================== */

ul.messagesList {
	list-style: none;
	margin: 0px;
	font-size: 12px;
	
}

ul.messagesList li {
	background: #f9f9f9;
	-webkit-border-radius: 4px;
	   -moz-border-radius: 4px;
			border-radius: 4px;
	padding: 5px 10px;
	cursor: pointer;		
}

ul.messagesList li .glyphicons{
	padding: 5px 0 5px 25px;
}

ul.messagesList li .glyphicons i:before{
	font-size: 14px;
	margin: -2px 0px 0px 5px;
	color: #3b3b41;
}

ul.messagesList li:nth-child(odd) {
	background: #fff !important;
}

ul.messagesList li.odd {
	background: #fff !important;
}

ul.messagesList li span.from {
	display: inline-block;
	width: 25%;
	white-space: nowrap;
	overflow:hidden !important;
	text-overflow: ellipsis;	
}

ul.messagesList li span.title {
	display: inline-block;
	width: 55%;
	font-weight: 300;
	white-space: nowrap;
	overflow:hidden !important;
	text-overflow: ellipsis;	
}

ul.messagesList li span.date {
	display: inline-block;
	width: 20%;
	text-align: right;	
}

.message .header {
	margin-bottom: 30px;
}

.message .header h1{
	background: #67C2EF; /* rgba(103, 194, 239, 1); */
	color: #fff;
	text-shadow: 0px -1px 0px rgba(0,0,0,.15);
	margin: -20px -20px 10px -20px;
	padding: 20px;
}

.message .header i {
	margin-top: 1px;
}

.message .header .from {
	display: inline-block;
	width: 70%;
	font-size: 12px;
}

.message .header .date {
	display: inline-block;
	width: 29%;
	text-align: right;
	float: right;
	font-size: 12px;
}

.message .attachments {
	border-top: 3px solid #f9f9f9;
	border-bottom: 3px solid #f9f9f9;
	padding: 10px 0px;
	margin-bottom: 20px;
	font-size: 12px;
}

.message .attachments ul {
	list-style: none;
	margin: 0;
}

.message .attachments ul li {
	margin: 10px 0;
}

.message .attachments ul li span.label {
	font-size: 12px !important;
}

.message .attachments ul li span.quickMenu {
	float: right;
	text-align: right;
}

.message .attachments ul li span.quickMenu .glyphicons {
	padding: 5px 0 5px 25px;
}

.message .attachments ul li span.quickMenu .glyphicons i:before{
	font-size: 14px;
	margin: -2px 0px 0px 5px;
	color: #3b3b41;
}

/* Page: Tasks
=================================================================== */

.priority.high {
	background: #FFEFEC; /* rgba(250,96,61,.1); */
	margin-bottom: 1px;
}

.priority.high span {
	background: #FA603D; /* rgba(250,96,61,1); */
	padding: 2px 10px;
	color: #fff;
	display: inline-block;
	font-size: 12px;
}

.priority.medium {
	background: #FFF7EB; /* rgba(250,187,61,.1); */
	margin-bottom: 1px;
}

.priority.medium span {
	background: #FABB3D; /* rgba(250,187,61,1); */
	padding: 2px 10px;
	color: #fff;
	display: inline-block;
	font-size: 12px;
}

.priority.low {
	background: #F1F9ED; /* rgba(120,205,81,.1); */
	margin-bottom: 1px;
}

.priority.low span {
	background: #78CD51; /* rgba(120,205,81,1); */
	padding: 2px 10px;
	color: #fff;
	display: inline-block;
	font-size: 12px;
}

.task {
	border-bottom: 1px solid #f9f9f9;
	margin-bottom: 1px;
}

.task.last {
	border-bottom: 1px solid transparent;
}

.task.high {
	border-left: 2px solid #FA603D; /* rgba(250,96,61,1); */
}

.task.medium {
	border-left: 2px solid #FABB3D; /* rgba(250,187,61,1) */;
}

.task.low {
	border-left: 2px solid #78CD51; /* rgba(120,205,81,1); */
}

.task .desc {
	display: inline-block;
	width: 75%;
	padding: 10px 10px;
	font-size: 12px;
}

.task .desc .title{
	font-size: 18px;
	margin-bottom: 5px;
}

.task .time {
	display: inline-block;
	float: right;
	width: 15%;
	padding: 10px 10px 10px 0px;
	font-size: 12px;
	text-align: right;
}

.task .time .date {
	font-size: 18px;
	margin-bottom: 5px;	
}

.timeline {
	width: auto;
	height: 100%;
	margin: 20px auto; 
	background: url(../img/timeline-bg.png) repeat-y center top; 
}

.timeslot {
	display: inline-block;
	position: relative;	
	width: 100%;
	margin: 5px 0px;
}

.timeslot .task {
	position: absolute;
	width: 42%;
	padding-right: 18px;
	display: block;
	height: auto;
	border: none;
}

.timeslot.alt .task {
	left: auto;
	right: -20px;
	padding-left: 18px;
}

.timeslot .task span {
	border: 2px solid #67C2EF; /* rgba(103, 194, 239, 1); */
	background: #EDF6FB; /* rgba(103, 194, 239, .1); */
	padding: 5px;
	display: block;
	font-size: 11px;
}

.timeslot .task span span{
	border: 0px;
	background: transparent;
	padding: 0px;
}

.timeslot .task span span.details{
	font-size: 16px;
	margin-bottom: 10px;
}

.timeslot .task span span.remaining{
	font-size: 14px;
}

.timeslot .task .arrow {
	position: absolute;
	top: 6px;
	right: 0px;
	height: 20px;
	width: 20px;
	background: url(../img/timeline-left-arrow.png) no-repeat;
}

.timeslot.alt .task .arrow {
	position: absolute;
	top: 6px;
	left: 0px;
	height: 20px;
	width: 20px;
	background: url(../img/timeline-right-arrow.png) no-repeat;
}

.timeslot .icon {
	position: absolute;
	border: 2px solid #67C2EF; /* rgba(103, 194, 239, 1); */
	background: #3b3b41;
	-webkit-border-radius: 50em;
	   -moz-border-radius: 50em;
			border-radius: 50em;
	height: 30px;
	width: 30px;
	left: 50%;
	margin-left: -16px;
	color: #fff;
	font-size: 18px;
	line-height: 30px;
	text-align: center;
	text-shadow: none;
	z-index: 2;
}

.timeslot.alt .icon {
	
}

.timeslot .time {
	background: #f9f9f9;
	position: absolute;
	top: 1px;		
	left: 50%;
	padding: 5px 10px 5px 40px;
	z-index: 1;
	margin-top: 1px;
}

.timeslot.alt .time {
	top: 1px;
	left: auto;		
	right: 50%;
	padding: 5px 40px 5px 10px;
}

/* Retina Display Hack
=================================================================== */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
	
	.timeslot .task .arrow {
		background: url(../img/timeline-left-arrow%402x.png) no-repeat;
		background-size: 100%;
	}
	
	.timeslot.alt .task .arrow {
		background: url(../img/timeline-right-arrow%402x.png) no-repeat;
		background-size: 100%;
	}
	
	ul.chat li.left .message .arrow {
		background: url(../img/chat-left%402x.png) no-repeat 0px 0px;
		background-size: 100%;
	}

	ul.chat li.right .message .arrow {
		background: url(../img/chat-right%402x.png) no-repeat 0px 0px;
		background-size: 100%;
	}
	
	ul.chat.metro li.left .message .arrow {
		background: url(../img/chat-left-metro%402x.png) no-repeat 0px 0px;
		background-size: 100%;
	}

	ul.chat.metro li.right .message .arrow {
		background: url(../img/chat-right-metro%402x.png) no-repeat 0px 0px;
		background-size: 100%;
	}
    
}