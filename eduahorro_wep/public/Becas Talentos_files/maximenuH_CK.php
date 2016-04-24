
.clr {clear:both;}

/**
** global styles
**/

/* for z-index layout */
div#maximenuCK {
    /*position: relative;*/
}

/* container style */
div#maximenuCK ul.maximenuCK {
    /*background :  url(../images/fond_bg.png) top left repeat-x;*/
    height : 25px;
    padding : 0;
    margin : 0;
    overflow: visible !important;
}

div#maximenuCK ul.maximenuCK li.maximenuCK {
    background : none;
    list-style : none;
    border : none;
}

/* link image style */
div#maximenuCK ul.maximenuCK li.maximenuCK>a img {
    margin : 3px;
    border : none;
}

/* img style without link (in separator) */
div#maximenuCK ul.maximenuCK li.maximenuCK img {
    border : none;
	clear: both;
}

div#maximenuCK ul.maximenuCK li a.maximenuCK,
div#maximenuCK ul.maximenuCK li span.separator {
    text-decoration : none;
    text-indent : 2px;
    /*height : 27px;*/
		min-height : 27px;
    outline : none;
    background : none;
    border : none;
    padding : 0;        
    cursor : pointer;
    color : #0C3D61;  
    white-space: normal;
}

/* separator item */
div#maximenuCK ul.maximenuCK li span.separator {

}

/**
** active items
**/

/* current item title and description */
div#maximenuCK ul.maximenuCK li.current>a span {
    color : #0C3D61;  
}

/* current item title when mouseover */
div#maximenuCK ul.maximenuCK li.current>a:hover span.titreCK {

}

/* current item description when mouseover */
div#maximenuCK ul.maximenuCK li.current>a:hover span.descCK {

}

/* active parent title */
div#maximenuCK ul.maximenuCK li.active>a span.titreCK {
    color : #0C3D61;  
}

/* active parent description */
div#maximenuCK ul.maximenuCK li.active>a span.descCK {

}

/**
** first level items
**/

div#maximenuCK ul.maximenuCK li.level0 {
    padding : 0 12px;
    /*background : url(../images/separator.png) top right no-repeat;*/
}

/* first level item title */
div#maximenuCK ul.maximenuCK li.level0>a span.titreCK,
div#maximenuCK ul.maximenuCK li.level0>span.separator span.titreCK {
    color : #0C3D61;  
}

/* first level item description */
div#maximenuCK ul.maximenuCK li.level0>a span.descCK {
    color : #0C3D61;  
}

/* first level item link */
div#maximenuCK ul.maximenuCK li.parent.level0>a,
div#maximenuCK ul.maximenuCK li.parent.level0>span {
    background : url(../images/maxi_arrow0.png) right no-repeat;
    padding-right: 12px;
}

/* parent style level 0 */
div#maximenuCK ul.maximenuCK li.parent.level0 li.parent {
    background : url(../images/maxi_arrow1.png) center right no-repeat;
}

/* first level item hovered */
div#maximenuCK ul.maximenuCK li.level0>a:hover span.titreCK,
div#maximenuCK ul.maximenuCK li.level0>span:hover span.titreCK {
    color: #F36E00;
}


/**
** items title and descriptions
**/

/* item title */
div#maximenuCK span.titreCK {
    color : #ffffff;
    /*display : block;*/
    text-transform : none;
    font-weight : normal;
    font-size : 15px;
    line-height : 18px;
    text-decoration : none;
	/*height : 17px;*/
    min-height : 17px;
    float : none !important;
    float : left;
}

/* item description */
div#maximenuCK span.descCK {
    color : #c0c0c0;
    display : block;
    text-transform : none;
    font-size : 10px;
    text-decoration : none;
    height : 12px;
    line-height : 12px;
    float : none !important;
    float : left;
}

/* item title when mouseover */
div#maximenuCK ul.maximenuCK  a:hover span.titreCK {
    color : #04304e;
}

/**
** child items
**/

/* child item title */
div#maximenuCK ul.maximenuCK2  a.maximenuCK {
    width : 100%;
}

div#maximenuCK ul.maximenuCK2 li a.maximenuCK,
div#maximenuCK ul.maximenuCK2 li span.separator {
    text-decoration : none;
    border-bottom : 1px solid #FFFFFF;
    margin : 0 auto;
    padding : 3px 0 3px 0;
	clear:both;
}

/* child item block */
div#maximenuCK ul.maximenuCK ul.maximenuCK2 {
    background : transparent;
    margin : 3px 0 0 0;
    padding : 0;
    border : none;
    width : 100%; /* important for Chrome and Safari compatibility */
    position: static;
}

div#maximenuCK ul.maximenuCK2 li.maximenuCK {
    padding : 2px 0 0 0;
    border : none;
    margin : 0 5px;
    background : none;
    display : block;
    float: none;
	/*clear:both;*/
}

/* child item container  */
div#maximenuCK ul.maximenuCK li div.floatCK {
    background : #FA9F58;
    border : 1px solid #FFFFFF;
}

