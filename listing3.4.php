Route::get('login', function()
{
  return '<form action="login" method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password">
    <input type="submit" value="Submit">
    </form>';
});
