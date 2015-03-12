<!<html>
<head>
<meta charset="UTF-8">
<title>Contact Page</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<style>
  body {
    padding-top: 50px;
    width: 40%;
    margin: 0 auto;
  </style>
</head>
<body>

<h1>Contact Page</h1>

  @if ($errors->any())
  <ul class="class-danger alert">
      @foreach($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
  </ul>
  @endif


  {!! Form::open(array('route' => 'contact_store', 'class' => 'form-group')) !!}

  <div class="form-group">
      {!! Form::label('Your Name') !!}
      {!! Form::text('name', null,
          array(
                'class'=>'form-control',
                'placeholder'=>'Your name')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('Your E-mail Address') !!}
      {!! Form::text('email', null,
          array(
                'class'=>'form-control',
                'placeholder'=>'Your e-mail address')) !!}
  </div>

  <div class="form-group">
      {!! Form::label('Your Message') !!}
      {!! Form::textarea('message', null,
          array(
                'class'=>'form-control',
                'placeholder'=>'Your message')) !!}
  </div>

  <div class="form-group">
      {!! Form::submit('Contact Us!',
        array('class'=>'btn btn-primary')) !!}
  </div>
  {!! Form::close() !!}



  @if(Session::has('message'))
      <div class="alert alert-info">
       {{Session::get('message')}}
      </div>
  @endif

@if (!empty (old('name')))
  <h4>The information you have sent to us</h4>
  <p><strong>Your name: </strong>{{ old('name') }}</p>
  <p><strong>Your email:</strong> {{ old('email') }}</p>
  <p><strong>Your message:</strong> {{ old('message') }}</p>
@endif
</body>
</html>


