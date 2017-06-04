<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Higher Or Lower</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-12">
                <h1>
                    Higher Or Lower
                </h1>
            </div>
            <div class="col-lg-6">
                <div class="well">
                    <p>
                        Is the next card in the deck higher or lower than:
                    </p>

                    <h3 class="text-center">
                        {{ $Deck[0] }}
                    </h3>
                </div>
                <form>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </form>
                <button type="button" id="higher" class="btn btn-success col-lg-6" data-link="{{ url('/test') }}">Higher</button>
                <button type="button" id="lower" class="btn btn-danger col-lg-6">Lower</button>
            </div>
            <div class="col-lg-6">
                <h3 class="text-center">
                    Lives
                </h3>
            </div> 
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::asset('js/Cards.js')}}"></script>
    </body>
</html>
