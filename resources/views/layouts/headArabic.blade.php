@if(App::getLocale()== 'ar')
    <style>
    body{
        direction: rtl;
    }
    .contact-info .float-left ,.pull-left{
        float: right !important;
    }
    .contact-info .float-right, #nav-menu-container{
        float: left !important;
    }
    h2 , h2::before ,h3 , h3::before{
        text-align: right;
        width: 100%;
    }
    h2::before, h3::before{
        right: 0 !important;
    }
    .back-to-top{
        left: 15px !important;
        right: unset !important;
    }
    p {
        text-align: justify;
    }
    #about .content ul li {
        text-align: initial;
    }
    #contact .contact-info h3, #contact .contact-info a {
        text-align: center;
    }
    #contact .contact-info p{
        text-align: unset;
    }
    .owl-stage-outer{
        direction: ltr !important;
    }
    #intro .intro-content h2 {
        text-align:unset;
    }
</style>
@endif
