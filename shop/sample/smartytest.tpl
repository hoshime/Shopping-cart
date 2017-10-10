<!DOCTYPE html>
<html>
    <head>
        <title>Smarty</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="templates/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        Hello,{$name|escape}  !
        
        <table border="1">
            {foreach from=$fruit item=foo}
                <tr>
                    <td>{$foo}</td>
                </tr>
            {/foreach}
        </table>
         
        <table border="1">
            {foreach from=$member item=foo}
                <tr>
                    <td>{$foo.name}</td>
                    <td>{$foo.mail}</td>
                    <td>{$foo.tel}</te>
                </tr>
            {/foreach}
        </table>
        
        {if $error == 0}
            <p style="color:blue">エラーはありません</p>
        {else}
            <p style="color:red">エラーが発生しました</p>
        {/if}
        
        
        
    </body>
</html>
