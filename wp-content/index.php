<?php
get_header();
?>
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="HoneyHunters" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">

            </div>
        </div>
        <div class="row">
            <form>
                <div class="form-froup">
                    <label for="exampleInputName">Имя</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Вася">
                </div>
                <div class="form-froup">
                    <label for="exampleInputEmail">E-Mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail">
                </div>
                <div class="form-froup">
                    <label for="exampleInputComment">Комментарии</label>
                    <input type="text" class="form-control" id="exampleInputComment">
                </div>
                <button type="submit" class="btn btn-primary">Записать</button>
            </form>

        </div>
    </div>
</header>

<section id="comment" class="comment">
    <div class="container"></div>
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



</body>

</html>