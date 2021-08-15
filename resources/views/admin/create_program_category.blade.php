@extends('layouts.app')
@section('content')

    <h1>Program Category</h1>
    <form action={{ route('programcategory.store') }} method=POST enctype="multipart/form-data">
    @csrf
    <input type="text" name="heading" placeholder="Heading"> 
    <div class="field_wrapper">
        <div>
            <input type="text" name="subheading[]" placeholder="sub heading" id="prog_category"> 
            <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
        </div>
    </div>
    {{-- <input type="text" name="subheading[]" placeholder="sub heading" id="prog_category"> 
    <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a> --}}
    <button>Save </button>
    </form>

    <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="subheading[]" value="" placeholder="sub heading"/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>

@endsection;