@extends('layouts.app')

@section('title', 'Register Page')

@section('content')

<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #7c74ee;
    }
    .container {
        display: flex;
        width: auto;
        height: 60vh;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        background-color: white;
    }
    .image-section {
        flex: 2;
        background: url('{{ asset('images/test.jpg') }}') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }
    .image-section h1 {
        font-size: 4em;
        margin: 0;
    }
    .image-section p {
        font-size: 1.2em;
    }
    .form-section {
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .form-section h2 {
        font-size: 2em;
        margin-bottom: 20px;
    }
    .form-section p {
        margin-bottom: 30px;
        color: #777;
    }
    .form-section input {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1em;
    }
    .form-section button {
        padding: 15px;
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 1.2em;
        cursor: pointer;
    }
    .form-section button:hover {
        background-color: #218838;
    }
    .form-section .social-login {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
    .form-section .social-login img {
        width: 40px;
        height: 40px;
        cursor: pointer;
    }
</style>
    <div class="container">
        <div class="image-section">
            <div>
                <h1>Join Us!</h1>
                <p>Create your account today!</p>
            </div>
        </div>
        <div class="form-section">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">REGISTER NOW</button>
            </form>
        </div>
    </div>
@endsection
