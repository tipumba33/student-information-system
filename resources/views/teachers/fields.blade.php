
<style>
    .teacher-image {
        height: 160px;
        padding-left: 1px;
        padding-right: 1px;

        background: #eee;
        width: 140px;
        margin: 0 auto;
        border-radius: 50%;
        vertical-align: middle;
        float: left;
    }
    .image{
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }
    .image > input[type="file"]{
        display: none;
    }
    .btn-choose{
        padding: 3px;
        text-align: center;
        background: gray;
        border: none;
        color: black;
        border-radius: 50%;
    }

    .fieldset{
        margin-top: 5px;
    }
    .fieldset legend{
        display: block;
        width: 100%;
        padding: 0;
        font-size: 15px;
        border: 0;
        line-height: inherit;
        color: #797979;
        border-bottom: 1px solid #e5e5e5;
    }

    .info{
        float: right;
    }
</style>

<div class="row">
    <div class="col-lg-12">

<!-- Modal-->
<div class="modal fade left" id="teacher-add-modal" tabindex="-1"
role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-file-text-o">
                </i> New Teacher Form</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{-- model body start --}}
        <div class="modal-body">

            <div class="panel panel-default">

                <div class="panel-heading">
                <b><i class="fa fa-book"></i> Details</b>
                <b class="pull-right"></b>
                </div>
                <div class="panel-body" style="padding-bottom: 4px;">

                <input type="hidden" value="{{Auth::id()}}" name="user_id" id="user_id" required>
                <input type="hidden" name="dateregistered" id="dateregistered"
                value="{{ date('Y-m-d') }}">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9">

                        {{-- first name --}}
                <div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control text-capitalize"
                            placeholder="Enter First Name Here">
                        </div>
                    </div>
                    {{-- Last name --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name"
                            class="form-control text-capitalize"
                            placeholder="Enter Last Name Here">
                        </div>
                    </div>
                   {{-- Gender  --}}
                   <div class="col-md-4">
                       <div class="form-group">
                        <fieldset>
                            <legend for="gender">Gender</legend>
                            <table style="width: 100%;margin-top: 14px;">
                            <tr style="border-bottom: 1px solid #ccc;">
                            <td>
                                <label>
                                    <input type="radio" name="gender" id="gender" value="0">
                                    Male
                                </label>
                            </td>
                            <td>
                                <label>
                                    <input type="radio" name="gender" id="gender" value="1">
                                    Female
                                </label>
                            </td>
                            </tr>
                            </table>
                        </fieldset>
                       </div>
                   </div>
                </div>
                {{-- DOB --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar teacherdob"></i>
                            </div>
                            <input type="text" name="dob" id="dob" class="form-control text-capitalize"
                            placeholder="YY-MM-DD">
                        </div>
                    </div>
                </div>
                {{-- Passport --}}
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="passport" id="passport"
                        class="form-control text-capitalize"
                        placeholder="Enter Passport Number Here">
                    </div>
                </div>
                {{-- status --}}
                <div class="col-md-4">
                    <div class="form-group">
                     <fieldset>
                         <legend>Married Status</legend>
                         <table style="width: 100%;margin-top: 14px;">
                         <tr style="border-bottom: 1px solid #ccc;">
                         <td>
                             <label>
                                 <input type="radio" name="status" id="status" value="0" required checked>
                                 Single
                             </label>
                         </td>
                         <td>
                             <label>
                                 <input type="radio" name="status" id="status" value="1" required>
                                 Married
                             </label>
                         </td>
                         </tr>
                         </table>
                     </fieldset>
                    </div>
                </div>
             {{-- Nationality --}}
             <div class="col-md-4">
                 <div class="form-group">
                    <input type="text" name="nationality"
                    id="nationality" class="form-control text-capitalize"
                    placeholder="Enter Nationality Here">
                 </div>
             </div>
             {{-- Phone --}}
             <div class="col-md-4">
                 <div class="form-group">
                     <input type="text" name="phone" id="phone"
                     class="form-control text-capitalize"
                     placeholder="Enter Phone Here">
                 </div>
             </div>
             {{-- Email --}}
             <div class="col-md-6">
                 <div class="form-group">
                     <input type="text" name="email" id="email"
                     class="form-control text-capitalize"
                     placeholder="Enter Email Address Here">
                 </div>
             </div>

             {{-- hidden file --}}
             <div class="col-md-4">
                 <div class="form-group">
                     <select name="" id="" style="display: none"></select>
                 </div>
             </div>
            </div>

             {{-- image --}}
             <div class="col-lg-3 col-md-3 col-sm-3">
                 <div class="form-group form-group-login">
                     <table style="margin:0 auto">
                         <thead>
                             <tr class="info"></tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="image">
                                     {!! Html::image('teacher_images/profile.png',
                                     null, ['class'=>'teacher-image', 'id'=>'showImage']) !!}
                                     <input type="file" name="image" id="image"
                                     accept="image/x-png,image/png,image/jpg,image/jpeg">
                                 </td>
                             </tr>
                             <tr>
                                 <td style="text-align: center; background: #ddd;">
                                    <input type="button" name="browse_file" id="browse_file"
                                    class="form-control text-capitalize btn-choose"
                                    class="btn btn-outline-danger" value="Choose">
                                </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
            </div>
        </div>
             {{-- Address --}}
             <div class="panel-heading" style="margin-top: -10px;">
                 <b><i class="fa fa-map-marker"></i> Address</b>
             </div>
             <br>
             <div class="panel-body" style="padding-bottom: 10px; margin-top: 0;">
                {{-- Address --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea placeholder="Enter Address Here" name="address" id="address"
                            cols="40" rows="2" class="form-control text-capitalize"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Class</button>
                {!! Form::submit('Register Teacher', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
{{-- End of modal --}}

@push('scripts')
<script type="text/javascript">
// Date of Birth change
$('#dob').datetimepicker({
    format: 'YYYY-MM-DD',
    useCurrent: false
})
// Browse image
$('#browse_file').on('click',function(){
    $('#image').click();
})
$('#image').on('change',function(){
    showFile(this,'#showImage');
    })

    $('#dob').datetimepicker({
        changeMonth:true,
        changeYear:true,
        dateFormat:'yy-mm-dd'
    });
    // -------------------
    function showFile(fileInput,img,showName){
        if(fileInput,files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(img).attr('src', e.target.result);
            }
            reader.readAsDataURL(fileInput,files[0]);
        }
        $(showName).text(fileInput,files[0],name)
    };
    // -------------------

</script>

@endpush
