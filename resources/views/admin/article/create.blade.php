<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/core.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/thesass.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    
    <div class="section mt-5">
        <div class="container">

          <div class="row gap-y">
            <div class="col-12 col-md-6">

              <form action="{{url('admin/article/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="new-article">Create New Article</div>
                <div class="form-group">
                  <input class="form-control form-control-lg" type="text" name="title" placeholder="Article Title">
                </div>

                <div class="form-group">
                  <input class="form-control form-control-lg" type="text" name="short_description" placeholder="Type a Short Description">
                </div>

                <div class="form-group">
                  <textarea class="form-control form-control-lg" name="content" rows="4" placeholder="Article Content"></textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="cover" id="cover">
                    <label for="cover">Insert Article Photo</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Save Article</button>
              </form>

            </div>

</body>
</html>