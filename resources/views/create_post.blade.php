


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Get Post</title>
</head>


<body>


<div class='container'>
<ul class="nav nav-tabs mt-5">
  <li class="nav-item">
    <a class="nav-link text-dark" aria-current="page" href="{{route('posts.show')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="{{route('posts.details')}}">Show All details</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('posts.show')}}">creating post</a>
  </li>
</ul>
</div>
<div class='container mt-5 shadow'>

    <form action="{{ route('posts.store')}}" method="POST">   
    @csrf  
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Enter description" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="creator_name" class="form-label">Creator Name</label>
            <input type="text" class="form-control" id="creator_name" name="creator_name" placeholder="Enter creator's name" required>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>