   @extends('layouts.default')

   @section('content')

   <div class="container-fluid bg-3 text-center">
       <h3>{{$title}}</h3><br>
       <div class="row">

           <div class="col-sm-6">
               <ul>
                   @foreach($students as $student)
                   <table style="border: 1px solid black;border-collapse: collapse;">
                       ID: {{$student->id}}
                       Name: {{$student->name}}
                       Email: {{$student->email}}
                       Phone: {{$student->phone}}
                   </table>
                   @endforeach

               </ul>




           </div>
           <div class="col-sm-6">
               <p>Some text..</p>
           </div>



       </div>
   </div><br>

   @endsection