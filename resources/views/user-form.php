
<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <h1><?=$title?></h1>
        <h4><?=$title2?></h4>
        <?= session('message')?>
        <form method="POST" action="<?= url('get-user')?>">
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <input type="hidden" name="_token" value="<?= csrf_token()?>">
            <button type="submit" >Submit</button>
        </form>
    </body>
</html>

