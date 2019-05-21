
<?php
/* Всегда используйте wp_footer() перед закрывающим тегом </body>
 * иначе множество плагинов не будут работать корректно, потому что
 * они используют этот хук для вставки различных JS и других кодов.
 */
wp_footer();
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    jQuery(function($){
        $('#comment_send').click(function(){
            var comment_name = $("#exampleInputName").val();
            var comment_email = $("#exampleInputEmail").val();
            var comment_content = $("#exampleInputComment").val();
            $.ajax({
                url: '<?php echo admin_url("admin-ajax.php") ?>',
                type: 'POST',
                data: {
                    action: 'comment_send',
                    comment_name: comment_name,
                    comment_email: comment_email,
                    comment_content: comment_content

                },
                beforeSend: function( xhr ) {
                $('#comment_send').text('Загрузка, 5 сек...');
            },
            //success: function( data ) {
             //   $('#comment_send').text('Отправить');
            //}
        });
            // если элемент – ссылка, то не забываем:
            // return false;
        });
    });
</script>
</body>
</html>