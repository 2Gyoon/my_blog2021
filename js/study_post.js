$(document).ready(function(){

  function moreList(){
    $.ajax({
      url: `./study_add.php?count=${count}`,
      type: 'POST',
      success: function(result){
        if(result){
          setTimeout(function(){
            $(".loading").hide();
            $(".study_lists").append(result);
          }, 200);
        }
      }
    })
  }

  let count = 1;

  const contNum = $(".study_lists").attr("contNum");
  const contCount = Math.ceil(contNum / 5);

  $(".more").click(function(){
    if(count < contCount){
      count++;
      moreList();
      if(count >= contCount){
        $(this).hide();
      }
    }
  });






});



function check_input(){
  document.post_form.submit();
}
