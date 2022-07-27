<!DOCTYPE html>
<html lang="en">
  <style>
    .disabledstackedbtn{
      background-color:green!important;
    }
  </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 ,maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

    <script src="assets/js/common.js"></script>
    <link rel="stylesheet" href="assets/css/blogs.css">
    <link rel="icon" href="assets/imgs/icon-text.png" type="image/gif">
    <title class="main-color">Admin Blogs</title>
  </head>
<body>
  <div class="container py-5">
  <div class="my-5"><span class="display-1">Safelypal Blogs admin</span></div>
    <div class="my-2"><span class="h2">Blogs</span></div>
    <div class="input-group mb-3">
      <input id="title_input" type="text" class="form-control" placeholder="Title" >
    </div>
    <div class="input-group mb-3">
      <input id="routeLink_input" type="text" class="form-control" placeholder="Route Link" >
    </div>
    <div class="input-group mb-3">
      <input id="author_input" type="text" class="form-control" placeholder="Author" >
    </div>
    <div class="input-group">
      <span class="input-group-text text-muted"> Short Description</span>
      <textarea id="sdesc_input" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="mb-2 mt-4"><span class="h2">Content</span></div>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Add content
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" onclick="addcontent('p')">Paragraph</a></li>
      <li><a class="dropdown-item" onclick="addcontent('t')">Title</a></li>
      <li><a class="dropdown-item" onclick="addcontent('t1')">Title1</a></li>
      <li><a class="dropdown-item" onclick="addcontent('t2')">Title2</a></li>
      </ul>
      <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewcontents" onclick="viewcontents_()">View contents</button>
    </div>
    <div id="content_container" class="my-2"></div>
    <div class="mb-2 mt-4"><span class="h2">Seo</span></div>
    <div class="input-group mb-2">
      <span class="input-group-text text-muted">Description</span>
      <textarea id="desc_input" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="input-group">
      <span class="input-group-text text-muted"> Keywords</span>
      <textarea id="keywords_input" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="py-5">
      <button id="add_blog" class="btn btn-primary" onclick="addblog_()"><span>Add blog</span></button>
    </div>
  </div>
  <!-- view contents -->
  <div class="modal fade" id="viewcontents" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div id="viewcontents_container" class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script>
var p = 0
var t = 0
var t1 = 0
var t2 = 0
var contents=''

function addcontent(type){
  if(type=='p'){
    p=p+1;
    $('#content_container').append(
      ' <div class="input-group">'+
        ' <span class="input-group-text">Paragraph_'+p+'</span>'+
        ' <textarea id="p'+p+'" class="form-control" aria-label="With textarea">'+
        '<p></p>'
        +'</textarea>'+
        '<button id="btnp'+p+'" class="btn btn-secondary" onclick="pushcontents_('+"'p'"+','+p+')" id="button-addon2">stack</button>'+
      '</div>'
    )
  }else if(type=='t'){
    t=t+1;
    $('#content_container').append(
      ' <div class="input-group">'+
        '<span class="input-group-text">Title_'+t+'</span>'+
        '<textarea id="t'+t+'" class="form-control" aria-label="With textarea">'+
        '<h2 class="section-heading"></h2'+
        '</textarea>'+
        '<button id="btnt'+t+'" class="btn btn-secondary" onclick="pushcontents_('+"'t'"+','+t+')" id="button-addon2">stack</button>'+
      '</div>'
    )
  }else if(type=='t1'){
    t1=t1+1;
    $('#content_container').append(
      ' <div class="input-group">'+
        '<span class="input-group-text">Title1_'+t1+'</span>'+
        '<textarea id="t1'+t1+'" class="form-control" aria-label="With textarea">'+
        '<h2 class="section-heading1"></h2'+
        '</textarea>'+
        '<button id="btnt1'+t1+'" class="btn btn-secondary" onclick="pushcontents_('+"'t1'"+','+t1+')" id="button-addon2">stack</button>'+
      '</div>'
    )
  }else if(type=='t2'){
    t2=t2+1;
    $('#content_container').append(
      ' <div class="input-group">'+
        '<span class="input-group-text">Title2_'+t2+'</span>'+
        '<textarea id="t2'+t2+'" class="form-control" aria-label="With textarea">'+
        '<h2 class="section-heading2"></h2'+
        '</textarea>'+
        '<button id="btnt2'+t2+'" class="btn btn-secondary" onclick="pushcontents_('+"'t2'"+','+t2+')" id="button-addon2">stack</button>'+
      '</div>'
    )
  }
}
function pushcontents_(type,order){
  var stack = $('#'+type+order).val()
  contents += "\n"+stack
  // console.log(type,order)
  $('#'+type+order).prop('disabled',true)
  $('#btn'+type+order).prop('disabled',true)
  $('#btn'+type+order).addClass('disabledstackedbtn')
  $('#btn'+type+order).html('stacked')

  $('#viewcontents_container').append("\n"+stack)
}
function viewcontents_(){
  console.log(contents)
}
function addblog_(){

var titleVar = $('#title_input').val()
var routeVar = $('#routeLink_input').val()
var authorVar = $('#author_input').val()
var sdescVar = $('#sdesc_input').val()

var descVar = $('#desc_input').val()
var keywordsVar = $('#keywords_input').val()



  var addresult = 
  ajaxShortLink("addBlog",{
    "title":titleVar,
    "routeLink":routeVar,
    "author":authorVar,
    "sdesc":sdescVar,

    "content":contents,

    "desc":descVar,
    "keywords":keywordsVar,
  })

    console.log(addresult)
}

</script>