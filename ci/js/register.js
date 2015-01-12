$(function(){
    $('#askq').click(function(){
       // $( "#result" ).load( "<?php echo site_url('auth/register')?>" );
        window.location.replace('askQuestion');
    })
})

$(function(){
    $('#ques').click(function(){
      //  $( "#result" ).load( "<?php echo site_url('questioncontroller/loadQuestion')?>" );
        window.location.replace('viewQuestions');
    })
})

$(function(){
    $('#tags').click(function(){
       // $( "#result" ).load( "<?php echo site_url('tagController/loadTags')?>" );
        window.location.replace('viewTags');
    })
})

$(function(){
    $('#submit-buttons').click(function(){
      //  $( "#top" ).load( "<?php echo site_url('questioncontroller/loadQuestion')?>" );
        window.location.replace('viewTop');
    })
})