<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編_webapp課題</title>
 </head>
 
 <body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="POST">
    <table>
      <tr>
        <td><label for='employee_name'>社員名</td>
        <td><input type='text' id='employee_name' name='employee_name'></td>
      </tr>
      <tr>
        <td><label for='employee_age'>年齢</td>
        <td><input type='text' id='employee_age' name='employee_age'></td>
      </tr>
      <tr>
        <td><label for='department'>所属部署</td>
        <td>
          <select id='department' name='department'>
            <option value='開発部'>開発部</option>
            <option value='営業部'>営業部</option>
            <option value='人事部'>人事部</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><button type='submit'>送信</button></td>
      </tr>
    </table>
 </body>
 
 </html>
