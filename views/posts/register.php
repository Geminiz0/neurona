<?php $title = 'Register'; include("views/layouts/app_top.php"); ?>

<div class="container">
    <form action="/store_user" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username:</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address:</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image Profile:</label>
        <input type="file" name="imageprofile" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include("views/layouts/app_bottom.php"); ?>