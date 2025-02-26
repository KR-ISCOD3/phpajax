<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .font-nunito{
            font-family: "Nunito", serif;
        }

        /* #tb::-webkit-scrollbar{
            width: 0px !important;
        } */
    </style>
</head>
<body>
  
    <div class="container p-5">
       <div class="d-flex justify-content-between border-bottom border-dark pb-2 font-nunito">
        <h2 class="fw-bold">Employee management</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Add Employee +</button>
       </div>

       <div class="font-nunito">              
            <!-- <table class="table mt-2 table-striped mb-0" >   
              
            </table> -->

            <div id="tb" style="height: 550px;" class="overflow-auto">
                <table id="table-data" class="table w-100 table-striped overflow-hidden " >   
                    <thead class="table-dark"> 
                        <tr>
                            <th>#ID</th>
                            <th>Employee</th>
                            <th>Salary</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>              
                    <tbody id="datatb">
                        <!-- <tr class="align-middle">
                            <td>1</td>
                            <td class="d-flex"> 
                                <div style="width: 45px;height: 45px;" class="bg-danger rounded-circle overflow-hidden border border-success">
                                    <img class="w-100 h-100 object-fit-cover" src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D" alt="">
                                </div>
                                <div class="ms-2">
                                    <p class="m-0 fw-bold">Mrs.John</p>
                                    <p style="font-size: 12px;" class="m-0">john@gmail.com</p>
                                </div>
                            </td>
                            <td>$2000</td>
                            <td>Web-developer</td>
                            <td class="text-center">
                                <button class="btn btn-warning p-2"><i class="bi bi-pen"></i></button>
                                <button class="btn btn-danger p-2"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>     -->
                    </tbody>
                    
                    
                    <!-- ---------------------- -->
                </table>
            </div>
       </div>


       <!-- Modal -->
        <div class="modal fade" id="formModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" >Form Employee</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEmp" method="POST" enctype="multipart/form-data">
                            <label for="" class="my-2">Name*</label>
                            <input required type="text" name="name" id="name" class="form-control shadow-none border mb-2" placeholder="Enter Employee Name....">

                            <label for="" class="my-2">Email*</label>
                            <input required type="text" name="email" id="email" class="form-control shadow-none border mb-2" placeholder="Enter Employee Email....">

                            <label for="" class="my-2">Salary*</label>
                            <input required type="number" name="salary" id="salary" class="form-control shadow-none border mb-2" placeholder="Enter Employee Salary....">

                            <label for="" class="my-2">Position*</label>
                            <select name="position" id="position" class="form-select shadow-none border mb-2">
                                <option value="Web-developer">Web-developer</option>
                                <option value="App-developer">App-developer</option>
                                <option value="Network-Engineer">Network-Engineer</option>
                            </select>

                            <label for="" class="my-2">Upload Image*</label>
                            <div style="width: 150px;height: 150px;" class="bg-secondary rounded-2 border overflow-hidden ">
                                <input required type="file" name="inputImage" id="inputImage" class="d-none">
                                <img style="cursor: pointer;" id="preview" src="https://t4.ftcdn.net/jpg/01/64/16/59/360_F_164165971_ELxPPwdwHYEhg4vZ3F4Ej7OmZVzqq4Ov.jpg" alt="" class="w-100 h-100 object-fit-cover">
                            </div>
                            <div class="modal-footer mt-2">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</body>
<script>

    $(document).ready(function(){

        const fetchData = () => {
            $.ajax({
                url:'fetch-data.php',
                type: 'GET',
                success:function(res){
                    $("#datatb").html(res);
                }
            })
        }
        fetchData();

        $('#preview').click(function(){
            $('#inputImage').click();
        })
        $('#inputImage').on('change',function(e){
            let imagepath = e.target.files[0];
            if(imagepath){
                let reader = new FileReader();
                reader.onload = function(e){
                    $('#preview').attr('src',e.target.result);
                }
                reader.readAsDataURL(imagepath);
            }
        })

        $('#formEmp').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var url = 'add-data.php';
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success:function(res){
                    console.log(res);
                    Swal.fire({
                        title: "Good job!",
                        text: res,
                        icon: "success"
                    });
                    $('#formEmp')[0].reset();
                    $('#preview').attr('src','https://t4.ftcdn.net/jpg/01/64/16/59/360_F_164165971_ELxPPwdwHYEhg4vZ3F4Ej7OmZVzqq4Ov.jpg');
                    $('#formModal').modal('hide');
                    fetchData();
                }
            })
        })

        
    })

</script>
</html>