<!doctype html>
<html lang="en">
  <head>
    <title> Laravel 8 Form Validation - Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 bg-secondary">
        <form action="{{url('/create')}}" method="get">
            @csrf
            <div class="row">
                <div class="col-xl-6 m-auto">
                    <div class="card shadow">
                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{Session::get('success')}}
                            </div>
                        @elseif(Session::has('failed'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{Session::get('failed')}}
                            </div>
                        @endif

                        
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"> Laravel 8 Form Validation </h4>
                        </div>

                        <div class="card-body bg-light">
                        <div class="form-group">
                        <label for="name"> email<span class="text-danger"> * </span> </label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}" />
                         {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                        </div>

                            
                            <div class="form-group">
               <label for="name"> id <span class="text-danger"> * </span> </label>
             <input type="text" name="b_id" class="form-control" value="{{old('b_id')}}" />
             {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                            </div>

                               
          <div class="form-group">
         <label for="name"> School Name<span class="text-danger"> * </span> </label>
          <input type="text" name="businessman_name" class="form-control" value="{{old('businessman_name')}}" />
             {!!$errors->first("businessman_name", "<span class='text-danger'>:message</span>")!!}
                            </div>

   <div class="form-group">
           <label for="name"> address <span class="text-danger"> * </span> </label>
           <input type="text" name="address" class="form-control" value="{{old('address')}}" />
              {!!$errors->first("address", "<span class='text-danger'>:message</span>")!!}
                            </div>



                       
           <div class="form-group">
           <label for="name"> mobile <span class="text-danger"> * </span> </label>
           <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}" />
              {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                            </div>

                             
    <div class="form-group">
    <label for="name"> Name <span class="text-danger"> * </span> </label>
    <input type="text" name="mobile1" class="form-control" value="{{old('mobile1')}}" /> {!!$errors->first("mobile1", "<span class='text-danger'>:message</span>")!!}
    </div>


                            
                            <div class="form-group">
     <label for="name"> Tagline<span class="text-danger"> * </span> </label>
     <input type="text" name="tagline" class="form-control" value="{{old('tagline')}}" />
    {!!$errors->first("tagline", "<span class='text-danger'>:message</span>")!!}
                            </div> 


                            <div class="form-group">
             <label for="email"> City <span class="text-danger"> * </span> </label>
            <input type="text" name="city" class="form-control" value="{{old('city')}}" />
               {!!$errors->first("city", "<span class='text-danger'>:message</span>")!!}
                            </div>

            <div class="form-group">
                  <label for="phone"> state <span class="text-danger"> * </span></label>
                 <input type="text" name="state" class="form-control" value="{{old('state')}}" />
               {!!$errors->first("state", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                          <label for="password"> country <span class="text-danger"> * </span></label>
                <input type="text" name="country" class="form-control" value="{{old('country')}}" />
                 {!!$errors->first("country", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
            <label for="confirm_password"> School email <span class="text-danger"> * </span></label>
            <input type="text" name="b_email" class="form-control" value="{{old('b_email')}}" />
                 {!!$errors->first("b_email", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
              <label for="address"> school rank <span class="text-danger"> * </span></label>
              <input type="text" name="b_rank" class="form-control" value="{{old('b_rank')}}" />
            {!!$errors->first("b_rank", "<span class='text-danger'>:message</span>")!!}
                            </div>
                       


              <div class="form-group">
              <label for="address"> recognised <span class="text-danger"> * </span></label>
              <input type="text" name="recognised" class="form-control" value="{{old('recognised')}}" />
            {!!$errors->first("recognised", "<span class='text-danger'>:message</span>")!!}
                            </div>
                       


              <div class="form-group">
    <label for="address"> school title <span class="text-danger"> * </span></label>
    <input type="text" name="businessman_title" class="form-control" value="{{old('businessman_title')}}" />
    {!!$errors->first("businessman_title", "<span class='text-danger'>:message</span>")!!}
                 </div>
                       
              
              <div class="form-group">
    <label for="address"> school header <span class="text-danger"> * </span></label>
    <input type="text" name="businessman_header" class="form-control" value="{{old('businessman_header')}}" />
    {!!$errors->first("businessman_header", "<span class='text-danger'>:message</span>")!!}
                 </div>


  <div class="form-group">
    <label for="address"> school option <span class="text-danger"> * </span></label>
    <input type="text" name="businessman_option" class="form-control" value="{{old('businessman_option')}}" />
    {!!$errors->first("businessman_option", "<span class='text-danger'>:message</span>")!!}
                 </div>

 
<div class="form-group">
    <label for="address"> school option1 <span class="text-danger"> * </span></label>
    <input type="text" name="businessman_option1" class="form-control" value="{{old('businessman_option1')}}" />
    {!!$errors->first("businessman_option1", "<span class='text-danger'>:message</span>")!!}
                 </div>
                 <div class="form-group">
    <label for="address"> school option 2<span class="text-danger"> * </span></label>
    <input type="text" name="businessman_option2" class="form-control" value="{{old('businessman_option2')}}" />
    {!!$errors->first("businessman_option2", "<span class='text-danger'>:message</span>")!!}
                 </div>




</div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Register </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>