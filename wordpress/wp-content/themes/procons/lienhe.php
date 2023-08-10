<?php

/**
 * template name:lienhe
 */

get_header();
?>
<style>
    .form-lienhe {
        text-align: center;
        margin: 50px 0;
    }

    .form-lienhe h1 {
        margin: 30px 0;
        font-size: 30px;
        font-weight: 600;
        color: #282a56;
        font-family: 'Roboto', sans-serif;
    }

    .form-lienhe p {
        margin: 30px 0 50px 0;
        font-size: 15px;
        font-weight: 400;
        color: #7a7a7a;
        font-family: 'Roboto', sans-serif;
    }

    .form-control,
    .form-control-text {
        width: 80%;
        margin: 15px auto;
        height: 50px;
        padding: 10px !important;
        border: 1px solid #000 !important;
    }

    .form-control-text {
        height: 100px;
        margin: 0;
    }

    .button-submit-lienhe{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .button-submit-lienhe button{
        width: 73px;
        border-radius: 5px;
        background-color: #282A56;
        color: #fff;
        font-weight: 500;
    }
</style>

<div id="khachsan">
    <div class="container">
        <div class="row">
            <div class="page-header col-md-12">
                <h1 class="page-title"> Liên Hệ</h1>
            </div>
        
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" class="form-lienhe">
                <h1> <p>Vui lòng điền đầy đủ thông tin, chúng tôi sẽ sớm liên hệ với bạn !</p></h1>
                <input type="text" name="" class="form-control" placeholder="Họ Và Tên">
                <input type="text" name="" class="form-control" placeholder="Số Điện Thoại">
                <input type="text" name="" class="form-control" placeholder="Email">
                <textarea name="" class="form-control-text" cols="30" rows="10" placeholder="Nội Dung"></textarea>
                <div class="button-submit-lienhe">
                    <button type="submit" value="Gửi">Gửi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924.6578209251123!2d106.75234160503324!3d10.844694090730346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527bbdfd25317%3A0x82be003bb05a0216!2zNDAgxJAuIFPhu5EgMTEsIFRyxrDhu51uZyBUaOG7jSwgVGjhu6cgxJDhu6ljLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1680492175514!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



<?php

get_footer();
