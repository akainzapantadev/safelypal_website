// gvars
  var globalID = 0
  var p = 0
  var t = 0
  var t1 = 0
  var t2 = 0
  var td = 0
  var c = 0
  var b = 0
    var addb = 1
    var addn = 1
  var bt = 0
  var bt1 = 0
  var bt2 = 0
  var n = 0
  var nt = 0
  var nt1 = 0
  var nt2 = 0
  var d = 0
  var contents=''
  var stackbullets=''
  var stacknum=''

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
      '<div id="bdiv'+b+'" class="mb-3">'+
      '<button id="addbtn'+b+'" class="btn btn-warning" type="button" onclick="addb_()">add bullet</button>'+
        '<div id="addbdiv'+addb+'" class="my-1 input-group">'+
          '<input id="addb'+addb+'" type="text" class="form-control" placeholder="bullets'+b+'">'+
          '<button id="addbbtn'+addb+'" class="btn btn-secondary" type="button" onclick="bulletStack('+addb+')">add to stack</button>'+
        '</div>'+
        '<button id="btnb'+b+'" class="btn btn-warning" type="button" onclick="pushlistb_('+addb+')">stack bullets</button>'+
        '<button id="btnrb'+b+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'bdiv'"+','+b+')">remove</button>'+
      '</div>'
    )
  //}else if(type=='nt'){
  //   nt=nt+1;
  //   $('#content_container').append(
  //     '<div id="ntdiv'+nt+'" class="input-group mb-3">'+
  //       '<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-circle"></i></span>'+
  //       '<input id="nt'+nt+'" type="text" class="form-control" placeholder="Num Title'+nt+'">'+
  //       '<button id="btnnt'+nt+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'nt'"+','+nt+')">stack num title</button>'+
  //       '<button id="btnrnt'+nt+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'ntdiv'"+','+nt+')">remove</button>'+
  //     '</div>'
  //   )
  // }else if(type=='nt1'){
  //   nt1=nt1+1;
  //   $('#content_container').append(
  //     '<div id="nt1div'+nt1+'" class="input-group mb-3">'+
  //       '<span class="input-group-text" id="inputGroup-sizing-sm">'+
  //       '<i class="fa-solid fa-circle"></i>'+
  //       '</span>'+
  //       '<input id="nt1'+nt1+'" type="text" class="form-control" placeholder="Num title 1_'+nt1+'">'+
  //       '<button id="btnnt1'+nt1+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'nt1'"+','+nt1+')">stack Numtitle1</button>'+
  //       '<button id="btnrnt1'+nt1+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'nt1div'"+','+nt1+')">remove</button>'+
  //     '</div>'
  //   )
  // }else if(type=='nt2'){
    // nt2=nt2+1;
    // $('#content_container').append(
    //   '<div id="nt2div'+nt2+'" class="input-group mb-3">'+
    //     '<span class="input-group-text" id="inputGroup-sizing-sm">'+
    //     '<i class="fa-solid fa-circle"></i>'+
    //     '</span>'+
    //     '<input id="nt2'+nt2+'" type="text" class="form-control" placeholder="Num title 2_'+nt2+'">'+
    //     '<button id="btnnt2'+nt2+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'nt2'"+','+nt2+')">stack Numtitle2</button>'+
    //     '<button id="btnrnt2'+nt2+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'nt2div'"+','+nt2+')">remove</button>'+
    //   '</div>'
    // )
  }else if(type=='n'){
    n=n+1;
    $('#content_container').append(
      '<div id="ndiv'+n+'" class="mb-3">'+
      '<button id="addbtn'+n+'" class="btn btn-warning" type="button" onclick="addn_()">add num</button>'+
        '<div id="addndiv'+n+'" class="my-1 input-group">'+
          '<input id="addn'+addn+'" type="text" class="form-control" placeholder="Num'+n+'">'+
          '<button id="addnbtn'+n+'" class="btn btn-secondary" type="button" onclick="numStack('+addn+')">add to stack</button>'+
        '</div>'+
        '<button id="btnn'+n+'" class="btn btn-warning" type="button" onclick="pushlistn_('+addn+')">stack bullets</button>'+
        '<button id="btnrn'+n+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'ndiv'"+','+n+')">remove</button>'+
      '</div>'
    )
  }else if(type=='bt'){
    bt=bt+1;
    $('#content_container').append(
      '<div id="btdiv'+bt+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm"><i class="fa-solid fa-circle-chevron-right"></i></span>'+
        '<input id="bt'+bt+'" type="text" class="form-control" placeholder="bullet'+bt+'">'+
        '<button id="btnbt'+bt+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'bt'"+','+bt+')">stack bullettitle</button>'+
        '<button id="btnrbt'+bt+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'btdiv'"+','+bt+')">remove</button>'+
      '</div>'
    )
  }else if(type=='bt1'){
    bt1=bt1+1;
    $('#content_container').append(
      '<div id="bt1div'+bt1+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm">'+
        '<i class="fa-solid fa-circle-chevron-right"></i>'+
        '</span>'+
        '<input id="bt1'+bt1+'" type="text" class="form-control" placeholder="bullet1_'+bt1+'">'+
        '<button id="btnbt1'+bt1+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'bt1'"+','+bt1+')">stack bullettitle1</button>'+
        '<button id="btnrbt1'+bt1+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'bt1div'"+','+bt1+')">remove</button>'+
      '</div>'
    )
  }else if(type=='bt2'){
    bt2=bt2+1;
    $('#content_container').append(
      '<div id="bt2div'+bt2+'" class="input-group mb-3">'+
        '<span class="input-group-text" id="inputGroup-sizing-sm">'+
        '<i class="fa-solid fa-circle fa-sm"></i>'+
        '</span>'+
        '<input id="bt2'+bt2+'" type="text" class="form-control" placeholder="bullet2_'+bt2+'">'+
        '<button id="btnbt2'+bt2+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'bt2'"+','+bt2+')">stack bullettitle2</button>'+
        '<button id="btnrbt2'+bt2+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'bt2div'"+','+bt2+')">remove</button>'+
      '</div>'
    )
  }else if(type=='d'){
      d=d+1;
      $('#content_container').append(
        '<div id="ddiv'+d+'" class="input-group mb-3">'+
          '<span class="input-group-text">Disclaimer_'+d+'</span>'+
          // '<i class="fa-solid fa-circle"></i>'+
          '</span>'+
          '<textarea id="d'+d+'" class="form-control" aria-label="With textarea">'+
          'Disclaimer: '+
          '</textarea>'+
          '<button id="btnd'+d+'" class="btn btn-secondary" type="button" onclick="pushcontents_('+"'d'"+','+d+')">stack Disclaimer</button>'+
          '<button id="btnrd'+d+'" class="btn btn-danger" type="button" onclick="popcontents_('+"'ddiv'"+','+d+')">remove</button>'+
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
function addb_(){
  addb = addb+1
  $('#addbdiv'+b).append(
    '<div id="addbidiv'+addb+'" class="input-group">'+
      '<input id="addb'+addb+'" type="text" class="form-control" placeholder="bullets'+b+'">'+
    '<button id="addbbtn'+addb+'" class="btn btn-secondary" type="button" onclick="bulletStack('+addb+')">add to stack</button>'+
    '<button id="addbrbtn'+addb+'" class="btn btn-danger" type="button" onclick="removeb_('+addb+')">remove</button>'+
    '</div>'
  )
}
async function removeb_(){
  await $('#addb'+addb).remove();
  return addb = addb-1
}
function addn_(){
  addn = addn+1
  $('#addndiv'+n).append(
    '<div id="addnidiv'+addn+'" class="input-group">'+
      '<input id="addn'+addn+'" type="text" class="form-control" placeholder="Num'+n+'">'+
    '<button id="addnbtn'+addn+'" class="btn btn-secondary" type="button" onclick="numStack('+addn+')">add to stack</button>'+
    '<button id="addnrbtn'+addn+'" class="btn btn-danger" type="button" onclick="removen_('+addn+')">remove</button>'+
    '</div>'
  )
}
async function removen_(addn){
  await $('#addn'+addn).remove();
  return addn = addn-1
}
function bulletStack(addb){
  var x = 'addb'+addb
  var bullet = '<li>'+ $('#'+x).val() + '</li>\n'
  stackbullets += bullet

  $('#'+'addbidiv'+addb).prop('disabled',true)
  $('#addbbtn'+addb).prop('disabled',true)
  $('#addbbtn'+addb).addClass('disabledstackedbtn')
  $('#addbbtn'+addb).html('stacked')
  $('#addbrbtn'+addb).remove()
}
function numStack(addn){
  var x = 'addn'+addn
  var num = '<li>'+ $('#'+x).val() + '</li>\n'
  stacknum += num

  $('#'+'addnidiv'+addb).prop('disabled',true)
  $('#addnbtn'+addn).prop('disabled',true)
  $('#addnbtn'+addn).addClass('disabledstackedbtn')
  $('#addnbtn'+addn).html('stacked')
  $('#addnrbtn'+addn).remove()
}
function pushlistb_(){
  var sb = "\n"+stackbullets
  contents += '<p>\n<ul>'+sb+'</ul>\n</p>'
  $('#viewcontents_container').append("\n"+sb)
  popcontents_('bdiv',b)
  addb = 1
}
function pushlistn_(){
  var sn = "\n"+stacknum
  contents += '<p>\n<ol>'+sn+'</ol>\n</p>\n'
  $('#viewcontents_container').append("\n"+sn)
  popcontents_('ndiv',n)
  addn = 1
}

function pushcontents_(type,order){
  var stack =''
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
  }else if(type=='bt'){
    stack = '<h2 class="section-heading"><li>'+ $('#'+type+order).val() + '</li></h2>\n'
  }else if(type=='bt1'){
    stack = '<h2 class="section-heading1"><li>'+ $('#'+type+order).val() + '</li></h2>\n'
  }else if(type=='bt2'){
    stack = '<h2 class="section-heading2"><li>'+ $('#'+type+order).val() + '</li></h2>\n'
  }else if(type=='d'){
    stack = '<p><small><i>'+ $('#'+type+order).val() + '</i></small></p>\n'
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
  var updateContents = $('#contents_input').val()

  if(
    titleVar != '' &&
    routeVar != '' &&
    authorVar!= '' &&
    sdescVar != '' &&
    descVar  != '' &&
    keywordsVar!= ''
  ){

    // var checkIfBlogExist = ajaxShortLink("checkIfBlogExist",{"id":111}) // for testing
    var checkIfBlogExist = ajaxShortLink("checkIfBlogExist",{"id":globalID})
      if(checkIfBlogExist==1){
        var updateresult = 
            ajaxShortLink("updateBlog",{
            "title":titleVar,
            "routeLink":routeVar,
            "author":authorVar,
            "sdesc":sdescVar,
            "content":updateContents,
            "desc":descVar,
            "keywords":keywordsVar,
            "id":globalID,
          })
          alertthis('Blog updated')
      }else{
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
      }
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
      // '<div class="mx-3">'+
      // '<a onclick="editblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">edit</span></a>'+
      // '<a onclick="deleteblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">delete</span></a>'+
      // '<a href = "https://safelypal.com/blogs/'+urls[index].routeLink+'" target="_blank" mx-1"><span id="title'+index+'">'+urls[index].title.substring(0,30)+'</span></a>'+
      // '<span style="color: red !important;" id="title'+index+'">'+' '+urls[index].dateCreated+'</span>'+
      // '</div>'

      '<tr>'+
        '<th scope="row">'+urls[index].id+'</th>'+
        '<td>'+
        '<a onclick="editblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">edit</span></a>'+
        '<a onclick="deleteblog('+urls[index].id+')" class="btn btn-outline-transparent"><span style="text-decoration:underline;">delete</span></a>'+
        '</td>'+
        '<td>'+
        '<a href = "https://safelypal.com/blogs/'+urls[index].routeLink+'" target="_blank" mx-1"><span id="title'+index+'">"'+urls[index].title.substring(0,40)+'"</span></a>'+
        '</td>'+
        '<td>'+
        '<span style="color: orange !important;" id="title'+index+'">'+' '+urls[index].dateCreated+'</span>'+
        '</td>'+
      '</tr>'
    )
  }
}
function editblog(id){
  $('#content_container').empty()
  $('.content_btn_container').empty()
  globalID = id
  var editblog = 
  ajaxShortLink("getBlog",{"id":id})

  var fullDesc = editblog['seo'][1].content
  var keywords = editblog['seo'][2].content
  var routeLinkRaw = editblog['seo'][3].content
  var RouteLink = routeLinkRaw.replace('safelypal.com/blogs/','')
  var shortDesc = editblog.desc
  var title = editblog.title
  var author = editblog['blogDetails'][0].author
  var contents = editblog.contents
  
  
  $('#title_input').val(title)
  $('#routeLink_input').val(RouteLink)
  $('#author_input').val(author)
  $('#sdesc_input').text(shortDesc)
  $('#desc_input').text(fullDesc)
  $('#keywords_input').text(keywords)

  $('#viewurls').modal('toggle')
  $('#addblog_span').text('Update Blog')
  editcontents_input()

  async function editcontents_input(){
  await $('#content_container').append(
    '<div class="input-group">'+
      '<span class="input-group-text text-muted"> Contents</span>'+
      '<textarea id="contents_input" class="form-control" aria-label="With textarea"></textarea>'+
    '</div>'
  )
  $('#viewcontents_container').append(contents)

  return $('#contents_input').text(contents)
  }
}
  function deleteblog(id){

  var x = window.prompt("Kindly input 'bwakanang delete this' to proceed", "")

  if(x=='bwakanang delete this'){
    ajaxShortLink("deleteBlog",{"id":id})
    alertthis('Blog removed!');
  }else if(x == "null" || x == null || x == ""){
    return;
  }else{
    alert('try again')
  }
}