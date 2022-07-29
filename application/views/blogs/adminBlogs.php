<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1 ,maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link href="assets/Thirdparty/fontawesome6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/blogs.css">
    <link rel="icon" href="assets/imgs/icon-text.png" type="image/gif">
    <title class="main-color">Admin Blogs</title>
  </head>
  <style>
    .disabledstackedbtn{
      background-color:green!important;
    }
  </style>
  <body>
  <div class="container py-5">
    <div class="my-5"><span class="display-1">Safelypal Blogs admin</span></div>
    <div class="my-2"><span class="h2">Blogs <span id="countBlog_id"></span></span></div>
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
      <li><a class="dropdown-item" onclick="addcontent('b')">Bullets</a></li>
      <li><a class="dropdown-item" onclick="addcontent('n')">num</a></li>
      <li><a class="dropdown-item" onclick="addcontent('nt')">num title</a></li>
      <li><a class="dropdown-item" onclick="addcontent('nt1')">num title1</a></li>
      <li><a class="dropdown-item" onclick="addcontent('nt2')">num title2</a></li>
      <li><a class="dropdown-item" onclick="addcontent('c')">Conclusion</a></li>
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
      <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewurls"><span>View Added Blogs</span></button>
    </div>
  </div>

    <!-- view contents -->
    <div class="modal fade" id="viewcontents" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div id="viewcontents_container" class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- view urls -->
    <div class="modal fade" id="viewurls" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div id="viewurls_container" class="modal-body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
// vars
  var p = 0
  var t = 0
  var t1 = 0
  var t2 = 0
  var td = 0
  var c = 0
  var b = 0
  var n = 0
  var nt = 0
  var nt1 = 0
  var nt2 = 0
  var contents=''
  var stackbullets=''
  var stacknumerics=''
  var countBlogs = ajaxShortLink("countBlogs")
  $('#countBlog_id').text(countBlogs)
  getUrls()

