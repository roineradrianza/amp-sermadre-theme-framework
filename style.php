/**** 
* AMP Framework Reset
*****/
    :root {
        --main-color: #5FC2EC;
        --text-color: #6A6B7A;
    }
    body{ font-family: 'Inter', sans-serif; font-size: 16px; line-height:1.4; background-color: #fcfcfc; }
    ol, ul{ list-style-position: inside }
    p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
    a, a:active, a:visited{ color:#ed1c24; text-decoration: none }
    a:hover, a:active, a:focus{}
    pre{ white-space: pre-wrap;}
    .left{float:left}
    .right{float:right}
    .hidden{ display:none }
    .clearfix{ clear:both }
    blockquote{ background: #f1f1f1; margin: 10px 0 20px 0; padding: 15px;}
    blockquote p:last-child {margin-bottom: 0;}
    .amp-wp-unknown-size img {object-fit: contain;}
    .amp-wp-enforced-sizes{ max-width: 100% }
    /* Image Alignment */
    .alignright {
        float: right;
    }
    .alignleft {
        float: left;
    }
    .aligncenter {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    amp-iframe { max-width: 100%; margin-bottom : 20px; }

    /* Captions */
    .wp-caption {
        padding: 0;
    }
    .wp-caption-text {
        font-size: 12px;
        line-height: 1.5em;
        margin: 0;
        padding: .66em 10px .75em;
        text-align: center;
    }

    /* AMP Media */
    amp-iframe,
    amp-youtube,
    amp-instagram,
    amp-vine {
        margin: 0 -16px 1.5em;
    }
    amp-carousel > amp-img > img {
        object-fit: contain;
    }

/****
* Container
*****/
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 0px 10px;
}

.row {
    display: flex;
    flex-direction: row;
}

/****
* flex helpers
*****/

.justify-center {
    justify-content: center
}

.justify-space-between {
    justify-content: space-between
}

.justify-space-evenly {
    justify-content: space-evenly
}

.align-center {
    align-items: center
}

/****
* Form inputs
*****/

input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-results-button,
input[type="search"]::-webkit-search-results-decoration {
  display: none;
}

/****
* AMP Sidebar
*****/
    amp-sidebar {
        width: 250px;
    }

    /* AMP Sidebar Toggle button */
    .amp-sidebar-button{
        position:relative;
    }
    .amp-sidebar-toggle  {
    }
    .amp-sidebar-toggle span  {
        display: block;
        height: 2px;
        margin-bottom: 5px;
        width: 22px;
        background: #000;
    }
    .amp-sidebar-toggle span:nth-child(2){
        top: 7px;
    }
    .amp-sidebar-toggle span:nth-child(3){
        top:14px;
    }

    /* AMP Sidebar close button */
    .amp-sidebar-close{
        background: #333;
        display: inline-block;
        padding: 5px 10px;
        font-size: 12px;
        color: #fff;
    }

/****
* AMP Navigation Menu with Dropdown Support
*****/
    .toggle-navigation ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: inline-block;
        width: 100%
    }
    .toggle-navigation ul li{
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.11);
        padding: 11px 0px;
        width: 25%;
        float: left;
        text-align: center;
        margin-top: 6px
    }
    .toggle-navigation ul ul{
        display: none
    }
    .toggle-navigation ul li a{
        color: #eee;
        padding: 15px;
    }
    .toggle-navigation{
        display: none;
        background: #444;
    }


/**** 
* Header
*****/
    .header {
        background-color: white;
        box-shadow: 12px -2px 18px 0px rgb(0 0 0 / 20%);
        
    }
    .header .row {
        display: flex;
        width: 100%;
        align-content: center;
        align-items: center;
        justify-content: center;
    }
    .header.container{
        padding: 20px;
    }
    .header .form {
        width: 300px;
        display: block;
    }
    .header .column {
        display: flex;
        poosition: relative;
        padding: 0% 10% 0% 10%;
    }
    .header .form_container {
        display: flex;
        background-color: #FFFFFF;
        border: 0;
        border-bottom: 1px solid var(--main-color);
        min-height: 35px;
    }
    .form_container .search-form__input {
        margin: 0;
        border: 0;
        padding: 0;
        display: inline-block;
        vertical-align: middle;
        white-space: normal;
        background: none;
        line-height: 1;
        min-width: 0;
        font-size: 15px;
        -webkit-appearance: none;
        padding-left: calc(35px / 3);
        padding-right: calc(35px / 3);
        flex-basis: 100%;
    }
    .header .form_container .search-form__input:focus-visible {
        outline-width: 0;
    }
    .header .form_container .search-form__input, .form_container .search-form__input::placeholder {
        color: var(--main-color);
    }
    .form_container .search-form__submit{
        border: none;
        min-width: calc( 1 * 35px );
        background-color: #FFF;
    }
.amp-logo {
    width:190px;
    height:36px;
}
    .header h1{
        font-size: 1.5em;
    }
    .header .right{
        margin: 10px 5px 0px 5px;
    }
    .amp-phone, .amp-social, .amp-sidebar-button{
        display:inline-flex 
    }
    .amp-phone{
        top: 4px;
    }
    .header .amp-social{
        margin: 0px 19px;
    }
    .amp-sidebar-button{
        top: 6px;
    }

.header .searcher {
    width: 18px;
}

/**** 
* Loop
*****/
    .loop-post{
        display: inline-block;
        width: 100%;
        margin: 6px 0px;
    }
    .loop-post .loop-img{
        float: left;
        margin-right: 15px;
    }
    .loop-post h2{
        font-size: 1.2em;
        margin: 0px 0px 8px 0px;
    }
    .loop-post p{
        font-size: 14px;
        color: #333;
        margin-bottom:6px;
    }
    .loop-post ul{
        list-style-type: none;
        display: inline-flex;
        margin: 0px;
        font-size: 14px;
        color: #666;
    }
    .loop-post ul li{
        margin-right:2px;
    }
    .loop-date{
        font-size:12px;
    }


/****
* Single
*****/
    /** Related Posts **/
    .amp-related-posts ul{
        list-style-type:none;
    }
    .amp-related-posts ul li{
        display: inline-block;
        line-height: 1.3;
        margin-bottom: 5px;
    }
    .amp-related-posts amp-img{
        float: left;
        width: 100px;
        margin: 0px 10px 0px 0px;
    }


/**** 
* Comments
*****/
	.comments_list ul{
	    margin:0;
	    padding:0
	}
	.comments_list ul.children{
	    padding-bottom:10px;
		margin-left: 4%;
		width: 96%;
	}
	.comments_list ul li p{
        margin: 0;
        font-size: 14px;
        clear: both;
        padding-top: 5px;
	}
    .comments_list ul li .says{
        margin-right: 4px;
    }
	.comments_list ul li .comment-body{
	    padding: 10px 0px 15px 0px;
	}
	.comments_list li li{
	    margin: 20px 20px 10px 20px;
	    background: #f7f7f7;
	    box-shadow: none;
	    border: 1px solid #eee;
	}
	.comments_list li li li{
	    margin:20px 20px 10px 20px
	}
	.comment-author{ float:left }


/**** 
* Footer
*****/
    .footer{
        padding: 30px 0px 0px 0px;
        font-size: 15px;
        text-align: center;
    }

    .footer .links_section {
        padding: 0px 15px;
    }

    .footer .amp-logo {
        display: flex;
        justify-content: center;
        margin: auto;
    }
    
    .footer {
        color: var(--text-color);
    }

    .footer h2 {
        color: black;
        font-size: 18px;
    }

    .footer ol li {
        font-size: 16px;
        padding-bottom: calc(5px/2);
    }
    
    .footer ol {
        list-style-type: none;
    }
    
    .footer .copy_footer {
        background-color: #2D3E48;
        padding: 20px 15px 7px 15px;
        color: white;
    }

    .footer .social-icon {
        border: 1px solid #8A8A8A;
        border-radius: 30px 30px 30px 30px;
        padding: .6em .6em;
        margin: 0px 15px;
    }
    
    .footer .social-icon img {
        width: 1.2em;
        height: 1.2em;
    }

    .input_field {
        background-color: #ffffff;
        line-height: 1.4;
        font-size: 15px;
        min-height: 25px;
        border: 1px solid #130D0D12;
        padding: 5px 14px;
        border-radius: 20px 20px 20px 20px;
    }

    .newsletter-form_submit {
        background-color: var(--main-color);
        border-radius: 50px 50px 50px 50px;
        padding: 12px 15px 12px 12px;
        border: none;
    }

    .footer .input_field:focus-visible {
        outline-color: darkgrey;
    }

/****
* Display helpers
*****/

.d-none {
    display: none;
}

.d-flex {
    display: flex;
}

/****
* Spacing helpers
*****/

.mt-1 {
    margin-top: 12px;
}

.mt-2 {
    margin-top: 24px;
}

.mt-3 {
    margin-top: 36px;
}

/****
* Text helpers
*****/

.text-center {
    text-align: center;
}

.font-weight-light {
    font-weight: 200;
}

/****
* RTL Styles
*****/
    <?php  if( is_rtl() ) {?> <?php } ?>
