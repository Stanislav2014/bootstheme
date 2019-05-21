<?php
get_header();
?>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-3 col-xl-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="HoneyHunters"
                     class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-3 col-xl-3 offset-4 offset-xl-4 centerlogo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/contact.png"
                     class="img-fluid">
            </div>
        </div>
        <form method="post">
            <div class="form-row">
                <div class="col-5 col-xl-5">
                    <div class="form-group forminput">
                        <label for="exampleInputName" class="formlabel">Имя</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Вася" name="comment_name">
                    </div>
                    <div class="form-group forminput">
                        <label for="exampleInputEmail">E-Mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail" name="comment_email">
                    </div>
                </div>

                <div class="col-6 col-xl-6 ml-auto">
                    <div class="form-group forminput">
                        <label for="exampleInputComment">Комментарии</label>
                        <textarea class="form-control" rows=4 id="exampleInputComment" name="comment_content"></textarea>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-3 col-xl-3 offset-9 offset-xl-9">
                    <button type="submit" id="comment_send" class="btn btn-block submit">Записать</button>
                </div>

            </div>


        </form>

</header>

<section id="posts" class="posts">
    <div class="container">
        <div class="col-12 col-lg-12">
            <h1 align="center">
                Выводим комментарии
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h2>Вася</h2>
                <h3></h3>
                <p> </p>
            </div>
            <div class="col-lg-4">
                <h2>Вася</h2>
                <h3></h3>
                <p> </p>
            </div>

    </div>
</section>

<section id="footer" class="footer">
    <div class="contanier">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-2">

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
