$(document).ready(function($) {
    

    
    $(".btnloadques").click(function (e) {
        e.preventDefault();
        console.log("hereeslfjslfjseee");
        loadQues();
    })
    
    var loadQues = function () {
        
        $.ajax({
            type: 'POST',
            url: 'index.php/questioncontroller/getQuestion',
            data: {},
            success: function (data) {
              $(".questions").html(data);

            }
        })
    }
    
    $(".question_title").click(function (e) {
        e.preventDefault();
        console.log('quesId');
        var quesId = $(this).attr('questionId');
        console.log(quesId)
        loadQuesDetails(quesId);
    })
    
    var loadQuesDetails = function (quesId) {
        $.ajax({
            type: 'POST',
            url: 'index.php/questioncontroller/getQuestionById',
            data: {quesId:quesId},
            success: function (data) {
              $(".questions").html(data);

            }
        })
    }

});