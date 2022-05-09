@extends('layouts.admin')

@section('content')
<style>
       #formdiv{
        box-shadow:0 2px 5px #666;
        border-top:5px solid #495057;
        color:#222
    }
    .bottomlineinput{
        background:transparent;
        width: 100%;
        border:none;
        outline: none;
        border-bottom:2px solid #eee;
    }
    :root{
        --primary:#000;
    }
    .bg-theme{
        background:#495057;
        color: #fff
    }
    .question-box{
        bacground:;
        padding: 15px 20px;
        margin: 25px 10px;
        border-radius: 10px;
        border-top:3px solid #4E52D0;
        box-shadow:0 2px 5px #888;
    }
    .deletequestionbutton{
        float:right;
        color: #666;
    }
    </style>
    <div class="container-fluid mt-3 form">

        <div class="row">

            <div class="col-lg-8 col-md-10 mx-auto mb-5">


                <h3> Quiz</h3>
                <hr>
                <form enctype="multipart/form-data" name="sentMessage" id="contactForm" action="@if($way=='add')
                /addquiz
                @else
                /updatequiz/{{$quiz->id}}
                @endif
                " method="POST"
                    >
                    @csrf
                    <input type="hidden" name="quizdata" value="" id="quizdata" >
                    <input type="hidden" name="id" value="{{$quiz->id ?? ''}}" id="id" >
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input name="name" type="text" value="{{ $quiz['name'] ?? ''}}" class="form-control"
                                placeholder="Quiz" id="name" required>
                        </div>
                    </div>
                

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Company</label>
                            <input name="company" type="text" value="{{ $quiz['company'] ?? ''}}" class="form-control"
                                placeholder="Company" id="name" required
                                data-validation-required-message="Please enter your name.">
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Duration (hh:mm:ss)</label>
                            <input name="duration" type="text" value="{{ $quiz['duration'] ?? ''}}" class="form-control"
                                placeholder="Duration" id="email" required
                                data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                

               
                 









                    <div id="questions">

                       
                    </div>
        
        
                        <button type="button" onclick="addMCQ()" class="btn btn-success my-2"><i class="far fa-dot-circle"></i> &nbsp;
                            Add Question</button>
                    



















                    <br>
                    <div id="success"></div>
                    <input type="submit" name="" id="submitbutton" class="d-none">
                    <button type="button" onclick="submitForm()" class="btn  mt-3 btn-primary" id="submitbtn">Create Quiz</button>
               </form>
            </div>
        </div>
    </div>






   























<script>
  
  

</script>













<script>
    var questions = JSON.parse(`{!!$quiz->questionsjson ?? '[]'!!}`);
    
    
    $(document).ready(function() {
        console.log("Somethinfddg",questions)
        updateForm();
    })

    function addMCQ() {
        updateQuestions()
        data = {
            type: "mcq",
            answer: 0,
            question: "",
            options: [""],
            marks: 1
        }
        questions.push(data)
        updateForm()
    }

    

    function updateForm() {
        console.log(questions)
        data = ""
        questions.forEach((question, index) => {

                options = ""
                question.options.forEach((option, i) => {
                    options +=
                        `<div>
                            <input ${option==question.answer ? 'checked' : null} type="radio" name="option-radio-${index}" value="${option}" id="option-radio-${index}">
                        <input type="text" value="${option}" id="option-${index}-${i}" name="option-${index}-${i}" class="m-1 form-control w-75 d-inline" placeholder="Option ${i+1}"   >
                        </div>`
                });
                data += `<div class="question-box" >
                <span type="button" onclick="deleteQuestion(${index})" class="deletequestionbutton"><i class="fa fa-trash"></i></span>

                        
                            <input value="${question.question}" placeholder="Question" type="text" id="question${index}" class="bottomlineinput h3" />
                            <input value="${question.marks}" placeholder="Marks" type="text" id="marks${index}" class="bottomlineinput h4" />
                            
                        <div class="column px-4">
                        ${options}
                        </div>
                        <span type="button" onclick="addOption(${index})" class="mx-4 mt-1k"><i class="fa fa-plus"></i> Add Other</span>
                
                    </div>`
            
        });
        $('#questions').html(data)
    }

    function updateQuestions() {
        questions.forEach((question, index) => {
            questions[index].question = $('#question' + index).val()
            questions[index].marks = $('#marks' + index).val()
            questions[index].answer = $('input[name="option-radio-' + index+'"]:checked').val()
            
                question.options.forEach((option, i) => {
                    questions[index].options[i] = $(`#option-${index}-${i}`).val()
                });
            
        });
    }

    function addOption(index) {
        updateQuestions()
        questions[index].options.push("")
        updateForm()
    }

    function submitForm() {
        updateQuestions()
        data = JSON.stringify(questions)
        $('#quizdata').val(JSON.stringify(questions))
        // alert(data)
        document.getElementById('submitbutton').click()

    }
    function deleteQuestion(index) {
        updateQuestions()
        questions.splice(index, 1);
        updateForm()
    }







</script>


@endsection