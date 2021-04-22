@extends('layouts/main')

@section('content')

<style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>
    
    <h3>Contact Form</h3>
    @if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert" data-mdb-color="danger">
            {{ $error }}
        </div>
    @endforeach 
    @endif
    <div class="container">
      <form action="{{ route('sendMassage') }}" method="post">
        {{ csrf_field() }}
        <label>Nom et Prénom</label>
        <input type="text" name="name" placeholder="Votre nom..">
    
        <label>Email</label>
        <input typ="email" name="email" placeholder="Votre email..">
    
        <label for="subject">Message</label>
        <textarea name="message" placeholder="Votre message.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
      </form>
    </div>
@endsection