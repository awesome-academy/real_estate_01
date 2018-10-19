function del_pro(smg) {
    if (window.confirm(smg)) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function () {
    jQuery('.article-ckeditor').each(function () {
        CKEDITOR.replace(this, {
            language: 'en-gb',
            filebrowserImageUploadUrl: '' + window.location + '/public/assets/upload?type=Images&_token=',
            filebrowserBrowseUrl: '' + window.location + '/public/assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl: '' + window.location + '/public/assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl: '' + window.location + '/public/assets/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
        });
    });
});

function myFunction() {
    document.getElementById('myForm').reset();
}

function open_popup(url) {
    var w = 1180;
    var h = 770;
    var l = Math.floor((screen.width - w) / 2);
    var t = Math.floor((screen.height - h) / 2);
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}

$(document).ready(function() {
    $('div.alert').delay(2000).slideUp();
});

$(document).ready(function() {
    window.lastURL = $('#fieldID').val();
    setInterval(function () {
        if($('#fieldID').val() != window.lastURL) {
            var url = $('#fieldID').val();
            if(url == '')url = "assets/upload/config/no-image.png";
            $('.imagePreview').attr('src', url);
            window.lastURL = url;
        };
    });

});

$(document).ready(function() {
    $(function () {
        $(".input_slug").keyup(function () {
            var text = $(this).val();
            text = text.toLowerCase();
            var text_create;
            text_create = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a").replace(/\ /g, '-').replace(/đ/g, "d").replace(/đ/g, "d").replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y").replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u").replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ.+/g,"o").replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ.+/g, "e").replace(/ì|í|ị|ỉ|ĩ/g,"i");
            var content = text_create.replace(' ', '-');
            $('.output_slug').val(content);
        }).keyup();
    });
});
$(document).ready(function() {
    $(function () {
        $(".input_slug_vi").keyup(function () {
            var text = $(this).val();
            text = text.toLowerCase();
            var text_create;
            text_create = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a").replace(/\ /g, '-').replace(/đ/g, "d").replace(/đ/g, "d").replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y").replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u").replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ.+/g,"o").replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ.+/g, "e").replace(/ì|í|ị|ỉ|ĩ/g,"i");
            var content = text_create.replace(' ', '-');
            $('.output_slug_vi').val(content.toLowerCase());
        }).keyup();
    });
});
