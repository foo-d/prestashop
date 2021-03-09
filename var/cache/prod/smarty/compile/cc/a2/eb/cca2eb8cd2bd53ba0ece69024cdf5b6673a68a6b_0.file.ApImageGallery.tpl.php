<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-09 02:15:19
  from 'C:\wamp64\www\prestashop\modules\appagebuilder\views\templates\admin\shortcodes\ApImageGallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6046cc2736c459_92100412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca2eb8cd2bd53ba0ece69024cdf5b6673a68a6b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\appagebuilder\\views\\templates\\admin\\shortcodes\\ApImageGallery.tpl',
      1 => 1615251164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6046cc2736c459_92100412 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ap-info" style="display: none;"></div>

<?php echo '<script'; ?>
>
$(document).off("click", ".btn-create-folder");
$(document).on("click", ".btn-create-folder", function(){

    var data = "&ajax=1&action=callmethod&type_shortcode=ApImageGallery&method_name=CreateDir&path=" + $("#path").val();
    var url = $globalthis.ajaxShortCodeUrl;
    var html = '';

    $(".ap-info").html("");
    $(".ap-info").removeClass("alert-success alert-danger");
    $(".ap-info").hide();

    $("#ap_loading").show();
    $.ajax({
        type: "POST",
        headers: {"cache-control": "no-cache"},
        url: url,
        async: true,
        cache: false,
        data: data,
        dataType: "json",
        success: function (jsonData) {
            $("#ap_loading").hide();
            if (jsonData.success) {
                if(typeof jsonData.img_dir == "undefined")
                    jsonData.img_dir = "";
                html = jsonData.information + "<p style=\"font-weight: bold;\">" + jsonData.img_dir + "</p>";

                $(".ap-info").addClass("alert alert-success").html(html).slideDown();
            }
            if (jsonData.hasError) {
                if(typeof jsonData.img_dir == "undefined")
                    jsonData.img_dir = "";
                html = jsonData.error + "<p style=\"font-weight: bold;\">" + jsonData.img_dir + "</p>";

                $(".ap-info").addClass("alert alert-danger").html(html).slideDown();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            $("#ap_loading").hide();
        }
    });

});
<?php echo '</script'; ?>
>
<?php }
}
