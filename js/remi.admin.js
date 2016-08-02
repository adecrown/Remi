
jQuery(document).ready(function($){


  /*
  $('#upload-button').on('click',function(e)
  {
  e.preventDefault();
  if(mediaUploader)
  {
  mediaUploader.open();
  return;
}
mediaUploader = wp.media.frames.file_frame = wp.media({
title: "Upload a picture",
button: {
text: 'Choose Picture'
},
multiple: false
});
mediaUploader.on('select', function(){
attachment = mediaUploader.state().get('selection').first().toJSON();
$('#jumbopt').val(attachment.url);
});

mediaUploader.open();
});*/

$('#upload-button').on('click',function(e)
{
  var mediaUploader;
  callUploader(mediaUploader,e,'#jumbopt');
});

$('#upload-button-thumb-one').on('click',function(e)
{
  var mediaUploader;
  callUploader(mediaUploader,e,'#jumboptm');
});

$('#upload-button-thumb-two').on('click',function(e)
{
  var mediaUploader;
  callUploader(mediaUploader,e,'#jumboptm2');
});

$('#upload-button-thumb-three').on('click',function(e)
{
  var mediaUploader;
  callUploader(mediaUploader,e,'#jumboptm3');
});


function callUploader(mediaUploader,e,idr) {
  e.preventDefault();
  if(mediaUploader)
  {
    mediaUploader.open();
    return;
  }
  mediaUploader = wp.media.frames.file_frame = wp.media({
    title: "Upload a picture",
    button: {
      text: 'Choose Picture'
    },
    multiple: false
  });
  mediaUploader.on('select', function(){
    attachment = mediaUploader.state().get('selection').first().toJSON();
    $(idr).val(attachment.url);
  });

  mediaUploader.open();
}

});