/**
** module style
**/

div#maximenuCK div.maximenuCK_mod {
    width : 100%;
    padding : 0;
    overflow : hidden;
    color : #ddd;
    white-space : normal;
}

div#maximenuCK div.maximenuCK_mod div.moduletable {
    border : none;
    background : none;
}

div#maximenuCK div.maximenuCK_mod  fieldset{
    width : 100%;
    padding : 0;
    margin : 0 auto;
    overflow : hidden;
    background : transparent;
    border : none;
}

div#maximenuCK ul.maximenuCK2 div.maximenuCK_mod a {
    border : none;
    margin : 0;
    padding : 0;
    display : inline;
    background : transparent;
    color : #888;
    font-weight : normal;
}

div#maximenuCK ul.maximenuCK2 div.maximenuCK_mod a:hover {
    color : #042f4c;
}

/* module title */
div#maximenuCK ul.maximenuCK div.maximenuCK_mod h3 {
    font-size : 14px;
    width : 100%;
    color : #aaa;
    font-size : 14px;
    font-weight : normal;
    background : #444;
    margin : 5px 0 0 0;
    padding : 3px 0 3px 0;
}

div#maximenuCK ul.maximenuCK2 div.maximenuCK_mod ul {
    margin : 0;
    padding : 0;
    width : 100%;
    background : none;
    border : none;
    text-align : left;
}

div#maximenuCK ul.maximenuCK2 div.maximenuCK_mod li {
    margin : 0 0 0 15px;
    padding : 0;
    width : 100%;
    background : none;
    border : none;
    text-align : left;
    font-size : 11px;
    float : none;
    display : block;
    line-height : 20px;
    white-space : normal;
}

/* login module */
div#maximenuCK ul.maximenuCK2 div.maximenuCK_mod #form-login ul {
    left : 0;
    margin : 0;
    padding : 0;
    width : 100%;
}

div#maximenuCK ul.maximenuCK2 div.maximenuCK_mod #form-login ul li {
    margin : 2px 0;
    padding : 0 5px;
    height : 20px;
    background : transparent;
}


/**
** columns width & child position
**/

/* child blocks position (from level2 to n) */
div#maximenuCK ul.maximenuCK li.maximenuCK div.floatCK div.floatCK {
    margin : -30px 0 0 180px;
}

/* margin for overflown elements that rolls to the left */
div#maximenuCK ul.maximenuCK li.maximenuCK div.floatCK div.floatCK.fixRight  {
    margin-right : 180px;
}

/* default width */
div#maximenuCK ul.maximenuCK li div.floatCK {
    width : 180px;
}

/* 2 cols width */
div#maximenuCK ul.maximenuCK li div.cols2 {
    width : 360px;
}

div#maximenuCK ul.maximenuCK li div.cols2>div.maximenuCK2 {
    width : 50%;
}

/* 3 cols width */
div#maximenuCK ul.maximenuCK li div.cols3 {
    width : 540px;
}

div#maximenuCK ul.maximenuCK li div.cols3>div.maximenuCK2 {
    width : 33%;
}

/* 4 cols width */
div#maximenuCK ul.maximenuCK li div.cols4 {
    width : 720px;
}

div#maximenuCK ul.maximenuCK li div.cols4>div.maximenuCK2 {
    width : 25%;
}



/**
** fancy parameters
**/

div#maximenuCK .maxiFancybackground {
    list-style : none;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important;
}

div#maximenuCK .maxiFancybackground .maxiFancycenter {
    /*background: url('../images/fancy_bg.png') repeat-x top left;*/
    height : 34px;
}

div#maximenuCK .maxiFancybackground .maxiFancyleft {

}

div#maximenuCK .maxiFancybackground .maxiFancyright {

}

/**
** rounded style
**/

/* global container */
div#maximenuCK div.maxiRoundedleft {

}

div#maximenuCK div.maxiRoundedcenter {

}

div#maximenuCK div.maxiRoundedright {

}

/* child container */
div#maximenuCK div.maxidrop-top {

}

div#maximenuCK div.maxidrop-main {

}

div#maximenuCK div.maxidrop-bottom {

}


/* bouton to close on click */
div#maximenuCK span.maxiclose {
    color: #042f4c;
}

/*** compatibility layer for native template Beez20 and Beez5 ***/
#header
{
    overflow:visible !important;
	z-index:1000 !important;
}

#header ul.menu li a:link,
#header ul.menu li a:visited
{
	display: block !important;
}

div#maximenuCK ul.menu li ul li ul li ul
{
	border:none !important;
	padding-top:0px !important;
	padding-bottom:0px !important;
	background:transparent !important;
}

div#maximenuCK ul.menu li ul li ul
{
	border:0 !important;
	background:transparent !important;
	padding-bottom:0;
}

#header ul.menu li.maximenuCK.active a:link,
#header ul.menu li.maximenuCK.active a:visited
{
border-right:none !important;
background:transparent !important;
}

#header ul.menu
{
margin-top:0px !important;
}