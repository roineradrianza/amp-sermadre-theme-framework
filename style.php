/**** 
* AMP Framework Reset
*****/
    :root {
        --main-color: #5FC2EC;
        --text-color: #6A6B7A;
        --heading-color: #2D3E48;
    }
    body{ font-family: 'Inter', sans-serif; font-size: 15px; line-height:1.4; background-color: #fcfcfc; }
    ol, ul{ list-style-position: inside }
    h1, h2, h3, h4, h5, h6 {color: var(--heading-color)}
    p {color: var(--text-color)}
    p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
    a, a:active, a:visited{ color: var(--main-color); text-decoration: none }
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

    hr {
        height: 1px;
        background-color: #EFEFEF;
        border-width: 0px;
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
        width: 80%;
        padding: 0px 10% 0px 0px;
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
    header.header {
        position: fixed;
        width: 100%;
        max-width: 100vw;
        top: 0;
        z-index: 20;
    }
    .header h1{
        font-size: 1.5em;
    }
    .header .right{
        margin: 10px 50px 0px 5px;
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

.d-block {
    display: block;
}

/****
* Grid helpers
*****/

.col-6 {
    flex: 0 0 50%;
    max-width: 50%;
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

.mt-4 {
    margin-top: 48px;
}

.mt-5 {
    margin-top: 60px;
}

.mt-6 {
    margin-top: 72px;
}

.mb-1 {
    margin-bottom: 12px;
}

.mb-2 {
    margin-bottom: 24px;
}

.mb-3 {
    margin-bottom: 36px;
}

.mt-3 {
    margin-top: 36px;
}

.mr-1 {
    margin-right: 12px;
}

.ml-1 {
    margin-left: 12px;
}

.px-1 {
    padding: 0px 12px;
}

.px-2 {
    padding: 0px 24px;
}

.px-3 {
    padding: 0px 36px;
}

.pb-1 {
    padding-bottom: 12px;
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

.primary-text {
    color: var(--main-color);
}

.secondary-text {
    color: var(--text-color);
}

.heading-text {
    color: var(--heading-color);
}

.white-text {
    color: #fff;
}

/****
* Single Post
*****/

.amp-post-title {
    font-size: 1.4em;
}

.amp-featured-image amp-img {
    border-radius: 15px;
}

a.single-post-category {
    color: var(--main-color);
    border-radius: 20px;
    border: 1px solid var(--main-color);
    padding: 7px 20px;
    text-transform: capitalize;
    margin-right: 10px;
    font-weight: 600;
    font-size: 14px;
}

.container.newsletter, .newsletter {
    padding: 15px 20px 20px 15px;
    border-radius: 15px 15px 15px 15px;
    box-shadow: 2px 2px 30px -15px rgb(0 0 0 / 16%);
}

.newsletter .newsletter-title {
    font-weight: 700;
    font-size: 1.3em;
}

.newsletter button[type="submit"] {
    padding: 14px 27px 14px 27px;
    font-weight: 500;
    font-size: 18px;
}

.newsletter button[type="submit"] span {
    font-weight: 500;
}

.social-media-share .social-button {
    padding: 15px 0px;
}

.social-container.sticky {
    position: fixed;
    width: 100%;
    margin-top: 0px;
    margin-bottom: 0px;
    bottom: 0px;
    z-index: 200;
}

.social-media-share .social-button.facebook {
    background-color: #3b5998
}

.social-media-share .social-button.whatsapp {
    background-color: #25d366
}

.post-card {
    box-shadow: 2px 2px 30px -15px rgb(95 194 236 / 35%);
    position: relative;
}
.post-card .thumbnail {
    position: relative;
    display: block;
    width: 100%;
}

.post-card a.single-post-category {
    margin-top: -15px;
    color: var(--text-color);
    background-color: #EFEFEF;
    border-radius: 20px;
    border: none;
    padding: 4px 7px;
    text-transform: capitalize;
}

.post-card .category_container{
    margin-top: -40px;
    position: relative;
}

#toc_container {
    padding: 6px 12px;
    border: 1px solid var(--text-color);
    border-radius: 15px;
    color: var(--heading-color);
}

#toc_container .toc_title {
    text-align: center;
    font-weight: bold;
}

#toc_container ul {
    list-style-type: none;
} 

#toc_container a {
    color: var(--heading-color);
}

#toc_container a:hover {
    color: var(--main-color);
}

.related-posts .post-card {
    background-color: white;
    border-radius: 15px;
    box-shadw: 2px 2px 30px -15px rgb(95 194 236 / 35%);
}
.related-posts .post-card .thumbnail img {
    border-radius: 15px 15px 0px 0px;
    object-fit: cover;
}

/****
* RTL Styles
*****/
    <?php  if( is_rtl() ) {?> <?php } ?>
