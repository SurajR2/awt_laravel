

@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Question') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ $question -> questions }}


                    <button class="btn fs-2" id="toggleButton" onClick = showAnswer()> 
                   🙉
                    </button>
                    <div class='d-none fw-bold py-4 ' id='hiddenAnswer'>
                            {{ $question -> answers }}
                    </div>
                    <div>

                    <button id='nextButton' class='btn btn-primary' onClick=nextQuestion() > Next Question </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showAnswer() {
        var hiddenAnswer = document.getElementById('hiddenAnswer');
        var toggleButton = document.getElementById('toggleButton');

        if (hiddenAnswer.classList.contains('d-none')) {
            hiddenAnswer.classList.remove('d-none');
            toggleButton.innerText = '🙈';
        } else {
            hiddenAnswer.classList.add('d-none');
            toggleButton.innerText = '🙉';
        }
    }


    function nextQuestion() {
        window.location.reload()
    }
</script>

@endsection
