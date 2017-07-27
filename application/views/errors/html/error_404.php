<!DOCTYPE html>
<html lang="en">
    <head>        
       <title>Sistem Informasi Penegasan Hak BPN</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
      
		<style>
		@charset "UTF-8";

@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,500,600,700&subset=latin,latin-ext);
@import "jquery/jquery-ui.min.css";
@import "bootstrap/bootstrap.min.css";
@import "fontawesome/font-awesome.min.css";
@import "summernote/summernote.css";
@import "codemirror/codemirror.css";
@import "nvd3/nv.d3.css";
@import "mcustomscrollbar/jquery.mCustomScrollbar.css";
@import "fullcalendar/fullcalendar.css";
@import "blueimp/blueimp-gallery.min.css";
@import "rickshaw/rickshaw.css";
@import "dropzone/dropzone.css";
@import "animate/animate.min.css";


/* PREDEFINED CLASSES */
.clearfix {
  zoom: 1;
}
.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}
.clearfix:after {
  clear: both;
}
.background-colorful {
  background: linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -o-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -moz-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -webkit-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -ms-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0, #E04B4A), color-stop(0.5, #1caf9a), color-stop(1, #95b75d));
}
/* EOF PREDEFINED CLASSES */
html * {
  outline: none !important;
}
html,
body {
  min-height: 100%;
  padding: 0px;
  margin: 0px;
  background: #f5f5f5 url('../img/bg.png') left top repeat;
  position: relative;
  font-family: 'Open Sans', sans-serif;
  font-size: 12px;
  color: #22262e;
  overflow-x: hidden;
}
.body-full-height {
  height: 100%;
}
.body-full-height body {
  height: 100%;
}
.row {
  margin-left: 0px;
  margin-right: 0px;
}
.row [class^='col-xs-'],
.row [class^='col-sm-'],
.row [class^='col-md-'],
.row [class^='col-lg-'] {
  min-height: 1px;
  padding-left: 10px;
  padding-right: 10px;
}
.row.stacked [class^='col-xs-'],
.row.stacked [class^='col-sm-'],
.row.stacked [class^='col-md-'],
.row.stacked [class^='col-lg-'] {
  padding-left: 0px;
  padding-right: 0px;
}
/* PAGE CONTAINER */
.page-container {
  width: 100%;
  float: left;
  min-height: 100%;
  position: relative;
  background: #1b1e24;
  /* SIDEBAR */
  /* END SIDEBAR */
  /* CONTENT */
  /* END CONTENT */
  /* RTL CONTENT MODE */
  /* END RTL CONTENT MODE */
}
.page-container .page-sidebar {
  width: 220px;
  float: left;
  position: relative;
  z-index: 3;
}
.page-container .page-sidebar.page-sidebar-fixed {
  position: fixed;
}
.page-container.page-container-wide .page-sidebar {
  width: 50px;
}
.page-container .page-content {
  min-height: 100%;
  margin-left: 220px;
  background: #f5f5f5 url('../img/bg.png') left top repeat;
  position: relative;
  zoom: 1;
}
.page-container .page-content:before,
.page-container .page-content:after {
  content: "";
  display: table;
}
.page-container .page-content:after {
  clear: both;
}
.page-container .page-content .content-frame {
  float: left;
  width: 100%;
  position: relative;
  background: #f5f5f5 url('../img/bg.png') left top repeat;
}
.page-container .page-content .content-frame .content-frame-top {
  float: left;
  width: 100%;
  line-height: 30px;
  padding: 13px 15px 15px;
  background: rgba(0, 0, 0, 0.02);
  border-bottom: 1px solid #DDD;
  border-top: 1px solid #DDD;
}
.page-container .page-content .content-frame .content-frame-top .page-title {
  padding: 0px;
  width: auto;
}
.page-container .page-content .content-frame .content-frame-top .page-title h2 {
  margin-bottom: 0px;
  font-size: 22px;
}
.page-container .page-content .content-frame .content-frame-left {
  float: left;
  width: 300px;
  padding: 10px;
  min-height: 100%;
  background: rgba(0, 0, 0, 0.02);
  border-right: 1px solid #DDD;
}
.page-container .page-content .content-frame .content-frame-left.padding-0 {
  padding: 0px;
}
.page-container .page-content .content-frame .content-frame-left .block {
  padding: 0px;
  margin-bottom: 20px;
}
.page-container .page-content .content-frame .content-frame-left h4 {
  margin-top: 10px;
}
.page-container .page-content .content-frame .content-frame-left > .form-group {
  margin-bottom: 20px;
}
.page-container .page-content .content-frame .content-frame-right {
  float: right;
  width: 300px;
  padding: 10px;
  min-height: 100%;
  background: rgba(0, 0, 0, 0.02);
  border-left: 1px solid #DDD;
}
.page-container .page-content .content-frame .content-frame-right.padding-0 {
  padding: 0px;
}
.page-container .page-content .content-frame .content-frame-right.padding-0 .block {
  padding: 10px;
}
.page-container .page-content .content-frame .content-frame-right h4 {
  margin-top: 10px;
}
.page-container .page-content .content-frame .content-frame-right .block {
  padding: 0px;
  margin-bottom: 20px;
}
.page-container .page-content .content-frame .content-frame-right > .form-group {
  margin-bottom: 20px;
}
.page-container .page-content .content-frame .content-frame-body {
  padding: 70px 10px 10px 10px;
  margin-left: 300px;
}
.page-container .page-content .content-frame .content-frame-body.content-frame-body-left {
  margin-left: 0px;
  margin-right: 300px;
}
.page-container .page-content .content-frame .content-frame-left-toggle,
.page-container .page-content .content-frame .content-frame-right-toggle {
  display: none;
  margin-left: 5px;
}
.page-container .page-content .page-content-wrap {
  float: left;
  width: 100%;
}
.page-container.page-container-wide .page-content {
  margin-left: 50px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.page-container.page-navigation-toggled .page-content {
  margin-left: 50px;
}
.page-container.page-mode-rtl .page-sidebar {
  float: right;
}
.page-container.page-mode-rtl .page-sidebar.page-sidebar-fixed {
  right: 0px;
}
.page-container.page-mode-rtl .page-content {
  margin-left: 0px;
  margin-right: 220px;
}
.page-container.page-mode-rtl.page-container-wide .page-content {
  margin-right: 50px;
}
.page-container.page-navigation-top .page-content {
  margin-left: 0px;
}
.page-container.page-navigation-top-fixed .x-navigation.x-navigation-horizontal {
  position: fixed;
  padding-right: 220px;
  top: 0px;
}
.page-container.page-navigation-top-fixed .page-content {
  padding-top: 50px;
}
.page-container.page-navigation-top-fixed.page-navigation-toggled .x-navigation.x-navigation-horizontal {
  padding-right: 50px;
}
body.page-container-boxed {
  background: url("../img/backgrounds/wall_1.jpg") left top no-repeat fixed;
  padding: 20px 0px;
}
body.page-container-boxed .page-container {
  width: 1200px;
  float: none;
  margin: 0px auto;
  -moz-box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 2px 0px rgba(0, 0, 0, 0.2);
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
/* END PAGE CONTAINER */
/* NAVIGATION */
.x-navigation,
.x-navigation ul {
  width: 100%;
  padding: 0px;
  margin: 0px;
  float: left;
  list-style: none;
  display: block;
  z-index: 3;
}
.x-navigation {
  background: #1b1e24;
  /* NAV LIST ELEMENT */
  /* END NAV LIST ELEMENT */
  /* NAV LIST FIRST ELEMENT */
  /* END NAV LIST FIRST ELEMENT */
  /* NAV HORIZONTAL MODE */
  /* END NAV HORIZONTAL MODE */
  /* NAV MINIMIZED MODE */
  /* END NAV MINIMIZED MODE */
  /* X-NAVIIGATION CUSTOM */
  /* END X-NAVIGATION CUSTOM */
  /* NAV SEARCH */
  /* END NAV SEARCH */
  /* NAV INFORMER */
  /* END NAV INFORMER */
}
.x-navigation li {
  float: left;
  display: block;
  width: 100%;
  padding: 0px;
  margin: 0px;
  position: relative;
}
.x-navigation li > a {
  display: block;
  float: left;
  width: 100%;
  line-height: 19px;
  color: #8b91a0;
  font-size: 13px;
  font-weight: 400;
  padding: 15px 10px 15px 15px;
  text-decoration: none;
  border-bottom: 1px solid #17191e;
  vertical-align: text-bottom;
}
.x-navigation li > a .fa,
.x-navigation li > a .glyphicon {
  color: #8b91a0;
  text-align: center;
  width: 20px;
  font-size: 14px;
  margin-right: 10px;
  vertical-align: baseline;
  -webkit-transition: color 200ms ease;
  -moz-transition: color 200ms ease;
  -ms-transition: color 200ms ease;
  -o-transition: color 200ms ease;
  transition: color 200ms ease;
}
.x-navigation li > a:hover {
  background: #262a33;
  color:#fff;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.x-navigation li > a:hover .fa,
.x-navigation li > a:hover .glyphicon {
  color: #fff;
}
.x-navigation li > ul {
  background: #17191e;
  max-height: 0px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  overflow: hidden;
}
.x-navigation li > ul li > a {
  font-size: 12px;
  line-height: 19px;
  font-weight: 400;
  padding: 12px 10px;
  border-bottom-color: #121418;
}
.x-navigation li > ul li > a:hover {
  background: #121418;
  color: #ffffff;
}
.x-navigation li > ul li.active > a {
  background: #121418;
  color: #ffffff;
}
.x-navigation li.xn-openable:before {
  position: absolute;
  font-family: "FontAwesome";
  content: "\f196";
  font-size: 14px;
  width: 20px;
  height: 20px;
  color: #ffffff;
  right: 0px;
  top: 12px;
  cursor: pointer;
}
.x-navigation li.active.xn-openable:before {
  content: "\f147";
}
.x-navigation li.active > a {
  background: #1caf9a;
  color:#fff;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.x-navigation li.active > a .fa,
.x-navigation li.active > a .glyphicon {
  color: #fff;
}
.x-navigation li.active > ul {
  max-height: 1200px;
}
.x-navigation li.xn-title {
  padding: 20px 10px 10px;
  line-height: 20px;
  font-weight: 300;
  font-size: 13px;
  color: #8b91a0;
  border-bottom: 1px solid #17191e;
}
.x-navigation > li.xn-openable:before {
  top: 15px;
}
.x-navigation > li > ul > li > a {
  padding-left: 25px;
}
.x-navigation > li > ul > li > a:hover {
  padding-left: 30px;
}
.x-navigation > li > ul > li.active > a {
  padding-left: 30px;
}
.x-navigation > li > ul > li > ul > li > a {
  padding-left: 40px;
}
.x-navigation > li > ul > li > ul > li > a:hover {
  padding-left: 45px;
}
.x-navigation > li > ul > li > ul > li.active > a {
  padding-left: 45px;
}
.x-navigation > li > ul > li > ul > li > ul > li > a {
  padding-left: 50px;
}
.x-navigation > li > ul > li > ul > li > ul > li > a:hover {
  padding-left: 55px;
}
.x-navigation > li > ul > li > ul > li > ul > li.active > a {
  padding-left: 55px;
}
.x-navigation > li > ul > li > ul > li > ul > li > ul > li > a {
  padding-left: 60px;
}
.x-navigation > li > ul > li > ul > li > ul > li > ul > li > a:hover {
  padding-left: 65px;
}
.x-navigation > li > ul > li > ul > li > ul > li > ul > li.active > a {
  padding-left: 65px;
}
.x-navigation > li:last-child > a {
  -moz-border-radius: 0px 0px 0px 5px;
  -webkit-border-radius: 0px 0px 0px 5px;
  border-radius: 0px 0px 0px 5px;
  border-bottom: 0px;
}
.x-navigation.x-navigation-horizontal {
  height: 50px;
  background: #1d2127;
}
.x-navigation.x-navigation-horizontal .xn-logo a {
  border-bottom: 0px;
  width: 200px;
}
.x-navigation.x-navigation-horizontal > li.xn-openable:before {
  display: none;
}
.x-navigation.x-navigation-horizontal > li > a {
  padding: 15px;
  border-bottom: 0px;
  line-height: 20px;
  color: #ffffff;
  text-shadow: none;
}
.x-navigation.x-navigation-horizontal > li > a:hover {
  background: #282d36;
}
.x-navigation.x-navigation-horizontal > li > a:hover .fa,
.x-navigation.x-navigation-horizontal > li > a:hover .glyphicon {
  color: #697b92;
}
.x-navigation.x-navigation-horizontal > li > a .fa,
.x-navigation.x-navigation-horizontal > li > a .glyphicon {
  color: #ffffff;
}
.x-navigation.x-navigation-horizontal > li.active > a {
  background: #282d36;
}
.x-navigation.x-navigation-horizontal > li.active > a .fa,
.x-navigation.x-navigation-horizontal > li.active > a .glyphicon {
  color: #697b92;
}
.x-navigation.x-navigation-horizontal > li ul {
  width: 220px;
  position: absolute;
  overflow: visible;
  display: none;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  z-index: 3;
}
.x-navigation.x-navigation-horizontal > li ul ul.xn-drop-white:after {
  border-right-color: #FFF;
}
.x-navigation.x-navigation-horizontal > li > ul {
  top: 60px;
  left: 0px;
}
.x-navigation.x-navigation-horizontal > li > ul.xn-drop-white:after {
  border-bottom-color: #FFF;
}
.x-navigation.x-navigation-horizontal > li > ul.xn-drop-left {
  left: auto;
  right: 0px;
}
.x-navigation.x-navigation-horizontal > li > ul.xn-drop-left.xn-drop-white ul:after {
  border-left-color: #FFF;
}
.x-navigation.x-navigation-horizontal > li > ul:after {
  bottom: 100%;
  left: 27px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(0, 0, 0, 0);
  border-bottom-color: #1b1e24;
  border-width: 5px;
  margin-left: -5px;
}
.x-navigation.x-navigation-horizontal > li > ul.xn-drop-left:after {
  right: 20px;
  left: auto;
}
.x-navigation.x-navigation-horizontal > li > ul.xn-drop-left:after ul {
  left: auto;
  right: 230px;
}
.x-navigation.x-navigation-horizontal > li > ul.xn-drop-left:after ul:after {
  right: auto;
  left: 100%;
  border: solid transparent;
  border-left-color: #1b1e24;
  border-width: 5px;
  margin-right: -5px;
}
.x-navigation.x-navigation-horizontal > li > ul ul {
  top: 0px;
  right: -230px;
}
.x-navigation.x-navigation-horizontal > li > ul ul:after {
  right: 100%;
  top: 23px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(0, 0, 0, 0);
  border-right-color: #1b1e24;
  border-width: 5px;
  margin-top: -5px;
}
.x-navigation.x-navigation-horizontal > li > ul li > a {
  padding-left: 10px;
}
.x-navigation.x-navigation-horizontal > li > ul li > a:hover {
  padding-left: 15px;
}
.x-navigation.x-navigation-horizontal > li > ul li.active > a {
  padding-left: 15px;
}
.x-navigation.x-navigation-horizontal > li li {
  width: 100%;
}
.x-navigation.x-navigation-horizontal > li li:first-child a {
  -moz-border-radius: 3px 3px 0px 0px;
  -webkit-border-radius: 3px 3px 0px 0px;
  border-radius: 3px 3px 0px 0px;
}
.x-navigation.x-navigation-horizontal > li li:last-child a {
  -moz-border-radius: 0px 0px 3px 3px;
  -webkit-border-radius: 0px 0px 3px 3px;
  border-radius: 0px 0px 3px 3px;
  border-bottom-color: transparent;
}
.x-navigation.x-navigation-horizontal > li li.xn-openable:before {
  content: "\f105";
}
.x-navigation.x-navigation-horizontal > li li.active.xn-openable:before {
  content: "\f104";
}
.x-navigation.x-navigation-horizontal > li:last-child > a {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.x-navigation.x-navigation-horizontal > li.last > a {
  -moz-border-radius: 0px 5px 0px 0px;
  -webkit-border-radius: 0px 5px 0px 0px;
  border-radius: 0px 5px 0px 0px;
}
.x-navigation.x-navigation-horizontal li {
  width: auto;
  position: relative;
}
.x-navigation.x-navigation-horizontal li.active > ul {
  display: block;
}
.x-navigation.x-navigation-horizontal li.xn-openable > a {
  padding-right: 20px;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white {
  background: #FFF;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white ul {
  background: #FFF;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white ul:after {
  border-right-color: #FFF;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white li > a {
  color: #333;
  text-shadow: none;
  border-bottom: 1px solid #E9E9E9;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white li > a:hover {
  background: #F5F5F5;
  color: #333;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white li > a .fa,
.x-navigation.x-navigation-horizontal ul.xn-drop-white li > a .glyphicon {
  color: #1b1e24;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white li.active > a {
  color: #333;
  text-shadow: none;
  border-bottom: 1px solid #E9E9E9;
}
.x-navigation.x-navigation-horizontal ul.xn-drop-white li.active.xn-openable:before {
  color: #333;
}
.x-navigation.x-navigation-horizontal .xn-icon-button > a {
  padding: 15px 10px;
  text-align: center;
  width: 50px;
}
.x-navigation.x-navigation-horizontal .xn-icon-button > a .fa,
.x-navigation.x-navigation-horizontal .xn-icon-button > a .glyphicon {
  margin: 0px;
}
.x-navigation.x-navigation-horizontal .xn-search {
  padding: 10px 5px;
}
.x-navigation.x-navigation-horizontal .xn-search input {
  width: 100px;
}
.x-navigation.x-navigation-horizontal .xn-search input:focus {
  width: 200px;
}
.x-navigation.x-navigation-horizontal .xn-search:before {
  left: 5px;
}
.x-navigation.x-navigation-minimized {
  width: 50px;
}
.x-navigation.x-navigation-minimized .xn-text {
  display: none;
}
.x-navigation.x-navigation-minimized .xn-visible {
  display: block;
}
.x-navigation.x-navigation-minimized li {
  width: auto;
  position: relative;
}
.x-navigation.x-navigation-minimized li.xn-profile .profile-mini {
  display: block;
}
.x-navigation.x-navigation-minimized li.xn-profile .profile:after {
  right: 100%;
  top: 23px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(0, 0, 0, 0);
  border-right-color: #1b1e24;
  border-width: 5px;
  margin-top: -5px;
}
.x-navigation.x-navigation-minimized li.xn-title {
  display: none;
}
.x-navigation.x-navigation-minimized li.active > ul {
  display: block;
}
.x-navigation.x-navigation-minimized li ul {
  top: 0px;
  right: -230px;
  -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
}
.x-navigation.x-navigation-minimized li ul:after {
  right: 100%;
  top: 23px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(0, 0, 0, 0);
  border-right-color: #1b1e24;
  border-width: 5px;
  margin-top: -5px;
}
.x-navigation.x-navigation-minimized li ul li > a {
  padding-left: 15px !important;
}
.x-navigation.x-navigation-minimized li ul li > a:hover {
  padding-left: 20px !important;
}
.x-navigation.x-navigation-minimized li ul li.active > a {
  padding-left: 20px !important;
}
.x-navigation.x-navigation-minimized li ul li:first-child > a {
  -moz-border-radius: 3px 3px 0px 0px;
  -webkit-border-radius: 3px 3px 0px 0px;
  border-radius: 3px 3px 0px 0px;
}
.x-navigation.x-navigation-minimized li ul li:last-child > a {
  border-bottom: 0px;
  -moz-border-radius: 0px 0px 3px 3px;
  -webkit-border-radius: 0px 0px 3px 3px;
  border-radius: 0px 0px 3px 3px;
}
.x-navigation.x-navigation-minimized > li {
  width: 100%;
}
.x-navigation.x-navigation-minimized > li > a {
  padding: 15px 10px;
  text-align: center;
}
.x-navigation.x-navigation-minimized > li > a .fa,
.x-navigation.x-navigation-minimized > li > a .glyphicon {
  margin: 0px;
}
.x-navigation.x-navigation-minimized > li ul {
  width: 220px;
  position: absolute;
  overflow: visible;
  display: none;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.x-navigation.x-navigation-minimized > li li {
  width: 100%;
}
.x-navigation.x-navigation-minimized > li li.xn-openable:before {
  content: "\f105";
}
.x-navigation.x-navigation-minimized > li li.active.xn-openable:before {
  content: "\f104";
}
.x-navigation.x-navigation-minimized > li.active:before,
.x-navigation.x-navigation-minimized > li.xn-openable:before {
  display: none;
}
.x-navigation.x-navigation-minimized > li.xn-logo > a:first-child {
  padding: 0px;
  width: 50px;
  background-image: url("../img/logo-small.png");
}
.x-navigation.x-navigation-minimized .xn-search input {
  width: 30px;
  padding: 0px 2px 0px 28px;
}
.x-navigation.x-navigation-minimized .xn-search input:focus {
  width: 200px;
  padding: 0px 8px 0px 28px;
}
.x-navigation.x-navigation-custom li ul {
  background: #14171b;
}
.x-navigation.x-navigation-custom li > a {
  border-bottom: 0px;
}
.x-navigation.x-navigation-custom li > a:hover {
  background: #121418;
}
.x-navigation.x-navigation-custom li > a:hover .fa,
.x-navigation.x-navigation-custom li > a:hover .glyphicon {
  color: #b5c1d1;
}
.x-navigation.x-navigation-custom li > a .fa,
.x-navigation.x-navigation-custom li > a .glyphicon {
  color: #DDD;
}
.x-navigation.x-navigation-custom li.active > a {
  background: #121418;
}
.x-navigation.x-navigation-custom li.active > a .fa,
.x-navigation.x-navigation-custom li.active > a .glyphicon {
  color: #b5c1d1;
}
.x-navigation.x-navigation-custom > li > a {
  padding: 12px 10px 12px 12px;
  border-bottom: 0px;
  font-size: 13px;
  color: #CCC;
  border-left: 3px solid transparent;
}
.x-navigation.x-navigation-custom > li > a:hover {
  color: #FFF;
  background: #1f232a;
}
.x-navigation.x-navigation-custom > li.active > a {
  color: #FFF;
  background: #1f232a;
  border-left: 3px solid #b5c1d1;
}
.x-navigation.x-navigation-custom > li.xn-openable:before {
  color: #CCC;
  top: 12px;
}
.x-navigation.x-navigation-custom > li.xn-title {
  border-bottom: 0px;
}
.x-navigation.x-navigation-custom > li.xn-logo > a {
  border-left: 0px;
}
.x-navigation.x-navigation-custom > li.xn-logo > a:hover {
  background-color: #0c0d10;
}
.x-navigation.x-navigation-custom.x-navigation-minimized > li > a {
  padding: 15px 10px 15px 7px;
}
.x-navigation.x-navigation-custom.x-navigation-minimized > li.xn-profile > a {
  border-left: 0px;
  padding: 7px;
}
.x-navigation .xn-search {
  padding: 10px 10px 0px 9px;
  position: relative;
}
.x-navigation .xn-search input {
  width: 200px;
  height: 30px;
  padding: 0px 8px 0px 28px;
  line-height: 25px;
  border: 1px solid #101215;
  background: #14171b;
  color: #AAA;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.x-navigation .xn-search:before {
  content: "\f002";
  font-family: FontAwesome;
  position: absolute;
  width: 30px;
  height: 30px;
  text-align: center;
  font-size: 17px;
  line-height: 28px;
  color: #AAA;
  left: 10px;
  top: 10px;
  z-index: 2;
  cursor: pointer;
}
.x-navigation .xn-visible {
  display: none;
}
.x-navigation .x-navigation-control {
  position: absolute;
  right: 0px;
  width: 50px;
  height: 50px;
  cursor: pointer;
  display: none;
}
.x-navigation .x-navigation-control:hover {
  background: #0c0d10;
  border-bottom: 0px;
}
.x-navigation .x-navigation-control:before {
  position: absolute;
  font-family: "FontAwesome";
  content: "\f0c9";
  font-size: 14px;
  top: 14px;
  left: 20px;
  color: #FFF;
  text-shadow: 1px 2px 2px rgba(0, 0, 0, 0.3);
}
.x-navigation > li.xn-logo > a {
  border-bottom: 0px;
}
.x-navigation > li.xn-logo > a:first-child {
 font-size: 25px;
 border-bottom: 0px;
 color: #FFF;
 height: 50px;
 text-align: center;
 background: #1caf9a;
}
.x-navigation > li.xn-logo > a:first-child:hover {
  background-color: #1caf9a;
}
.x-navigation > li.xn-profile {
  padding: 0px;
  border-bottom: 1px solid #14171b;
}
.x-navigation > li.xn-profile .profile-data-name {
  color: #ffffff;
}
.x-navigation > li.xn-profile .profile-mini {
  display: none;
  width: 50px;
  padding: 7px;
}
.x-navigation > li.xn-profile .profile-mini img {
  width: 36px;
  border: 2px solid #FFF;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
}
.x-navigation .informer {
  font-size: 11px;
  position: absolute;
  line-height: 20px;
  text-align: center;
  padding: 0px 5px;
  background: #BBB;
  right: 10px;
  top: 15px;
  color: #FFF;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.x-navigation .informer.pulsate {
  -webkit-animation: pulsate 1s ease-out;
  -webkit-animation-iteration-count: infinite;
  -moz-animation: pulsate 1s ease-out;
  -moz-animation-iteration-count: infinite;
  animation: pulsate 1s ease-out;
  animation-iteration-count: infinite;
}
.x-navigation .informer.informer-primary {
  background: #1b1e24;
}
.x-navigation .informer.informer-success {
  background: #95b75d;
}
.x-navigation .informer.informer-info {
  background: #1caf9a;
}
.x-navigation .informer.informer-warning {
  background: #1caf9a;
}
.x-navigation .informer.informer-danger {
  background: #E04B4A;
}
.x-navigation li li .informer {
  top: 12px;
}
.x-navigation .xn-icon-button .informer {
  left: auto;
  bottom: auto;
  right: 1px;
  top: 5px;
}
.page-container.page-mode-rtl .x-navigation.x-navigation-minimized li ul {
  top: 0px;
  right: auto;
  left: -230px;
}
.page-container.page-mode-rtl .x-navigation.x-navigation-minimized li ul:after {
  right: auto;
  left: 100%;
  border-right-color: transparent;
  border-left-color: #1b1e24;
}
.page-container.page-mode-rtl .x-navigation.x-navigation-minimized li .profile {
  right: auto;
  left: -230px;
}
.page-container.page-mode-rtl .x-navigation.x-navigation-minimized li .profile:after {
  right: auto;
  left: 100%;
  border-right-color: transparent;
  border-left-color: #1b1e24;
}
.page-container-boxed .x-navigation {
  -moz-border-radius: 5px 0px 0px 5px;
  -webkit-border-radius: 5px 0px 0px 5px;
  border-radius: 5px 0px 0px 5px;
}
.page-container-boxed .x-navigation .xn-logo a {
  -moz-border-radius: 5px 0px 0px 0px;
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}
.page-container-boxed .x-navigation.x-navigation-horizontal {
  -moz-border-radius: 5px 5px 0px 0px;
  -webkit-border-radius: 5px 5px 0px 0px;
  border-radius: 5px 5px 0px 0px;
}
.page-container-boxed .x-navigation.x-navigation-horizontal.x-navigation-panel {
  -moz-border-radius: 0px 5px 0px 0px;
  -webkit-border-radius: 0px 5px 0px 0px;
  border-radius: 0px 5px 0px 0px;
}
.page-container-boxed .page-container .page-content {
  -moz-border-radius: 0px 5px 5px 0px;
  -webkit-border-radius: 0px 5px 5px 0px;
  border-radius: 0px 5px 5px 0px;
}
.page-container-boxed .page-container.page-mode-rtl .page-content {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.page-container-boxed .page-container.page-mode-rtl .page-sidebar .x-navigation {
  -moz-border-radius: 0px 5px 5px 0px;
  -webkit-border-radius: 0px 5px 5px 0px;
  border-radius: 0px 5px 5px 0px;
}
.page-container-boxed .page-container.page-mode-rtl .page-sidebar .x-navigation .xn-logo a {
  -moz-border-radius: 0px 5px 0px 0px;
  -webkit-border-radius: 0px 5px 0px 0px;
  border-radius: 0px 5px 0px 0px;
}
.page-container-boxed .page-container.page-mode-rtl .x-navigation.x-navigation-horizontal {
  -moz-border-radius: 5px 0px 0px 0px;
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}
.page-container-boxed .page-container.page-mode-rtl .x-navigation.x-navigation-horizontal.x-navigation-panel {
  -moz-border-radius: 5px 0px 0px 0px;
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}
.page-container-boxed .page-container.page-mode-rtl .x-navigation.x-navigation-horizontal > li:first-child a {
  -moz-border-radius: 5px 0px 0px 0px;
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}
/* END NAVIGATION */
/* PROFILE */
.profile {
  width: 100%;
  float: left;
  padding: 15px 10px;
  position: relative;
  background: #080a0e;
}
.profile .profile-image {
  float: left;
  width: 100%;
  margin: 0px 0px 10px;
  text-align: center;
}
.profile .profile-image img {
  width: 100px;
  border: 3px solid #FFF;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
}
.profile .profile-data {
  width: 100%;
  float: left;
  text-align: center;
}
.profile .profile-data .profile-data-name {
  width: 100%;
  float: left;
  font-size: 14px;
  font-weight: 500;
  color: #FFF;
}
.profile .profile-data .profile-data-title {
  width: 100%;
  float: left;
  font-size: 11px;
  font-weight: 400;
  color: #999;
}
.profile .profile-controls a {
  width: 30px;
  height: 30px;
  font-size: 14px;
  color: #DDD;
  border: 2px solid #DDD;
  line-height: 25px;
  position: absolute;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  padding: 0px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.profile .profile-controls a.profile-control-left {
  left: 15px;
  top: 53px;
  text-align: center;
}
.profile .profile-controls a.profile-control-right {
  right: 15px;
  top: 53px;
  text-align: center;
}
.profile .profile-controls a .fa,
.profile .profile-controls a .glyphicon {
  width: auto;
  margin-right: auto;
}
.profile .profile-controls a:hover {
  border-color: #FFF;
  color: #FFF;
}
/* X-NAVIGATION FEATURES */
.x-navigation.x-navigation-minimized .profile {
  width: 220px;
  background: #1b1e24;
  position: absolute;
  top: 4px;
  right: -230px;
  display: none;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.x-navigation.x-navigation-minimized li.active .profile {
  display: block;
}
.x-navigation.x-navigation-minimized .profile-mini {
  display: block;
  border-bottom: 0px;
}
/* END X-NAVIGATION FEATURES */
/* END PROFILE */
/* BLOCK */
.block {
  padding: 5px 10px;
  float: left;
  width: 100%;
  margin-bottom: 20px;
}
.block-full-width {
  padding: 0px;
  float: left;
  width: 100%;
  position: relative;
}
/* END BLOCK */
/* BREADCRUMB */
.breadcrumb {
  float: left;
  width: 100%;
  background: #e8e8e8;
  margin-bottom: 10px;
  padding: 6px 15px 7px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.breadcrumb li,
.breadcrumb li a {
  font-size: 11px;
  line-height: 12px;
  color: #4d5669;
  text-decoration: none;
}
.breadcrumb li:hover,
.breadcrumb li a:hover {
  color: #22262e;
}
.breadcrumb li:last-child {
  color: #22262e;
}
.breadcrumb > li + li:before {
  font-family: "FontAwesome";
  content: "\f105";
  color: #4d5669;
  padding: 0px 8px;
}
/* EOF BREADCRUMB */
/* Progress list */
.progress-list {
  float: left;
  width: 100%;
  padding: 0px 5px;
  font-size: 11px;
}
.progress-list .progress {
  clear: both;
  margin-top: 20px;
}
/* end progress list*/
/* LIST TAGS */
.list-tags {
  float: left;
  width: 100%;
  list-style: none;
  padding: 0px;
  margin: 0px;
}
.list-tags li {
  float: left;
  display: block;
  position: relative;
}
.list-tags li a {
  display: block;
  float: left;
  background: #F5F5F5;
  border: 1px solid #D5D5D5;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  line-height: 23px;
  font-size: 11px;
  margin: 0px 5px 5px 0px;
  padding: 0px 8px;
  color: #22262e;
}
.list-tags li a:hover {
  text-decoration: none;
  background: #F0F0F0;
}
/* END LIST TAGS */
/* LIST GROUP */
.list-group {
  margin: 0px;
}
.list-group .list-group-item {
  line-height: 20px;
}
.list-group .list-group-item .fa {
  margin-right: 10px;
}
.list-group .list-group-item .btn .fa {
  margin-right: 0px;
}
.list-group .list-group-item .progress {
  margin: 5px 0px;
}
.list-group .list-group-item.active .badge {
  color: #22262e;
}
.list-group .list-group-item:last-child {
  border-bottom: 0px;
}
.list-group.list-group-simple {
  border: 0px;
  background: transparent;
}
.list-group.list-group-simple .list-group-item {
  border: 0px;
  background: transparent;
  padding: 5px 10px;
}
.list-group.border-bottom .list-group-item:last-child {
  border-bottom: 1px solid #E5E5E5;
}
.list-group.list-group-navigation {
  border: 0px;
  float: left;
  width: 100%;
}
.list-group.list-group-navigation .list-group-item {
  border-left: 0px;
  border-right: 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.padding-0 .list-group {
  border: 0px;
}
.padding-0 .list-group .list-group-item {
  border-width: 1px 0px 0px 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.padding-0 .list-group .list-group-item:first-child {
  border-top: 0px;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  background: #1b1e24;
  border-color: #1b1e24;
}
.list-group-item {
  border-color: #E5E5E5;
}
a.list-group-item:hover,
a.list-group-item:focus {
  background: #F9F9F9;
}
/* LIST GROUP CONTACTS */
.list-group-contacts .list-group-item {
  padding: 10px;
}
.list-group-contacts .list-group-item img {
  border: 2px solid #F5F5F5;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  width: 40px;
  margin-right: 10px;
}
.list-group-contacts .list-group-item .contacts-title {
  font-size: 13px;
  font-weight: 600;
  line-height: 20px;
}
.list-group-contacts .list-group-item p {
  margin-bottom: 0px;
  line-height: 20px;
}
.list-group-contacts .list-group-item.active {
  background: #F5F5F5;
  border-color: #E5E5E5;
  color: #22262e;
}
.list-group-controls {
  position: absolute;
  right: 10px;
  top: 15px;
}
.list-group-status {
  float: left;
  margin-right: 10px;
  height: 40px;
  width: 10px;
  position: relative;
}
.list-group-status:after {
  position: absolute;
  left: 0px;
  top: 15px;
  width: 10px;
  height: 10px;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  content: " ";
}
.list-group-status.status-online:after {
  background: #95b75d;
}
.list-group-status.status-away:after {
  background: #1caf9a;
}
.list-group-status.status-offline:after {
  background: #CCC;
}
/* END LIST GROUP CONTACTS */
/* EOF LIST GROUP */
/* FRIENDS */
.friend {
  width: 100%;
  float: left;
  text-align: center;
  padding: 10px 0px;
  color: #22262e;
  font-weight: 600;
  display: block;
  opacity: 0.8;
  filter: alpha(opacity = 80);
  -webkit-transition: opacity 200ms ease-in-out;
  -moz-transition: opacity 200ms ease-in-out;
  -ms-transition: opacity 200ms ease-in-out;
  -o-transition: opacity 200ms ease-in-out;
  transition: opacity 200ms ease-in-out;
}
.friend img {
  width: 100%;
  border: 3px solid #F5F5F5;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
}
.friend span {
  display: block;
  line-height: 20px;
  margin-top: 5px;
  font-size: 11px;
}
.friend:hover {
  text-decoration: none;
  opacity: 1;
  filter: alpha(opacity = 100);
  color: #1b1e24;
}
/* FRIENDS */
/* PANELS */
.panel {
  float: left;
  width: 100%;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  border: 0px;
  border-top: 2px solid #E5E5E5;
  margin-bottom: 20px;
  position: relative;
  -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
}
.panel.panel-default {
  border-top-color: #F5F5F5;
  border-top-width: 1px;
}
.panel.panel-primary {
  border-top-color: #1b1e24;
}
.panel.panel-success {
  border-top-color: #95b75d;
}
.panel.panel-info {
  border-top-color: #1caf9a;
}
.panel.panel-warning {
  border-top-color: #1caf9a;
}
.panel.panel-danger {
  border-top-color: #E04B4A;
}
.panel.panel-colorful:before {
  content: "";
  width: 100%;
  height: 2px;
  background: linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -o-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -moz-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -webkit-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -ms-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0, #E04B4A), color-stop(0.5, #1caf9a), color-stop(1, #95b75d));
  display: block;
  left: 0px;
  top: 0px;
}
.panel .panel-heading {
  padding: 10px;
}
.panel .panel-heading .panel-title-image {
  float: left;
  width: 30px;
  border: 2px solid #D5D5D5;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  margin-right: 5px;
}
.panel .panel-heading .panel-title {
  margin-left: 7px;
}
.panel .panel-heading .panel-title-box {
  float: left;
}
.panel .panel-heading .panel-title-box h3 {
  font-size: 14px;
  font-weight: 600;
  line-height: 18px;
  color: #1b1e24;
  padding: 0px;
  margin: 0px;
}
.panel .panel-heading .panel-title-box span {
  font-size: 12px;
  color: #586377;
  font-weight: 400;
  line-height: 12px;
}
.panel .panel-heading,
.panel .panel-footer,
.panel .panel-body {
  float: left;
  width: 100%;
}
.panel .panel-body {
  padding: 15px;
  position: relative;
}
.panel .panel-body.scroll {
  padding-right: 0px;
}
.panel .panel-body.panel-body-map {
  padding: 5px;
}
.panel .panel-body.panel-body-image {
  padding: 0px;
  margin-bottom: 10px;
  position: relative;
}
.panel .panel-body.panel-body-image img {
  -moz-border-radius: 5px 5px 0px 0px;
  -webkit-border-radius: 5px 5px 0px 0px;
  border-radius: 5px 5px 0px 0px;
  width: 100%;
}
.panel .panel-body.panel-body-image .panel-body-inform {
  width: 30px;
  height: 30px;
  position: absolute;
  bottom: -15px;
  left: 50%;
  background: #1caf9a;
  color: #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  margin-left: -15px;
  text-align: center;
  line-height: 30px;
  padding-left: 1px;
  padding-top: 1px;
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.panel .panel-body.panel-body-image .panel-body-inform.inform-primary {
  background: #1b1e24;
}
.panel .panel-body.panel-body-image .panel-body-inform.inform-success {
  background: #95b75d;
}
.panel .panel-body.panel-body-image .panel-body-inform.inform-warning {
  background: #1caf9a;
}
.panel .panel-body.panel-body-image .panel-body-inform.inform-danger {
  background: #E04B4A;
}
.panel .panel-body.panel-body-image .panel-body-inform .fa {
  font-size: 16px;
  color: #FFF;
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.panel .panel-body.list-group {
  padding: 0px;
}
.panel .panel-body.profile {
  -moz-border-radius: 5px 5px 0px 0px;
  -webkit-border-radius: 5px 5px 0px 0px;
  border-radius: 5px 5px 0px 0px;
}
.panel .panel-body.panel-body-search {
  padding: 5px;
}
.panel .panel-body.panel-body-half .panel-body {
  width: 50%;
  height: 100%;
}
.panel .panel-body.panel-body-half .panel-body:nth-child(2n) {
  padding-left: 25px;
}
.panel .panel-body.panel-body-half .panel-body.panel-body-image {
  margin-bottom: 0px;
}
.panel .panel-body.panel-body-half .panel-body.panel-body-image .panel-body-inform {
  bottom: auto;
  left: auto;
  right: -15px;
  top: 50%;
  margin-left: 0px;
  margin-top: -15px;
}
.panel .panel-title {
  font-size: 16px;
  font-weight: 400;
  line-height: 30px;
  display: block;
  float: left;
  color: #1b1e24;
}
.panel .panel-footer {
  background: #F5F5F5;
  border: 0px;
  border-top: 1px solid #E3E3E3;
  line-height: 30px;
  padding: 10px;
}
.panel-default .panel-heading,
.panel-primary .panel-heading,
.panel-success .panel-heading,
.panel-info .panel-heading,
.panel-warning .panel-heading,
.panel-danger .panel-heading {
  background: #F5F5F5;
  border-color: #E5E5E5;
}
.panel-fullscreen-wrap {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  background: #FFF;
}
.panel-fullscreen-wrap .panel {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  margin: 0px;
}
.panel-fullscreen-wrap .panel .panel-body {
  overflow-y: scroll;
}
/* PANEL GROUP / ACCORDION */
.panel-group {
  float: left;
  width: 100%;
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 0px;
}
.panel-title > a {
  text-decoration: none;
}
.panel-group.accordion .panel-body {
  display: none;
}
.panel-group.accordion .panel-body.panel-body-open {
  display: block;
}
/* END PANEL GROUP / ACCORDION */
/* PANEL CONTROLS */
ul.panel-controls {
  float: right;
  padding: 0px;
  margin: 0px;
  list-style: none;
  position: relative;
}
ul.panel-controls > li {
  float: left;
}
ul.panel-controls > li > a {
  display: block;
  float: left;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 28px;
  color: #22262e;
  border: 1px solid #BBB;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  margin-left: 3px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
ul.panel-controls > li > a.control-primary {
  color: #1b1e24;
  border-color: #1b1e24;
}
ul.panel-controls > li > a.control-success {
  color: #95b75d;
  border-color: #95b75d;
}
ul.panel-controls > li > a.control-info {
  color: #1caf9a;
  border-color: #1caf9a;
}
ul.panel-controls > li > a.control-warning {
  color: #1caf9a;
  border-color: #1caf9a;
}
ul.panel-controls > li > a.control-danger {
  color: #E04B4A;
  border-color: #E04B4A;
}
ul.panel-controls > li > a:hover {
  border-color: #999;
  color: #1b1e24;
}
ul.panel-controls > li > a.rounded {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
ul.panel-controls.panel-controls-title {
  margin-top: 3px;
}
.panel-hidden-controls ul.panel-controls > li > a {
  opacity: 0;
  filter: alpha(opacity = 0);
}
.panel-hidden-controls:hover ul.panel-controls > li > a {
  opacity: 0.8;
  filter: alpha(opacity = 80);
}
.panel-hidden-controls:hover ul.panel-controls > li > a:hover {
  opacity: 1;
  filter: alpha(opacity = 100);
}
ul.panel-controls > li.label-control .label,
.label-form {
  display: inline-block;
  font-size: 11px;
  padding: 5px 10px;
  line-height: 12px;
  margin-top: 4px;
}
ul.panel-controls > li > .dropdown-menu {
  left: auto;
  right: 3px;
}
ul.panel-controls > li > .dropdown-menu:after,
ul.panel-controls > li > .dropdown-menu:before {
  left: auto;
  right: 11px;
}
ul.panel-controls > li > .dropdown-menu:after {
  margin-left: auto;
  margin-right: -5px;
}
ul.panel-controls > li > .dropdown-menu:before {
  margin-left: auto;
  margin-right: -6px;
}
/* EOF PANEL CONTROLS */
.panel-heading .label {
  line-height: 16px;
  padding: 4px 10px;
  margin: 3px 0px 3px 5px;
  font-size: 12px;
  display: inline-block;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.panel-heading .label.pulsate {
  -webkit-animation: pulsate 1s ease-out;
  -webkit-animation-iteration-count: infinite;
  -moz-animation: pulsate 1s ease-out;
  -moz-animation-iteration-count: infinite;
  animation: pulsate 1s ease-out;
  animation-iteration-count: infinite;
}
/* PANEL BODY PRICING */
.panel.panel-primary .panel-body-pricing small {
  color: #1b1e24;
}
.panel.panel-success .panel-body-pricing small {
  color: #95b75d;
}
.panel.panel-info .panel-body-pricing small {
  color: #1caf9a;
}
.panel.panel-warning .panel-body-pricing small {
  color: #1caf9a;
}
.panel.panel-danger .panel-body-pricing small {
  color: #E04B4A;
}
.panel-body.panel-body-pricing h2 {
  font-size: 26px;
  font-weight: 400;
}
.panel-body.panel-body-pricing h2 small {
  text-transform: uppercase;
}
.panel-body.panel-body-pricing p {
  font-size: 13px;
  color: #666;
  margin-bottom: 15px;
}
.panel-body.panel-body-pricing p.text-muted {
  color: #AAA;
  font-size: 11px;
}
.panel-body.panel-body-pricing .fa {
  color: #EEE;
}
/* PANEL BODY PRICING */
/* PANEL REFRESHING */
.panel-refresh-layer {
  position: absolute;
  left: 0px;
  top: 0px;
  background: #FFF;
  opacity: 0.5;
  filter: alpha(opacity = 50);
  z-index: 3;
  font-size: 21px;
}
.panel-refresh-layer img {
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -16px;
  margin-top: -16px;
}
/* EOF PANEL REFRESHING */
.panel-toggled .panel-body,
.panel-toggled .panel-footer {
  display: none;
}
/* XNAV PANEL */
.x-navigation li > .panel {
  display: none;
  position: absolute;
  left: 0px;
  top: 56px;
  width: 400px;
  z-index: 3;
  border-top-width: 1px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.x-navigation li > .panel.xn-drop-left {
  left: auto;
  right: 0px;
}
.x-navigation li > .panel .panel-heading {
  padding: 5px 10px;
}
.x-navigation li > .panel .panel-heading .panel-title {
  font-size: 14px;
}
.x-navigation li > .panel .panel-footer {
  line-height: 30px;
  padding: 3px 10px;
}
.x-navigation li.active > .panel {
  display: block;
}
.x-navigation li > .panel:after {
  top: -11px;
  left: 20px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: rgba(0, 0, 0, 0);
  border-bottom-color: #E5E5E5;
  border-width: 5px;
  margin-left: -5px;
}
.x-navigation li > .panel.xn-drop-left:after {
  right: 20px;
  left: auto;
}
.x-navigation li > .panel.dragged:after {
  display: none;
}
.x-navigation li > .panel.panel-primary:after {
  border-bottom-color: #1b1e24;
}
.x-navigation li > .panel.panel-info:after {
  border-bottom-color: #1caf9a;
}
.x-navigation li > .panel.panel-warning:after {
  border-bottom-color: #1caf9a;
}
.x-navigation li > .panel.panel-danger:after {
  border-bottom-color: #E04B4A;
}
.x-navigation li > .panel.panel-success:after {
  border-bottom-color: #95b75d;
}
.resizable-helper {
  border: 1px dashed #1b1e24;
}
.xn-panel-dragging .panel-heading:hover {
  cursor: move;
}
.ui-resizable-s {
  width: 98%;
}
.ui-resizable-e {
  height: 98%;
}
.ui-resizable-se {
  width: 16px;
  height: 16px;
  right: 0px;
  bottom: 0px;
  text-indent: 0px;
  background: url(../img/jquery/resize-icon.png) left top no-repeat;
}
/* EOF XNAV PANEL */
/* EOF PANELS */
/* USER */
.user {
  float: left;
  width: 100%;
  line-height: 50px;
}
.user img {
  float: left;
  width: 50px;
  height: 50%;
  border: 3px solid #F5F5F5;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  margin-right: 10px;
}
.user a {
  display: block;
  float: left;
  text-decoration: none;
  font-size: 14px;
  font-weight: 600;
  color: #1b1e24;
}
.user .btn {
  margin-top: 10px;
}
/* END USER */
/* BUTTONS */
.btn {
  font-size: 12px;
  padding: 4px 15px;
  line-height: 20px;
  font-weight: 400;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.btn.btn-lg,
.btn-group-lg > .btn {
  font-size: 14px;
  padding: 8px 20px;
}
.btn.btn-sm,
.btn-group-sm > .btn {
  font-size: 11px;
  padding: 2px 10px;
}
.btn.btn-xs,
.btn-group-xs > .btn {
  font-size: 10px;
  padding: 0px 5px;
}
.btn-default {
  border-color: #DDD;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-color: #F5F5F5;
  border-color: #DDD;
}
.btn-danger {
  background-color: #E04B4A;
  border-color: #E04B4A;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-color: #a43f3e;
  border-color: #a43f3e;
}
.btn-danger[disabled],
.btn-danger.disabled {
  background: #c66968;
  border-color: #c36261;
}
.btn-warning {
  background-color: #fe970a;
  border-color: #fe970a;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-color: #fe970a;
  border-color: #fe970a;
}
.btn-warning[disabled],
.btn-warning.disabled {
  background: #feb756;
  border-color: #feb34c;
}
.btn-success {
  background-color: #95b75d;
  border-color: #95b75d;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-color: #89ad4d;
  border-color: #89ad4d;
}
.btn-success[disabled],
.btn-success.disabled {
  background: #acc780;
  border-color: #a7c479;
}
.btn-primary {
  background-color: #1b1e24;
  border-color: #1b1e24;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-color: #101215;
  border-color: #101215;
}
.btn-primary[disabled],
.btn-primary.disabled {
  background: #313641;
  border-color: #2c313b;
}
.btn-info {
  background-color: #1caf9a;
  border-color: #1caf9a;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-color: #29b2e1;
  border-color: #29b2e1;
}
.btn-info[disabled],
.btn-info.disabled {
  background: #6ccaea;
  border-color: #63c7e9;
}
.btn-link {
  font-weight: 600;
  color: #1b1e24;
}
.btn-link:hover,
.btn-link:focus,
.btn-link:active,
.btn-link.active {
  color: #1b1e24;
}
.btn .fa,
.btn .glyphicon {
  font-size: 14px;
  margin-right: 5px;
}
.btn.btn-rounded {
  background: transparent;
  color: #22262e;
  -moz-border-radius: 12px;
  -webkit-border-radius: 12px;
  border-radius: 12px;
  border-width: 2px;
  padding: 2px 10px;
  font-weight: 600;
}
.btn.btn-rounded.btn-default:hover,
.btn.btn-rounded.btn-default:focus,
.btn.btn-rounded.btn-default:active,
.btn.btn-rounded.btn-default.active {
  border-color: #CCC;
  color: #333;
}
.btn.btn-rounded.btn-success {
  color: #95b75d;
}
.btn.btn-rounded.btn-success:hover,
.btn.btn-rounded.btn-success:focus,
.btn.btn-rounded.btn-success:active,
.btn.btn-rounded.btn-success.active {
  border-color: #89ad4d;
  color: #89ad4d;
}
.btn.btn-rounded.btn-warning {
  color: #fe970a;
}
.btn.btn-rounded.btn-warning:hover,
.btn.btn-rounded.btn-warning:focus,
.btn.btn-rounded.btn-warning:active,
.btn.btn-rounded.btn-warning.active {
  border-color: #fe970a;
  color: #fe970a;
}
.btn.btn-rounded.btn-info {
  color: #1caf9a;
}
.btn.btn-rounded.btn-info:hover,
.btn.btn-rounded.btn-info:focus,
.btn.btn-rounded.btn-info:active,
.btn.btn-rounded.btn-info.active {
  border-color: #29b2e1;
  color: #29b2e1;
}
.btn.btn-rounded.btn-danger {
  color: #E04B4A;
}
.btn.btn-rounded.btn-danger:hover,
.btn.btn-rounded.btn-danger:focus,
.btn.btn-rounded.btn-danger:active,
.btn.btn-rounded.btn-danger.active {
  border-color: #a43f3e;
  color: #a43f3e;
}
.btn.btn-rounded.btn-primary {
  color: #1b1e24;
}
.btn.btn-rounded.btn-primary:hover,
.btn.btn-rounded.btn-primary:focus,
.btn.btn-rounded.btn-primary:active,
.btn.btn-rounded.btn-primary.active {
  border-color: #101215;
  color: #101215;
}
.btn:active,
.btn.active {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn.btn-twitter {
  background: #1AB2E8;
  border-color: #1AB2E8;
}
.btn.btn-twitter:hover,
.btn.btn-twitter:focus,
.btn.btn-twitter:active,
.btn.btn-twitter.active {
  background: #15a1d3;
}
.btn.btn-facebook {
  background: #3C599B;
  border-color: #3C599B;
}
.btn.btn-facebook:hover,
.btn.btn-facebook:focus,
.btn.btn-facebook:active,
.btn.btn-facebook.active {
  background: #354e89;
}
.btn.btn-google {
  background: #E04A39;
  border-color: #E04A39;
}
.btn.btn-google:hover,
.btn.btn-google:focus,
.btn.btn-google:active,
.btn.btn-google.active {
  background: #dd3623;
}
/* EOF BUTTONS */
/* FORM ELEMENTS */
.radio,
.checkbox {
  margin-top: 5px;
  margin-bottom: 5px;
  float: left;
  width: 100%;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: 0px;
}
input[type=radio],
input[type=checkbox] {
  margin: 2px 0px 0px;
}
.checkbox.pull-left,
.checkbox.pull-right,
.radio.pull-left,
.radio.pull-right {
  width: auto;
}
.form-control {
  height: 30px;
  font-size: 12px;
  line-height: 18px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-appearance: none;
  border: 1px solid #D5D5D5;
  background: #F9F9F9;
}
.form-control:focus {
  border-color: #C5C5C5;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #C1C1C1;
  background: #FFF;
}
.form-control[disabled],
.form-control[readonly] {
  color: #CCC;
}
.form-control[disabled]:focus,
.form-control[readonly]:focus {
  background: #EEE;
  color: #CCC;
  border-color: #D5D5D5;
}
.input-group-addon {
  border-color: #1b1e24;
  background-color: #1b1e24;
  font-size: 13px;
  padding: 0px 10px;
  line-height: 28px;
  color: #FFF;
  text-align: center;
  min-width: 36px;
}
.input-group-addon,
.input-group-btn {
  vertical-align: bottom;
}
.form-group:last-child {
  margin-bottom: 0px;
}
.form-group-separated {
  border-top: 1px dashed #D5D5D5;
}
.form-group-separated .form-group {
  border-bottom: 1px dashed #D5D5D5;
  margin-bottom: 0px;
}
.form-group-separated .form-group [class^="col-md-"] {
  border-left: 1px dashed #D5D5D5;
  padding: 12px 10px;
}
.form-group-separated .form-group [class^="col-md-"]:first-child {
  border-left: 0px;
}
.form-group-separated .form-group:last-child {
  border-bottom: 0px;
}
.form-group-separated.panel-body {
  padding: 0px;
}
.help-block {
  color: #AAB2BD;
  margin-bottom: 0px;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -2px;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  font-size: 16px;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  font-size: 11px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 0;
}
.has-feedback label~.form-control-feedback {
  top: 20px;
}
/* FORM VALIDATION STATES */
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success .form-control-feedback {
  color: #95b75d;
}
.has-success .form-control {
  border-color: #95b75d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning .form-control-feedback {
  color: #1caf9a;
}
.has-warning .form-control {
  border-color: #1caf9a;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error .form-control-feedback {
  color: #E04B4A;
}
.has-error .form-control {
  border-color: #E04B4A;
}
/* EOF FORM VALIDATION STATES */
.form-control.error,
.bootstrap-select.error > button {
  border-color: #E04B4A;
}
label {
  font-weight: 600;
}
label.error,
label.valid {
  color: #E04B4A;
  margin-bottom: 0px;
  margin-top: 3px;
  font-size: 11px;
  font-weight: normal;
  width: 100%;
}
.form-control.valid,
.bootstrap-select.valid > button {
  border-color: #95b75d;
}
label.valid {
  color: #95b75d;
}
.control-label.text-left {
  text-align: left;
}
/* EOF FORM ELEMENTS */
/* LABELS AND BADGES */
.label {
  font-weight: 500;
}
.badge {
  font-size: 11px;
  line-height: 20px;
  font-weight: 500;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  padding: 0px 8px;
}
.label-primary,
.badge-primary {
  background-color: #1b1e24;
}
.label-success,
.badge-success {
  background-color: #95b75d;
}
.label-info,
.badge-info {
  background-color: #1caf9a;
}
.label-warning,
.badge-warning {
  background-color: #1caf9a;
}
.label-danger,
.badge-danger {
  background-color: #E04B4A;
}
/* EOF LABELS AND BADGES */
/* ALERTS */
.alert {
  float: left;
  width: 100%;
  margin-bottom: 10px;
  line-height: 21px;
}
.alert-success {
  background-color: #95b75d;
  color: #FFF;
  border-color: #90b456;
}
.alert-info {
  background-color: #1caf9a;
  color: #FFF;
  border-color: #36b7e3;
}
.alert-warning {
  background-color: #1caf9a;
  color: #FFF;
  border-color: #fe9e19;
}
.alert-danger {
  background-color: #E04B4A;
  color: #FFF;
  border-color: #af4342;
}
/* EOF ALERTS */
/* DROP DOWN */
.dropdown-menu {
  font-size: 12px;
  -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  border: 1px solid #E5E5E5;
  padding: 0px;
  margin: 8px 0px 0px;
}
.dropdown-menu > li > a {
  padding: 8px 15px;
  border-bottom: 1px solid #E9E9E9;
  line-height: 20px;
}
.dropdown-menu > li:last-child > a {
  border-bottom: 0px;
}
.dropdown-menu:after,
.dropdown-menu:before {
  bottom: 100%;
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.dropdown-menu:after {
  border-color: rgba(255, 255, 255, 0);
  border-bottom-color: #FFF;
  border-width: 5px;
  margin-left: -5px;
}
.dropdown-menu:before {
  border-color: rgba(229, 229, 229, 0);
  border-bottom-color: #E5E5E5;
  border-width: 6px;
  margin-left: -6px;
}
.dropup .dropdown-menu:after,
.dropup .dropdown-menu:before {
  display: none;
}
.dropdown-header {
  padding: 10px 15px;
  border-bottom: 1px solid #E5E5E5;
  color: #777;
}
.dropdown-menu .fa {
  margin-right: 5px;
}
.dropdown-menu .divider {
  background: #F5F5F5;
  margin: 0px;
  padding: 15px 0px 0px;
  border-bottom: 1px solid #E5E5E5;
}
/* EOF DROP DOWN */
/* MODAL */
.modal-content {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-width: 5px;
}
.modal-header {
  padding: 10px 10px 10px 15px;
  line-height: 30px;
  -moz-border-radius: 5px 5px 0px 0px;
  -webkit-border-radius: 5px 5px 0px 0px;
  border-radius: 5px 5px 0px 0px;
  background: #F5F5F5;
  border-color: #d5d5d5;
}
.modal-header .close {
  margin-top: 5px;
  margin-right: 5px;
}
.modal-title {
  line-height: 30px;
}
.modal-body {
  padding: 15px;
}
.modal-footer {
  background: #F5F5F5;
  border-color: #D5D5D5;
  padding: 10px 15px;
  -moz-border-radius: 0px 0px 5px 5px;
  -webkit-border-radius: 0px 0px 5px 5px;
  border-radius: 0px 0px 5px 5px;
}
/* EOF MODAL */
/* PORTLET */
.scCol {
  min-height: 30px;
}
.scPlaceholder {
  background: #fcfbf4;
  border: 1px dashed #999;
  margin-bottom: 20px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  float: left;
  width: 100%;
}
/* EOF PORTLET */
/* TYPOGRAPHY */
.page-title {
  float: left;
  width: 100%;
  padding: 5px 10px;
}
.page-title h2 {
  float: left;
  line-height: 30px;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  color: #1b1e24;
  padding: 0px;
  margin: 0px;
}
h1,
.h1 {
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 32px;
  font-weight: 400;
}
h2,
.h2 {
  margin-bottom: 15px;
  font-size: 26px;
  font-weight: 400;
}
h3,
.h3 {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 600;
}
h3 small,
.h3 small {
  line-height: 19px;
}
h4,
.h4 {
  margin-bottom: 10px;
  font-size: 16px;
  font-weight: 400;
}
h5,
.h5 {
  margin-bottom: 10px;
  margin-top: 5px;
  font-size: 14px;
  font-weight: 400;
}
h6,
.h6 {
  margin-bottom: 5px;
  font-size: 13px;
  font-weight: 600;
}
blockquote {
  font-size: 12px;
  border-left-color: #CCC;
  line-height: 20px;
}
blockquote p {
  line-height: 12px;
}
.blockquote-reverse,
blockquote.pull-right {
  border-right-color: #CCC;
}
.blockquote-primary {
  border-left-color: #1b1e24;
}
.blockquote-success {
  border-left-color: #95b75d;
}
.blockquote-info {
  border-left-color: #1caf9a;
}
.blockquote-danger {
  border-left-color: #E04B4A;
}
.blockquote-warning {
  border-left-color: #1caf9a;
}
.text-title {
  font-weight: 600;
  border-bottom: 1px solid #F5F5F5;
  padding: 10px 0px 5px;
  font-size: 15px;
}
/* EOF TYPOGRAPHY */
/* HELPERS */
.push-down-0 {
  margin-bottom: 0px !important;
}
.push-down-5 {
  margin-bottom: 5px !important;
}
.push-down-10 {
  margin-bottom: 10px !important;
}
.push-down-15 {
  margin-bottom: 15px !important;
}
.push-down-20 {
  margin-bottom: 20px !important;
}
.push-down-25 {
  margin-bottom: 25px !important;
}
.push-down-30 {
  margin-bottom: 30px !important;
}
.push-up-0 {
  margin-top: 0px !important;
}
.push-up-5 {
  margin-top: 5px !important;
}
.push-up-10 {
  margin-top: 10px !important;
}
.push-up-15 {
  margin-top: 15px !important;
}
.push-up-20 {
  margin-top: 20px !important;
}
.push-up-25 {
  margin-top: 25px !important;
}
.push-up-30 {
  margin-top: 30px !important;
}
.padding-0 {
  padding: 0px !important;
}
.padding-bottom-0 {
  padding-bottom: 0px !important;
}
.padding-top-0 {
  padding-top: 0px !important;
}
.text-muted {
  color: #CCD0D9 !important;
}
.text-primary {
  color: #1b1e24 !important;
}
.text-success {
  color: #95b75d !important;
}
.text-info {
  color: #1caf9a !important;
}
.text-warning {
  color: #1caf9a !important;
}
.text-danger {
  color: #E04B4A !important;
}
.bg-primary {
  color: #fff;
  background-color: #1b1e24;
}
.bg-success {
  color: #fff;
  background-color: #95b75d;
}
.bg-info {
  color: #fff;
  background-color: #1caf9a;
}
.bg-warning {
  color: #fff;
  background-color: #1caf9a;
}
.bg-danger {
  color: #fff;
  background-color: #E04B4A;
}
.twitter {
  border-color: #1AB2E8 !important;
  color: #1AB2E8 !important;
}
.twitter:hover {
  border-color: #48c2ed !important;
  color: #48c2ed !important;
}
.facebook {
  border-color: #3C599B !important;
  color: #3C599B !important;
}
.facebook:hover {
  border-color: #4f70bb !important;
  color: #4f70bb !important;
}
.line-height-30 {
  line-height: 30px;
}
/* EOF HELPERS */
/* PROGRESS BARS */
.progress.progress-small {
  height: 5px;
}
.progress.progress-small .progress-bar {
  font-size: 0px;
}
.progress-bar {
  background-color: #1b1e24;
}
.progress-bar-success {
  background-color: #95b75d;
}
.progress-bar-warning {
  background-color: #1caf9a;
}
.progress-bar-danger {
  background-color: #E04B4A;
}
.progress-bar-info {
  background-color: #1caf9a;
}
.progress-bar-colorful {
  background: linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -o-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -moz-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -webkit-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -ms-linear-gradient(left, #E04B4A 0%, #1caf9a 50%, #95b75d 100%);
  background: -webkit-gradient(linear, left top, right top, color-stop(0, #E04B4A), color-stop(0.5, #1caf9a), color-stop(1, #95b75d));
}
/* EOF PROGRESS BARS */
/* SWITCH */
.switch {
  cursor: pointer;
  position: relative;
}
.switch input {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
.switch input:checked + span:after {
  left: 21px;
}
.switch input:checked + span {
  background-color: #95b75d;
}
.switch input:disabled + span {
  background-color: #CCC;
}
.switch span {
  position: relative;
  width: 50px;
  height: 30px;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
  background-color: #E04B4A;
  border: 1px solid #E5E5E5;
  display: inline-block;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  border-color: rgba(0, 0, 0, 0.1);
  left: 0px;
}
.switch span:after {
  content: "";
  position: absolute;
  background-color: #fff;
  width: 26px;
  top: 1px;
  bottom: 1px;
  left: 1px;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
  -moz-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.switch.switch-small {
  margin: 6px 0px 4px;
}
.switch.switch-small input:checked + span:after {
  left: 11px;
}
.switch.switch-small span {
  width: 30px;
  height: 20px;
  -moz-border-radius: 20px;
  -webkit-border-radius: 20px;
  border-radius: 20px;
}
.switch.switch-small span:after {
  width: 16px;
}
/* END SWITCH */
/* PAGINATION */
.pagination {
  width: 100%;
  margin: 10px 0px;
}
.pagination > li > a,
.pagination > li > span {
  margin-left: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  color: #22262e;
  border-color: #E5E5E5;
}
.pagination > li > a:hover,
.pagination > li > span:hover {
  color: #222;
}
.pagination > li.active > a,
.pagination > li.active > a:hover {
  background: #1b1e24;
  color: #FFF;
  border-color: #1b1e24;
}
.pagination.pagination-sm {
  margin: 0px;
  width: auto;
}
.pagination.pagination-sm.push-down-20 {
  margin-bottom: 20px;
}
.pagination.pagination-sm.push-up-20 {
  margin-top: 20px;
}
/* END PAGINATION */
/* POPOVER */
.popover {
  -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
}
.popover-title {
  background: #f5f5f5;
  border-bottom-color: #e5e5e5;
}
.popover > .arrow,
.popover > .arrow:after {
  border-width: 5px;
}
.popover.right > .arrow {
  left: -6px;
  margin-top: -6px;
}
.popover.right > .arrow:after {
  bottom: -5px;
}
.popover.top > .arrow {
  bottom: -6px;
  margin-left: -6px;
  border-top-color: rgba(0, 0, 0, 0.5);
}
.popover.top > .arrow:after {
  margin-left: -5px;
}
.popover.bottom > .arrow {
  top: -6px;
  margin-left: -6px;
  border-bottom-color: rgba(0, 0, 0, 0.3);
}
.popover.bottom > .arrow:after {
  margin-left: -5px;
}
.popover.left > .arrow {
  right: -6px;
  margin-top: -6px;
}
.popover.left > .arrow:after {
  bottom: -5px;
}
/* EOF POPOVER */
/* TABS */
.tabs {
  float: left;
  width: 100%;
  position: relative;
  margin-top: 40px;
}
.nav-tabs,
.nav-tabs.nav-justified {
  border-bottom: 0px;
  margin-bottom: 0px;
  margin-top: -40px;
  padding: 0px 5px;
}
.block-head .nav-tabs {
  border-bottom: 0px;
}
.nav-tabs > li {
  margin-bottom: 0px;
}
.nav-tabs > li > a {
  margin-right: 5px;
  border: 0px;
  font-size: 14px;
  border-top: 2px solid transparent;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  color: #333;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  background: #F5F5F5;
  padding: 9px 15px;
}
.nav-tabs > li:first-child > a {
  -moz-border-radius: 5px 0px 0px 0px;
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}
.nav-tabs > li > a:hover {
  border-color: transparent;
  background: #FFF;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus,
.nav-tabs > .dropdown.active.open > a:hover {
  border: 0px;
  border-top: 2px solid #1b1e24;
  background: #FFF;
  -moz-border-radius: 3px 3px 0px 0px;
  -webkit-border-radius: 3px 3px 0px 0px;
  border-radius: 3px 3px 0px 0px;
}
.nav-tabs.nav-justified > li > a {
  border: 0px;
  border-top: 2px solid transparent;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  color: #333;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.nav-tabs.nav-justified > li > a:hover {
  border-color: #1b1e24;
  background: transparent;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 0px;
  border-top: 2px solid #1b1e24;
  background: #FFF;
  -moz-border-radius: 3px 3px 0px 0px;
  -webkit-border-radius: 3px 3px 0px 0px;
  border-radius: 3px 3px 0px 0px;
}
.nav-tabs a .caret,
.nav-tabs a:hover .caret {
  color: #1b1e24;
}
.nav-tabs-vertical .tabs {
  margin-top: 0px;
}
.nav-tabs-vertical .nav-tabs {
  margin-top: 0px;
  float: left;
  width: 150px;
  position: absolute;
  left: 0px;
  border-bottom: 0px;
  padding: 0px;
}
.nav-tabs-vertical .nav-tabs > li {
  width: 100%;
}
.nav-tabs-vertical .nav-tabs > li > a {
  width: 100%;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  border-top: 0px;
  border-left: 2px solid transparent;
  background: #FFF;
}
.nav-tabs-vertical .nav-tabs > li > a:hover {
  border-left-color: #1b1e24;
  background: transparent;
}
.nav-tabs-vertical .nav-tabs > li.active > a,
.nav-tabs-vertical .nav-tabs > li.active > a:hover,
.nav-tabs-vertical .nav-tabs > li.active > a:focus,
.nav-tabs-vertical .nav-tabs > .dropdown.active.open > a:hover {
  border-top: 0px;
  border-left: 2px solid #1b1e24;
  background: #F5F5F5;
}
.nav-tabs-vertical .nav-tabs > li:first-child > a {
  -moz-border-top-left-radius: 3px;
  -webkit-border-top-left-radius: 3px;
  border-top-left-radius: 3px;
}
.nav-tabs-vertical .nav-tabs > li:last-child > a {
  -moz-border-bottom-left-radius: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.nav-tabs-vertical .tab-content {
  width: auto;
  margin-left: 150px;
}
.nav-tabs-vertical .panel-body {
  padding-top: 10px;
}
/* EOF TABS */
/* TABLES */
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  border-color: #E5E5E5;
  border-width: 1px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background: #F8FAFC;
}
.table > thead > tr > th {
  background: #f1f5f9;
  color: #56688A;
  font-size: 12px;
}
.panel-body.panel-body-table {
  padding: 0px;
}
.panel-body.panel-body-table h1,
.panel-body.panel-body-table h2,
.panel-body.panel-body-table h3,
.panel-body.panel-body-table h4,
.panel-body.panel-body-table h5,
.panel-body.panel-body-table h6 {
  padding-left: 10px;
  margin-bottom: 10px;
}
.panel-body.panel-body-table .table {
  margin-bottom: 0px;
  border: 0px;
}
.panel-body.panel-body-table .table tr > td:first-child,
.panel-body.panel-body-table .table tr > th:first-child {
  border-left: 0px;
}
.panel-body.panel-body-table .table tr > td:last-child,
.panel-body.panel-body-table .table tr > th:last-child {
  border-right: 0px;
}
.panel-body.panel-body-table .table > tbody > tr:last-child > td {
  border-bottom: 0px;
}
.panel-body.panel-body-table td,
.panel-body.panel-body-table th {
  padding: 8px 10px;
}
.table.table-actions td {
  line-height: 28px;
}
.table .progress-small {
  margin: 7px 0px 8px;
}
/* EOF TABLES */
/* Datatables */
.dataTable {
  float: left;
  border-bottom: 1px solid #E5E5E5 !important;
  margin-bottom: 5px;
}
.dataTable div.checker,
.dataTable div.radio {
  display: inherit;
}
.dataTables_wrapper {
  float: left;
  width: 100%;
}
.dataTables_length {
  width: 50%;
  float: left;
  padding: 0px 0px 5px;
  border-bottom: 1px solid #E5E5E5;
  font-size: 12px;
}
.dataTables_length label,
.dataTables_filter label {
  padding: 0px;
  line-height: 26px;
  height: auto;
  margin: 0px;
  font-weight: normal;
}
.dataTables_length select {
  width: 70px;
  display: inline;
  margin: 0px 5px;
}
.dataTables_filter {
  width: 50%;
  float: right;
  padding-left: 5px;
  padding: 0px 0px 5px;
  border-bottom: 1px solid #E5E5E5;
  font-size: 12px;
}
.dataTables_filter label {
  float: right;
}
.dataTables_filter label input {
  width: 150px;
  display: inline;
  margin-left: 5px;
}
td.dataTables_empty {
  font-size: 11px;
  text-align: center;
  color: #333;
}
.dataTables_info {
  float: left;
  font-size: 12px;
  padding: 0px;
  line-height: 30px;
}
.dataTables_paginate {
  padding: 0px;
  text-align: right;
  float: right;
}
.dataTables_paginate a.paginate_disabled_previous,
.dataTables_paginate a.paginate_disabled_next,
.dataTables_paginate a.paginate_button,
.paginate_enabled_next,
.paginate_active,
.paginate_enabled_previous {
  padding: 5px 10px;
  font-size: 12px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  float: left;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
  color: #22262e;
  margin-left: 3px;
  cursor: pointer;
}
.dataTables_paginate .paginate_enabled_next:hover,
.dataTables_paginate a.paginate_button:hover,
.dataTables_paginate .paginate_enabled_previous:hover {
  background-color: #eee;
  border-color: #ddd;
  color: #222;
}
.dataTables_paginate .paginate_button.current,
.dataTables_paginate .paginate_button.current:hover {
  background: #1b1e24;
  color: #FFF;
  border-color: #1b1e24;
}
.dataTables_paginate a.paginate_disabled_previous,
.dataTables_paginate a.paginate_button_disabled,
.dataTables_paginate a.paginate_disabled_next {
  cursor: default;
  color: #ccc;
}
.dataTables_paginate a.paginate_button_disabled:hover {
  box-shadow: none;
  color: #ccc;
}
.sorting_desc,
.sorting_asc,
.sorting {
  position: relative;
  cursor: pointer;
}
.sorting:before,
.sorting_desc:before,
.sorting_asc:before {
  float: right;
  font-family: 'FontAwesome';
  opacity: 0.9;
  filter: alpha(opacity = 90);
  width: 10px;
  height: 10px;
  display: block;
}
.sorting:before {
  content: "\f0dc";
  opacity: 0.3;
  filter: alpha(opacity = 30);
}
.sorting_desc:before {
  content: "\f0d8";
}
.sorting_asc:before {
  content: "\f0d7";
}
.sorting_asc_disabled:before,
.sorting_desc_disabled:before {
  opacity: 0.1;
  filter: alpha(opacity = 10);
}
/* eof Datatables */
/* icons-list */
.icons-list {
  list-style: none;
  padding: 0px;
  margin: 0px 0px 20px;
  display: block;
  float: left;
  width: 100%;
}
.icons-list li {
  float: left;
  display: block;
  width: 25%;
  height: 30px;
  padding: 5px;
  line-height: 20px;
  font-size: 11px;
  border: 1px solid #FFF;
}
.icons-list li:hover {
  color: #333;
  cursor: pointer;
  background: #F5F5F5;
  border: 1px solid #E5E5E5;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.icons-list li span:first-child,
.icons-list li i {
  font-size: 18px;
  float: left;
  margin-right: 10px;
  color: #222;
  line-height: 20px;
}
.icon-preview {
  font-size: 88px;
  color: #222;
  text-align: center;
}
/* eof icons-list */
/* WIDGETS */
.widget {
  width: 100%;
  float: left;
  margin: 0px;
  list-style: none;
  text-decoration: none;
  -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  color: #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  padding: 15px 10px;
  margin-bottom: 20px;
  min-height: 120px;
  position: relative;
}
.widget.widget-padding-sm,
.widget.widget-item-icon {
  padding: 10px 0px 5px;
}
.widget.widget-np {
  padding: 0px;
}
.widget.widget-no-subtitle {
  padding-top: 25px;
}
.widget.widget-carousel {
  padding-bottom: 0px;
  padding-top: 10px;
}
.widget.widget-default {
  background: #ffffff;
   
   
   
   
   
   
   
}
.widget.widget-primary {
  background: #1b1e24;
  background: -moz-linear-gradient(top, #1b1e24 0%, #101215 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1b1e24), color-stop(100%, #101215));
  background: -webkit-linear-gradient(top, #1b1e24 0%, #101215 100%);
  background: -o-linear-gradient(top, #1b1e24 0%, #101215 100%);
  background: -ms-linear-gradient(top, #1b1e24 0%, #101215 100%);
  background: linear-gradient(to bottom, #1b1e24 0%, #101215 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#1b1e24, endColorstr=#101215, GradientType=0);
}
.widget.widget-success {
  background: #95b75d;
  background: -moz-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #95b75d), color-stop(100%, #89ad4d));
  background: -webkit-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
  background: -o-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
  background: -ms-linear-gradient(top, #95b75d 0%, #89ad4d 100%);
  background: linear-gradient(to bottom, #95b75d 0%, #89ad4d 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#95b75d, endColorstr=#89ad4d, GradientType=0);
}
.widget.widget-info {
background: #1caf9a !important;  
}
.widget.widget-warning {
  background: #1caf9a;
  background: -moz-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1caf9a), color-stop(100%, #fe970a));
  background: -webkit-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
  background: -o-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
  background: -ms-linear-gradient(top, #1caf9a 0%, #fe970a 100%);
  background: linear-gradient(to bottom, #1caf9a 0%, #fe970a 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#1caf9a, endColorstr=#fe970a, GradientType=0);
}
.widget.widget-danger {
  background: #E04B4A;
  background: -moz-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #E04B4A), color-stop(100%, #a43f3e));
  background: -webkit-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
  background: -o-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
  background: -ms-linear-gradient(top, #E04B4A 0%, #a43f3e 100%);
  background: linear-gradient(to bottom, #E04B4A 0%, #a43f3e 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E04B4A, endColorstr=#a43f3e, GradientType=0);
}
.widget .widget-title,
.widget .widget-subtitle,
.widget .widget-int,
.widget .widget-big-int {
  width: 100%;
  float: left;
  text-align: center;
}
.widget .widget-title {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
  line-height: 20px;
  text-transform: uppercase;
}
.widget .widget-subtitle {
  font-size: 12px;
  font-weight: 400;
  margin-bottom: 5px;
  line-height: 15px;
  color: #EEE;
}
.widget .widget-int {
  font-size: 32px;
  line-height: 40px;
  font-weight: bold;
  font-family: arial;
}
.widget .widget-big-int {
  font-size: 42px;
  line-height: 45px;
  font-weight: 300;
}
.widget .widget-item-left {
  margin-left: 10px;
  float: left;
  width: 100px;
}
.widget .widget-item-right {
  margin-right: 10px;
  float: right;
  width: 100px;
}
.widget.widget-item-icon .widget-item-left,
.widget.widget-item-icon .widget-item-right {
  width: 70px;
  padding: 20px 0px;
  text-align: center;
}
.widget.widget-item-icon .widget-item-left {
  border-right: 1px solid rgba(0, 0, 0, 0.1);
  margin-right: 10px;
  padding-right: 10px;
}
.widget.widget-item-icon .widget-item-right {
  border-left: 1px solid rgba(0, 0, 0, 0.1);
  margin-left: 10px;
  padding-left: 10px;
}
.widget .widget-item-left .fa,
.widget .widget-item-right .fa,
.widget .widget-item-left .glyphicon,
.widget .widget-item-right .glyphicon {
  font-size: 60px;
}
.widget .widget-data {
  padding-left: 120px;
}
.widget .widget-data-left {
  padding-right: 120px;
}
.widget.widget-item-icon .widget-data {
  padding-left: 90px;
}
.widget.widget-item-icon .widget-data-left {
  padding-right: 90px;
  padding-left: 10px;
}
.widget .widget-data .widget-title,
.widget .widget-data-left .widget-title,
.widget .widget-data .widget-subtitle,
.widget .widget-data-left .widget-subtitle,
.widget .widget-data .widget-int,
.widget .widget-data-left .widget-int,
.widget .widget-data .widget-big-int,
.widget .widget-data-left .widget-big-int {
  text-align: left;
}
.widget .widget-controls a {
  position: absolute;
  width: 20px;
  height: 20px;
  text-align: center;
  line-height: 17px;
  color: #FFF;
  border: 1px solid #FFF;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  opacity: 0.4;
  filter: alpha(opacity = 40);
}

.widget .widget-controls a.widget-control-left {
  left: 10px;
  top: 10px;
}
.widget .widget-controls a.widget-control-right {
  right: 10px;
  top: 10px;
}
.widget .widget-controls a:hover {
  opacity: 1;
  filter: alpha(opacity = 100);
}
.widget .widget-buttons {
  float: left;
  width: 100%;
  text-align: center;
  padding-top: 3px;
  margin-top: 5px;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.widget .widget-buttons a {
  position: relative;
  display: inline-block;
  line-height: 30px;
  font-size: 21px;
}
.widget .widget-buttons .col {
  width: 100%;
  float: left;
}
.widget .widget-buttons.widget-c2 .col {
  width: 50%;
}
.widget .widget-buttons.widget-c3 .col {
  width: 33.333333%;
}
.widget .widget-buttons.widget-c4 .col {
  width: 25%;
}
.widget .widget-buttons.widget-c5 .col {
  width: 20%;
}
.widget.widget-primary .widget-buttons a {
  color: #000000;
  border-color: #000000;
}
.widget.widget-primary .widget-buttons a:hover {
  color: #000000;
}
.widget.widget-success .widget-buttons a {
  color: #51672e;
  border-color: #51672e;
}
.widge.widget-success .widget-buttons a:hover {
  color: #435526;
}
.widget.widget-info .widget-buttons a {
  color: #eee;
  border-color: #eee;
}
.widget.widget-info .widget-buttons a:hover {
  color: #fff;
}
.widget.widget-warning .widget-buttons a {
  color: #a15e01;
  border-color: #a15e01;
}
.widget.widget-warning .widget-buttons a:hover {
  color: #874f01;
}
.widget.widget-danger .widget-buttons a {
  color: #5a2222;
  border-color: #5a2222;
}
.widget.widget-danger .widget-buttons a:hover {
  color: #471b1b;
}
.plugin-clock span {
  -webkit-animation: pulsate 1s ease-out;
  -webkit-animation-iteration-count: infinite;
  -moz-animation: pulsate 1s ease-out;
  -moz-animation-iteration-count: infinite;
  animation: pulsate 1s ease-out;
  animation-iteration-count: infinite;
  opacity: 0.0;
  margin-right: 2px;
}
.widget.widget-default {
  color: #1b1e24;
}
.widget.widget-default .widget-subtitle {
  color: #1b1e24;
}
.widget.widget-default .widget-controls a {
  color: #1b1e24;
  border-color: #1b1e24;
}
/* END WIDGETS */
/* TILES */
.tile {
  width: 100%;
  float: left;
  margin: 0px;
  list-style: none;
  text-decoration: none;
  font-size: 38px;
  font-weight: 300;
  color: #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  padding: 10px;
  margin-bottom: 20px;
  min-height: 100px;
  position: relative;
  border: 1px solid #D5D5D5;
  text-align: center;
}
.tile.tile-valign {
  line-height: 75px;
}
.tile.tile-default {
  background: #FFF;
  color: #22262e;
}
.tile.tile-default:hover {
  background: #FAFAFA;
}
.tile.tile-primary {
  background: #1b1e24;
  border-color: #1b1e24;
}
.tile.tile-primary:hover {
  background: #17191e;
}
.tile.tile-success {
  background: #95b75d;
  border-color: #95b75d;
}
.tile.tile-success:hover {
  background: #90b456;
}
.tile.tile-warning {
  background: #1caf9a;
  border-color: #1caf9a;
}
.tile.tile-warning:hover {
  background: #fe9e19;
}
.tile.tile-danger {
  background: #E04B4A;
  border-color: #E04B4A;
}
.tile.tile-danger:hover {
  background: #af4342;
}
.tile.tile-info {
  background: #1caf9a;
  border-color: #1caf9a;
}
.tile.tile-info:hover {
  background: #36b7e3;
}
.tile:hover {
  text-decoration: none;
  color: #FFF;
}
.tile.tile-default:hover {
  color: #22262e;
}
.tile .fa {
  font-size: 52px;
  line-height: 74px;
}
.tile p {
  font-size: 14px;
  margin: 0px;
}
.tile .informer {
  position: absolute;
  left: 5px;
  top: 5px;
  font-size: 12px;
  color: #FFF;
  line-height: 14px;
}
.tile .informer.informer-default {
  color: #FFF;
}
.tile .informer.informer-primary {
  color: #1b1e24;
}
.tile .informer.informer-success {
  color: #95b75d;
}
.tile .informer.informer-info {
  color: #1caf9a;
}
.tile .informer.informer-warning {
  color: #1caf9a;
}
.tile .informer.informer-danger {
  color: #E04B4A;
}
.tile .informer .fa {
  font-size: 14px;
  line-height: 16px;
}
.tile .informer.dir-tr {
  left: auto;
  right: 5px;
}
.tile .informer.dir-bl {
  top: auto;
  bottom: 5px;
}
.tile .informer.dir-br {
  left: auto;
  top: auto;
  right: 5px;
  bottom: 5px;
}
/* EOF TILES */
/* MESSAGES */
.messages {
  width: 100%;
  float: left;
}
.messages .item {
  width: 100%;
  float: left;
  margin-bottom: 10px;
  opacity: 0;
  filter: alpha(opacity = 0);
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.messages .item .text {
  background: #FFF;
  padding: 10px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border: 1px solid #D5D5D5;
}
.messages .item .text .heading {
  width: 100%;
  margin-bottom: 5px;
}
.messages .item .text .heading a {
  text-decoration: none;
  font-size: 12px;
  color: #1b1e24;
  font-weight: 600;
  line-height: 20px;
}
.messages .item .text .heading .date {
  float: right;
  line-height: 20px;
  font-size: 11px;
  color: #CCC;
  font-weight: 600;
}
.messages .item .text:hover {
  border-color: #BBB;
}
.messages .item:nth-child(2n) .text {
  background: #F6F6F6;
}
.messages .item.item-visible {
  opacity: 1;
  filter: alpha(opacity = 100);
}
.messages.messages-img .item .image {
  float: left;
  width: 40px;
}
.messages.messages-img .item .image img {
  border: 2px solid #F5F5F5;
  border-radius: 20%;
  width: 40px;
}
.messages.messages-img .item .text {
  margin-left: 50px;
  position: relative;
}
.messages.messages-img .item .text:after,
.messages.messages-img .item .text:before {
  right: 100%;
  top: 20px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages.messages-img .item .text:after {
  border-color: rgba(255, 255, 255, 0);
  border-right-color: #FFF;
  border-width: 5px;
  margin-top: -5px;
}
.messages.messages-img .item .text:before {
  border-color: rgba(213, 213, 213, 0);
  border-right-color: #D5D5D5;
  border-width: 6px;
  margin-top: -6px;
}
.messages.messages-img .item .text:hover:before {
  border-right-color: #BBB;
}
.messages.messages-img .item.in .image {
  float: right;
}
.messages.messages-img .item.in .text {
  margin-left: 0px;
  margin-right: 50px;
}
.messages.messages-img .item.in .text:after,
.messages.messages-img .item.in .text:before {
  right: auto;
  left: 100%;
}
.messages.messages-img .item.in .text:after {
  border-right-color: transparent;
  border-left-color: #FFF;
}
.messages.messages-img .item.in .text:before {
  border-right-color: transparent;
  border-left-color: #D5D5D5;
}
.messages.messages-img .item.in .text:hover:before {
  border-left-color: #BBB;
}
/* END MESSAGES */
/* CONTACTS */
.contact-info {
  float: left;
  width: 100%;
}
.contact-info p {
  margin-bottom: 5px;
}
.contact-info strong {
  font-size: 13px;
}
.contact-info small {
  font-weight: 700;
}
/* END CONTACTS */
/* LOGIN */
.login-container {
  float: left;
  width: 100%;
  min-height: 100%;
  background: url("../img/bg.png") left top repeat #1b1e24;
}
.login-container .login-box {
  width: 400px;
  margin: 0px auto;
  padding-top: 100px;
}
.login-container .login-box .login-logo {
  background: url("../img/logo.png") top center no-repeat;
  width: 100%;
  height: 50px;
  float: left;
  margin-bottom: 10px;
}
.login-container .login-box .login-body {
  width: 100%;
  float: left;
  background: rgba(255, 255, 255, 0.1);
  padding: 20px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.login-container .login-box .login-body .login-title {
  color: #FFF;
  font-size: 19px;
  font-weight: 300;
  margin-bottom: 20px;
}
.login-container .login-box .login-body .form-control {
  border: 0px;
  background: rgba(0, 0, 0, 0.2);
  padding: 10px 15px;
  color: #CCC;
  line-height: 20px;
  height: auto;
}
.login-container .login-box .login-body .btn-link {
  color: #FFF;
  border: 0px;
}
.login-container .login-box .login-body .login-or {
  width: 40px;
  height: 25px;
  background: rgba(0, 0, 0, 0.2);
  position: relative;
  margin: 25px auto;
  text-align: center;
  line-height: 25px;
  color: #FFF;
}
.login-container .login-box .login-body .login-or:before {
  content: "";
  position: absolute;
  left: 0;
  width: 0;
  height: 0;
  top: -10px;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-bottom: 10px solid rgba(0, 0, 0, 0.2);
}
.login-container .login-box .login-body .login-or:after {
  content: "";
  position: absolute;
  left: 0;
  width: 0;
  height: 0;
  bottom: -10px;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-top: 10px solid rgba(0, 0, 0, 0.2);
}
.login-container .login-box .login-body .login-subtitle {
  line-height: 20px;
  padding: 5px 0px;
  font-size: 12px;
  color: #FFF;
}
.login-container .login-box .login-body .login-subtitle a {
  color: #1caf9a;
}
.login-container .login-box .login-footer {
  width: 100%;
  float: left;
  padding: 10px;
  color: #FFF;
}
.login-container .login-box .login-footer a {
  color: #FFF;
}
.login-container.lightmode {
  background: url("../img/backgrounds/wall_1.jpg") left top no-repeat;
}
.login-container.lightmode .login-box .login-body {
  background: rgba(255, 255, 255, 0.2);
}
.login-container.lightmode .login-box .login-body .form-control {
  background: rgba(255, 255, 255, 0.4);
  color: #333;
}
.login-container.lightmode .login-box .login-subtitle a {
  color: #1b1e24;
}
/* END LOGIN */
/* TIMELINE */
.img-text {
  border: 3px solid #FFF;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  margin: 0px 10px 5px 0px;
  -moz-box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 1px 1px 0px 0px rgba(0, 0, 0, 0.1);
}
.timeline {
  float: left;
  width: 100%;
  position: relative;
  padding: 0px;
  margin: 0px 0px 20px;
}
.timeline:before {
  content: " ";
  position: absolute;
  width: 6px;
  background: #FFF;
  height: 100%;
  left: 50%;
  margin-left: -3px;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.timeline .timeline-item {
  width: 50%;
  float: left;
  position: relative;
  clear: both;
  margin-bottom: 20px;
  z-index: 2;
}
.timeline .timeline-item.timeline-main {
  height: 40px;
  width: 50%;
}
.timeline .timeline-item .timeline-date {
  padding: 7px 10px;
  line-height: 20px;
  font-size: 14px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  position: absolute;
  right: -50px;
  top: 0px;
  font-weight: 600;
  color: #1b1e24;
  background: #F5F5F5;
  text-align: center;
  border: 3px solid #FFF;
  width: 100px;
  box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
}
.timeline .timeline-item .timeline-date a {
  color: #1b1e24;
}
.timeline .timeline-item .timeline-item-content {
  float: left;
  background: #F5F5F5;
  border: 3px solid #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  width: 95%;
  box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
}
.timeline .timeline-item .timeline-item-content:before,
.timeline .timeline-item .timeline-item-content:after {
  left: 95%;
  top: 20px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.timeline .timeline-item .timeline-item-content:before {
  border-color: rgba(255, 255, 255, 0);
  border-left-color: #FFF;
  border-width: 3px;
  margin-top: -3px;
}
.timeline .timeline-item .timeline-item-content:after {
  border-color: rgba(255, 255, 255, 0);
  border-left-color: #FFF;
  border-width: 7px;
  margin-top: -7px;
}
.timeline .timeline-item .timeline-item-content .timeline-heading {
  width: 100%;
  float: left;
  padding: 10px 10px 5px;
  line-height: 30px;
}
.timeline .timeline-item .timeline-item-content .timeline-heading img {
  width: 30px;
  height: 30px;
  margin-right: 5px;
  border: 2px solid #FFF;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
}
.timeline .timeline-item .timeline-item-content .timeline-heading a {
  color: #1b1e24;
  font-weight: 600;
}
.timeline .timeline-item .timeline-item-content .timeline-body {
  width: 100%;
  float: left;
  padding: 10px;
}
.timeline .timeline-item .timeline-item-content .timeline-body.comments {
  padding: 0px;
}
.timeline .timeline-item .timeline-item-content .timeline-footer {
  width: 100%;
  float: left;
  padding: 5px 10px;
  line-height: 20px;
  background: #FFF;
}
.timeline .timeline-item .timeline-item-content .timeline-footer a {
  color: #1b1e24;
  font-size: 12px;
  margin-right: 10px;
  text-decoration: none;
}
.timeline .timeline-item .timeline-item-content .timeline-footer a:hover {
  color: #101215;
}
.timeline .timeline-item .timeline-item-content .timeline-footer .pull-right > a:last-child {
  margin-right: 0px;
}
.timeline .timeline-item .timeline-item-info {
  position: absolute;
  left: 105%;
  font-size: 12px;
  padding: 7px 15px;
  line-height: 20px;
  width: 110px;
  text-align: center;
  background: #F5F5F5;
  border: 3px solid #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
  font-weight: 600;
}
.timeline .timeline-item .timeline-item-icon {
  position: absolute;
  right: -20px;
  width: 40px;
  height: 40px;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  font-size: 20px;
  box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
  line-height: 34px;
  text-align: center;
  border: 3px solid #FFF;
  background: #F5F5F5;
  color: #BBB;
}
.timeline .timeline-item:last-child {
  margin-bottom: 0px;
}
.timeline .timeline-item.timeline-item-right {
  float: right;
}
.timeline .timeline-item.timeline-item-right .timeline-item-info {
  left: auto;
  right: 105%;
}
.timeline .timeline-item.timeline-item-right .timeline-item-info:before {
  right: auto;
  left: 100%;
}
.timeline .timeline-item.timeline-item-right .timeline-item-content {
  float: right;
}
.timeline .timeline-item.timeline-item-right .timeline-item-content:before,
.timeline .timeline-item.timeline-item-right .timeline-item-content:after {
  left: auto;
  right: 95%;
  border-right-color: #FFF;
  border-left-color: transparent;
}
.timeline .timeline-item.timeline-item-right .timeline-item-icon {
  right: auto;
  left: -20px;
}
.timeline.timeline-right:before {
  left: 160px;
}
.timeline.timeline-right .timeline-item {
  width: 100%;
  padding-left: 210px;
}
.timeline.timeline-right .timeline-item.timeline-main {
  width: 160px;
  padding-left: 0px;
}
.timeline.timeline-right .timeline-item .timeline-item-content {
  width: 100%;
}
.timeline.timeline-right .timeline-item .timeline-item-content:before,
.timeline.timeline-right .timeline-item .timeline-item-content:after {
  right: auto;
  left: 196px;
}
.timeline.timeline-right .timeline-item .timeline-item-content:before {
  border-width: 0px;
}
.timeline.timeline-right .timeline-item .timeline-item-info {
  left: 0px;
  right: auto;
}
.timeline.timeline-right .timeline-item .timeline-item-icon {
  left: 140px;
}
/* END TIMELINE */
/* COMMENTS */
.comments {
  float: left;
  width: 100%;
  padding: 0px;
  margin: 0px;
  background: #eff7ff;
}
.comments .comment-item {
  float: left;
  width: 100%;
  padding: 10px 10px 8px;
  line-height: 15px;
  border-bottom: 1px solid #dbedff;
}
.comments .comment-item img {
  width: 30px;
  height: 30px;
  margin: 0px 10px 20px 0px;
  border: 3px solid #FFF;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  float: left;
}
.comments .comment-item p {
  margin-bottom: 0px;
  line-height: 13px;
  margin-bottom: 5px;
  font-size: 11px;
}
.comments .comment-item p.comment-head {
  font-size: 12px;
}
.comments .comment-item p.comment-head a {
  font-size: 12px;
  font-weight: 600;
  color: #333;
}
.comments .comment-item small {
  line-height: 10px;
}
.comments .comment-item:first-child {
  border-top: 1px solid #dbedff;
}
.comments .comment-write {
  float: left;
  width: 100%;
  padding: 5px;
}
.comments .comment-write .form-control {
  border-color: #d0e8ff;
}
/* END COMMENTS */
/* TASKS */
.panel-body.tasks {
  padding: 10px;
}
.tasks {
  float: left;
  width: 100%;
}
.tasks .task-item {
  width: 100%;
  float: left;
  padding: 0px;
  background: #FFF;
  border-left: 3px solid #FFF;
  margin-bottom: 10px;
  -moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
}
.tasks .task-item:hover {
  background: #F9F9F9;
  cursor: pointer;
}
.tasks .task-item.task-complete {
  background: #FFF2C5;
}
.tasks .task-item.task-primary {
  border-left-color: #1b1e24;
}
.tasks .task-item.task-success {
  border-left-color: #95b75d;
}
.tasks .task-item.task-info {
  border-left-color: #1caf9a;
}
.tasks .task-item.task-warning {
  border-left-color: #1caf9a;
}
.tasks .task-item.task-danger {
  border-left-color: #E04B4A;
}
.tasks .task-item .task-text {
  margin-bottom: 10px;
  float: left;
  width: 100%;
  font-size: 12px;
  font-weight: 400;
  padding: 10px;
}
.tasks .task-item .task-footer {
  float: left;
  width: 100%;
  font-size: 12px;
  color: #AAA;
  line-height: 20px;
  padding: 10px;
  background: #F5F5F5;
}
.tasks .task-item .task-footer a {
  color: #AAA;
  display: block;
  float: left;
  margin-left: 10px;
  font-size: 14px;
}
.tasks .task-item .task-footer a:hover {
  color: #22262e;
}
.tasks .task-drop {
  float: left;
  width: 100%;
  padding: 30px 10px;
  border: 2px dashed #D5D5D5;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  font-size: 16px;
  text-align: center;
  line-height: 20px;
}
.tasks .task-drop:hover {
  opacity: 0.5;
  filter: alpha(opacity = 50);
  cursor: pointer;
}
/* END TASKS */
/* my progress bar */
.mpb {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 5px;
  background: rgba(0, 0, 0, 0.2);
  z-index: 1001;
  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
}
.mpb.bottom {
  top: auto;
  bottom: 0px;
}
.mpb .mpb-progress {
  background: #FFF;
  display: block;
  float: left;
  height: 5px;
}
.mpb .mpb-progress.mpb-primary {
  background: #1b1e24;
}
.mpb .mpb-progress.mpb-warning {
  background: #1caf9a;
}
.mpb .mpb-progress.mpb-success {
  background: #95b75d;
}
.mpb .mpb-progress.mpb-info {
  background: #1caf9a;
}
.mpb .mpb-progress.mpb-danger {
  background: #E04B4A;
}
/* eof my progress bar */
/* search result */
.search-results {
  float: left;
  width: 100%;
}
.search-results .sr-item {
  float: left;
  width: 100%;
  margin-bottom: 5px;
  padding: 10px 15px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  background: #FFF;
  -moz-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
}
.search-results .sr-item .sr-item-title {
  font-size: 16px;
  font-weight: 600;
  color: #1b1e24;
  display: block;
}
.search-results .sr-item .sr-item-link {
  font-size: 12px;
  font-weight: 400;
  color: #95b75d;
  line-height: 20px;
}
.search-results .sr-item p {
  font-size: 13px;
  color: #22262e;
  margin: 5px 0px;
}
.search-results .sr-item p.sr-item-links {
  font-size: 11px;
}
.search-results .sr-item:last-child {
  margin-bottom: 20px;
}
/* eof search restult */
/* Posts */
.posts .post-item {
  float: left;
  width: 100%;
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px dashed #F5F5F5;
}
.posts .post-item .post-title {
  font-size: 25px;
  font-weight: 400;
  color: #1b1e24;
  float: left;
  width: 100%;
  line-height: 30px;
}
.posts .post-item .post-title a {
  font-size: 25px;
  color: #1b1e24;
}
.posts .post-item .post-date {
  font-size: 11px;
  color: #4d5669;
  line-height: 20px;
  margin: 5px 0px 0px;
  float: left;
  width: 100%;
}
.posts .post-item .post-date a {
  color: #4d5669;
}
.posts .post-item .post-date .fa {
  font-size: 12px;
  margin-right: 5px;
}
.posts .post-item .post-video {
  position: relative;
  padding-bottom: 56.25%;
  padding-top: 25px;
  height: 0;
  margin-bottom: 6px;
}
.posts .post-item .post-video iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.posts .post-item .post-text {
  font-size: 13px;
  float: left;
  width: 100%;
  margin: 10px 0px;
}
.posts .post-item .post-row {
  float: left;
  width: 100%;
  font-size: 11px;
}
.posts .post-item .post-row .post-info {
  line-height: 20px;
  padding: 5px 10px;
  border: 1px solid #F5F5F5;
  font-size: 11px;
  color: #4d5669;
  float: left;
}
.posts .post-item:last-child {
  margin-bottom: 0px;
  padding-bottom: 10px;
  border-bottom: 0px;
}
.post-image {
  width: 400px;
  float: left;
}
.links {
  float: left;
  width: 100%;
  padding: 5px 10px;
}
.links a {
  font-size: 16px;
  font-weight: 400;
  color: #22262e;
  display: block;
  float: left;
  width: 100%;
  line-height: 30px;
}
.links a .label {
  float: right;
  padding: 5px 10px;
  margin-top: 3px;
}
.links.small a {
  font-size: 12px;
  line-height: 20px;
  margin-bottom: 10px;
}
/* eof posts */
/* faq */
.panel-body.faq {
  padding: 0px;
}
.faq {
  width: 100%;
  float: left;
}
.faq .faq-item {
  width: 100%;
  float: left;
  padding: 10px 15px;
  border-bottom: 1px solid #F5F5F5;
}
.faq .faq-item .faq-title {
  font-size: 16px;
  font-weight: 400;
  color: #1b1e24;
  line-height: 30px;
  float: left;
  width: 100%;
  cursor: pointer;
  position: relative;
  padding-left: 45px;
}
.faq .faq-item .faq-title .fa {
  color: #22262e;
  width: 30px;
  height: 30px;
  border: 1px solid #22262e;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  margin-right: 15px;
  line-height: 31px;
  text-align: center;
  position: absolute;
  left: 0px;
  top: 0px;
}
.faq .faq-item .faq-text {
  font-size: 13px;
  color: #22262e;
  line-height: 20px;
  float: left;
  width: 100%;
  padding: 0px 20px;
  max-height: 0px;
  height: 0px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  overflow: hidden;
}
.faq .faq-item .faq-text h5 {
  font-weight: 600;
  font-size: 14px;
}
.faq .faq-item.active {
  padding-bottom: 0px;
  border-bottom: 1px solid #FFF;
}
.faq .faq-item.active .faq-title .fa {
  line-height: 28px;
}
.faq .faq-item.active .faq-text {
  max-height: 500px;
  height: auto;
  background: #F5F5F5;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  padding: 15px 20px;
  margin-top: 10px;
}
.faq .faq-item:first-child {
  -moz-border-radius: 5px 5px 0px 0px;
  -webkit-border-radius: 5px 5px 0px 0px;
  border-radius: 5px 5px 0px 0px;
  border-top: 1px solid #F5F5F5;
}
.faq .faq-item:last-child {
  -moz-border-radius: 0px 0px 5px 5px;
  -webkit-border-radius: 0px 0px 5px 5px;
  border-radius: 0px 0px 5px 5px;
  padding-bottom: 15px;
}
.faq .faq-highlight {
  background: #1caf9a;
  color: #FFF;
  padding: 0px 5px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  text-decoration: underline;
}
/* eof faq */
/* message box */
.message-box {
  display: none;
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}
.message-box.open {
  display: block;
}
.message-box .mb-container {
  position: absolute;
  left: 0px;
  top: 35%;
  background: rgba(0, 0, 0, 0.9);
  padding: 20px;
  width: 100%;
}
.message-box .mb-container .mb-middle {
  width: 50%;
  left: 25%;
  position: relative;
  color: #FFF;
}
.message-box .mb-container .mb-middle .mb-title {
  width: 100%;
  float: left;
  padding: 10px 0px 0px;
  font-size: 31px;
  font-weight: 400;
  line-height: 36px;
}
.message-box .mb-container .mb-middle .mb-title .fa,
.message-box .mb-container .mb-middle .mb-title .glyphicon {
  font-size: 38px;
  float: left;
  margin-right: 10px;
}
.message-box .mb-container .mb-middle .mb-content {
  width: 100%;
  float: left;
  padding: 10px 0px 0px;
}
.message-box .mb-container .mb-middle .mb-content p {
  margin-bottom: 0px;
}
.message-box .mb-container .mb-middle .mb-footer {
  width: 100%;
  float: left;
  padding: 10px 0px;
}
.message-box.message-box-warning .mb-container {
  background: rgba(254, 162, 35, 0.9);
}
.message-box.message-box-danger .mb-container {
  background: rgba(182, 70, 69, 0.9);
}
.message-box.message-box-info .mb-container {
  background: rgba(63, 186, 228, 0.9);
}
.message-box.message-box-success .mb-container {
  background: rgba(149, 183, 93, 0.9);
}
/* end message box */
/* Gallery */
.gallery {
  float: left;
  width: 100%;
}
.gallery .gallery-item {
  float: left;
  width: 25%;
  padding: 10px 5px 10px 5px;
  text-decoration: none;
}
.gallery .gallery-item .image {
  width: 100%;
  -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
.gallery .gallery-item .image a {
  display: block;
}
.gallery .gallery-item .image:after,
.gallery .gallery-item .image:before {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border: 3px solid #fff;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  z-index: 1;
}
.gallery .gallery-item .image:before {
  z-index: 2;
  background: rgba(0, 0, 0, 0);
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.gallery .gallery-item .image:hover:before {
  background: rgba(0, 0, 0, 0.3);
}
.gallery .gallery-item .image img {
  width: 100%;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.gallery .gallery-item .image .gallery-item-controls {
  position: absolute;
  right: -60px;
  top: 3px;
  display: block;
  list-style: none;
  padding: 0px;
  z-index: 2;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.gallery .gallery-item .image .gallery-item-controls li {
  float: left;
  list-style: none;
  background: #FFF;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 26px;
}
.gallery .gallery-item .image .gallery-item-controls li .check {
  margin: 4px 0px;
}
.gallery .gallery-item .image .gallery-item-controls li .icheckbox_minimal-grey {
  margin-right: 0px;
}
.gallery .gallery-item .image .gallery-item-controls li a,
.gallery .gallery-item .image .gallery-item-controls li span {
  font-size: 17px;
  color: #BBB;
}
.gallery .gallery-item .image .gallery-item-controls li a:hover,
.gallery .gallery-item .image .gallery-item-controls li span:hover {
  color: #22262e;
}
.gallery .gallery-item .image .gallery-item-controls li:first-child {
  -moz-border-radius: 0px 0px 0px 3px;
  -webkit-border-radius: 0px 0px 0px 3px;
  border-radius: 0px 0px 0px 3px;
}
.gallery .gallery-item .image .gallery-item-controls li:hover {
  background: #F5F5F5;
}
.gallery .gallery-item .meta {
  color: #22262e;
  margin-top: 5px;
  line-height: 16px;
  padding: 0px 5px;
}
.gallery .gallery-item .meta strong {
  display: block;
  font-weight: 600;
  font-size: 13px;
}
.gallery .gallery-item .meta span {
  display: block;
  color: #4d5669;
}
.gallery .gallery-item:hover .image .gallery-item-controls {
  right: 3px;
}
.gallery .gallery-item.active .image {
  -moz-box-shadow: 0px 0px 6px 0px rgba(51, 65, 78, 0.8);
  -webkit-box-shadow: 0px 0px 6px 0px rgba(51, 65, 78, 0.8);
  box-shadow: 0px 0px 6px 0px rgba(51, 65, 78, 0.8);
}
.gallery .gallery-item.active .image .gallery-item-controls {
  right: 3px;
}
/* end Gallery */
/* Dropzone */
.dropzone.dropzone-mini {
  min-height: 150px;
}
.dropzone.dropzone-mini .dz-message {
  background: none;
  position: relative;
  margin: 0px;
  padding: 0px;
  left: auto;
  top: auto;
  width: 100%;
  float: left;
  height: 120px;
}
.dropzone.dropzone-mini .dz-message:after {
  content: "\f0ee";
  position: absolute;
  width: 80px;
  height: 80px;
  text-align: center;
  font-family: FontAwesome;
  font-size: 88px;
  top: 26px;
  left: 50%;
  margin: 0px 0px 0px -40px;
  line-height: 80px;
  opacity: 0.5;
  filter: alpha(opacity = 50);
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.dropzone.dropzone-mini .dz-message:hover:after {
  opacity: 1;
  filter: alpha(opacity = 100);
}
.dropzone.dz-started .dz-message {
  display: none;
}
/* end Dropzone */
/* errors */
.error-container {
  width: 500px;
  margin: 50px auto 0px;
}
.error-container .error-code {
  float: left;
  width: 100%;
  font-size: 135px;
  line-height: 130px;
  text-align: center;
  color: #333;
  font-weight: 300;
}
.error-container .error-text {
  float: left;
  width: 100%;
  margin-top: 10px;
  font-size: 26px;
  line-height: 24px;
  text-transform: uppercase;
  color: #666;
  text-align: center;
  font-weight: 400;
}
.error-container .error-subtext {
  float: left;
  width: 100%;
  margin: 30px 0px 10px;
  font-size: 13px;
  line-height: 20px;
  color: #AAA;
  text-align: center;
  font-weight: 400;
}
.error-container .error-actions {
  float: left;
  width: 100%;
  margin-top: 10px;
}
/* end errors */
/* SETTINGS */
.theme-settings {
  position: fixed;
  right: -200px;
  top: 200px;
  -webkit-transition: all 400ms ease;
  -moz-transition: all 400ms ease;
  -ms-transition: all 400ms ease;
  -o-transition: all 400ms ease;
  transition: all 400ms ease;
  z-index: 3;
}
.theme-settings .ts-button {
  position: absolute;
  left: -36px;
  height: 36px;
  width: 36px;
  top: 10px;
  background: #1caf9a;
  -moz-border-radius: 5px 0px 0px 5px;
  -webkit-border-radius: 5px 0px 0px 5px;
  border-radius: 5px 0px 0px 5px;
  font-size: 19px;
  color: #FFF;
  line-height: 34px;
  text-align: center;
  cursor: pointer;
}
.theme-settings .ts-body {
  width: 200px;
  background: rgba(28,175,154,0.9);
  -moz-border-radius: 5px 0px 0px 5px;
  -webkit-border-radius: 5px 0px 0px 5px;
  border-radius: 5px 0px 0px 5px;
  padding: 10px 10px 10px;
  color: #FFF;
}
.theme-settings .ts-body .ts-title {
  font-size: 15px;
  font-weight: 600;
  line-height: 20px;
  margin-bottom: 5px;
  margin-top: 10px;
}
.theme-settings .ts-body .ts-title:first-child {
  margin-top: 0px;
}
.theme-settings .ts-body .ts-row {
  margin-bottom: 5px;
}
.theme-settings.active {
  right: 0px;
}
.theme-settings .ts-themes {
  width: 100%;
  margin-top: 10px;
}
.theme-settings .ts-themes a {
  width: 30px;
  height: 30px;
  margin-right: 6px;
  margin-bottom: 5px;
  display: inline-block;
}
.theme-settings .ts-themes a.active img {
  border: 2px solid #FFF;
  width: 30px;
  height: 30px;
}
/* END SETTIGS */
/* TEMPLATE PLUGINS */
/* To top */
.to-top {
  width: 40px;
  height: 40px;
  background: #f5f5f5;
  line-height: 35px;
  text-align: center;
  border: 1px solid #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  font-size: 23px;
  color: #CCC;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.to-top:hover {
  border-color: #1b1e24;
  color: #333;
}
/* end To top */
/* iCheck plugin Minimal skin, black
        ----------------------------------- */
.check {
  font-weight: 400;
  line-height: 20px;
  margin: 5px 0px;
  cursor: pointer;
}
.check .icheckbox_minimal-grey,
.check .iradio_minimal-grey {
  margin-right: 5px;
  margin-top: -2px;
}
.check.disabled {
  color: #AAA;
}
.icheckbox_minimal-grey,
.iradio_minimal-grey {
  display: inline-block;
  *display: inline;
  vertical-align: middle;
  margin: 0;
  padding: 0;
  width: 18px;
  height: 18px;
  background: url("../img/icheck/grey.png") no-repeat;
  border: none;
  cursor: pointer;
}
.icheckbox_minimal-grey {
  background-position: 0 0;
}
.icheckbox_minimal-grey.hover {
  background-position: -20px 0;
}
.icheckbox_minimal-grey.checked {
  background-position: -40px 0;
}
.icheckbox_minimal-grey.disabled {
  background-position: -60px 0;
  cursor: default;
}
.icheckbox_minimal-grey.checked.disabled {
  background-position: -80px 0;
}
.iradio_minimal-grey {
  background-position: -100px 0;
}
.iradio_minimal-grey.hover {
  background-position: -120px 0;
}
.iradio_minimal-grey.checked {
  background-position: -140px 0;
}
.iradio_minimal-grey.disabled {
  background-position: -160px 0;
  cursor: default;
}
.iradio_minimal-grey.checked.disabled {
  background-position: -180px 0;
}
/* END icheckbox */
/* MAILBOX */
.panel .panel-body.mail {
  padding: 0px;
}
.mail {
  padding: 0px;
  float: left;
  width: 100%;
}
.mail .mail-item {
  float: left;
  padding: 10px 15px 10px 13px;
  width: 100%;
  line-height: 20px;
  border-left: 2px solid #D5D5D5;
}
.mail .mail-item.mail-primary {
  border-left-color: #1b1e24;
}
.mail .mail-item.mail-info {
  border-left-color: #1caf9a;
}
.mail .mail-item.mail-success {
  border-left-color: #95b75d;
}
.mail .mail-item.mail-warning {
  border-left-color: #1caf9a;
}
.mail .mail-item.mail-danger {
  border-left-color: #E04B4A;
}
.mail .mail-item .mail-checkbox {
  float: left;
  width: 20px;
  height: 20px;
  margin-right: 10px;
}
.mail .mail-item .mail-star {
  font-size: 16px;
  width: 20px;
  float: left;
  text-align: center;
  margin-right: 10px;
  cursor: pointer;
}
.mail .mail-item .mail-star.starred {
  color: #1caf9a;
}
.mail .mail-item .mail-star.starred .fa-star-o:before {
  content: "\f005";
}
.mail .mail-item .mail-user {
  font-size: 12px;
  font-weight: 600;
  float: left;
  width: 150px;
  color: #1b1e24;
}
.mail .mail-item .mail-text {
  font-size: 12px;
  float: left;
  color: #22262e;
}
.mail .mail-item .mail-date {
  float: right;
  font-size: 12px;
}
.mail .mail-item .mail-attachments {
  float: right;
  font-size: 12px;
  color: #AAA;
  margin-right: 10px;
}
.mail .mail-item .mail-attachments.fa {
  font-size: 16px;
}
.mail .mail-item:nth-child(2n) {
  background: #F9F9F9;
}
.mail .mail-item.mail-unread {
  font-weight: 700;
}
.mail .mail-item.mail-unread .mail-user {
  font-weight: 700;
}
.mail-checkall {
  margin-right: 5px;
}
/* END MAILBOX */
/* BOOTSTRAP DATEPICKER */
div.datepicker {
  padding: 4px;
  -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
  box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.1);
}
div.datepicker > div {
  display: none;
}
div.datepicker table {
  width: 100%;
  margin: 0;
}
div.datepicker td,
div.datepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
}
div.datepicker td.day:hover {
  background: #F5F5F5;
  cursor: pointer;
}
div.datepicker td.day.disabled {
  color: #CCC;
}
div.datepicker td.old,
div.datepicker td.new {
  color: #999;
}
div.datepicker td.active,
div.datepicker td.active:hover {
  background: #1b1e24;
  color: #fff;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
div.datepicker td span {
  display: block;
  width: 31%;
  height: 54px;
  line-height: 54px;
  float: left;
  margin: 2px;
  cursor: pointer;
}
div.datepicker td span:hover {
  background: #F5F5F5;
}
div.datepicker td span.active {
  background: #1b1e24;
  color: #fff;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
div.datepicker td span.old {
  color: #999;
}
div.datepicker th.switch {
  width: 145px;
}
div.datepicker th.next,
div.datepicker th.prev {
  font-size: 12px;
}
div.datepicker thead tr:first-child th {
  cursor: pointer;
  padding: 8px 0px;
}
div.datepicker thead tr:first-child th:hover {
  background: #F5F5F5;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.input-append.date .add-on i,
.input-prepend.date .add-on i {
  display: block;
  cursor: pointer;
  width: 16px;
  height: 16px;
}
.datepicker.dropdown-menu:after,
.datepicker.dropdown-menu:before {
  left: 16px;
}
.datepicker.datepicker-orient-left.dropdown-menu:after,
.datepicker.datepicker-orient-left.dropdown-menu:before {
  left: auto;
  right: 16px;
}
/* EOF BOOTSTRAP DATEPICKER */
/* BOOTSTRAP TIMEPICKER */
.bootstrap-timepicker {
  position: relative;
}
.bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu {
  left: auto;
  right: 0;
}
.bootstrap-timepicker .add-on {
  cursor: pointer;
}
.bootstrap-timepicker .add-on i {
  display: inline-block;
  width: 16px;
  height: 16px;
}
.bootstrap-timepicker-widget.dropdown-menu.timepicker-orient-top:before,
.bootstrap-timepicker-widget.dropdown-menu.timepicker-orient-top:after {
  left: 15px;
}
.bootstrap-timepicker-widget.timepicker-orient-bottom:before {
  bottom: -7px;
  border-bottom: 0;
  border-top: 7px solid #E5E5E5;
}
.bootstrap-timepicker-widget.timepicker-orient-bottom:after {
  bottom: -6px;
  border-bottom: 0;
  border-top: 6px solid #ffffff;
}
.bootstrap-timepicker-widget a.btn,
.bootstrap-timepicker-widget input {
  border-radius: 4px;
}
.bootstrap-timepicker-widget table {
  width: 100%;
  margin: 0;
}
.bootstrap-timepicker-widget table td {
  text-align: center;
  height: 30px;
  margin: 0;
  padding: 2px;
}
.bootstrap-timepicker-widget table td:not(.separator) {
  min-width: 30px;
}
.bootstrap-timepicker-widget table td span {
  width: 100%;
}
.bootstrap-timepicker-widget table td a {
  border: 1px transparent solid;
  width: 100%;
  display: inline-block;
  margin: 0;
  padding: 8px 0;
  outline: 0;
  color: #333;
}
.bootstrap-timepicker-widget table td a:hover {
  text-decoration: none;
  background-color: #F5F5F5;
}
.bootstrap-timepicker-widget table td a i {
  margin-top: 2px;
  font-size: 6px;
  color: #333;
}
.bootstrap-timepicker-widget table td input {
  width: 50px;
  margin: 0;
  text-align: center;
  margin: 0px;
  padding: 0px;
}
.bootstrap-timepicker-widget {
  display: block;
}
.bootstrap-timepicker-widget .modal-content {
  padding: 4px;
}
/* EOF BOOTSTRAP TIMEPICKER */
/* BOOTSTRAP COLORPICKER */
.colorpicker-saturation {
  width: 100px;
  height: 100px;
  background-image: url(../img/colorpicker/saturation.png);
  cursor: crosshair;
  float: left;
}
.colorpicker-saturation i {
  display: block;
  height: 5px;
  width: 5px;
  border: 1px solid #000;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  position: absolute;
  top: 0;
  left: 0;
  margin: -4px 0 0 -4px;
}
.colorpicker-saturation i b {
  display: block;
  height: 5px;
  width: 5px;
  border: 1px solid #fff;
}
.colorpicker-hue,
.colorpicker-alpha {
  width: 15px;
  height: 100px;
  float: left;
  cursor: row-resize;
  margin-left: 4px;
  margin-bottom: 4px;
}
.colorpicker-hue i,
.colorpicker-alpha i {
  display: block;
  height: 1px;
  background: #000;
  border-top: 1px solid #fff;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  margin-top: -1px;
}
.colorpicker-hue {
  background-image: url(../img/colorpicker/hue.png);
}
.colorpicker-alpha {
  background-image: url(../img/colorpicker/alpha.png);
  display: none;
}
.colorpicker {
  top: 0;
  left: 0;
  padding: 4px;
  min-width: 120px;
  margin-top: 1px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.colorpicker.dropdown-menu {
  margin-top: 8px;
}
.colorpicker div {
  position: relative;
}
.colorpicker.alpha {
  min-width: 140px;
}
.colorpicker.alpha .colorpicker-alpha {
  display: block;
}
.colorpicker-color {
  height: 10px;
  margin-top: 5px;
  clear: both;
  background-image: url(../img/colorpicker/alpha.png);
  background-position: 0 100%;
}
.colorpicker-color div {
  height: 10px;
}
.input-group.color .input-group-addon i {
  display: inline-block;
  cursor: pointer;
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}
/* EOF BOOTSTRAP COLORPICKER */
/* BOOTSTRAP SELECT */
.bootstrap-select {
  width: 220px \0;
}
.bootstrap-select > .btn {
  width: 100%;
  padding-right: 25px;
}
.error .bootstrap-select .btn {
  border: 1px solid #E04B4A;
}
.bootstrap-select.fit-width {
  width: auto !important;
}
.bootstrap-select.btn-group:not(.input-group-btn),
.bootstrap-select.btn-group[class*="span"] {
  float: none;
  display: inline-block;
  margin-bottom: 0px;
  margin-left: 0;
}
.form-search .bootstrap-select.btn-group,
.form-inline .bootstrap-select.btn-group,
.form-horizontal .bootstrap-select.btn-group {
  margin-bottom: 0;
}
.bootstrap-select.form-control {
  margin-bottom: 0;
  padding: 0;
  border: none;
}
.bootstrap-select.btn-group.pull-right,
.bootstrap-select.btn-group[class*="span"].pull-right,
.row-fluid .bootstrap-select.btn-group[class*="span"].pull-right {
  float: right;
}
.input-append .bootstrap-select.btn-group {
  margin-left: -1px;
}
.input-prepend .bootstrap-select.btn-group {
  margin-right: -1px;
}
.bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
  width: 220px;
}
.bootstrap-select.form-control:not([class*="span"]) {
  width: 100%;
}
.bootstrap-select.show-menu-arrow.open > .btn {
  z-index: 2051;
}
.bootstrap-select.btn-group .btn .filter-option {
  display: inline-block;
  overflow: hidden;
  width: 100%;
  text-align: left;
}
.bootstrap-select.btn-group .btn .caret {
  position: absolute;
  top: 50%;
  right: 12px;
  margin-top: -2px;
  vertical-align: middle;
}
.bootstrap-select.btn-group > .disabled,
.bootstrap-select.btn-group .dropdown-menu li.disabled > a {
  cursor: not-allowed;
}
.bootstrap-select.btn-group > .disabled:focus {
  outline: none !important;
}
.bootstrap-select.btn-group[class*="span"] .btn {
  width: 100%;
}
.bootstrap-select.btn-group .dropdown-menu {
  min-width: 100%;
  z-index: 2000;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-select.btn-group .dropdown-menu.inner {
  position: static;
  border: 0;
  padding: 0;
  margin: 0;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.bootstrap-select.btn-group .dropdown-menu dt {
  display: block;
  padding: 3px 20px;
  cursor: default;
}
.bootstrap-select.btn-group .div-contain {
  overflow: hidden;
}
.bootstrap-select.btn-group .dropdown-menu li {
  position: relative;
}
.bootstrap-select.btn-group .dropdown-menu li > a.opt {
  position: relative;
  padding-left: 35px;
}
.bootstrap-select.btn-group .dropdown-menu li > a {
  cursor: pointer;
}
.bootstrap-select.btn-group .dropdown-menu li > dt small {
  font-weight: normal;
}
.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a i.check-mark {
  position: absolute;
  display: inline-block;
  right: 15px;
  margin-top: 11px;
  font-size: 11px;
}
.bootstrap-select.btn-group .dropdown-menu li a i.check-mark {
  display: none;
}
.bootstrap-select.btn-group .dropdown-menu li a span.text {
  display: inline-block;
}
.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
  margin-right: 34px;
}
.bootstrap-select.btn-group .dropdown-menu li small {
  padding-left: 0.5em;
}
.bootstrap-select.btn-group .dropdown-menu li:not(.disabled) > a:hover small,
.bootstrap-select.btn-group .dropdown-menu li:not(.disabled) > a:focus small,
.bootstrap-select.btn-group .dropdown-menu li.active:not(.disabled) > a small {
  color: #64b1d8;
  color: rgba(100, 177, 216, 0.4);
}
.bootstrap-select.btn-group .dropdown-menu li > dt small {
  font-weight: normal;
}
.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
  content: '';
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  border-bottom-width: 7px;
  border-bottom-style: solid;
  border-bottom-color: #cccccc;
  border-bottom-color: rgba(204, 204, 204, 0.2);
  position: absolute;
  bottom: -4px;
  left: 9px;
  display: none;
}
.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
  content: '';
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 6px solid white;
  position: absolute;
  bottom: -4px;
  left: 10px;
  display: none;
}
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
  bottom: auto;
  top: -3px;
  border-bottom: 0;
  border-top-width: 7px;
  border-top-style: solid;
  border-top-color: #cccccc;
  border-top-color: rgba(204, 204, 204, 0.2);
}
.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
  bottom: auto;
  top: -3px;
  border-top: 6px solid #FFFFFF;
  border-bottom: 0;
}
.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
  right: 12px;
  left: auto;
}
.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
  right: 13px;
  left: auto;
}
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before,
.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
  display: block;
}
.bootstrap-select.btn-group .no-results {
  padding: 8px;
  background: #f5f5f5;
  border-top: 1px solid #E5E5E5;
  margin-top: 5px;
}
.bootstrap-select.btn-group .dropdown-menu .notify {
  position: absolute;
  bottom: 5px;
  width: 96%;
  margin: 0 2%;
  min-height: 26px;
  padding: 3px 5px;
  background: #f5f5f5;
  border: 1px solid #e3e3e3;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  pointer-events: none;
  opacity: 0.9;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-select.btn-group.fit-width .btn .filter-option {
  position: static;
}
.bootstrap-select.btn-group.fit-width .btn .caret {
  position: static;
  top: auto;
  margin-top: -1px;
}
.control-group.error .bootstrap-select .dropdown-toggle {
  border-color: #b94a48;
}
.bootstrap-select-searchbox,
.bootstrap-select .bs-actionsbox {
  padding: 4px 8px;
}
.bootstrap-select .bs-actionsbox {
  float: left;
  width: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.bootstrap-select .bs-actionsbox .btn-group button {
  width: 50%;
}
.bootstrap-select-searchbox + .bs-actionsbox {
  padding: 0 8px 4px;
}
.bootstrap-select-searchbox input {
  margin-bottom: 0;
}
.mobile-device {
  position: absolute;
  top: 0;
  left: 0;
  display: block !important;
  width: 100%;
  height: 100% !important;
  opacity: 0;
}
/* EOF BOOTSTRAP SELECT */
/* Validation Engine */
.formError {
  z-index: 990;
}
.formError .formErrorContent {
  z-index: 991;
}
.formError .formErrorArrow {
  z-index: 996;
}
.ui-dialog .formError {
  z-index: 5000;
}
.ui-dialog .formError .formErrorContent {
  z-index: 5001;
}
.ui-dialog .formError .formErrorArrow {
  z-index: 5006;
}
.inputContainer {
  position: relative;
  float: left;
}
.formError {
  position: absolute;
  top: 300px;
  left: 300px;
  display: block;
  cursor: pointer;
  text-align: left;
}
.formError.inline {
  position: relative;
  top: 0;
  left: 0;
  display: inline-block;
}
.ajaxSubmit {
  padding: 20px;
  background: #55ea55;
  border: 1px solid #999;
  display: none;
}
.formError .formErrorContent {
  width: 100%;
  background: #111111;
  position: relative;
  color: #ffffff;
  min-width: 120px;
  font-size: 12px;
  padding: 4px 10px 4px 10px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
.greenPopup .formErrorContent {
  background: #95b75d;
}
.blackPopup .formErrorContent {
  background: #000;
  color: #FFF;
}
.formError .formErrorArrow {
  width: 15px;
  margin: -2px 0 0 13px;
  position: relative;
}
body[dir='rtl'] .formError .formErrorArrow,
body.rtl .formError .formErrorArrow {
  margin: -2px 13px 0 0;
}
.formError .formErrorArrowBottom {
  margin: 0px 0 0 12px;
  top: 2px;
}
.formError .formErrorArrow div {
  font-size: 0px;
  height: 1px;
  background: #111111;
  margin: 0 auto;
  line-height: 0;
  font-size: 0;
  display: block;
}
.greenPopup .formErrorArrow div {
  background: #95b75d;
}
.blackPopup .formErrorArrow div {
  background: #000;
  color: #FFF;
}
.formError .formErrorArrow .line10 {
  width: 13px;
  border: none;
}
.formError .formErrorArrow .line9 {
  width: 11px;
  border: none;
}
.formError .formErrorArrow .line8 {
  width: 11px;
}
.formError .formErrorArrow .line7 {
  width: 9px;
}
.formError .formErrorArrow .line6 {
  width: 7px;
}
.formError .formErrorArrow .line5 {
  width: 5px;
}
.formError .formErrorArrow .line4 {
  width: 3px;
}
.formError .formErrorArrow .line3 {
  width: 1px;
}
.formError .formErrorArrow .line2 {
  width: 0px;
  border: none;
}
.formError .formErrorArrow .line1 {
  width: 0px;
  border: none;
}
/* EOF Validation Engine */
/* RangeSlider */
.ui-rangeSlider {
  height: 22px;
  margin-top: 4px;
}
.ui-rangeSlider .ui-rangeSlider-innerBar {
  height: 16px;
  margin: 3px 6px;
  background: #F5F5F5;
  border: 1px solid #E5E5E5;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}
.ui-rangeSlider .ui-rangeSlider-handle {
  width: 22px;
  height: 22px;
  background: #FFF;
  border: 2px solid #1b1e24;
  cursor: col-resize;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
}
.ui-rangeSlider .ui-rangeSlider-bar {
  margin: 1px 0px;
  background: #E5E5E5;
  height: 20px;
  cursor: move;
  cursor: grab;
  cursor: -moz-grab;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
.ui-rangeSlider .ui-rangeSlider-bar.ui-draggable-dragging {
  cursor: -moz-grabbing;
  cursor: grabbing;
}
.ui-rangeSlider-arrow,
.ui-rangeSlider-arrow-inner {
  display: none;
}
.ui-rangeSlider-container {
  height: 22px;
}
.ui-rangeSlider-withArrows .ui-rangeSlider-container {
  margin: 0 11px;
}
.ui-rangeSlider-noArrow .ui-rangeSlider-container {
  margin: 0;
}
.ui-rangeSlider-label {
  background: #1b1e24;
  margin: 0px;
  white-space: nowrap;
  bottom: 26px;
  padding: 5px 8px;
  cursor: col-resize;
  color: #FFF;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  font-size: 11px;
}
.ui-rangeSlider-label-inner {
  display: none;
}
input.ui-editRangeSlider-inputValue {
  width: 3em;
  vertical-align: middle;
  text-align: center;
}
/* EOF RangeSlider */
/* Smart Wizard */
.wizard .anchor {
  float: left;
  padding: 0px;
  margin: 0px;
  list-style: none;
  display: block;
  position: relative;
  width: 100%;
}
.wizard .anchor:after {
  content: " ";
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  height: 2px;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  background: #D5D5D5;
  z-index: 1;
}
.wizard .anchor li {
  float: left;
  display: block;
}
.wizard .anchor li a {
  font-size: 14px;
  color: #22262e;
  text-decoration: none;
  display: block;
  line-height: 18px;
  padding: 10px 20px 15px 0px;
  position: relative;
}
.wizard .anchor li a .stepNumber {
  display: none;
}
.wizard .anchor li a .stepDesc {
  font-weight: 400;
}
.wizard .anchor li a .stepDesc small {
  color: #999;
  font-weight: 300;
}
.wizard .anchor li a:before {
  content: " ";
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 100%;
  height: 2px;
  background: #D5D5D5;
  z-index: 2;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.wizard .anchor li a:after {
  content: " ";
  position: absolute;
  bottom: -10px;
  left: 0px;
  width: 22px;
  height: 22px;
  -moz-border-radius: 20%;
  -webkit-border-radius: 20%;
  border-radius: 20%;
  background: #FFF;
  border: 3px solid #D5D5D5;
  z-index: 3;
  text-align: center;
  line-height: 17px;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
  color: #DDD;
}
.wizard .anchor li a.done:after {
  border-color: #95b75d;
  content: "\f00c";
  font-family: FontAwesome;
  color: #95b75d;
  font-size: 10px;
}
.wizard .anchor li a.done:before {
  background: #95b75d;
}
.wizard .anchor li a.error:after {
  border-color: #E04B4A;
  content: "\f00d";
  font-family: FontAwesome;
  color: #E04B4A;
  font-size: 10px;
}
.wizard .anchor li a.error:before {
  background: #E04B4A;
}
.wizard .anchor li a.selected:after {
  border-color: #1b1e24;
  content: "\f0da";
  font-family: FontAwesome;
  color: #1b1e24;
  font-size: 13px;
  padding-left: 2px;
}
.wizard .anchor li a.selected:before {
  background: #1b1e24;
}
.wizard .stepContainer,
.wizard .actionBar {
  float: left;
  width: 100%;
  margin-top: 30px;
}
.wizard .actionBar {
  margin-top: 20px;
}
.wizard .actionBar .btn.pull-right {
  margin-left: 5px;
}
.wizard .actionBar .btn-primary {
  display: none;
}
.wizard .actionBar .loader {
  display: none;
}
.wizard .anchor.steps_1 li {
  width: 100%;
}
.wizard .anchor.steps_2 li {
  width: 50%;
}
.wizard .anchor.steps_3 li {
  width: 33.333333%;
}
.wizard .anchor.steps_4 li {
  width: 25%;
}
.wizard .anchor.steps_5 li {
  width: 20%;
}
.wizard .anchor.steps_6 li {
  width: 16.666666%;
}
.wizard .anchor.steps_7 li {
  width: 14.285714%;
}
.wizard .anchor.steps_8 li {
  width: 12.5%;
}
/* END Smart Wizard */
/* OWL Slider */
.owl-carousel .owl-wrapper:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
.owl-carousel {
  display: none;
  position: relative;
  width: 100%;
  -ms-touch-action: pan-y;
}
.owl-carousel .owl-wrapper {
  display: none;
  position: relative;
  -webkit-transform: translate3d(0px, 0px, 0px);
}
.owl-carousel .owl-wrapper-outer {
  overflow: hidden;
  position: relative;
  width: 100%;
}
.owl-carousel .owl-wrapper-outer.autoHeight {
  -webkit-transition: height 500ms ease-in-out;
  -moz-transition: height 500ms ease-in-out;
  -ms-transition: height 500ms ease-in-out;
  -o-transition: height 500ms ease-in-out;
  transition: height 500ms ease-in-out;
}
.owl-carousel .owl-item {
  float: left;
}
.owl-carousel .owl-item > div {
  width: 100%;
  float: left;
}
.owl-controls .owl-page,
.owl-controls .owl-buttons div {
  cursor: pointer;
}
.owl-controls {
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.grabbing {
  cursor: url(../img/owl/grabbing.png) 8 8, move;
}
.owl-carousel .owl-wrapper,
.owl-carousel .owl-item {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
}
.owl-theme .owl-controls {
  text-align: center;
}
.owl-theme .owl-controls .owl-pagination {
  height: 22px;
  line-height: 22px;
}
.owl-theme .owl-controls .owl-buttons div {
  color: #FFF;
  display: inline-block;
  zoom: 1;
  *display: inline;
  margin: 5px;
  padding: 3px 10px;
  font-size: 12px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
  background: #222;
  filter: alpha(opacity=20);
  opacity: 0.2;
}
.owl-theme .owl-controls.clickable .owl-buttons div:hover {
  filter: alpha(opacity=50);
  opacity: 0.5;
  text-decoration: none;
}
.owl-theme .owl-controls .owl-page {
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.owl-theme .owl-controls .owl-page span {
  display: block;
  width: 12px;
  height: 12px;
  margin: 5px 7px;
  filter: alpha(opacity=20);
  opacity: 0.2;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  background: #222;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span {
  filter: alpha(opacity=500);
  opacity: 0.5;
}
.owl-theme .owl-controls .owl-page span.owl-numbers {
  height: auto;
  width: auto;
  color: #FFF;
  padding: 2px 10px;
  font-size: 12px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  border-radius: 30px;
}
.owl-item.loading {
  min-height: 150px;
  background: url(../img/owl/AjaxLoader.gif) no-repeat center center;
}
/* END Slider */
/* jVectorMaps */
.jvectormap-label {
  position: absolute;
  display: none;
  border: solid 1px #1b1e24;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #1b1e24;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 3px;
  z-index: 15;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.jvectormap-zoomin,
.jvectormap-zoomout {
  position: absolute;
  left: 10px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #1b1e24;
  padding: 3px;
  olor: white;
  width: 16px;
  height: 16px;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  color: #FFF;
}
.jvectormap-zoomin {
  top: 10px;
}
.jvectormap-zoomout {
  top: 30px;
}
/* END jVectorMaps */
/* tagsinput */
div.tagsinput {
  border: 1px solid #D5D5D5;
  background: #FFF;
  width: 100%;
  min-height: 30px;
  overflow-y: auto;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}
div.tagsinput span.tag {
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  display: block;
  float: left;
  text-decoration: none;
  background: #1b1e24;
  color: #FFF;
  margin: 2px 0px 2px 2px;
  line-height: 20px;
  padding: 2px 5px 2px 20px;
  position: relative;
}
div.tagsinput span.tag a {
  color: #FFF;
  text-decoration: none;
  position: absolute;
  left: 5px;
  width: 15px;
  height: 20px;
  opacity: 0.5;
  filter: alpha(opacity = 50);
}
div.tagsinput span.tag a:hover {
  opacity: 1;
  filter: alpha(opacity = 100);
}
div.tagsinput span.tag a:before {
  position: absolute;
  font-family: "FontAwesome";
  content: "\f00d";
  color: #FFF;
  font-size: 12px;
  line-height: 20px;
}
div.tagsinput input {
  width: 80px;
  margin: 4px 5px;
  border: 0px;
  height: 20px;
  line-height: 20px;
}
div.tagsinput div {
  display: block;
  float: left;
}
.tags_clear {
  clear: both;
  width: 100%;
  height: 0px;
}
.not_valid {
  background: #E04B4A !important;
  color: #FFF !important;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  padding: 0px 5px;
}
/* END tagsinput */
/* sparkline */
.sparkline {
  display: inline-block;
  position: relative;
}
.jqstooltip {
  display: block !important;
  padding: 0px !important;
  border: 0px !important;
}
.jqsfield {
  padding: 4px 5px 5px;
  display: inline-block;
  line-height: 13px;
}
/* eof sparkline */
/* calendar */
.calendar {
  margin-bottom: 0px;
  float: left;
}
.fc-toolbar {
  margin-bottom: 5px;
}
.fc-toolbar h2 {
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  line-height: 30px;
}
.fc-day {
  background: #FFF;
}
.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active,
.fc-toolbar button:focus,
.fc-toolbar button:hover,
.fc-toolbar .ui-state-hover {
  z-index: 0;
}
.fc-widget-header,
.fc-widget-content {
  border: 1px solid #D5D5D5;
}
.fc th.fc-widget-header {
  background: #F5F5F5;
  font-size: 10px;
  text-transform: uppercase;
  line-height: 20px;
  padding: 5px;
}
.fc-button {
  border: 1px solid #D5D5D5;
  background: #FFF;
  color: #555;
}
.fc-text-arrow,
.fc-text-arrow {
  font-family: arial;
  font-size: 16px;
}
.fc-state-hover {
  background: #F5F5F5;
}
.fc-state-highlight,
.fc-cell-overlay {
  background: #F0F0F0;
}
.fc-event {
  font-size: 11px;
  padding: 3px 5px;
  text-align: center;
}
.fc-event-skin.red,
.fc-event.red {
  background-color: #E04B4A;
  border-color: #a43f3e;
}
.fc-event-skin.green,
.fc-event.green {
  background-color: #95b75d;
  border-color: #89ad4d;
}
.fc-event-skin.orange,
.fc-event.orange {
  background-color: #1caf9a;
  border-color: #fe970a;
}
.fc-event-skin.blue,
.fc-event.blue {
  background-color: #1caf9a;
  border-color: #29b2e1;
}
/* eof calendar */
/* bootstra file input */
.file-input-wrapper input[type=file],
.file-input-wrapper input[type=file]:focus,
.file-input-wrapper input[type=file]:hover {
  position: absolute;
  top: 0;
  left: 0;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
  z-index: 99;
  outline: 0;
}
.file-input-name {
  margin-left: 10px;
}
/* eof bootstrap file input */
/* Morris charts */
.morris-hover {
  position: absolute;
  z-index: 1000;
}
.morris-hover.morris-default-style {
  border-radius: 10px;
  padding: 6px;
  color: #666;
  background: rgba(255, 255, 255, 0.8);
  border: solid 2px rgba(230, 230, 230, 0.8);
  font-family: sans-serif;
  font-size: 12px;
  text-align: center;
}
.morris-hover.morris-default-style .morris-hover-row-label {
  font-weight: bold;
  margin: 0.25em 0;
}
.morris-hover.morris-default-style .morris-hover-point {
  white-space: nowrap;
  margin: 0.1em 0;
}
/* END Morris charts */
/* Bootstrap Tour */
.tour-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1100;
  background-color: #000;
  opacity: 0.8;
}
.tour-step-backdrop {
  position: relative;
  z-index: 1101;
  background: inherit;
}
.tour-step-background {
  position: absolute;
  z-index: 1100;
  background: inherit;
  border-radius: 6px;
}
.popover[class*=tour-] {
  z-index: 1100;
}
.popover[class*=tour-] .popover-navigation {
  padding: 9px 14px;
}
.popover[class*=tour-] .popover-navigation [data-role=end] {
  float: right;
}
.popover[class*=tour-] .popover-navigation [data-role=prev],
.popover[class*=tour-] .popover-navigation [data-role=next],
.popover[class*=tour-] .popover-navigation [data-role=end] {
  cursor: pointer;
}
.popover[class*=tour-] .popover-navigation [data-role=prev] .disabled,
.popover[class*=tour-] .popover-navigation [data-role=next].disabled,
.popover[class*=tour-] .popover-navigation [data-role=end] .disabled {
  cursor: default;
}
.popover[class*=tour-] .orphan {
  position: fixed;
  margin-top: 0;
}
.popover[class*=tour-].orphan .arrow {
  display: none;
}
/* END Bootstrap Tour */
/* Bootstro */
.bootstro-next-btn {
  float: right;
}
.bootstro-prev-btn {
  float: left;
}
.bootstro-backdrop {
  opacity: .5;
  background-color: #000;
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 5;
  filter: alpha(opacity=50);
}
.bootstro-highlight {
  z-index: 9999;
  position: relative;
  color: #111;
}
.bootstro-highlight h1,
.bootstro-highlight h2,
.bootstro-highlight h3,
.bootstro-highlight h4,
.bootstro-highlight h5,
.bootstro-highlight h6,
.bootstro-highlight .h1,
.bootstro-highlight .h2,
.bootstro-highlight .h3,
.bootstro-highlight .h4,
.bootstro-highlight .h5,
.bootstro-highlight .h6 {
  color: #000;
}
.bootstro-finish-btn-wrapper {
  padding-top: 10px;
  text-align: center;
  clear: both;
}
.bootstro-nav-wrapper {
  margin-top: 10px;
}
.bootstro-nav-wrapper button,
.bootstro-finish-btn-wrapper button {
  font-size: 12px!important;
  padding: 3px 5px 3px 5px!important;
  font-weight: 400;
}
/* END Bootstro */
/* Bootstrap fileinput */
.file-input {
  overflow-x: auto;
}
.file-loading {
  top: 0;
  right: 0;
  width: 25px;
  height: 25px;
  font-size: 999px;
  text-align: right;
  color: #fff;
  background: transparent url(../img/fileinput/loading.gif) top left no-repeat;
  border: none;
}
.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
  position: absolute;
  top: 0;
  right: 0;
  min-width: 100%;
  min-height: 100%;
  text-align: right;
  filter: alpha(opacity=0);
  opacity: 0;
  background: none repeat scroll 0 0 transparent;
  cursor: inherit;
  display: block;
}
.file-caption .glyphicon {
  display: inline-block;
  min-width: 18px;
  float: left;
  margin-top: 2px;
}
.file-caption-name {
  display: inline-block;
  float: left;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  width: 85%;
}
.file-error-message {
  background-color: #f2dede;
  color: #a94442;
  text-align: center;
  border-radius: 0px;
  padding: 5px;
}
.file-caption-disabled {
  background-color: #EEE;
  cursor: not-allowed;
  opacity: 1;
}
.file-input .btn .disabled,
.file-input .btn[disabled] {
  cursor: not-allowed;
}
.file-preview {
  border-radius: 0px;
  border: 1px solid #ddd;
  padding: 5px;
  width: 100%;
  margin-bottom: 5px;
}
.file-preview-frame {
  display: table;
  margin: 10px;
  height: 160px;
  border: 1px solid #d5d5d5;
  box-shadow: 0px 1px 1px 0 rgba(0, 0, 0, 0.1);
  padding: 3px;
  float: left;
  text-align: center;
}
.file-preview-frame:hover {
  background-color: #F5F5F5;
}
.file-preview-image {
  height: 150px;
  vertical-align: text-center;
}
.file-preview-text {
  display: table-cell;
  width: 150px;
  height: 150px;
  color: #428bca;
  font-size: 11px;
  vertical-align: middle;
  text-align: center;
}
.file-preview-other {
  display: table-cell;
  width: 150px;
  height: 150px;
  font-family: Monaco,Consolas,monospace;
  font-size: 11px;
  vertical-align: middle;
  text-align: center;
}
.file-input-new .close,
.file-input-new .file-preview,
.file-input-new .fileinput-remove-button,
.file-input-new .fileinput-upload-button,
.file-input-new .glyphicon-file {
  display: none;
}
.loading {
  background: transparent url(../img/loading.gif) no-repeat scroll center center content-box !important;
}
.wrap-indicator {
  font-weight: 700;
  color: #245269;
  cursor: pointer;
}
/* END Bootstrap fileinput */
/* daterangepicker */
.dtrange {
  line-height: 28px;
  padding: 0px 10px;
  border: 1px solid #BBB;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  float: left;
  cursor: pointer;
}
.dtrange:hover {
  background-color: #F9F9F9;
}
.daterangepicker.dropdown-menu {
  max-width: none;
  z-index: 3000;
  border: 1px solid #D5D5D5;
}
.daterangepicker.dropdown-menu:before,
.daterangepicker.dropdown-menu:after {
  display: none;
}
.daterangepicker.opensleft .ranges,
.daterangepicker.opensleft .calendar {
  float: left;
  margin: 4px;
}
.daterangepicker.opensright .ranges,
.daterangepicker.opensright .calendar {
  float: right;
  margin: 4px;
}
.daterangepicker .ranges {
  width: 160px;
  text-align: left;
}
.daterangepicker .ranges .range_inputs > div {
  float: left;
}
.daterangepicker .ranges .range_inputs > div:nth-child(2) {
  padding-left: 11px;
}
.daterangepicker .calendar {
  display: none;
  max-width: 270px;
  width: auto;
}
.daterangepicker .calendar th,
.daterangepicker .calendar td {
  white-space: nowrap;
  text-align: center;
  min-width: 32px;
}
.daterangepicker .ranges label {
  color: #333;
  display: block;
  font-size: 11px;
  font-weight: normal;
  height: 20px;
  line-height: 20px;
  margin-bottom: 2px;
  text-shadow: #fff 1px 1px 0px;
  text-transform: uppercase;
  width: 74px;
}
.daterangepicker .ranges input {
  font-size: 11px;
}
.daterangepicker .ranges .input-mini {
  background-color: #F5F5F5;
  border: 1px solid #ccc;
  border-radius: 4px;
  color: #555;
  display: block;
  font-size: 11px;
  height: 30px;
  line-height: 30px;
  vertical-align: middle;
  margin: 0 0 10px 0;
  padding: 0 6px;
  width: 74px;
}
.daterangepicker .ranges ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.daterangepicker .ranges li {
  font-size: 13px;
  background: #f5f5f5;
  border: 1px solid #f5f5f5;
  color: #22262e;
  padding: 3px 12px;
  margin-bottom: 8px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  cursor: pointer;
}
.daterangepicker .ranges li.active,
.daterangepicker .ranges li:hover {
  background: #1b1e24;
  border: 1px solid #1b1e24;
  color: #fff;
}
.daterangepicker .calendar-date {
  border: 1px solid #ddd;
  padding: 4px;
  border-radius: 4px;
  background: #fff;
}
.daterangepicker .calendar-time {
  text-align: center;
  margin: 8px auto 0 auto;
  line-height: 30px;
}
.daterangepicker {
  position: absolute;
  background: #fff;
  top: 100px;
  left: 20px;
  padding: 4px;
  margin-top: 1px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.daterangepicker table {
  width: 100%;
  margin: 0;
}
.daterangepicker td,
.daterangepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  cursor: pointer;
  white-space: nowrap;
}
.daterangepicker td.off {
  color: #999;
}
.daterangepicker td.disabled {
  color: #999;
}
.daterangepicker td.available:hover,
.daterangepicker th.available:hover {
  background: #D5D5D5;
}
.daterangepicker td.in-range {
  background: #8c96aa;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.daterangepicker td.active,
.daterangepicker td.active:hover {
  background-color: #22262e;
  border-color: #22262e;
  color: #fff;
}
.daterangepicker td.week,
.daterangepicker th.week {
  font-size: 80%;
  color: #ccc;
}
.daterangepicker select.monthselect,
.daterangepicker select.yearselect {
  font-size: 12px;
  padding: 1px;
  height: auto;
  margin: 0;
  cursor: default;
}
.daterangepicker select.monthselect {
  margin-right: 2%;
  width: 56%;
}
.daterangepicker select.yearselect {
  width: 40%;
}
.daterangepicker select.hourselect,
.daterangepicker select.minuteselect,
.daterangepicker select.ampmselect {
  width: 50px;
  margin-bottom: 0;
}
/* eof daterangepicker */
/* Tocify */
.tocify {
  width: 20%;
  max-height: 90%;
  overflow: auto;
  position: fixed;
  border: 1px solid #E5E5E5;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 1px 0px 0px rgba(0, 0, 0, 0.2);
}
.tocify ul,
.tocify li {
  list-style: none;
  margin: 0;
  padding: 0;
  border: none;
  line-height: 30px;
}
.tocify ul.tocify-header > li > a {
  border-bottom: 1px solid #E5E5E5;
}
.tocify ul.tocify-subheader {
  display: none;
}
.tocify ul.tocify-subheader li.tocify-item a {
  background: #F5F5F5;
}
.tocify ul.tocify-subheader li.tocify-item a:hover {
  background: #F0F0F0;
}
.tocify ul.tocify-subheader li.tocify-item.active a {
  background: #1b1e24;
}
.tocify li.tocify-item a {
  background: #FFF;
  padding: 10px;
  font-size: 12px;
  color: #333;
  line-height: 20px;
  border-bottom: 1px solid #E5E5E5;
}
.tocify li.tocify-item a:hover {
  background: #F5F5F5;
}
.tocify li.tocify-item.active a {
  background: #1b1e24;
  color: #FFF;
}
.tocify-header {
  text-indent: 10px;
}
.tocify-subheader {
  text-indent: 20px;
}
.tocify-subheader li {
  font-size: 12px;
}
.tocify-subheader .tocify-subheader {
  text-indent: 30px;
}
.tocify-subheader .tocify-subheader .tocify-subheader {
  text-indent: 40px;
}
/* END Tocify */
/* Filetree */
ul.jqueryFileTree {
  font-size: 11px;
  line-height: 18px;
  padding: 0px;
  margin: 0px;
}
ul.jqueryFileTree li {
  list-style: none;
  padding: 0px;
  padding-left: 20px;
  margin: 0px;
  white-space: nowrap;
}
ul.jqueryFileTree a {
  color: #333;
  text-decoration: none;
  display: block;
  padding: 0px 2px;
}
ul.jqueryFileTree a:hover {
  background: #E9EDF1;
}
li.directory {
  background: url(../img/filetree/directory.png) left top no-repeat;
}
li.expanded {
  background: url(../img/filetree/folder_open.png) left top no-repeat;
}
li.file {
  background: url(../img/filetree/file.png) left top no-repeat;
}
li.wait {
  background: url(../img/filetree/spinner.gif) left top no-repeat;
}
/* File Extensions*/
li.ext_3gp {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_afp {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_afpa {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_asp {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_aspx {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_avi {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_bat {
  background: url(../img/filetree/application.png) left top no-repeat;
}
li.ext_bmp {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_c {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_cfm {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_cgi {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_com {
  background: url(../img/filetree/application.png) left top no-repeat;
}
li.ext_cpp {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_css {
  background: url(../img/filetree/css.png) left top no-repeat;
}
li.ext_doc {
  background: url(../img/filetree/doc.png) left top no-repeat;
}
li.ext_exe {
  background: url(../img/filetree/application.png) left top no-repeat;
}
li.ext_gif {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_fla {
  background: url(../img/filetree/flash.png) left top no-repeat;
}
li.ext_h {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_htm {
  background: url(../img/filetree/html.png) left top no-repeat;
}
li.ext_html {
  background: url(../img/filetree/html.png) left top no-repeat;
}
li.ext_jar {
  background: url(../img/filetree/java.png) left top no-repeat;
}
li.ext_jpg {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_jpeg {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_js {
  background: url(../img/filetree/script.png) left top no-repeat;
}
li.ext_lasso {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_log {
  background: url(../img/filetree/txt.png) left top no-repeat;
}
li.ext_m4p {
  background: url(../img/filetree/music.png) left top no-repeat;
}
li.ext_mov {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_mp3 {
  background: url(../img/filetree/music.png) left top no-repeat;
}
li.ext_mp4 {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_mpg {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_mpeg {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_ogg {
  background: url(../img/filetree/music.png) left top no-repeat;
}
li.ext_pcx {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_pdf {
  background: url(../img/filetree/pdf.png) left top no-repeat;
}
li.ext_php {
  background: url(../img/filetree/php.png) left top no-repeat;
}
li.ext_png {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_ppt {
  background: url(../img/filetree/ppt.png) left top no-repeat;
}
li.ext_psd {
  background: url(../img/filetree/psd.png) left top no-repeat;
}
li.ext_pl {
  background: url(../img/filetree/script.png) left top no-repeat;
}
li.ext_py {
  background: url(../img/filetree/script.png) left top no-repeat;
}
li.ext_rb {
  background: url(../img/filetree/ruby.png) left top no-repeat;
}
li.ext_rbx {
  background: url(../img/filetree/ruby.png) left top no-repeat;
}
li.ext_rhtml {
  background: url(../img/filetree/ruby.png) left top no-repeat;
}
li.ext_rpm {
  background: url(../img/filetree/linux.png) left top no-repeat;
}
li.ext_ruby {
  background: url(../img/filetree/ruby.png) left top no-repeat;
}
li.ext_sql {
  background: url(../img/filetree/db.png) left top no-repeat;
}
li.ext_swf {
  background: url(../img/filetree/flash.png) left top no-repeat;
}
li.ext_tif {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_tiff {
  background: url(../img/filetree/picture.png) left top no-repeat;
}
li.ext_txt {
  background: url(../img/filetree/txt.png) left top no-repeat;
}
li.ext_vb {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_wav {
  background: url(../img/filetree/music.png) left top no-repeat;
}
li.ext_wmv {
  background: url(../img/filetree/film.png) left top no-repeat;
}
li.ext_xls {
  background: url(../img/filetree/xls.png) left top no-repeat;
}
li.ext_xml {
  background: url(../img/filetree/code.png) left top no-repeat;
}
li.ext_zip {
  background: url(../img/filetree/zip.png) left top no-repeat;
}
/* END Filetree */
.chart-legend {
  position: absolute;
  top: 5px;
  right: 5px;
}
.rickshaw_legend {
  background: rgba(0, 0, 0, 0.05);
}
.rickshaw_legend .label {
  color: #333;
}
/* END TEMPLATE PLUGINS */
.fa-right {
  margin-left: 5px;
  margin-right: 0px;
}
/* Animations */
@-webkit-keyframes pulsate {
  0% {
    opacity: 0.0;
  }
  50% {
    opacity: 1.0;
  }
  100% {
    opacity: 0.0;
  }
}
@-moz-keyframes pulsate {
  0% {
    opacity: 0.0;
  }
  50% {
    opacity: 1.0;
  }
  100% {
    opacity: 0.0;
  }
}
@keyframes pulsate {
  0% {
    opacity: 0.0;
  }
  50% {
    opacity: 1.0;
  }
  100% {
    opacity: 0.0;
  }
}
/* END Animations */
@media only screen and (max-width: 768px) {
  [class^='col-xs-'],
  [class^='col-sm-'],
  [class^='col-md-'],
  [class^='col-lg-'] {
    margin-bottom: 10px;
  }
  /* LOGIN */
  .login-container {
    padding: 0px 10px;
  }
  .login-container .login-box {
    padding-top: 10px;
    width: 100%;
  }
  /* END LOGIN */
  /* TOCIFY */
  .tocify {
    display: none;
  }
  /* END TOCIFY */
  /* TIMELINE */
  .timeline.timeline-right:before {
    left: 60px;
  }
  .timeline.timeline-right .timeline-item {
    padding-left: 110px;
  }
  .timeline.timeline-right .timeline-item.timeline-main {
    width: 60px;
  }
  .timeline.timeline-right .timeline-item .timeline-item-icon {
    left: 40px;
  }
  .timeline.timeline-right .timeline-item .timeline-item-info {
    top: 45px;
    width: 70px;
    left: 25px;
    padding: 7px 0px;
  }
  /* END TIMELINE */
  .post-image {
    width: 100%;
  }
}
@media only screen and (max-width: 1024px) {
  .page-container .page-sidebar {
    position: relative;
    float: left;
    width: 100%;
  }
  .page-container .page-sidebar.scroll {
    position: relative;
  }
  .page-container .page-content {
    margin-left: 0px;
  }
  .page-container .page-content .content-frame .content-frame-left,
  .page-container .page-content .content-frame .content-frame-right {
    width: 100%;
    display: none;
  }
  .page-container .page-content .content-frame .content-frame-body {
    margin-left: 0px;
    margin-right: 0px;
  }
  .page-container .page-content .content-frame .content-frame-body.content-frame-body-left {
    margin-right: 0px;
  }
  .page-container .page-content .content-frame .content-frame-left-toggle,
  .page-container .page-content .content-frame .content-frame-right-toggle {
    display: inline-block;
  }
  .page-container.page-navigation-toggled .page-content {
    margin-left: 0px;
  }
  .page-container.page-mode-rtl .page-content {
    margin-right: 0px;
  }
  .page-container.page-navigation-top-fixed .x-navigation.x-navigation-horizontal {
    padding-right: 0px;
    position: relative;
  }
  .page-container.page-navigation-top-fixed .page-content {
    padding-top: 0px;
  }
  .x-navigation {
    max-height: 50px;
    overflow: hidden;
    background: #1b1e24;
  }
  .x-navigation.x-navigation-panel {
    height: 50px;
    max-height: auto;
    overflow: visible;
  }
  .x-navigation.x-navigation-panel li.xn-icon-button {
    width: 50px;
  }
  .x-navigation.x-navigation-panel li.xn-search {
    width: auto;
  }
  .x-navigation .xn-search input {
    width: 100%;
  }
  .x-navigation.x-navigation-open {
    max-height: 1200px;
    overflow: visible;
  }
  .x-navigation .x-navigation-control {
    display: block;
  }
  .x-navigation-minimize {
    display: none !important;
  }
  .x-navigation-horizontal > li > ul ul,
  .x-navigation-horizontal > li > ul.xn-drop-left ul {
    position: relative;
    left: auto;
    right: auto;
    margin-left: 0px;
    margin-right: 0px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .x-navigation-horizontal > li > ul ul:after {
    display: none;
  }
  /* XNAV PANEL */
  .x-navigation li > .panel {
    width: 250px;
  }
  /* END XNAV PANEL */
  /* list icons */
  .icons-list li {
    width: 100%;
  }
  /* END list icons */
  /* Gallery */
  .gallery .gallery-item {
    width: 50%;
  }
  /* End Gallery */
  /* Timeline */
  .timeline .timeline-item .timeline-item-content {
    width: 90%;
  }
  .timeline .timeline-item .timeline-item-content:before,
  .timeline .timeline-item .timeline-item-content:after {
    left: 90%;
  }
  .timeline .timeline-item.timeline-item-right .timeline-item-content:before,
  .timeline .timeline-item.timeline-item-right .timeline-item-content:after {
    right: 90%;
  }
  /* END Timeline */
  /* Error */
  .error-container {
    width: 100%;
  }
  /* End Error */
  /* Settings */
  .theme-settings {
    display: none;
  }
  /* End Settings */
  .post-image {
    width: 300px;
  }
}
.x-navigation-minimized .xn-logo{
display:none;
}
		</style>
        <!-- EOF CSS INCLUDE -->  
    </head>
    <body>
        <div class="error-container">
            <div class="error-code">404</div>
            <div class="error-text">page not found</div>
            <div class="error-subtext">Unfortunately we're having trouble loading the page you are looking for. Please wait a moment and try again or use action below.</div>
            <div class="error-actions">                                
                                                
            </div>
            
        </div>                 
    </body>
</html>






