$("#block-dashboard").click(function(){
    $("#contenido-dashboard").show();
    $("#contenido-chart, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-chart").click(function(){
    $("#contenido-chart").show();
    $("#contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-apps").click(function(){
    $("#contenido-apps").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting").hide();
  });
  
  $("#block-forum").click(function(){
    $("#contenido-forum").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-email, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-email").click(function(){
    $("#contenido-email").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-settings").click(function(){
    $("#contenido-setting").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-apps").hide();
  });
  
  
  // versión mobile
  
  $("#block-mobile-dashboard").click(function(){
    $("#contenido-dashboard").show();
    $("#contenido-chart, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-mobile-chart").click(function(){
    $("#contenido-chart").show();
    $("#contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-mobile-apps").click(function(){
    $("#contenido-apps").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-setting").hide();
  });
  
  $("#block-mobile-forum").click(function(){
    $("#contenido-forum").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-email, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-mobile-email").click(function(){
    $("#contenido-email").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-setting, #contenido-apps").hide();
  });
  
  $("#block-mobile-settings").click(function(){
    $("#contenido-setting").show();
    $("#contenido-chart, #contenido-dashboard, #contenido-forum, #contenido-email, #contenido-apps").hide();
  });
  
  $(".estructura-mobile-left").click(function(){
  $(".estructura-mobile-left").hide(); 
  $("#cerrar").hide();
  $("#abrir").show();
  });
  
  // menu navegador mobile
  
  $("#abrir").click(function(){
    $("#abrir").hide();
    $("#cerrar").show();
    $(".estructura-mobile-left").show();
  });
  
  $("#cerrar").click(function(){
    $("#cerrar").hide();
    $("#abrir").show();
    $(".estructura-mobile-left").hide();
  });