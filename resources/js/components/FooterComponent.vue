<template>
    <div class="footer">
        <div>
            <a href="javascript:" id="return-to-top">
                <img src="https://i.ibb.co/ZmmKX8G/up-arrow.png" alt="up-arrow" border="0">
                <br>
                Go back to top
            </a>
        </div>
        <a href="/">
            <img class="footer-img" src="https://i.ibb.co/zXTvSQw/logo.png" alt="logo" border="0"></a><br /><a target='_blank' href='https://statewideinventory.org/mercedes-0-60-times'>
            </a>
            <br/>
            <span class="footerspan"> 
                Interlearn &copy; 2020, All Rights Reserved
            </span>
            <div class="socials">
                <a href="https://github.com/niquole/interlearn" target="_blank" id="github">
                    <img src="https://cdn1.iconfinder.com/data/icons/social-media-logos-7/64/github-512.png"  alt="github">
                </a>
                
                <a href="https://www.figma.com/file/n1Ax4lUW9x5EJfW0gOgcOX/InternLearn-Desktop-and-Mobile" target="_blank" id="figma">
                    <img src="https://seeklogo.com/images/F/figma-logo-E4E21D3AEA-seeklogo.com.png" alt="figma">
                </a>
            </div>
        </div>
    </div>
</template> 


<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        height: 60px;
        width: 100%;
        color: rgba(255, 255, 255, 0.335);
        text-align: center;
    }
    
    .footer-img {
        position: absolute;
        left: 10px;
        height: 50px;
        align-items: left;
        
    }
    .footerspan {
        left: 43%;
        position: absolute;
        bottom: 20px;

    }
    
    .socials {
        position: absolute;
        right: 10px;
        bottom: 20px;
    }
    
    #github img {
        height: 20px;
    }
    
    #github {
        margin-right: 20px;
    }

    #figma {
        margin-right: 20px;

    }
    #figma img {
        height: 18px;
    }
    
    #return-to-top {
        position: fixed;
        bottom: 50px;
        right: 32px;
        padding-top: 15px;
        background: rgba(0, 0, 0, 0.7);
        width: 100px;
        height: 130px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 25px;
        -moz-border-radius: 25px;
        border-radius: 25px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    
</style>

<script>
    export default {
        data() {
            return {
            }
        },
        mounted() {
            // ===== Scroll to Top ==== 
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });
        },
        methods: {}
    }
    
</script>0