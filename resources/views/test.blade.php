<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    {{-- @extends('layouts.head') --}}
</head>

<body>
    <p>Puja Bhowmik</p>
    <p>Jenat Akhi</p>
    <form action="{{ route('tested') }}" enctype="multipart/form-data" method="POST">
        {{-- <form action="{{ route('test2') }}"  method="POST"> --}}
        @csrf
        {{-- <input name="img" type="file">
        <input name="name" type="text">
        <input type="submit"> --}}
        @for ($i = 1; $i <= 3; $i++)
            <div class="row">
                <input type="text" placeholder="item{{ $i }} @error('item'.$i) is missing @enderror" name="item{{ $i }}" value="{{ old('item'. $i) }}">
                <input type="text" placeholder="Deadline{{ $i }} @error('deadline'.$i) is missing @enderror" name="deadline{{ $i }}" value="{{old('deadline'.$i)}}">
                <input type="text" placeholder="deadlineSon{{ $i }} @error('deadlineSon'.$i) is missing  @enderror" name="deadlineSon{{ $i }}" value="{{old('deadlineSon'.$i)}}">
                <input type="text" placeholder="deadlineGrandSon{{ $i }} @error('deadlineSon'.$i) is missing  @enderror" name="deadlineGrandSon{{ $i }}" value="{{old('deadlineGrandSon'.$i)}}">
            </div>
            <br>
        @endfor
        <input type="submit" value="submit">
    </form>


    <form action="{{ route('tested') }}" enctype="multipart/form-data" method="POST">
        {{-- <form action="{{ route('test2') }}"  method="POST"> --}}
        @csrf
        {{-- <input type="text" name="name"> --}}
        <input type="file" name="img">
        <input type="submit" value="submit">
    </form>
</body>

</html>
