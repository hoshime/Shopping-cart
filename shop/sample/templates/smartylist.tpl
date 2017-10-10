<!DOCTYPE html>
<html>
    <head>
        <title>Smarty List</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="templates/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <table border="1">
            {foreach from=$anketo item=foo}
                <tr>
                    <td>{$foo.code}</td>
                    <td>{$foo.nickname}</td>
                    <td>{$foo.email}</td>
                    <td>{$foo.goiken}</td>
                </tr>
            {/foreach}
        </table>
    </body>
</html>
