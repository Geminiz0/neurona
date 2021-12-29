<?php $title = 'Create Category'; include("views/layouts/app_top.php"); ?>
<br>
<form action="/store_category" method="post">
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">    
            </div>        
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description:</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Cover:</label>
                <input type="file" name="cover" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>      
</form>

<?php include("views/layouts/app_bottom.php"); ?>