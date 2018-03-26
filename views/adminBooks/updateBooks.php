<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/src/css/addGenre.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<body>
<h2 class="col-2 offset-5 my-2">Admin panel</h2>
<div class="container">
    <div class="row my-5">
        <div class="col-2 offset-3">
            <a href="/admin">
                <button type="button" class="btn btn-success">Admin home page</button>
            </a>
        </div>
        <div class="col-2 offset-1">
            <a href="/user/logout">
                <button type="button" class="btn btn-success">Site home page</button>
            </a>
        </div>
    </div>
    <div class="container">
        <h3 class="ml-3">UPDATE BOOK</h3>
        <div class="row">
            <div class="container-fluid pb-5">
                <div class="col-lg-12 m-auto">
                    <form action="#" method="post">
                        <div class="input-group input-group-lg my-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">TITLE</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="title" id="author" value="<?php echo $book['title']; ?>">
                        </div>
                        <div class="input-group input-group-lg my-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">AUTHOR</span>
                            </div>
                            <select class="form-control" id="category" name="author">
                                <?php if (is_array($allAuthors)): ?>
                                    <?php foreach ($allAuthors as $author): ?>
                                        <option value="<?php echo $author['id']; ?>">
                                            <?php echo $author['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="input-group input-group-lg my-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Genre</span>
                            </div>
                            <select class="form-control" id="category" name="genre">
                                <?php if (is_array($allGenres)): ?>
                                    <?php foreach ($allGenres as $genre): ?>
                                        <option value="<?php echo $genre['id']; ?>">
                                            <?php echo $genre['title']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="input-group input-group-lg my-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">DESCRIPTION</span>
                            </div>
                            <textarea class="form-control" id="short_content" name="description" rows="5"><?php echo $book['description']; ?></textarea>
                        </div>
                        <div class="input-group input-group-lg my-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">PRICE</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="price" id="author" value="<?php echo $book['price']; ?>">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Сохранить">
                    </form>
                </div>
            </div>







            </div>
        </div>

    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>