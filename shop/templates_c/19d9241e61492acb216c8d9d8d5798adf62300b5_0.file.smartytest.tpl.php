<?php
/* Smarty version 3.1.30, created on 2016-11-01 01:48:40
  from "c:\xampp\htdocs\shop\templates\smartytest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5817e668772226_05818215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19d9241e61492acb216c8d9d8d5798adf62300b5' => 
    array (
      0 => 'c:\\xampp\\htdocs\\shop\\templates\\smartytest.tpl',
      1 => 1477961317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5817e668772226_05818215 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_radios')) require_once 'C:\\xampp\\htdocs\\shop\\libs\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\shop\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once 'C:\\xampp\\htdocs\\shop\\libs\\plugins\\function.html_checkboxes.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Smarty</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="templates/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      
        
        <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
" method="POST">
            <p>氏名：<input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"</p>
            
            <p>お問い合わせ内容：<br />
                <textarea name="question" style="width:300px;height:100px"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['question'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </p>
            
            <p>都道府県：<br />
                <?php echo smarty_function_html_radios(array('name'=>'todofuken','options'=>$_smarty_tpl->tpl_vars['todofuken_data']->value,'selected'=>$_smarty_tpl->tpl_vars['post']->value['todofuken'],'separator'=>'<br />'),$_smarty_tpl);?>
</p>

            <p>好きな色：<br />
                <?php echo smarty_function_html_options(array('name'=>'colors','options'=>$_smarty_tpl->tpl_vars['colors_data']->value,'selected'=>$_smarty_tpl->tpl_vars['post']->value['colors']),$_smarty_tpl);?>
</p>
            
            <p>好きな花：<br/>
                <?php echo smarty_function_html_checkboxes(array('name'=>'flower','options'=>$_smarty_tpl->tpl_vars['flowers_data']->value,'selected'=>$_smarty_tpl->tpl_vars['post']->value['flower']),$_smarty_tpl);?>
</p>
            
            <input type="submit" value="送信する">
        </form>
        
        
        
    </body>
</html>
<?php }
}
