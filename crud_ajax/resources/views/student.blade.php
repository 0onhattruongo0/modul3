<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>

<section style="padding-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Student <a href="" data-toggle="modal" data-target="#studentModal" class="btn btn-success">Add Student</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="studentTable">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr class="sid{{$student->id}}">
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->lastname}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editStudent({{$student->id}})" class="btn btn-info">Edit</a>
                                        <a href="javascript:void(0)" onclick="deleteStudent({{$student->id}})" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!--Add Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="studentForm" action="" method="post">
                  @csrf
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                    </div>
                    <div class="form-greditStudentoup">
                        <label for="firstname">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Edit Modal -->
<div class="modal fade" id="studentEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="studentEditForm">
                    @csrf
                    <input type="hidden" id="id" name="id">
                    <div class="error-message">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname1">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname1">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Email</label>
                        <input type="text" name="email" class="form-control" id="email1">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
 <script>
     $('#studentForm').submit(function (e){
         console.log('studentForm');
         let firstname  = $("#firstname").val();
         let lastname   = $("#lastname").val();
         let email      = $("#email").val();
         let phone      = $("#phone").val();
         let _token     = $("input[name=_token]").val();
         $.ajax({
             url:"{{route('student.add')}}",
             type:"post",
             dataTye : 'json',
             data:{
                 firstname:firstname,
                 lastname:lastname,
                 email:email,
                 phone:phone,
                 _token:_token
             },success:function (response){
                 if(response){
                     $("#studentTable tbody").prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>' +response.email +'</td><td>' +response.phone+'</td></tr>')
                     $("#studentForm")[0].reset();
                     $("#studentModal").modal('hide');
                     location.reload();

                 }
             }
         });
         return false;

     });
 </script>

<script>
    function editStudent(id){
        console.log('editStudent');
         $.get('/student/'+id,function (student){
             $("#id").val(student.id);
             $("#firstname1").val(student.firstname);
             $("#lastname1").val(student.lastname);
             $("#email1").val(student.email);
             $("#phone1").val(student.phone);
             $("#studentEditModal").modal("toggle");
         })
    }

    $("#studentEditForm").submit(function(e){
        console.log('studentEditForm');
        e.preventDefault();
        let id= $("#id").val();
        let firstname= $("#firstname1").val();
        let lastname= $("#lastname1").val();
        let email= $("#email1").val();
        let phone= $("#phone1").val();
        let _token=$("input[name=_token]").val();
        $.ajax({
            url:"{{route('student.update')}}",
            type:"PUT",
            data:{
                id:id,
                firstname:firstname,
                lastname:lastname,
                email:email,
                phone:phone,
                _token:_token
            },
            success:function(response){
                    // $("#studentTable tbody").prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>' +response.email +'</td><td>' +response.phone+'</td><td>'+'<a href="javascript:void(0)" onclick="editStudent('+response.id+')" class="btn btn-info">Edit</a>'+'</td></tr>')
                    $('#sid' + response.id + ' td:nth-child(1)').text(response.firstname)
                    $('#sid' + response.id + 'td:nth-child(2)').text(response.lastname);
                    $('#sid' + response.id + 'td:nth-child(3)').text(response.email);
                    $('#sid' + response.id + 'td:nth-child(4)').text(response.phone);
                    $("#studentEditModal").modal('toggle');
                    $("#studentEditForm")[0].reset();
                    location.reload();
            }
        });
        return false;
    })
</script>

<script>
    function deleteStudent(id){
        if(confirm("Do you realy want to delete this record?")){
            $.ajax({
                url:'/student/'+id,
                type:'DELETE',
                data:{
                    _token: $("input[name=_token]").val()
                },
                success:function (response){
                    $("#sid"+id).remove();
                    location.reload();
                }
            })
        }
        // return false;
    }
</script>
</body>
</html>
