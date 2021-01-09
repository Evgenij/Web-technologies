$(document).ready(function () {
    $('.area-files').on('dragover', function () { 
        $(this).addClass('area-drag-file');
        return false;
    });

    $('.area-files').on('dragleave', function () { 
        $(this).removeClass('area-drag-file');
        return false;
    });

    $('.area-files').on('drop', function (e) { 
        e.preventDefault();
        $(this).removeClass('area-drag-file');

        var formData = new FormData();
        var files_list = e.originalEvent.dataTransfer.files;
        //console.log(files_list[0]);
        
        for (let i = 0; i < files_list.length; i++) {
            formData.append('file[]', files_list[i]);
        }
        //console.log(formData);

        $.ajax({
            url: "/uploadFiles.php",
            method: "POST",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) { 
                $('.uploaded-files').append(data);
            }
        })
    });
});

$(document).on('click', '.btn-close', function () {
    //alert(this.parentNode);
    this.parentNode.remove();
});