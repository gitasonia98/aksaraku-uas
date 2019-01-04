@extends('user/layout')

@section('content')

 <div class="content">
    @foreach($data as $value)

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="card card-user">
                        <div class="image">
                            <img src="assets/img/background.jpg" alt="..."/>
                        </div>
                        <div class="content">
                            <div class="author">
                              <img class="avatar border-white" src="assets/img/faces/gita.png" alt="..."/>
                              <h4 class="title">{{$value->nama_user}}<br />
                               
                           </h4>
                       </div>
                       <p class="description text-center">
                        {{$value->email_user}}<br>
                        "{{$value->bio_user}}"
                    </p>
                </div>
                <hr>

            </div>     
        </div>
        <!--profile-->

        <!-- Edit Profile -->
        <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Profile</h4>
                </div>
                <div class="content">
                    <form method="POST" action="{{url('user')}}">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input name="pekerjaan" type="text" class="form-control border-input"  placeholder="Pekerjaan" value="{{$value->pekerjaan_user}}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" type="text" class="form-control border-input" placeholder="Username" value="{{$value->nama_user}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Email</label>
                                    <input name="email" type="email" class="form-control border-input" placeholder="Email" value="{{$value->email_user}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Rekening</label>
                                    <input name="rekening" type="text" class="form-control border-input" placeholder="Rekening" value="{{$value->rekening_user}}"">
                                </div>
                            </div>
                        </div>
                        <!-- upload foto -->
                       <!--  <div class="col-md-4">
                           <div class="form-group">
                            <input type="file" name="file" name="foto" id= "foto" class="btn btn-info btn-fill btn-wd" >
                        </div> -->
                        </div
                        <!-- upload foto -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input name="alamat" type="text" class="form-control border-input" placeholder="Alamat" value="{{$value->alamat_user}}">
                                </div>
                            </div>
                        </div>

                      <!--   <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tentang Saya</label>
                                    <textarea name="deskripsi" rows="5" class="form-control border-input" placeholder="Here can be your description" value="{{$value->bio_user}}">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div> -->
                       <!--  <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                        </div> -->
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

</div>
@endsection