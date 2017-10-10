<!DOCTYPE html>
<html>
    <head>
        <title>Smarty</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="templates/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      
        
        <form action="{$SCRIPT_NAME}" method="POST">
            <p>氏名：<input type="text" name="name" value="{$post.name|escape}"</p>
            
            <p>お問い合わせ内容：<br />
                <textarea name="question" style="width:300px;height:100px">{$post.question|escape}</textarea>
            </p>
            
            <p>都道府県：<br />
                {html_radios name='todofuken' options=$todofuken_data selected=$post.todofuken separator='<br />'}</p>

            <p>好きな色：<br />
                {html_options name='colors' options=$colors_data selected=$post.colors}</p>
            
            <p>好きな花：<br/>
                {html_checkboxes name='flower' options=$flowers_data selected=$post.flower}</p>
            
            <input type="submit" value="送信する">
        </form>
        
        
        
    </body>
</html>
