<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Марычев Николай Web-разработчик</title>
    <link rel="stylesheet" href="/style/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/style/bootstrap.css">
    <link rel="stylesheet" href="/style/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-nav">
                        <ul>
                            <li><a href="#">Портфолио</a></li>
                            <li><a href="#">Обо мне</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-social">
                        <a href="https://vk.com/" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
				        <a href="https://t.me/NikolayMarychev"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    </div>
                </div>       
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <h1>Web-разработчик</h1>
                        <div class="main-button">
                            <a href="#portfolio">Смотреть портфолио</a>
                            <a href="#contact">Заказать верстку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h2>Портфолио</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="/img/portfolio/Sportshold.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="/img/portfolio/Sportshold.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="/img/portfolio/Sportshold.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item">
                        <img src="/img/portfolio/Sportshold.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-item">
                        <h2>
                            Обо мне
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-title">
                        Я начинающий веб-разработчик. При верстке сайтов использую HTML5, CSS3 и JavaScript.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2>Заказать верстку</h2>
             <div class="social">
				<a href="https://vk.com/" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
				<a href="https://t.me/NikolayMarychev"><i class="fa fa-telegram" aria-hidden="true"></i></a>
			</div> 
            <form action="mailer/smart.php" method="post" id="messageForm" enctype="multipart/form-data">
                <div class="form-box">
                    <div>
                        <input type="text" name="name" placeholder="Имя*" required="">
						<input type="email" name="email" placeholder="Е-mail*" required="">
						<label for="" ></label>
						<input style="border:none;" type="file" name="upload" placeholder="marycheff@mail.ru">
						<p>Прикрепите jpg/png файл для оценки стоимости и сроков</p>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Комментарии"></textarea>
                        <button type="submit">Отправить</button>
                    </div>
                    <div class="g-recaptcha" class="g-recaptcha" data-sitekey="6LemPL4UAAAAAKlnyLTf-cjaePZgMzGcoOiqgOCO" data-callback="onSubmitReCaptcha" data-size="invisible"></div> -->
                    <!-- <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px;"><div class="grecaptcha-logo"><iframe src="./" width="256" height="60" role="presentation" name="a-xzg3wjuqg5vl" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div> -->
                    -->
                </div>
            </form>
           
        </div>
    </section>
        <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55837432, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/55837432" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>