<!DOCTYPE html>
<html lang="en">
<head>
    @stack('title')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

@push('title')
<title>Home</title>
@endpush
    <h2>Welcome {{ $name }}</h2>

    <h2> {{ $name ?? "Guest"}}</h2>

    <h2>Date is {{ date("d-m-y")}}</h2>

    <h2>Time {{ time()}}</h2>

    {!! $data !!}

    <!-- using if -->

    <h3>Using Conditional Directives</h3>

    @if($name == "")
    <h2>name is null</h2>
    @elseif($name == "sabir")
    <h2>name is correct</h2>
    @else
    <h2>name is incorrect</h2>
    @endif

   <!-- using unless -->
   
   
   <h3>Using Unless Conditional Directives</h3>


   @unless ($name == "sabir")
  <h1>Please verify your self</h1>
   @endunless

<!-- for loop  -->

   @isset($name)
   {{$name}}
   @endisset

   @for($i=0; $i<10; $i++)

   @if($i==5)
    @continue
   @endif

   @if($i==6)
    @break
   @endif

   <h2>{{$i}}</h2>
   @endfor
   
<!-- while loop -->

   @php 
   $j=1;
   @endphp

   @while($j<=10)
   {{$j}}
   <?php 
   $j++;
   ?>
   @endwhile
</body>
</html>