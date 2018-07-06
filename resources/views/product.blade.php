<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Export To Csv and Excel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  </head>
  <body>
    <div class="container">
    </br>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2">
          <form action="{{url('product/export')}}" enctype="multipart/form-data">
            <button class="btn btn-success" type="submit">Export</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>