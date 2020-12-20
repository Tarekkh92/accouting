@if (count($errors) > 0 )
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       {{-- <p class="error">{{ $errors->get('title') }}</p> --}}

      @endforeach
     </ul>
    </div>
   @endif