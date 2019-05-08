<header>
    <link href="css/style_08112018.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <title>Anoft</title>
    <!--<meta name="keywords" content="anoft, offline, game, games">-->
    <meta name="description" content="The official website of Anoft, game development company.">

</header>

<body>
    <div class="header">
        <a href="http://anoft.com/"></a>
    </div>
    <div class="slider">
        <a href="http://anoft.com/ru/offline"></a>
    </div>

    <!--<div class="about">
        <div class="limiter">
            
        </div>
    </div>-->

    <div class="contact">
        <div class="limiter">

            <form id="contact" action="/feedback_form.php" method="post">
                <H3>Contact Us</H3>
                <!--<div id="note"></div>-->
                <div id="fields">
                    
                        <label><input type="text" name="name" id="author" placeholder="&nbsp;" required><span>Name</span></label>
                        <label><input type="email" name="email" id="email" placeholder="&nbsp;" required><span>Email</span></label>
                        <label><input type="text" name="sub" id="subject" placeholder="&nbsp;" required><span>Subject</span></label>
                        <label><textarea type="text" name="message" id="comment" placeholder="&nbsp;" required></textarea><span class="spec">Message</span></label>
                    
                	<!--<label for="author"><span>Name</span></label><input type="text" name="name" id="author" placeholder="&nbsp;" required>
                	<label for="email">Email</label><input type="email" name="email" id="email" required>
                	<label for="url">Subject</label><input type="text" name="sub" id="subject" required>
	                <label for="comment">Message</label><textarea name="message" cols="1" rows="10" id="comment" required></textarea>-->
	                <div class="button_and_comment">
	                    <button type="submit" id="submit" class="go">SUBMIT</button>
	                    <div id="note"></div>
	                </div>
                </div>
            </form>

        </div>
    </div>

    <div class="join">
        <div class="limiter"><!--
        --><a href="https://vk.com/anoft" target="_blank"></a><!--
        --><a href="tg://resolve?domain=anoft" target="_blank"></a><!--
        --><a href="https://www.youtube.com/c/anoft" target="_blank"></a><!--
        --><a href="https://www.facebook.com/Anoft/" target="_blank"></a><!--
        --><a href="https://twitter.com/AnoftCompany" target="_blank"></a><!--
        --><a href="https://www.instagram.com/anoft/" target="_blank"></a><!--
    --></div>
    </div>
    <div class="footer">
        <div class="limiter">
            <div class="copyright">
                <p>
                    ANOFT © 2018
                </p>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/feedback_form.js"></script>

</body>