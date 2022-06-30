  // year today
  const d = new Date();
  let year = d.getFullYear();
  document.getElementById("year_now").innerHTML = year;

// hover effect nav links
        //features
  var features_nav = document.querySelector("#features_nav");
  features_nav.addEventListener("mouseover", mOverl1, false);
  features_nav.addEventListener("mouseout", mOutl1, false);

  function mOverl1() {
    features_hover.setAttribute("style", "display:block;");
    var xl1 = getOffset( document.getElementById('features_nav')).left;
    var yl1 = getOffset( document.getElementById('features_nav')).top;
    $('#features_hover').css('top',yl1+50+'px');
    $('#features_hover').css('right',xl1+100+'px');
  }

  function mOutl1() {  
    features_hover.setAttribute("style", "display:none;")
  }