function addcontent(type){
  if(type=='p'){
    p=p+1;
    $('#content_container').append(
        '<div id="pdiv'+p+'" class="input-group">'+
        ' <span class="input-group-text">Paragraph_'+p+'</span>'+
        ' <textarea id="p'+p+'" class="form-control" aria-label="With textarea">'+
        // '<p>\n\n</p>'+
        '</textarea>'+
        '<button id="btnp'+p+'" class="btn btn-secondary" onclick="pushcontents_('+"'p'"+','+p+')">stack</button>'+
        '<button id="btnrp'+p+'" class="btn btn-danger" onclick="popcontents_('+"'pdiv'"+','+p+')">remove</button>'+
      '</div>'
    )
  }else if(type=='t'){
    t=t+1;
    $('#content_container').append(
      ' <div id="tdiv'+t+'" class="input-group">'+
        '<span class="input-group-text">Title_'+t+'</span>'+
        '<textarea id="t'+t+'" class="form-control" aria-label="With textarea">'+
        // '<h2 class="section-heading">\n\n</h2>'+
        '</textarea>'+
        '<button id="btnt'+t+'" class="btn btn-secondary" onclick="pushcontents_('+"'t'"+','+t+')">stack</button>'+
        '<button id="btnrt'+t+'" class="btn btn-danger" onclick="popcontents_('+"'tdiv'"+','+t+')">remove</button>'+
      '</div>'
    )
  }else if(type=='t1'){
    t1=t1+1;
    $('#content_container').append(
      ' <div id="t1div'+t1+'" class="input-group">'+
        '<span class="input-group-text">Title1_'+t1+'</span>'+
        '<textarea id="t1'+t1+'" class="form-control" aria-label="With textarea">'+
        // '<h2 class="section-heading1">\n\n</h2>'+
        '</textarea>'+
        '<button id="btnt1'+t1+'" class="btn btn-secondary" onclick="pushcontents_('+"'t1'"+','+t1+')">stack</button>'+
        '<button id="btnrt1'+t1+'" class="btn btn-danger" onclick="popcontents_('+"'t1div'"+','+t1+')">remove</button>'+
      '</div>'
    )
  }else if(type=='t2'){
    t2=t2+1;
    $('#content_container').append(
      ' <div id="t2div'+t2+'" class="input-group">'+
        '<span class="input-group-text">Title2_'+t2+'</span>'+
        '<textarea id="t2'+t2+'" class="form-control" aria-label="With textarea">'+
        // '<h2 class="section-heading2">\n\n</h2>'+
        '</textarea>'+
        '<button id="btnt2'+t2+'" class="btn btn-secondary" onclick="pushcontents_('+"'t2'"+','+t2+')">stack</button>'+
        '<button id="btnrt2'+t2+'" class="btn btn-danger" onclick="popcontents_('+"'t2div'"+','+t2+')">remove</button>'+
      '</div>'
    )
  }else if(type=='c'){
    c=c+1;
    $('#content_container').append(
      ' <div id="cdiv'+c+'" class="input-group">'+
        '<span class="input-group-text">Conclusion'+c+'</span>'+
        '<textarea id="c'+c+'" class="form-control" aria-label="With textarea">'+
        'Conclusion'+
        '</textarea>'+
        '<button id="btnc'+c+'" class="btn btn-secondary" onclick="pushcontents_('+"'c'"+','+c+')">stack</button>'+
        '<button id="btnrc'+c+'" class="btn btn-danger" onclick="popcontents_('+"'cdiv'"+','+c+')">remove</button>'+
      '</div>'
    )
  }else if(type=='b'){
    b=b+1;
    $('#content_container').append(
      '<div id="bdiv'+b+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-circle-chevron-right"></i></span>'+
        '<input id="b'+b+'" type="text" class="form-control" placeholder="bullet'+b+'">'+
        '<button id="btnb'+b+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'b'"+','+b+')">stack bullet</button>'+
        '<button id="btnrb'+b+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'bdiv'"+','+b+')">remove</button>'+
      '</div>'
    )
  }else if(type=='nt'){
    nt=nt+1;
    $('#content_container').append(
      '<div id="ntdiv'+nt+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-circle"></i></span>'+
        '<input id="nt'+nt+'" type="text" class="form-control" placeholder="Num Title'+nt+'">'+
        '<button id="btnnt'+nt+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'nt'"+','+nt+')">stack num title</button>'+
        '<button id="btnrnt'+nt+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'ntdiv'"+','+nt+')">remove</button>'+
      '</div>'
    )
  } else if(type=='nt1'){
    nt1=nt1+1;
    $('#content_container').append(
      '<div id="nt1div'+nt1+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm">'+
        // '<i class="fa-solid fa-circle"></i>'+
        '</span>'+
        '<input id="nt1'+nt1+'" type="text" class="form-control" placeholder="Num title 1'+nt1+'">'+
        '<button id="btnnt1'+nt1+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'nt1'"+','+nt1+')">stack Numtitle1</button>'+
        '<button id="btnrnt1'+nt1+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'nt1div'"+','+nt1+')">remove</button>'+
      '</div>'
    )
  }else if(type=='nt2'){
    nt2=nt2+1;
    $('#content_container').append(
      '<div id="nt2div'+nt2+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm">'+
        // '<i class="fa-solid fa-circle"></i>'+
        '</span>'+
        '<input id="nt2'+nt2+'" type="text" class="form-control" placeholder="Num title 2'+nt2+'">'+
        '<button id="btnnt2'+nt2+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'nt2'"+','+nt2+')">stack Numtitle2</button>'+
        '<button id="btnrnt2'+nt2+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'nt2div'"+','+nt2+')">remove</button>'+
      '</div>'
    )
  }else if(type=='n'){
    n=n+1;
    $('#content_container').append(
      '<div id="ndiv'+n+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm">'+
        // '<i class="fa-solid fa-circle"></i>'+
        '</span>'+
        '<input id="n'+n+'" type="text" class="form-control" placeholder="Num'+n+'">'+
        '<button id="btnn'+n+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'n'"+','+n+')">stack Num</button>'+
        '<button id="btnrn'+n+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'ndiv'"+','+n+')">remove</button>'+
      '</div>'
    )
  }
  // else if(type=='?'){
  //   ?=?+1;
  //   $('#content_container').append(
  //     '<div id="?div'+?+'" class="input-group mb-3">'+
  //       '<span class="input-group-text" id="inputGroup-sizing-sm">'+
  //       // '<i class="fa-solid fa-circle"></i>'+
  //       '</span>'+
  //       '<input id="?'+?+'" type="text" class="form-control" placeholder="??'+?+'">'+
  //       '<button id="btn?'+?+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'?'"+','+?+')">stack ??</button>'+
  //       '<button id="btnr?'+?+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'?div'"+','+?+')">remove</button>'+
  //     '</div>'
  //   )
  // }
}
function addBulletsToSTack(){
  var sb = "\n"+stackbullets
  contents += '<p>\n<ul>'+sb+'</ul>\n</p>'
  $('#viewcontents_container').append("\n"+stackbullets)
}
function addNumericToSTack(){
  var sn = "\n"+stacknumerics
  contents += '<p>\n<ol>'+sn+'</ol>\n</p>'
  $('#viewcontents_container').append("\n"+stacknumerics)
}

