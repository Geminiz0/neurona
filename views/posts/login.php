<?php $title = 'Neuronabit'; include("views/layouts/app_top.php"); ?>

<br>
<div class="container">
    <form action="/authenticate" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username:</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">        
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include("views/layouts/app_bottom.php"); ?>