function pushcontents_(type,order){
  var stack =''
  var bullet =''
  if(type=='p'){
    stack = '<p>'+ $('#'+type+order).val() + '</p>\n'
  }else if(type=='t'){ 
    stack = '<h2 class="section-heading">'+ $('#'+type+order).val() + '</h2>\n'
  }else if(type=='t1'){  
    stack = '<h2 class="section-heading1">'+ $('#'+type+order).val() + '</h2>\n'
  }else if(type=='t2'){ 
    stack = '<h2 class="section-heading2">'+ $('#'+type+order).val() + '</h2>\n'
  }else if(type=='c'){
    stack = '<h2 class="section-heading">'+ $('#'+type+order).val() + '</h2>\n'
  }else if(type=='b'){
    bullet = '<li>'+ $('#'+type+order).val() + '</li>\n'
    stackbullets += bullet
  }else if(type=='n'){
    numeric = '<li>'+ $('#'+type+order).val() + '</li>\n'
    stacknumerics += numeric
  }

  contents += "\n"+stack
  // console.log(type,order)
  $('#'+type+order).prop('disabled',true)
  $('#btn'+type+order).prop('disabled',true)
  $('#btn'+type+order).addClass('disabledstackedbtn')
  $('#btn'+type+order).html('stacked')
  $('#btnr'+type+order).remove()
  $('#viewcontents_container').append("\n"+stack)
}
function popcontents_(type,order){
  if(type=='pdiv'){
    p=p-1
  }else if(type=='tdiv'){
    t=t-1
  }else if(type=='t1div'){
    t1=t1-1
  }else if(type=='t2div'){
    t2=t2-1
  }else if(type=='cdiv'){
    c=c-1
  }else if(type=='bdiv'){
    b=b-1
  }else if(type=='ndiv'){
    n=n-1
  }
  $('#'+type+order).remove();
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

  if(
    titleVar != '' &&
    routeVar != '' &&
    authorVar!= '' &&
    sdescVar != '' &&
    descVar  != '' &&
    keywordsVar!= ''
  ){
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
    alertthis('Blog added')
  }else{
    alert('please fill all blanks')
  }
} 
async function alertthis(message){
  const x = await alert(message)
  return reloadpage()
}
function reloadpage(){
  location.reload()
}
function getUrls(){
  var urls = 
  ajaxShortLink("getUrls")
  for (let index = 0; index < urls.length; index++) { 
    $('#viewurls_container').append(
      '<div class="mx-3">'+
      '<a href = "https://safelypal.com/blogs/'+urls[index].routeLink+'" target="_blank" class="btn btn-outline-secondary mx-1"><span>Open</span></a>'+
      '<span id="title'+index+'">'+urls[index].title+'</span>'+
      '<span id="title'+index+'">'+' '+urls[index].dateCreated+'</span>'+
      '</div>'
    )
  }
}
function copyUrl(id){
  console.log(id)
}
</script>